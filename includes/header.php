<?php

/* =====================================================
   SESSION
===================================================== */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


/* =====================================================
   LANGUAGE SWITCH
===================================================== */

$allowedLanguages = ['hi', 'en'];

if (isset($_GET['lang'])) {

    $selectedLanguage = strtolower(trim($_GET['lang']));

    if (in_array($selectedLanguage, $allowedLanguages, true)) {
        $_SESSION['lang'] = $selectedLanguage;
    }

    $currentUrl = strtok($_SERVER['REQUEST_URI'], '?');

    header('Location: ' . ($currentUrl ?: 'index.php'));

    exit;
}


/* =====================================================
   DEFAULT LANGUAGE
===================================================== */

if (
    !isset($_SESSION['lang']) ||
    !in_array($_SESSION['lang'], $allowedLanguages, true)
) {
    $_SESSION['lang'] = 'hi';
}


/* =====================================================
   LANGUAGE FILE
===================================================== */

$langFile = __DIR__ . '/../lang/' . $_SESSION['lang'] . '.php';

if (file_exists($langFile)) {
    $lang = require $langFile;
} else {
    $lang = [];
}


/* =====================================================
   SAFE LANGUAGE VALUES
===================================================== */

$siteName = $lang['site_name'] ?? '22 खूट मोतिया परिवार';

$location = $lang['location'] ?? 'गोड्डा, झारखण्ड';

$familyWebsite = $lang['family_website'] ?? '22 खूट मोतिया परिवार';


$currentLanguage = $_SESSION['lang'];


/* =====================================================
   PAGE TITLE
===================================================== */

$pageTitle = $pageTitle ?? $siteName . ' | ' . $location;


/* =====================================================
   CURRENT PAGE
===================================================== */

$currentPage = basename($_SERVER['PHP_SELF']);

?>

<!doctype html>

<html lang="<?= htmlspecialchars(
    $currentLanguage,
    ENT_QUOTES,
    'UTF-8'
) ?>">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    >

    <meta
        name="description"
        content="<?= htmlspecialchars(
            $siteName . ', ' . $location,
            ENT_QUOTES,
            'UTF-8'
        ) ?>"
    >

    <meta
        name="author"
        content="<?= htmlspecialchars(
            $siteName,
            ENT_QUOTES,
            'UTF-8'
        ) ?>"
    >

    <title>
        <?= htmlspecialchars(
            $pageTitle,
            ENT_QUOTES,
            'UTF-8'
        ) ?>
    </title>


    <!-- =================================================
         BOOTSTRAP CSS
    ================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =================================================
         BOOTSTRAP ICONS
    ================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- =================================================
         GOOGLE FONT
    ================================================== -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >


    <!-- =================================================
         YOUR MAIN CSS
    ================================================== -->

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >


<style>

/* =====================================================
   ROOT VARIABLES
===================================================== */

:root {

    --family-maroon: #741014;

    --family-maroon-dark: #470609;

    --family-red: #a52229;

    --family-gold: #d4a72c;

    --family-gold-light: #f2d77a;

    --family-cream: #fff8f3;

    --family-text: #333;

    --family-muted: #777;

}


/* =====================================================
   GLOBAL
===================================================== */

html {

    scroll-behavior: smooth;

}


body {

    margin: 0;

    padding: 0;

    font-family:
        "Noto Sans Devanagari",
        sans-serif;

    color:
        var(--family-text);

    background:
        #fff;

    overflow-x: hidden;

}


* {

    box-sizing: border-box;

}


/* =====================================================
   TOP FAMILY BAR
===================================================== */

.top-family-bar {

    position: relative;

    z-index: 1060;

    width: 100%;

    color: #fff;

    background:
        linear-gradient(
            110deg,
            #300405,
            #57090d,
            #781216,
            #57090d,
            #300405
        );

    border-bottom:
        1px solid
        rgba(212,167,44,.35);

}


.top-family-bar::before {

    content: "";

    position: absolute;

    top: 0;

    left: 0;

    right: 0;

    height: 2px;

    background:
        linear-gradient(
            90deg,
            transparent,
            var(--family-gold),
            var(--family-gold-light),
            var(--family-gold),
            transparent
        );

}


/* =====================================================
   TOP INNER
===================================================== */

.top-family-inner {

    min-height: 42px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 10px;

}


/* =====================================================
   TOP TITLE
===================================================== */

.top-family-title {

    display: flex;

    align-items: center;

    min-width: 0;

    gap: 7px;

    color:
        rgba(255,255,255,.96);

    font-size: 12px;

    font-weight: 800;

    white-space: nowrap;

}


.top-family-title i {

    flex: 0 0 auto;

    color:
        var(--family-gold-light);

    font-size: 14px;

}


/* =====================================================
   TOP RIGHT
===================================================== */

.top-family-right {

    display: flex;

    align-items: center;

    gap: 12px;

    flex-shrink: 0;

}


/* =====================================================
   LOCATION
===================================================== */

.top-location {

    display: flex;

    align-items: center;

    color:
        rgba(255,255,255,.82);

    font-size: 11px;

    white-space: nowrap;

}


.top-location i {

    color:
        var(--family-gold-light);

}


/* =====================================================
   LANGUAGE SWITCH
===================================================== */

.language-switcher {

    display: inline-flex;

    align-items: center;

    gap: 3px;

    padding: 3px;

    border:
        1px solid
        rgba(255,255,255,.20);

    border-radius: 50px;

    background:
        rgba(255,255,255,.08);

}


.language-switch {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    min-width: 63px;

    padding:
        5px 10px;

    color:
        rgba(255,255,255,.72);

    border-radius: 50px;

    text-decoration: none;

    font-size: 10px;

    font-weight: 800;

    white-space: nowrap;

    transition:
        all .2s ease;

}


.language-switch:hover {

    color: #fff;

    background:
        rgba(255,255,255,.12);

}


.language-switch.active {

    color:
        var(--family-maroon);

    background:
        #fff;

    box-shadow:
        0 3px 12px
        rgba(0,0,0,.18);

}


/* =====================================================
   MAIN NAVBAR
===================================================== */

.family-navbar {

    position: sticky;

    top: 0;

    z-index: 1050;

    width: 100%;

    background:
        rgba(255,255,255,.98);

    backdrop-filter:
        blur(15px);

    border-bottom:
        1px solid
        rgba(116,16,20,.08);

    box-shadow:
        0 7px 25px
        rgba(61,5,7,.08);

}


/* =====================================================
   GOLD BOTTOM LINE
===================================================== */

.family-navbar::after {

    content: "";

    position: absolute;

    left: 0;

    right: 0;

    bottom: 0;

    height: 2px;

    background:
        linear-gradient(
            90deg,
            transparent 4%,
            rgba(212,167,44,.25),
            var(--family-gold),
            rgba(212,167,44,.25),
            transparent 96%
        );

}


/* =====================================================
   NAV CONTAINER
===================================================== */

.family-navbar-container {

    min-height: 94px;

    display: flex;

    align-items: center;

    gap: 15px;

}


/* =====================================================
   BRAND
===================================================== */

.family-brand {

    display: flex;

    align-items: center;

    flex: 0 0 auto;

    min-width: 280px;

    text-decoration: none;

}


/* =====================================================
   LOGO WRAPPER
===================================================== */

.family-logo-wrap {

    position: relative;

    width: 82px;

    height: 82px;

    display: grid;

    place-items: center;

    flex: 0 0 82px;

}


/* =====================================================
   LOGO
===================================================== */

.family-logo-image {

    position: relative;

    z-index: 2;

    width: 72px;

    height: 72px;

    padding: 4px;

    object-fit: contain;

    border-radius: 50%;

    background: #fff;

    border:
        1px solid
        rgba(212,167,44,.40);

    filter:
        drop-shadow(
            0 7px 13px
            rgba(61,5,7,.17)
        );

    transition:
        transform .3s ease;

}


.family-brand:hover
.family-logo-image {

    transform:
        scale(1.04);

}


/* =====================================================
   LOGO GOLD RING
===================================================== */

.family-logo-ring {

    position: absolute;

    inset: 2px;

    border-radius: 50%;

    border:
        1px solid
        rgba(212,167,44,.55);

    box-shadow:
        0 0 0 5px
        rgba(212,167,44,.07);

}


.family-logo-ring::before,
.family-logo-ring::after {

    content: "";

    position: absolute;

    top: 50%;

    width: 6px;

    height: 6px;

    border-radius: 50%;

    background:
        var(--family-gold);

    transform:
        translateY(-50%);

}


.family-logo-ring::before {

    left: -3px;

}


.family-logo-ring::after {

    right: -3px;

}


/* =====================================================
   BRAND TEXT
===================================================== */

.family-brand-text {

    min-width: 0;

    margin-left: 12px;

}


.family-brand-title {

    display: block;

    color:
        var(--family-maroon);

    font-size: 18px;

    line-height: 1.3;

    font-weight: 900;

    white-space: nowrap;

}


.family-brand-subtitle {

    display: flex;

    align-items: center;

    gap: 5px;

    margin-top: 4px;

    color:
        var(--family-muted);

    font-size: 10px;

    font-weight: 600;

}


.family-brand-subtitle i {

    color:
        var(--family-gold);

    font-size: 11px;

}


/* =====================================================
   NAVIGATION
===================================================== */

.family-navigation {

    flex: 1;

    min-width: 0;

    margin-left: auto;

}


.family-menu-list {

    display: flex;

    align-items: center;

    justify-content: flex-end;

    gap: 2px;

    list-style: none;

    padding: 0;

    margin: 0;

}


.family-menu-item {

    position: relative;

    flex: 0 0 auto;

}


/* =====================================================
   MENU LINK
===================================================== */

.family-menu-link {

    position: relative;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 5px;

    min-height: 44px;

    padding:
        0 10px;

    color: #444;

    border-radius: 12px;

    text-decoration: none;

    font-size: 12.5px;

    font-weight: 800;

    white-space: nowrap;

    transition:
        all .22s ease;

}


.family-menu-link i {

    color:
        var(--family-maroon);

    font-size: 14px;

    flex: 0 0 auto;

    transition:
        transform .22s ease,
        color .22s ease;

}


.family-menu-link:hover {

    color:
        var(--family-maroon);

    background:
        linear-gradient(
            135deg,
            #fff8f4,
            #fff0e9
        );

}


.family-menu-link:hover i {

    color:
        var(--family-gold);

    transform:
        translateY(-1px);

}


/* =====================================================
   ACTIVE LINK
===================================================== */

.family-menu-link.active {

    color:
        var(--family-maroon);

    background:
        #fff5ef;

}


.family-menu-link.active::after {

    content: "";

    position: absolute;

    left: 50%;

    bottom: 3px;

    width: 18px;

    height: 3px;

    border-radius: 20px;

    background:
        linear-gradient(
            90deg,
            var(--family-maroon),
            var(--family-gold)
        );

    transform:
        translateX(-50%);

}


/* =====================================================
   DROPDOWN ARROW
===================================================== */

.family-dropdown-toggle::after {

    margin-left: 2px !important;

    border-top:
        .35em solid
        currentColor !important;

    border-right:
        .35em solid transparent !important;

    border-left:
        .35em solid transparent !important;

    transition:
        transform .2s ease;

}


.family-dropdown-toggle.show::after {

    transform:
        rotate(180deg);

}


/* =====================================================
   DROPDOWN MENU
===================================================== */

.family-navbar
.dropdown-menu {

    min-width: 245px;

    padding: 8px;

    margin-top: 8px !important;

    border:
        1px solid
        rgba(116,16,20,.12);

    border-radius: 16px;

    background:
        #fff;

    box-shadow:
        0 18px 45px
        rgba(61,5,7,.18);

}


/* =====================================================
   DROPDOWN HEADER
===================================================== */

.family-navbar
.dropdown-header {

    padding:
        8px 11px 7px;

    color:
        var(--family-maroon);

    font-size: 10px;

    font-weight: 900;

    letter-spacing: .5px;

}


/* =====================================================
   DROPDOWN ITEM
===================================================== */

.family-navbar
.dropdown-item {

    display: flex;

    align-items: center;

    gap: 9px;

    min-height: 42px;

    padding:
        8px 11px;

    color: #444;

    border-radius: 10px;

    font-size: 12.5px;

    font-weight: 600;

    white-space: normal;

    transition:
        all .2s ease;

}


.family-navbar
.dropdown-item i {

    width: 22px;

    flex: 0 0 22px;

    text-align: center;

    color:
        var(--family-maroon);

    font-size: 14px;

}


.family-navbar
.dropdown-item:hover,
.family-navbar
.dropdown-item:focus {

    color:
        var(--family-maroon);

    background:
        linear-gradient(
            135deg,
            #fff8f4,
            #fff0e9
        );

    transform:
        translateX(2px);

}


.family-navbar
.dropdown-item:hover i {

    color:
        var(--family-gold);

}


/* =====================================================
   DROPDOWN DIVIDER
===================================================== */

.family-navbar
.dropdown-divider {

    margin:
        6px 4px;

    border-color:
        rgba(116,16,20,.10);

}


/* =====================================================
   MOBILE TOGGLER
===================================================== */

.family-toggler {

    display: none;

    width: 44px;

    height: 44px;

    padding: 0;

    flex: 0 0 44px;

    align-items: center;

    justify-content: center;

    border:
        1px solid
        rgba(116,16,20,.15);

    border-radius: 12px;

    background: #fff;

    box-shadow:
        0 5px 15px
        rgba(61,5,7,.08);

}


.family-toggler:focus {

    box-shadow:
        0 0 0 .2rem
        rgba(116,16,20,.12);

}


/* =====================================================
   HAMBURGER ICON
===================================================== */

.family-toggler
.navbar-toggler-icon {

    width: 21px;

    height: 21px;

    background-image:
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23741014' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2.3' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");

}


/* =====================================================
   DESKTOP DROPDOWN ANIMATION
===================================================== */

@media (min-width: 992px) {

    .family-navbar
    .dropdown-menu {

        display: block;

        opacity: 0;

        visibility: hidden;

        pointer-events: none;

        transform:
            translateY(8px)
            scale(.98);

        transition:
            opacity .18s ease,
            transform .18s ease,
            visibility .18s ease;

    }


    .family-navbar
    .dropdown-menu.show {

        opacity: 1;

        visibility: visible;

        pointer-events: auto;

        transform:
            translateY(0)
            scale(1);

    }

}


/* =====================================================
   992 - 1199 DESKTOP
===================================================== */

@media
(max-width: 1199.98px)
and
(min-width: 992px) {

    .family-navbar-container {

        gap: 8px;

    }


    .family-brand {

        min-width: 225px;

    }


    .family-logo-wrap {

        width: 68px;

        height: 68px;

        flex-basis: 68px;

    }


    .family-logo-image {

        width: 61px;

        height: 61px;

    }


    .family-brand-text {

        margin-left: 8px;

    }


    .family-brand-title {

        font-size: 14px;

    }


    .family-brand-subtitle {

        font-size: 9px;

    }


    .family-menu-link {

        padding:
            0 7px;

        font-size: 11px;

        gap: 4px;

    }


    .family-menu-link i {

        font-size: 13px;

    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 991.98px) {


    /* ---------------------------------------------
       TOP BAR
    --------------------------------------------- */

    .top-family-inner {

        min-height: 39px;

    }


    .top-family-title {

        font-size: 10px;

    }


    .top-family-right {

        gap: 7px;

    }


    .top-location {

        font-size: 9px;

    }


    .language-switch {

        min-width: 55px;

        padding:
            4px 7px;

        font-size: 9px;

    }


    /* ---------------------------------------------
       NAVBAR
    --------------------------------------------- */

    .family-navbar-container {

        min-height: 76px;

        padding-top: 7px;

        padding-bottom: 7px;

        gap: 8px;

        flex-wrap: wrap;

    }


    /* ---------------------------------------------
       BRAND
    --------------------------------------------- */

    .family-brand {

        min-width: 0;

        max-width:
            calc(100% - 52px);

        flex: 1 1 auto;

    }


    .family-logo-wrap {

        width: 59px;

        height: 59px;

        flex-basis: 59px;

    }


    .family-logo-image {

        width: 53px;

        height: 53px;

    }


    .family-brand-text {

        min-width: 0;

        margin-left: 8px;

    }


    .family-brand-title {

        font-size: 13.5px;

        line-height: 1.25;

        white-space: normal;

        display:
            -webkit-box;

        -webkit-line-clamp: 2;

        -webkit-box-orient: vertical;

        overflow: hidden;

    }


    .family-brand-subtitle {

        margin-top: 2px;

        font-size: 9px;

        white-space: nowrap;

    }


    /* ---------------------------------------------
       TOGGLER
    --------------------------------------------- */

    .family-toggler {

        display: flex;

        margin-left: auto;

    }


    /* ---------------------------------------------
       NAVIGATION
    --------------------------------------------- */

    .family-navigation {

        width: 100%;

        flex-basis: 100%;

        margin: 0;

        padding:
            7px 0 10px;

    }


    /* ---------------------------------------------
       MENU BOX
    --------------------------------------------- */

    .family-menu-list {

        display: block;

        width: 100%;

        padding: 6px;

        margin: 0;

        border:
            1px solid
            rgba(116,16,20,.10);

        border-radius: 16px;

        background:
            #fff;

        box-shadow:
            0 12px 32px
            rgba(61,5,7,.10);

    }


    /* ---------------------------------------------
       MENU ITEM
    --------------------------------------------- */

    .family-menu-item {

        display: block;

        width: 100%;

        margin: 0;

    }


    /* ---------------------------------------------
       MENU LINK
    --------------------------------------------- */

    .family-menu-link {

        display: flex;

        width: 100%;

        min-height: 46px;

        padding:
            0 13px;

        margin: 1px 0;

        justify-content: flex-start;

        gap: 9px;

        border-radius: 11px;

        font-size: 13px;

        white-space: normal;

        text-align: left;

    }


    .family-menu-link i {

        width: 21px;

        flex: 0 0 21px;

        text-align: center;

    }


    .family-menu-link.active::after {

        left: 13px;

        bottom: 5px;

        width: 20px;

        transform: none;

    }


    /* ---------------------------------------------
       DROPDOWN TOGGLE
    --------------------------------------------- */

    .family-navbar
    .dropdown {

        width: 100%;

    }


    .family-navbar
    .dropdown-toggle {

        justify-content: flex-start;

    }


    .family-navbar
    .dropdown-toggle::after {

        margin-left: auto !important;

    }


    /* ---------------------------------------------
       MOBILE DROPDOWN
    --------------------------------------------- */

    .family-navbar
    .dropdown-menu {

        position: static !important;

        width: calc(100% - 8px);

        min-width: 0;

        margin:
            2px 4px 6px !important;

        padding: 5px;

        border:
            1px solid
            rgba(116,16,20,.09);

        border-radius: 12px;

        background:
            #fffaf7;

        box-shadow:
            inset 0 0 0 1px
            rgba(116,16,20,.025);

        transform: none !important;

        opacity: 1;

        visibility: visible;

    }


    /* ---------------------------------------------
       MOBILE DROPDOWN ITEM
    --------------------------------------------- */

    .family-navbar
    .dropdown-item {

        min-height: 42px;

        padding:
            8px 10px;

        font-size: 12px;

        line-height: 1.4;

        border-radius: 9px;

    }


    .family-navbar
    .dropdown-item i {

        width: 20px;

        flex-basis: 20px;

        font-size: 13px;

    }


    /* ---------------------------------------------
       MOBILE DROPDOWN HEADER
    --------------------------------------------- */

    .family-navbar
    .dropdown-header {

        padding:
            7px 10px 5px;

        font-size: 9px;

    }


    /* ---------------------------------------------
       CONTACT
    --------------------------------------------- */

    .family-contact {

        width: 100%;

    }

}


/* =====================================================
   TABLET / SMALL MOBILE
===================================================== */

@media (max-width: 767.98px) {

    .family-brand-title {

        font-size: 13px;

    }

}


/* =====================================================
   MOBILE 575
===================================================== */

@media (max-width: 575.98px) {


    .top-family-inner {

        min-height: 37px;

    }


    .top-family-title {

        max-width: 52%;

        overflow: hidden;

        text-overflow: ellipsis;

        white-space: nowrap;

        font-size: 9px;

    }


    .top-family-right {

        gap: 5px;

    }


    .top-location {

        display: none;

    }


    .language-switcher {

        padding: 2px;

    }


    .language-switch {

        min-width: 52px;

        padding:
            4px 6px;

        font-size: 8.5px;

    }


    .family-navbar-container {

        min-height: 70px;

        padding:
            5px 10px;

    }


    .family-logo-wrap {

        width: 53px;

        height: 53px;

        flex-basis: 53px;

    }


    .family-logo-image {

        width: 48px;

        height: 48px;

    }


    .family-brand-text {

        margin-left: 7px;

    }


    .family-brand-title {

        font-size: 12px;

    }


    .family-brand-subtitle {

        font-size: 8px;

    }


    .family-toggler {

        width: 41px;

        height: 41px;

        flex-basis: 41px;

    }


    .family-navigation {

        padding:
            6px 0 9px;

    }


    .family-menu-list {

        padding: 5px;

        border-radius: 14px;

    }


    .family-menu-link {

        min-height: 44px;

        padding:
            0 11px;

        font-size: 12px;

    }


    .family-navbar
    .dropdown-menu {

        width: calc(100% - 6px);

        margin:
            2px 3px 5px !important;

    }


    .family-navbar
    .dropdown-item {

        min-height: 40px;

        padding:
            7px 9px;

        font-size: 11.5px;

    }

}


/* =====================================================
   VERY SMALL MOBILE
===================================================== */

@media (max-width: 390px) {


    .family-navbar-container {

        padding-left: 8px;

        padding-right: 8px;

    }


    .family-logo-wrap {

        width: 49px;

        height: 49px;

        flex-basis: 49px;

    }


    .family-logo-image {

        width: 45px;

        height: 45px;

    }


    .family-brand-title {

        font-size: 11.5px;

    }


    .family-brand-subtitle {

        display: none;

    }


    .family-toggler {

        width: 39px;

        height: 39px;

        flex-basis: 39px;

    }


    .family-menu-link {

        min-height: 42px;

        font-size: 11.5px;

    }

}


/* =====================================================
   SECTION SCROLL
===================================================== */

section {

    scroll-margin-top: 105px;

}


/* =====================================================
   PREVENT HORIZONTAL OVERFLOW
===================================================== */

.family-navbar,
.top-family-bar {

    max-width: 100%;

    overflow: visible;

}

</style>

</head>


<body>


<!-- =====================================================
     TOP FAMILY BAR
===================================================== -->

<div class="top-family-bar">

    <div class="container">

        <div class="top-family-inner">


            <!-- LEFT -->

            <div class="top-family-title">

                <i class="bi bi-tree-fill"></i>

                <span>

                    <?= htmlspecialchars(
                        $familyWebsite,
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>

                </span>

            </div>


            <!-- RIGHT -->

            <div class="top-family-right">


                <!-- LOCATION -->

                <div class="top-location">

                    <i class="bi bi-geo-alt-fill me-1"></i>

                    <?= htmlspecialchars(
                        $location,
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>

                </div>


                <!-- LANGUAGE -->

                <div class="language-switcher">


                    <a
                        href="?lang=hi"
                        class="
                            language-switch
                            <?= $currentLanguage === 'hi'
                                ? 'active'
                                : '' ?>
                        "
                    >

                        <i class="bi bi-translate me-1"></i>

                        हिन्दी

                    </a>


                    <a
                        href="?lang=en"
                        class="
                            language-switch
                            <?= $currentLanguage === 'en'
                                ? 'active'
                                : '' ?>
                        "
                    >

                        English

                    </a>


                </div>

            </div>

        </div>

    </div>

</div>



<!-- =====================================================
     MAIN NAVBAR
===================================================== -->

<nav
    class="
        family-navbar
        navbar
        navbar-expand-lg
    "
>


    <div
        class="
            container
            family-navbar-container
        "
    >


        <!-- =================================================
             BRAND
        ================================================== -->

        <a
            href="index.php"
            class="family-brand"
        >


            <span class="family-logo-wrap">

                <img
                    src="/motia22khut/uploads/logo.png" 
                    alt="22 खूट मोतिया परिवार"
                    class="family-logo-image"
                >

                <span class="family-logo-ring"></span>

            </span>


            <span class="family-brand-text">

                <span class="family-brand-title">

                    22 खूट मोतिया परिवार

                </span>


                <span class="family-brand-subtitle">

                    <i class="bi bi-geo-alt-fill"></i>

                    <?= htmlspecialchars(
                        $location,
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>

                </span>

            </span>


        </a>



        <!-- =================================================
             MOBILE TOGGLER
        ================================================== -->

        <button
            class="
                navbar-toggler
                family-toggler
            "
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#familyNavigation"
            aria-controls="familyNavigation"
            aria-expanded="false"
            aria-label="Menu खोलें"
        >

            <span class="navbar-toggler-icon"></span>

        </button>



        <!-- =================================================
             NAVIGATION
        ================================================== -->

        <div
            id="familyNavigation"
            class="
                collapse
                navbar-collapse
                family-navigation
            "
        >


            <ul class="family-menu-list">


                <!-- =================================================
                     HOME
                ================================================= -->

                <li class="family-menu-item">

                    <a
                        href="index.php#home"
                        class="
                            family-menu-link
                            <?= $currentPage === 'index.php'
                                ? 'active'
                                : '' ?>
                        "
                    >

                        <i class="bi bi-house-door-fill"></i>

                        <span>होम</span>

                    </a>

                </li>



                <!-- =================================================
                     PARIVAR KI PISHTHBHOOMI
                ================================================== -->

                <li class="family-menu-item dropdown">

                    <a
                        href="#"
                        class="
                            family-menu-link
                            family-dropdown-toggle
                            dropdown-toggle
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >

                        <i class="bi bi-people-fill"></i>

                        <span>परिवार की पृष्ठ भूमि</span>

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <h6 class="dropdown-header">

                                परिवार

                            </h6>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="index.php#parivar"
                            >

                                <i class="bi bi-people-fill"></i>

                                <span>परिवार के सदस्य</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="members.php"
                            >

                                <i class="bi bi-person-vcard-fill"></i>

                                <span>सभी परिवार सदस्य</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="index.php#about"
                            >

                                <i class="bi bi-info-circle-fill"></i>

                                <span>परिवार का परिचय</span>

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     KUL DEVI
                ================================================== -->

                <li class="family-menu-item dropdown">

                    <a
                        href="#"
                        class="
                            family-menu-link
                            family-dropdown-toggle
                            dropdown-toggle
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >

                        <i class="bi bi-flower1"></i>

                        <span>परिवार की कुल देवी</span>

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <h6 class="dropdown-header">

                                परिवार की कुल देवी

                            </h6>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="kul-devi.php"
                            >

                                <i class="bi bi-flower1"></i>

                                <span>कुल देवी का परिचय</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="kul-devi-parampara.php"
                            >

                                <i class="bi bi-stars"></i>

                                <span>पूजा एवं परम्परा</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="kul-devi-history.php"
                            >

                                <i class="bi bi-book-half"></i>

                                <span>कुल देवी का इतिहास</span>

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     PARIVAR KI PARAMPARA
                ================================================== -->

                <li class="family-menu-item dropdown">

                    <a
                        href="#"
                        class="
                            family-menu-link
                            family-dropdown-toggle
                            dropdown-toggle
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >

                        <i class="bi bi-stars"></i>

                        <span>परिवार की परम्परा</span>

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <h6 class="dropdown-header">

                                परिवार की परम्परा

                            </h6>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="parivar-background.php"
                            >

                                <i class="bi bi-book-fill"></i>

                                <span>परिवार की पृष्ठभूमि</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="parivar-parampara.php"
                            >

                                <i class="bi bi-stars"></i>

                                <span>परिवार की परम्परा</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="parivar-virasat.php"
                            >

                                <i class="bi bi-gem"></i>

                                <span>परिवार की विरासत</span>

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     VANSHAVALI
                ================================================== -->

                <li class="family-menu-item dropdown">

                    <a
                        href="#"
                        class="
                            family-menu-link
                            family-dropdown-toggle
                            dropdown-toggle
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >

                        <i class="bi bi-diagram-3-fill"></i>

                        <span>वंशावली</span>

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <h6 class="dropdown-header">

                                परिवार की वंशावली

                            </h6>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="index.php#vanshavali"
                            >

                                <i class="bi bi-diagram-3-fill"></i>

                                <span>तीन खूट</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="vanshavali.php"
                            >

                                <i class="bi bi-diagram-2-fill"></i>

                                <span>पांच और आठ खूट </span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="vanshavali.php?view=generation"
                            >

                                <i class="bi bi-layers-fill"></i>

                                <span>चार खूट</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="vanshavali.php?view=tree"
                            >

                                <i class="bi bi-tree-fill"></i>

                                <span>भगनमानरिज</span>

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     VIDEO
                ================================================== -->

                <li class="family-menu-item dropdown">

                    <a
                        href="#"
                        class="
                            family-menu-link
                            family-dropdown-toggle
                            dropdown-toggle
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >

                        <i class="bi bi-camera-video-fill"></i>

                        <span>वीडियो</span>

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <h6 class="dropdown-header">

                                परिवार की वीडियो

                            </h6>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="videos.php"
                            >

                                <i class="bi bi-play-circle-fill"></i>

                                <span>परिवार की वीडियो</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="videos.php?view=all"
                            >

                                <i class="bi bi-collection-play-fill"></i>

                                <span>सभी वीडियो</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="videos.php?view=family"
                            >

                                <i class="bi bi-people-fill"></i>

                                <span>परिवार के वीडियो</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="videos.php?view=events"
                            >

                                <i class="bi bi-calendar-event-fill"></i>

                                <span>कार्यक्रम के वीडियो</span>

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     GALLERY
                ================================================== -->

                <li class="family-menu-item dropdown">

                    <a
                        href="#"
                        class="
                            family-menu-link
                            family-dropdown-toggle
                            dropdown-toggle
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >

                        <i class="bi bi-images"></i>

                        <span>गैलरी</span>

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <h6 class="dropdown-header">

                                परिवार की फोटो

                            </h6>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="gallery.php"
                            >

                                <i class="bi bi-images"></i>

                                <span>फोटो गैलरी</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="gallery.php?view=all"
                            >

                                <i class="bi bi-grid-3x3-gap-fill"></i>

                                <span>सभी फोटो</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="gallery.php?view=family"
                            >

                                <i class="bi bi-people-fill"></i>

                                <span>परिवार की फोटो</span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="gallery.php?view=events"
                            >

                                <i class="bi bi-calendar-event-fill"></i>

                                <span>कार्यक्रम की फोटो</span>

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     ABOUT
                ================================================== -->

                <li class="family-menu-item">

                    <a
                        href="index.php#about"
                        class="family-menu-link"
                    >

                        <i class="bi bi-info-circle-fill"></i>

                        <span>हमारे बारे में</span>

                    </a>

                </li>


            </ul>

        </div>

    </div>

</nav>



<!-- =====================================================
     BOOTSTRAP JS
     DROPDOWN + MOBILE MENU
===================================================== -->





<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =================================================
           MOBILE NAVIGATION
        ================================================= */

        const navigation =
            document.getElementById(
                "familyNavigation"
            );


        /* =================================================
           MOBILE MENU LINK CLICK
        ================================================= */

        if (navigation) {

            navigation
                .querySelectorAll(
                    ".dropdown-item"
                )
                .forEach(
                    function (link) {

                        link.addEventListener(
                            "click",
                            function () {

                                if (
                                    window.innerWidth <= 991
                                ) {

                                    const collapse =
                                        bootstrap
                                        .Collapse
                                        .getInstance(
                                            navigation
                                        );

                                    if (collapse) {

                                        collapse.hide();

                                    }

                                }

                            }
                        );

                    }
                );

        }


        /* =================================================
           DROPDOWN OPEN - CLOSE OTHER DROPDOWNS
        ================================================= */

        document
            .querySelectorAll(
                ".family-navbar .dropdown"
            )
            .forEach(
                function (dropdown) {

                    dropdown.addEventListener(
                        "show.bs.dropdown",
                        function () {

                            document
                                .querySelectorAll(
                                    ".family-navbar .dropdown.show"
                                )
                                .forEach(
                                    function (openDropdown) {

                                        if (
                                            openDropdown !==
                                            dropdown
                                        ) {

                                            const toggle =
                                                openDropdown
                                                .querySelector(
                                                    ".dropdown-toggle"
                                                );

                                            if (toggle) {

                                                const instance =
                                                    bootstrap
                                                    .Dropdown
                                                    .getInstance(
                                                        toggle
                                                    );

                                                if (instance) {

                                                    instance.hide();

                                                }

                                            }

                                        }

                                    }
                                );

                        }
                    );

                }
            );


        /* =================================================
           ACTIVE SECTION
        ================================================= */

        const navLinks =
            document.querySelectorAll(
                '.family-menu-link[href*="#"]'
            );


        const sections =
            document.querySelectorAll(
                "section[id]"
            );


        function updateActiveSection() {

            let current = "";


            sections.forEach(
                function (section) {

                    const sectionTop =
                        section.offsetTop - 160;


                    if (
                        window.scrollY >=
                        sectionTop
                    ) {

                        current =
                            section.getAttribute(
                                "id"
                            );

                    }

                }
            );


            navLinks.forEach(
                function (link) {

                    link.classList.remove(
                        "active"
                    );


                    const href =
                        link.getAttribute(
                            "href"
                        );


                    if (
                        current &&
                        href &&
                        href.includes(
                            "#" + current
                        )
                    ) {

                        link.classList.add(
                            "active"
                        );

                    }

                }
            );

        }


        window.addEventListener(
            "scroll",
            updateActiveSection,
            {
                passive: true
            }
        );


        updateActiveSection();


        /* =================================================
           NAVBAR SHADOW ON SCROLL
        ================================================= */

        const navbar =
            document.querySelector(
                ".family-navbar"
            );


        function navbarShadow() {

            if (!navbar) {
                return;
            }


            if (window.scrollY > 20) {

                navbar.style.boxShadow =
                    "0 12px 35px rgba(61,5,7,.14)";

            } else {

                navbar.style.boxShadow =
                    "0 7px 25px rgba(61,5,7,.08)";

            }

        }


        window.addEventListener(
            "scroll",
            navbarShadow,
            {
                passive: true
            }
        );


        navbarShadow();


    }
);

</script>

</body>

</html>