<?php
/* =========================================================
   MEMBER PROFILE PAGE
   22 खूट मोतिया परिवार
========================================================= */

$pageTitle   = "परिवार सदस्य";
$currentPage = "members";

/* Header */
include __DIR__ . '/../includes/header.php';


/* =========================================================
   DEMO MEMBER DATA
   बाद में Database से Dynamic किया जा सकता है।
========================================================= */

$member = [

    "id"          => 1,

    "name"        => "जुड़ान ठाकुर",

    "father"      => "पिता का नाम",

    "mother"      => "माता का नाम",

    "village"     => "गाँव का नाम",

    "district"    => "गोड्डा",

    "state"       => "झारखण्ड",

    "generation"  => "प्रथम पीढ़ी",

    "generation_no" => "01",

    "relation"    => "मूल पूर्वज",

    "gotra"       => "मोतिया परिवार",

    "occupation"  => "व्यवसाय / कार्य",

    "mobile"      => "",

    "dob"         => "",

    "about"       => "यह हमारे परिवार के प्रमुख सदस्यों में से एक हैं। परिवार की परंपरा, इतिहास और विरासत से संबंधित जानकारी यहाँ प्रदर्शित की जा सकती है।",

    "image"       => "../uploads/judan.jpeg"

];

?>



<!-- =========================================================
     MEMBER PROFILE PAGE
========================================================= -->

<section class="member-page">

    <!-- Decorative Background -->
    <div class="member-decoration decoration-1"></div>
    <div class="member-decoration decoration-2"></div>
    <div class="member-decoration decoration-3"></div>


    <div class="container">


        <!-- =================================================
             BREADCRUMB
        ================================================== -->

        <div class="member-breadcrumb">

            <a href="../index.php">
                <i class="bi bi-house-fill"></i>
                होम
            </a>

            <span>
                <i class="bi bi-chevron-right"></i>
            </span>

            <a href="../members.php">
                परिवार सदस्य
            </a>

            <span>
                <i class="bi bi-chevron-right"></i>
            </span>

            <strong>
                सदस्य विवरण
            </strong>

        </div>



        <!-- =================================================
             MAIN PROFILE
        ================================================== -->

        <div class="profile-wrapper">


            <!-- =============================================
                 TOP PROFILE HEADER
            ============================================== -->

            <div class="profile-top">


                <!-- PROFILE IMAGE -->

                <div class="profile-photo-section">

                    <div class="photo-glow"></div>

                    <div class="profile-photo-frame">

                        <div class="profile-photo-inner">

                            <img
                                src="<?= htmlspecialchars($member['image']) ?>"
                                alt="<?= htmlspecialchars($member['name']) ?>"
                                class="profile-photo"
                                onerror="this.src='../uploads/judan.jpeg';"
                            >

                        </div>

                    </div>


                    <!-- Generation Badge -->

                    <div class="generation-badge">

                        <div class="generation-icon">

                            <i class="bi bi-diagram-3-fill"></i>

                        </div>

                        <div>

                            <small>
                                वंश की
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['generation']) ?>
                            </strong>

                        </div>

                    </div>

                </div>



                <!-- =========================================
                     PROFILE INTRO
                ========================================== -->

                <div class="profile-intro">


                    <div class="profile-label">

                        <span></span>

                        22 खूट मोतिया परिवार

                    </div>


                    <h1>

                        <?= htmlspecialchars($member['name']) ?>

                    </h1>


                    <div class="profile-role">

                        <span class="role-icon">

                            <i class="bi bi-person-badge-fill"></i>

                        </span>

                        <?= htmlspecialchars($member['relation']) ?>

                    </div>


                    <div class="profile-location">

                        <i class="bi bi-geo-alt-fill"></i>

                        <?= htmlspecialchars($member['village']) ?>,
                        <?= htmlspecialchars($member['district']) ?>,
                        <?= htmlspecialchars($member['state']) ?>

                    </div>


                    <!-- INTRO -->

                    <div class="profile-description">

                        <div class="description-icon">

                            <i class="bi bi-quote"></i>

                        </div>

                        <p>

                            <?= nl2br(htmlspecialchars($member['about'])) ?>

                        </p>

                    </div>


                    <!-- QUICK BADGES -->

                    <div class="quick-badges">

                        <div class="quick-badge">

                            <i class="bi bi-diagram-3-fill"></i>

                            <span>
                                <?= htmlspecialchars($member['generation']) ?>
                            </span>

                        </div>


                        <div class="quick-badge">

                            <i class="bi bi-tree-fill"></i>

                            <span>
                                <?= htmlspecialchars($member['gotra']) ?>
                            </span>

                        </div>


                        <div class="quick-badge">

                            <i class="bi bi-geo-alt-fill"></i>

                            <span>
                                <?= htmlspecialchars($member['district']) ?>
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 DIVIDER
            ================================================== -->

            <div class="profile-divider">

                <span></span>

                <i class="bi bi-flower1"></i>

                <span></span>

            </div>



            <!-- =================================================
                 FAMILY INFORMATION
            ================================================== -->

            <div class="information-section">


                <div class="section-heading">

                    <div class="section-icon">

                        <i class="bi bi-person-vcard-fill"></i>

                    </div>

                    <div>

                        <small>
                            व्यक्तिगत जानकारी
                        </small>

                        <h2>
                            परिवार विवरण
                        </h2>

                    </div>

                </div>



                <div class="information-grid">


                    <!-- Father -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-person-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                पिता का नाम
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['father']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- Mother -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-person-heart"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                माता का नाम
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['mother']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- Generation -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-diagram-3-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                वंश की पीढ़ी
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['generation']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- Relation -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-award-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                पारिवारिक पहचान
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['relation']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- Village -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-house-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                गाँव
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['village']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- District -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-geo-alt-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                जिला
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['district']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- State -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-map-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                राज्य
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['state']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- Occupation -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-briefcase-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                व्यवसाय / कार्य
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['occupation']) ?>
                            </strong>

                        </div>

                    </div>



                    <!-- DOB -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-calendar-heart-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                जन्म तिथि
                            </small>

                            <strong>

                                <?php if (!empty($member['dob'])): ?>

                                    <?= htmlspecialchars($member['dob']) ?>

                                <?php else: ?>

                                    उपलब्ध नहीं

                                <?php endif; ?>

                            </strong>

                        </div>

                    </div>



                    <!-- Family -->

                    <div class="information-card">

                        <div class="information-icon">

                            <i class="bi bi-people-fill"></i>

                        </div>

                        <div class="information-content">

                            <small>
                                परिवार
                            </small>

                            <strong>
                                <?= htmlspecialchars($member['gotra']) ?>
                            </strong>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FAMILY TREE POSITION
            ================================================== -->

            <div class="tree-position">


                <div class="tree-position-left">

                    <div class="tree-big-icon">

                        <i class="bi bi-diagram-3-fill"></i>

                    </div>


                    <div>

                        <small>
                            वंशावली में स्थान
                        </small>

                        <h3>
                            <?= htmlspecialchars($member['generation']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($member['relation']) ?>
                        </p>

                    </div>

                </div>


                <div class="tree-number">

                    <span>
                        पीढ़ी
                    </span>

                    <strong>
                        <?= htmlspecialchars($member['generation_no']) ?>
                    </strong>

                </div>

            </div>



            <!-- =================================================
                 ACTION BUTTONS
            ================================================== -->

            <div class="profile-actions">


                <a
                    href="../members.php"
                    class="profile-btn btn-light">

                    <i class="bi bi-arrow-left"></i>

                    सभी सदस्य

                </a>


                <a
                    href="../vanshavali.php"
                    class="profile-btn btn-gold">

                    <i class="bi bi-diagram-3-fill"></i>

                    पूरी वंशावली देखें

                </a>

            </div>

        </div>



        <!-- =================================================
             HERITAGE CARD
        ================================================== -->

        <div class="heritage-card">


            <div class="heritage-pattern"></div>


            <div class="heritage-icon">

                <i class="bi bi-tree-fill"></i>

            </div>


            <div class="heritage-content">

                <span>
                    हमारी विरासत
                </span>

                <h2>
                    हमारी विरासत • हमारी पहचान • हमारा परिवार
                </h2>

                <p>
                    हमारे परिवार के प्रत्येक सदस्य की कहानी,
                    योगदान और स्मृतियाँ हमारी आने वाली पीढ़ियों
                    के लिए एक अमूल्य विरासत हैं।
                </p>

            </div>


            <div class="heritage-symbol">

                <i class="bi bi-flower1"></i>

            </div>

        </div>


    </div>

</section>



<!-- =========================================================
     PREMIUM MEMBER PAGE CSS
========================================================= -->

<style>

/* =========================================================
   ROOT
========================================================= */

.member-page {

    position: relative;

    overflow: hidden;

    padding: 38px 0 70px;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(213,169,40,.12),
            transparent 25%
        ),
        radial-gradient(
            circle at 90% 80%,
            rgba(123,17,19,.08),
            transparent 30%
        ),
        #faf8f3;

    min-height: 85vh;

}


/* =========================================================
   DECORATION
========================================================= */

.member-decoration {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

    border: 1px solid rgba(123,17,19,.07);

}

.decoration-1 {

    width: 500px;

    height: 500px;

    top: -280px;

    right: -180px;

}

.decoration-2 {

    width: 350px;

    height: 350px;

    bottom: -190px;

    left: -150px;

}

.decoration-3 {

    width: 120px;

    height: 120px;

    top: 45%;

    left: 4%;

    border-color:
        rgba(213,169,40,.12);

}


/* =========================================================
   BREADCRUMB
========================================================= */

.member-breadcrumb {

    position: relative;

    z-index: 5;

    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 9px;

    margin-bottom: 22px;

    font-size: 12px;

    color: #95877b;

}

.member-breadcrumb a {

    text-decoration: none;

    color: #7b1113;

    font-weight: 700;

    transition: .2s;

}

.member-breadcrumb a:hover {

    color: #c59b21;

}

.member-breadcrumb span {

    color: #c8bcae;

    font-size: 9px;

}

.member-breadcrumb strong {

    font-weight: 600;

    color: #84776c;

}


/* =========================================================
   PROFILE WRAPPER
========================================================= */

.profile-wrapper {

    position: relative;

    z-index: 3;

    overflow: hidden;

    border-radius: 30px;

    background: #ffffff;

    border: 1px solid
        rgba(123,17,19,.10);

    box-shadow:
        0 30px 90px
        rgba(61,28,10,.11);

}


/* =========================================================
   PROFILE TOP
========================================================= */

.profile-top {

    display: grid;

    grid-template-columns:
        330px
        1fr;

    gap: 55px;

    padding: 50px;

}


/* =========================================================
   PHOTO SECTION
========================================================= */

.profile-photo-section {

    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-direction: column;

}


/* Photo glow */

.photo-glow {

    position: absolute;

    width: 260px;

    height: 260px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(213,169,40,.20),
            transparent 68%
        );

}


/* Photo frame */

.profile-photo-frame {

    position: relative;

    z-index: 2;

    width: 270px;

    height: 315px;

    padding: 8px;

    border-radius: 28px;

    background:
        linear-gradient(
            145deg,
            #b98917,
            #f3d36e,
            #c29728,
            #8e6510,
            #e5bf50
        );

    box-shadow:
        0 25px 50px
        rgba(74,30,10,.20);

}


/* inner */

.profile-photo-inner {

    width: 100%;

    height: 100%;

    padding: 5px;

    overflow: hidden;

    border-radius: 21px;

    background: #fff;

}


/* image */

.profile-photo {

    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    border-radius: 16px;

    transition:
        transform .6s ease;

}

.profile-photo-frame:hover
.profile-photo {

    transform: scale(1.035);

}


/* =========================================================
   GENERATION BADGE
========================================================= */

.generation-badge {

    position: relative;

    z-index: 4;

    display: flex;

    align-items: center;

    gap: 10px;

    margin-top: -18px;

    padding: 10px 18px;

    border-radius: 50px;

    background: #ffffff;

    border: 1px solid
        rgba(123,17,19,.12);

    box-shadow:
        0 10px 25px
        rgba(50,20,5,.13);

}

.generation-icon {

    width: 34px;

    height: 34px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #7b1113;

    color: #d5a928;

}

.generation-badge small {

    display: block;

    color: #9d9186;

    font-size: 9px;

}

.generation-badge strong {

    display: block;

    color: #4d090e;

    font-size: 12px;

}


/* =========================================================
   PROFILE INTRO
========================================================= */

.profile-intro {

    display: flex;

    flex-direction: column;

    justify-content: center;

}


/* label */

.profile-label {

    display: flex;

    align-items: center;

    gap: 9px;

    color: #a18f7d;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 1px;

}

.profile-label span {

    width: 34px;

    height: 3px;

    border-radius: 10px;

    background: #d5a928;

}


/* name */

.profile-intro h1 {

    margin: 8px 0 5px;

    color: #4b090e;

    font-size: clamp(36px,5vw,60px);

    font-weight: 900;

    line-height: 1.2;

}


/* role */

.profile-role {

    display: inline-flex;

    align-items: center;

    align-self: flex-start;

    gap: 8px;

    color: #7b1113;

    font-size: 13px;

    font-weight: 800;

}

.role-icon {

    width: 27px;

    height: 27px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 8px;

    background:
        rgba(123,17,19,.08);

}


/* location */

.profile-location {

    display: flex;

    align-items: center;

    gap: 7px;

    margin-top: 8px;

    color: #8b7f75;

    font-size: 12px;

}

.profile-location i {

    color: #7b1113;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.profile-description {

    display: flex;

    gap: 12px;

    margin-top: 23px;

    padding: 17px;

    border-radius: 16px;

    background:
        linear-gradient(
            135deg,
            rgba(123,17,19,.045),
            rgba(213,169,40,.07)
        );

    border-left: 3px solid #d5a928;

}

.description-icon {

    width: 38px;

    height: 38px;

    min-width: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 11px;

    background: #7b1113;

    color: #d5a928;

    font-size: 18px;

}

.profile-description p {

    margin: 0;

    color: #71675e;

    font-size: 12px;

    line-height: 1.8;

}


/* =========================================================
   QUICK BADGES
========================================================= */

.quick-badges {

    display: flex;

    flex-wrap: wrap;

    gap: 8px;

    margin-top: 17px;

}

.quick-badge {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    padding: 7px 11px;

    border-radius: 30px;

    background: #fcfaf6;

    border: 1px solid #eee5da;

    color: #6f6258;

    font-size: 10px;

    font-weight: 700;

}

.quick-badge i {

    color: #b18518;

}


/* =========================================================
   DIVIDER
========================================================= */

.profile-divider {

    display: flex;

    align-items: center;

    gap: 15px;

    padding: 0 50px;

}

.profile-divider span {

    height: 1px;

    flex: 1;

    background:
        linear-gradient(
            to right,
            transparent,
            #e7ded3
        );

}

.profile-divider span:last-child {

    background:
        linear-gradient(
            to left,
            transparent,
            #e7ded3
        );

}

.profile-divider i {

    color: #d5a928;

    font-size: 17px;

}


/* =========================================================
   INFORMATION SECTION
========================================================= */

.information-section {

    padding: 38px 50px 40px;

}

.section-heading {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 22px;

}

.section-icon {

    width: 45px;

    height: 45px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 13px;

    background:
        rgba(123,17,19,.07);

    color: #7b1113;

    font-size: 18px;

}

.section-heading small {

    display: block;

    color: #a19387;

    font-size: 9px;

    font-weight: 700;

}

.section-heading h2 {

    margin: 1px 0 0;

    color: #4c0a0f;

    font-size: 20px;

    font-weight: 850;

}


/* =========================================================
   INFORMATION GRID
========================================================= */

.information-grid {

    display: grid;

    grid-template-columns:
        repeat(3, minmax(0,1fr));

    gap: 11px;

}


/* information card */

.information-card {

    display: flex;

    align-items: center;

    gap: 11px;

    min-width: 0;

    padding: 13px;

    border-radius: 15px;

    background: #fcfbf8;

    border: 1px solid #eee7df;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;

}

.information-card:hover {

    transform: translateY(-3px);

    border-color:
        rgba(213,169,40,.50);

    box-shadow:
        0 12px 25px
        rgba(50,25,5,.07);

}


/* icon */

.information-icon {

    width: 38px;

    height: 38px;

    min-width: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 11px;

    background:
        rgba(123,17,19,.07);

    color: #7b1113;

}


/* content */

.information-content {

    min-width: 0;

}

.information-content small {

    display: block;

    margin-bottom: 2px;

    color: #a2968c;

    font-size: 9px;

}

.information-content strong {

    display: block;

    overflow-wrap: anywhere;

    color: #51473f;

    font-size: 11px;

    font-weight: 800;

}


/* =========================================================
   TREE POSITION
========================================================= */

.tree-position {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin: 0 50px 30px;

    padding: 18px 20px;

    border-radius: 18px;

    background:
        linear-gradient(
            135deg,
            #4b090e,
            #701419
        );

    box-shadow:
        0 15px 35px
        rgba(75,9,14,.13);

}

.tree-position-left {

    display: flex;

    align-items: center;

    gap: 13px;

}

.tree-big-icon {

    width: 48px;

    height: 48px;

    min-width: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    color: #d5a928;

    background:
        rgba(213,169,40,.13);

    border: 1px solid
        rgba(213,169,40,.25);

    font-size: 20px;

}

.tree-position-left small {

    display: block;

    color: rgba(255,255,255,.50);

    font-size: 9px;

}

.tree-position-left h3 {

    margin: 2px 0;

    color: #fff;

    font-size: 16px;

    font-weight: 800;

}

.tree-position-left p {

    margin: 0;

    color: #d5a928;

    font-size: 10px;

}

.tree-number {

    text-align: center;

    min-width: 60px;

}

.tree-number span {

    display: block;

    color: rgba(255,255,255,.50);

    font-size: 8px;

}

.tree-number strong {

    display: block;

    color: #d5a928;

    font-size: 30px;

    line-height: 1;

}


/* =========================================================
   ACTION BUTTONS
========================================================= */

.profile-actions {

    display: flex;

    justify-content: flex-end;

    gap: 10px;

    padding: 0 50px 42px;

}

.profile-btn {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    min-height: 43px;

    padding: 0 18px;

    border-radius: 12px;

    text-decoration: none;

    font-size: 11px;

    font-weight: 800;

    transition: .25s ease;

}

.btn-light {

    background: #fff;

    color: #655a51;

    border: 1px solid #ddd4ca;

}

.btn-light:hover {

    color: #7b1113;

    border-color: #d5a928;

    transform: translateY(-2px);

}

.btn-gold {

    color: #fff;

    background:
        linear-gradient(
            135deg,
            #7b1113,
            #4b090e
        );

    box-shadow:
        0 8px 20px
        rgba(123,17,19,.18);

}

.btn-gold:hover {

    color: #fff;

    transform: translateY(-2px);

    box-shadow:
        0 12px 28px
        rgba(123,17,19,.25);

}


/* =========================================================
   HERITAGE CARD
========================================================= */

.heritage-card {

    position: relative;

    z-index: 3;

    display: flex;

    align-items: center;

    gap: 18px;

    overflow: hidden;

    margin-top: 25px;

    padding: 24px 28px;

    border-radius: 22px;

    background:
        linear-gradient(
            135deg,
            #4a090e,
            #74151a
        );

    color: #fff;

    box-shadow:
        0 20px 45px
        rgba(65,10,15,.14);

}

.heritage-pattern {

    position: absolute;

    width: 240px;

    height: 240px;

    right: -80px;

    top: -120px;

    border-radius: 50%;

    border: 1px solid
        rgba(213,169,40,.15);

}

.heritage-icon {

    position: relative;

    z-index: 2;

    width: 56px;

    height: 56px;

    min-width: 56px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 16px;

    color: #d5a928;

    background:
        rgba(213,169,40,.13);

    border: 1px solid
        rgba(213,169,40,.28);

    font-size: 23px;

}

.heritage-content {

    position: relative;

    z-index: 2;

}

.heritage-content span {

    color: #d5a928;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 1px;

}

.heritage-content h2 {

    margin: 3px 0 5px;

    color: #fff;

    font-size: 17px;

    font-weight: 850;

}

.heritage-content p {

    margin: 0;

    max-width: 750px;

    color: rgba(255,255,255,.60);

    font-size: 10px;

    line-height: 1.7;

}

.heritage-symbol {

    position: relative;

    z-index: 2;

    margin-left: auto;

    color: rgba(213,169,40,.35);

    font-size: 35px;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991.98px) {

    .profile-top {

        grid-template-columns:
            260px
            1fr;

        gap: 35px;

        padding: 35px;

    }

    .profile-photo-frame {

        width: 225px;

        height: 270px;

    }

    .profile-intro h1 {

        font-size: 40px;

    }

    .information-section {

        padding-left: 35px;

        padding-right: 35px;

    }

    .profile-divider {

        padding-left: 35px;

        padding-right: 35px;

    }

    .information-grid {

        grid-template-columns:
            repeat(2,1fr);

    }

    .tree-position {

        margin-left: 35px;

        margin-right: 35px;

    }

    .profile-actions {

        padding-left: 35px;

        padding-right: 35px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767.98px) {

    .member-page {

        padding: 25px 0 45px;

    }

    .member-breadcrumb {

        margin-bottom: 15px;

        font-size: 10px;

    }

    .profile-wrapper {

        border-radius: 22px;

    }

    .profile-top {

        display: block;

        padding: 25px 17px 22px;

    }

    .profile-photo-frame {

        width: 200px;

        height: 240px;

    }

    .profile-intro {

        margin-top: 28px;

        text-align: center;

    }

    .profile-label {

        justify-content: center;

    }

    .profile-intro h1 {

        font-size: 31px;

        margin-top: 9px;

    }

    .profile-role {

        align-self: center;

    }

    .profile-location {

        justify-content: center;

        flex-wrap: wrap;

    }

    .profile-description {

        text-align: left;

        margin-top: 19px;

        padding: 13px;

    }

    .quick-badges {

        justify-content: center;

    }

    .profile-divider {

        padding: 0 17px;

    }

    .information-section {

        padding: 25px 17px;

    }

    .section-heading {

        margin-bottom: 17px;

    }

    .information-grid {

        grid-template-columns: 1fr;

        gap: 8px;

    }

    .information-card {

        padding: 11px;

    }

    .tree-position {

        margin: 0 17px 22px;

        padding: 14px;

    }

    .tree-big-icon {

        width: 43px;

        height: 43px;

        min-width: 43px;

    }

    .tree-position-left h3 {

        font-size: 13px;

    }

    .tree-number strong {

        font-size: 25px;

    }

    .profile-actions {

        display: grid;

        grid-template-columns: 1fr 1fr;

        padding: 0 17px 25px;

    }

    .profile-btn {

        width: 100%;

        padding: 0 8px;

        font-size: 10px;

    }

    .heritage-card {

        align-items: flex-start;

        padding: 19px;

        border-radius: 18px;

    }

    .heritage-icon {

        width: 45px;

        height: 45px;

        min-width: 45px;

        font-size: 18px;

    }

    .heritage-content h2 {

        font-size: 14px;

        line-height: 1.5;

    }

    .heritage-content p {

        font-size: 9px;

    }

    .heritage-symbol {

        display: none;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .profile-photo-frame {

        width: 175px;

        height: 215px;

    }

    .profile-intro h1 {

        font-size: 27px;

    }

    .generation-badge {

        padding: 8px 13px;

    }

    .profile-actions {

        grid-template-columns: 1fr;

    }

}

</style>



<?php
/* Footer */
include __DIR__ . '/../includes/footer.php';
?>