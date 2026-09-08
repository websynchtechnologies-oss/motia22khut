
<?php
$pageTitle = "22 खूट मोतिया परिवार | गोड्डा, झारखण्ड";
include 'includes/header.php';
?>

<style>

/* =========================================================
   FAMILY COVER / TOP BANNER
========================================================= */

.family-cover {
    position: relative;
    width: 100%;
    overflow: hidden;
    background: #3e0507;
}

/* Main image area */
.family-cover-image {
    position: relative;
    width: 100%;
    height: 430px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #3e0507;

    overflow: hidden;
}

/* IMPORTANT:
   Full image visible - no crop */
.family-cover-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    display: block;

    animation: familyImageZoom 12s ease-in-out infinite alternate;
}

/* Very light overlay */
.family-cover-overlay {
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            to bottom,
            rgba(0,0,0,0.05),
            rgba(0,0,0,0.10) 55%,
            rgba(62,5,7,0.65)
        );

    pointer-events: none;
}

/* Image subtle animation */
@keyframes familyImageZoom {

    from {
        transform: scale(1);
    }

    to {
        transform: scale(1.025);
    }

}


/* =========================================================
   DECORATIVE GOLD ELEMENTS
========================================================= */

.cover-decoration {
    position: absolute;
    z-index: 3;

    width: 70px;
    height: 70px;

    border: 1px solid rgba(243,216,137,0.55);

    pointer-events: none;
}

.decoration-one {
    left: 25px;
    top: 25px;

    border-right: 0;
    border-bottom: 0;
}

.decoration-two {
    right: 25px;
    bottom: 25px;

    border-left: 0;
    border-top: 0;
}


/* =========================================================
   MINIMAL COVER CONTENT
   IMPORTANT:
   Main title is NOT repeated here because image already
   contains the title.
========================================================= */

.cover-content {
    position: absolute;
    z-index: 5;

    left: 0;
    right: 0;
    bottom: 35px;

    display: flex;
    justify-content: center;
}

.cover-glass-box {
    display: flex;
    align-items: center;
    gap: 18px;

    padding: 13px 22px;

    border: 1px solid rgba(255,255,255,0.22);

    border-radius: 18px;

    background: rgba(62,5,7,0.55);

    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

    box-shadow:
        0 12px 35px rgba(0,0,0,0.25);

    color: #fff;
}

.cover-badge {
    display: inline-flex;
    align-items: center;

    padding: 7px 13px;

    border-radius: 50px;

    background: rgba(216,170,50,0.18);

    border: 1px solid rgba(243,216,137,0.45);

    color: #f3d889;

    font-size: 13px;
    font-weight: 700;

    white-space: nowrap;
}

.cover-location {
    display: flex;
    align-items: center;

    gap: 7px;

    font-size: 14px;
    font-weight: 500;

    color: #fff;
}

.cover-location i {
    color: #f3d889;
}

.cover-small-text {
    font-size: 12px;
    color: rgba(255,255,255,0.75);

    padding-left: 10px;

    border-left: 1px solid rgba(255,255,255,0.25);
}


/* =========================================================
   COVER BUTTON
========================================================= */

.cover-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    padding: 8px 15px;

    border-radius: 50px;

    background: #d8aa32;

    color: #3e0507;

    font-size: 13px;
    font-weight: 700;

    text-decoration: none;

    transition: all .3s ease;
}

.cover-btn:hover {
    background: #f3d889;
    color: #3e0507;

    transform: translateY(-2px);
}


/* =========================================================
   SCROLL INDICATOR
========================================================= */

.scroll-indicator {
    position: absolute;

    left: 50%;
    bottom: 12px;

    transform: translateX(-50%);

    z-index: 8;

    display: flex;
    align-items: center;
    gap: 7px;

    color: rgba(255,255,255,0.75);

    font-size: 11px;

    opacity: .85;
}

.scroll-indicator i {
    color: #f3d889;

    animation: scrollDown 1.5s infinite;
}

@keyframes scrollDown {

    0%,100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(5px);
    }

}


/* =========================================================
   HERO SECTION
========================================================= */

.family-hero {
    position: relative;

    padding: 90px 0;

    background:
        radial-gradient(
            circle at top right,
            rgba(216,170,50,0.12),
            transparent 35%
        ),
        #fff8ef;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    padding: 8px 15px;

    border-radius: 50px;

    background: rgba(118,16,21,0.08);

    border: 1px solid rgba(118,16,21,0.12);

    color: #761015;

    font-size: 13px;
    font-weight: 700;

    margin-bottom: 18px;
}

.hero-title {
    color: #3e0507;

    font-size: clamp(35px, 5vw, 58px);

    font-weight: 800;

    line-height: 1.12;

    margin-bottom: 20px;
}

.hero-title span {
    color: #761015;
}

.hero-text {
    color: #6b5555;

    font-size: 17px;

    line-height: 1.8;

    max-width: 650px;

    margin-bottom: 28px;
}


/* =========================================================
   HERO BUTTONS
========================================================= */

.btn-family-primary {
    background: #761015;
    color: #fff;

    border: 0;

    padding: 13px 23px;

    border-radius: 10px;

    font-weight: 700;

    transition: all .3s ease;
}

.btn-family-primary:hover {
    background: #3e0507;
    color: #fff;

    transform: translateY(-2px);

    box-shadow: 0 10px 25px rgba(118,16,21,0.25);
}

.btn-family-outline {
    background: transparent;

    color: #761015;

    border: 1px solid #761015;

    padding: 12px 23px;

    border-radius: 10px;

    font-weight: 700;

    transition: all .3s ease;
}

.btn-family-outline:hover {
    background: #761015;
    color: #fff;
}


/* =========================================================
   HERO FEATURE ROW
========================================================= */

.hero-features {
    display: flex;
    flex-wrap: wrap;

    gap: 12px;

    margin-top: 30px;
}

.hero-feature {
    display: flex;
    align-items: center;
    gap: 8px;

    color: #5e4444;

    font-size: 13px;
    font-weight: 600;
}

.hero-feature i {
    width: 30px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: rgba(216,170,50,0.15);

    color: #a07910;
}


/* =========================================================
   FAMILY INFO CARD
========================================================= */

.family-info-card {
    position: relative;

    padding: 35px;

    border-radius: 25px;

    background:
        linear-gradient(
            145deg,
            #761015,
            #3e0507
        );

    color: #fff;

    box-shadow:
        0 25px 55px rgba(62,5,7,0.22);

    overflow: hidden;
}

.family-info-card::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    right: -70px;
    top: -70px;

    border-radius: 50%;

    border: 1px solid rgba(243,216,137,0.25);
}

.family-info-card::after {
    content: "";

    position: absolute;

    width: 120px;
    height: 120px;

    left: -55px;
    bottom: -55px;

    border-radius: 50%;

    border: 1px solid rgba(243,216,137,0.20);
}

.info-label {
    color: #f3d889;

    font-size: 11px;

    letter-spacing: 3px;

    font-weight: 700;

    margin-bottom: 12px;
}

.info-title {
    font-size: 35px;

    font-weight: 800;

    margin-bottom: 8px;
}

.info-location {
    color: rgba(255,255,255,0.75);

    font-size: 14px;

    margin-bottom: 30px;
}

.info-location i {
    color: #f3d889;
}


/* =========================================================
   STATS
========================================================= */

.family-stats {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 10px;
}

.family-stat {
    padding: 15px 10px;

    border-radius: 14px;

    background: rgba(255,255,255,0.07);

    border: 1px solid rgba(255,255,255,0.09);

    text-align: center;
}

.family-stat-number {
    display: block;

    color: #f3d889;

    font-size: 24px;

    font-weight: 800;
}

.family-stat-label {
    display: block;

    margin-top: 3px;

    color: rgba(255,255,255,0.65);

    font-size: 11px;
}


/* =========================================================
   SECTION COMMON
========================================================= */

.family-section {
    padding: 90px 0;
}

.section-badge {
    display: inline-block;

    color: #761015;

    background: rgba(118,16,21,0.07);

    border: 1px solid rgba(118,16,21,0.12);

    padding: 7px 14px;

    border-radius: 50px;

    font-size: 12px;

    font-weight: 700;

    margin-bottom: 15px;
}

.section-title {
    color: #3e0507;

    font-size: clamp(30px, 4vw, 44px);

    font-weight: 800;

    margin-bottom: 10px;
}

.section-subtitle {
    color: #816b6b;

    font-size: 15px;

    margin-bottom: 0;
}


/* =========================================================
   FAMILY TREE SECTION
========================================================= */

.tree-section {
    background: #fff;
}

.tree-search {
    max-width: 500px;

    margin: 35px auto 55px;

    position: relative;
}

.tree-search input {
    width: 100%;

    height: 52px;

    border-radius: 14px;

    border: 1px solid #ead8ca;

    background: #fffaf5;

    padding: 0 50px 0 18px;

    outline: none;

    color: #3e0507;

    box-shadow: 0 8px 25px rgba(62,5,7,0.05);
}

.tree-search input:focus {
    border-color: #b9878a;

    box-shadow:
        0 0 0 4px rgba(118,16,21,0.06);
}

.tree-search i {
    position: absolute;

    right: 18px;
    top: 50%;

    transform: translateY(-50%);

    color: #761015;
}


/* =========================================================
   TREE GRID
========================================================= */

.tree-grid {
    position: relative;
}

.tree-card {
    position: relative;

    height: 100%;

    padding: 25px 20px;

    border-radius: 20px;

    background: #fff;

    border: 1px solid #f0dfd1;

    text-align: center;

    transition: all .35s ease;

    box-shadow: 0 10px 30px rgba(62,5,7,0.05);

    overflow: hidden;
}

.tree-card:hover {
    transform: translateY(-8px);

    border-color: rgba(216,170,50,0.45);

    box-shadow:
        0 18px 45px rgba(62,5,7,0.12);
}

.tree-card-image {
    width: 90px;
    height: 90px;

    border-radius: 50%;

    margin: 0 auto 17px;

    overflow: hidden;

    border: 4px solid #fff;

    box-shadow:
        0 0 0 2px #d8aa32,
        0 8px 20px rgba(62,5,7,0.15);

    background: #fff8ef;

    display: flex;
    align-items: center;
    justify-content: center;
}

.tree-card-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;
}

.tree-card-image i {
    font-size: 35px;

    color: #761015;
}

.tree-generation {
    display: inline-block;

    padding: 5px 10px;

    border-radius: 50px;

    background: #fff4df;

    color: #9a7414;

    font-size: 10px;

    font-weight: 700;

    margin-bottom: 10px;
}

.tree-name {
    color: #3e0507;

    font-size: 20px;

    font-weight: 800;

    margin-bottom: 5px;
}

.tree-relation {
    color: #8c7474;

    font-size: 12px;

    min-height: 18px;
}

.tree-card-link {
    position: absolute;

    right: 15px;
    top: 15px;

    width: 30px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: rgba(118,16,21,0.07);

    color: #761015;

    text-decoration: none;

    transition: all .3s ease;
}

.tree-card-link:hover {
    background: #761015;

    color: #fff;
}


/* =========================================================
   TREE RESULT MESSAGE
========================================================= */

.no-result {
    display: none;

    text-align: center;

    padding: 30px;

    color: #816b6b;
}


/* =========================================================
   ABOUT
========================================================= */

.about-section {
    background:
        linear-gradient(
            180deg,
            #fff8ef,
            #fff
        );
}

.about-box {
    padding: 35px;

    border-radius: 22px;

    background: #fff;

    border: 1px solid #f0dfd1;

    box-shadow: 0 15px 40px rgba(62,5,7,0.06);
}

.about-box p {
    color: #6e5a5a;

    line-height: 1.9;

    font-size: 15px;
}

.about-item {
    display: flex;

    gap: 15px;

    margin-top: 22px;
}

.about-icon {
    flex: 0 0 45px;

    width: 45px;
    height: 45px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 13px;

    background: rgba(216,170,50,0.13);

    color: #9a7414;

    font-size: 19px;
}

.about-item h5 {
    color: #3e0507;

    font-size: 16px;

    font-weight: 800;

    margin-bottom: 4px;
}

.about-item p {
    font-size: 13px;

    margin: 0;
}


/* =========================================================
   CONTACT
========================================================= */

.contact-section {
    background: #fff;
}

.contact-card {
    padding: 35px;

    border-radius: 22px;

    background: #fff8ef;

    border: 1px solid #f0dfd1;
}

.contact-card .form-control {
    min-height: 50px;

    border-radius: 11px;

    border: 1px solid #ead8ca;

    background: #fff;
}

.contact-card textarea.form-control {
    min-height: 120px;
}

.contact-card .form-control:focus {
    border-color: #a96c70;

    box-shadow:
        0 0 0 4px rgba(118,16,21,0.06);
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 991px) {

    .family-cover-image {
        height: 370px;
    }

    .family-hero {
        padding: 65px 0;
    }

    .family-info-card {
        margin-top: 30px;
    }

}

@media (max-width: 767px) {

    .family-cover-image {
        height: 300px;
    }

    .cover-decoration {
        width: 45px;
        height: 45px;
    }

    .decoration-one {
        left: 12px;
        top: 12px;
    }

    .decoration-two {
        right: 12px;
        bottom: 25px;
    }

    .cover-content {
        bottom: 25px;

        padding: 0 12px;
    }

    .cover-glass-box {
        width: 100%;

        justify-content: center;

        flex-wrap: wrap;

        gap: 8px;

        padding: 10px 12px;

        border-radius: 14px;
    }

    .cover-small-text {
        display: none;
    }

    .cover-location {
        font-size: 12px;
    }

    .cover-badge {
        font-size: 11px;

        padding: 6px 10px;
    }

    .cover-btn {
        font-size: 11px;

        padding: 7px 11px;
    }

    .scroll-indicator {
        display: none;
    }

    .family-hero {
        padding: 55px 0;
    }

    .hero-title {
        font-size: 37px;
    }

    .hero-text {
        font-size: 15px;
    }

    .family-info-card {
        padding: 25px;
    }

    .family-stats {
        gap: 7px;
    }

    .family-stat {
        padding: 12px 5px;
    }

    .family-stat-number {
        font-size: 20px;
    }

    .family-section {
        padding: 65px 0;
    }

    .tree-card {
        padding: 22px 15px;
    }

}

@media (max-width: 480px) {

    .family-cover-image {
        height: 250px;
    }

    .family-cover-image img {
        width: 100%;
        height: 100%;

        object-fit: contain;
    }

    .cover-location {
        width: 100%;
        justify-content: center;
    }

    .hero-features {
        gap: 8px;
    }

    .hero-feature {
        font-size: 11px;
    }

}


/* =========================================================
   HIDDEN SEARCH CARD
========================================================= */

.tree-card.hidden-card {
    display: none;
}


/* =========================================================
   FAMILY TREE - AUTO FIT TO SCREEN
   पूरा वंश-वृक्ष स्क्रीन के अंदर फिट होगा।
   Horizontal/vertical internal scrolling बंद है।
========================================================= */

.bansawali-section {
    overflow: hidden;
}

.tree-scroll {
    width: 100%;
    max-width: 100%;
    overflow: hidden !important;
    padding: 20px 0 40px;
    position: relative;
}

.family-tree {
    width: max-content;
    min-width: 0 !important;
    display: flex;
    justify-content: flex-start;
    padding-top: 20px;
    margin: 0;
    transform-origin: top left;
    will-change: transform;
}

.family-tree ul {
    flex-shrink: 0;
}

@media (max-width: 768px) {
    .bansawali-section {
        padding: 55px 0;
    }

    .tree-scroll {
        padding: 15px 0 30px;
    }

    .family-tree {
        padding-top: 10px;
    }
}

</style>


<!-- =========================================================
     TOP FAMILY COVER
========================================================= -->

<section class="family-cover">

    <div class="family-cover-image">

        <!-- YOUR IMAGE -->
        <img
            src="uploads/khut123 (4).png"
            alt="22 खूट मोतिया परिवार"
        >

        <div class="family-cover-overlay"></div>

        <div class="cover-decoration decoration-one"></div>
        <div class="cover-decoration decoration-two"></div>


        <!--
            IMPORTANT:
            यहाँ दोबारा बड़ा title नहीं रखा गया है,
            क्योंकि आपकी PNG image में पहले से title मौजूद है।
        -->

        <div class="container position-relative">

            <div class="cover-content">

                <div class="cover-glass-box">

                    <div class="cover-badge">

                        <i class="bi bi-tree-fill"></i>

                        22 खूट परिवार

                    </div>


                    <div class="cover-location">

                        <i class="bi bi-geo-alt-fill"></i>

                        मोतिया, गोड्डा, झारखण्ड

                    </div>


                 



                    <a
                        href="#family-tree"
                        class="cover-btn"
                    >

                        वंशावली देखें

                        <i class="bi bi-arrow-down"></i>

                    </a>

                </div>

            </div>

        </div>


        <div class="scroll-indicator">

            <span>नीचे देखें</span>

            <i class="bi bi-chevron-down"></i>

        </div>

    </div>

</section>



<!-- =========================================================
     HERO
========================================================= -->

<section class="family-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT -->

            <div class="col-lg-7">

                <div class="hero-badge">

                    <i class="bi bi-heart-fill"></i>

                    हमारी पारिवारिक विरासत

                </div>


                <h2 class="hero-title">

                    अपनी जड़ों से

                    <br>

                    <span>जुड़ने की शुरुआत करें</span>

                </h2>


                <p class="hero-text">

                    हमारी वंशावली केवल नामों की सूची नहीं,
                    बल्कि हमारे पूर्वजों, परिवार और आने वाली
                    पीढ़ियों के बीच एक मजबूत रिश्ता है।
                    आइए अपनी पारिवारिक विरासत को डिजिटल रूप
                    में सुरक्षित रखें।

                </p>


                <div class="d-flex flex-wrap gap-3">

                    <a
                        href="#family-tree"
                        class="btn btn-family-primary"
                    >

                        <i class="bi bi-diagram-3-fill me-2"></i>

                        वंशावली देखें

                    </a>


                    <a
                        href="#about"
                        class="btn btn-family-outline"
                    >

                        हमारे बारे में

                        <i class="bi bi-arrow-right ms-2"></i>

                    </a>

                </div>


                <div class="hero-features">

                    <div class="hero-feature">

                        <i class="bi bi-diagram-3-fill"></i>

                        <span>वंशावली</span>

                    </div>


                    <div class="hero-feature">

                        <i class="bi bi-people-fill"></i>

                        <span>परिवार</span>

                    </div>


                    <div class="hero-feature">

                        <i class="bi bi-bookmark-heart-fill"></i>

                        <span>विरासत</span>

                    </div>

                </div>

            </div>


            <!-- RIGHT -->

            <div class="col-lg-5">

                <div class="family-info-card">

                    <div class="info-label">

                        FAMILY HERITAGE

                    </div>


                    <div class="info-title">

                        22 खूट

                    </div>


                    <div class="info-location">

                        <i class="bi bi-geo-alt-fill me-1"></i>

                        मोतिया, गोड्डा, झारखण्ड

                    </div>


                    <div class="family-stats">

                        <div class="family-stat">

                            <span class="family-stat-number">
                                01
                            </span>

                            <span class="family-stat-label">
                                मूल पूर्वज
                            </span>

                        </div>


                        <div class="family-stat">

                            <span class="family-stat-number">
                                03
                            </span>

                            <span class="family-stat-label">
                                पीढ़ियां
                            </span>

                        </div>


                        <div class="family-stat">

                            <span class="family-stat-number">
                                06
                            </span>

                            <span class="family-stat-label">
                                सदस्य
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FULL FAMILY TREE / BANSHAWALI
========================================================= -->

<section id="family-tree" class="bansawali-section"
style="background:linear-gradient(135deg,#392719 0%,#75512d 50%,#24170e 100%) !important;color:#fff;">
    <div class="container-fluid">

        <!-- SECTION HEADER -->

        <div class="text-center mb-5">

            <span class="section-badge text-white">

                <i class="bi bi-diagram-3-fill me-2 text-white"></i>

                पारिवारिक वंशावली

            </span>

            <h2 class="bansawali-title text-white">

                ग्राम-मोतिया मैथिल ब्राह्मणों की वंशावली

            </h2>

            <p class="bansawali-subtitle text-white">

                शाण्डिल्य गोत्रीय खड़ोरेय एकमा मूल (सुपौल-बिहार)

            </p>

        </div>

        <!-- =================================================
             TREE WRAPPER
        ================================================== -->

        <div class="tree-scroll">

            <div class="family-tree">


                <!-- =================================================
                     ROOT : जुड़ान ठाकुर
                ================================================== -->

                <ul>

                    <li>

                        <div
                            class="person-node root-node"
                            data-name="जुड़ान ठाकुर"
                        >

                            <a href="members/member.php?id=1">

                                <div class="person-photo">

                                    <img
                                        src="uploads/judan.jpeg"
                                        alt="जुड़ान ठाकुर"
                                        loading="lazy"
                                        onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                                    >

                                    <i
                                        class="bi bi-person-fill"
                                        style="display:none;"
                                    ></i>

                                </div>

                                <div class="person-info">

                                    <span class="generation">
                                        प्रथम पीढ़ी
                                    </span>

                                    <strong>
                                        जुड़ान ठाकुर
                                    </strong>

                                    <small>
                                        मूल पूर्वज
                                    </small>

                                </div>

                                <span class="node-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>

                            </a>

                        </div>


                        <!-- =================================================
                             ROOT CHILDREN
                        ================================================== -->

                        <ul>


                            <!-- =================================================
                                 अर्जुन
                            ================================================== -->

                            <li>

                                <div
                                    class="person-node"
                                    data-name="अर्जुन"
                                >

                                    <a href="member.php?id=2">

                                        <div class="person-photo">

                                            <img
                                                src="assets/images/family/2.jpg"
                                                alt="अर्जुन"
                                                loading="lazy"
                                                onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                                            >

                                            <i
                                                class="bi bi-person-fill"
                                                style="display:none;"
                                            ></i>

                                        </div>

                                        <div class="person-info">

                                            <span class="generation">
                                                द्वितीय पीढ़ी
                                            </span>

                                            <strong>
                                                अर्जुन
                                            </strong>

                                            <small>
                                                जुड़ान ठाकुर के पुत्र
                                            </small>

                                        </div>

                                        <span class="node-arrow">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </span>

                                    </a>

                                </div>


                                <!-- अर्जुन की शाखाएँ -->

                                <ul>


                                    <!-- =================================================
                                         हरिराम
                                    ================================================== -->

                                    <li>

                                        <div
                                            class="person-node"
                                            data-name="हरिराम"
                                        >

                                            <a href="member.php?id=3">

                                                <div class="person-photo">

                                                    <img
                                                        src="assets/images/family/3.jpg"
                                                        alt="हरिराम"
                                                        loading="lazy"
                                                        onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                                                    >

                                                    <i
                                                        class="bi bi-person-fill"
                                                        style="display:none;"
                                                    ></i>

                                                </div>

                                                <div class="person-info">

                                                    <span class="generation">
                                                        तृतीय पीढ़ी
                                                    </span>

                                                    <strong>
                                                        हरिराम
                                                    </strong>

                                                    <small>
                                                        अर्जुन के पुत्र
                                                    </small>

                                                </div>

                                                <span class="node-arrow">
                                                    <i class="bi bi-arrow-up-right"></i>
                                                </span>

                                            </a>

                                        </div>


                                        <!-- हरिराम की शाखाएँ -->

                                        <ul>


                                            <!-- =================================================
                                                 डोहरू
                                            ================================================== -->

                                            <li>

                                                <div
                                                    class="person-node"
                                                    data-name="डोहरू"
                                                >

                                                    <a href="member.php?id=7">

                                                        <div class="person-photo">

                                                            <img
                                                                src="assets/images/family/7.jpg"
                                                                alt="डोहरू"
                                                                loading="lazy"
                                                                onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                                                            >

                                                            <i
                                                                class="bi bi-person-fill"
                                                                style="display:none;"
                                                            ></i>

                                                        </div>

                                                        <div class="person-info">

                                                            <span class="generation">
                                                                शाखा
                                                            </span>

                                                            <strong>
                                                                डोहरू
                                                            </strong>

                                                            <small>
                                                                हरिराम के पुत्र
                                                            </small>

                                                        </div>

                                                        <span class="node-arrow">
                                                            <i class="bi bi-arrow-up-right"></i>
                                                        </span>

                                                    </a>

                                                </div>


                                                <ul>


                                                    <!-- विनोद -->

                                                    <li>

                                                        <div
                                                            class="person-node"
                                                            data-name="विनोद"
                                                        >

                                                            <a href="member.php?id=8">

                                                                <div class="person-photo">

                                                                    <img
                                                                        src="assets/images/family/8.jpg"
                                                                        alt="विनोद"
                                                                        loading="lazy"
                                                                        onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                                                                    >

                                                                    <i
                                                                        class="bi bi-person-fill"
                                                                        style="display:none;"
                                                                    ></i>

                                                                </div>

                                                                <div class="person-info">

                                                                    <span class="generation">
                                                                        शाखा
                                                                    </span>

                                                                    <strong>
                                                                        विनोद
                                                                    </strong>

                                                                    <small>
                                                                        डोहरू के पुत्र
                                                                    </small>

                                                                </div>

                                                            </a>

                                                        </div>


                                                        <ul>

                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="दामोदर"
                                                                >

                                                                    <a href="member.php?id=9">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/9.jpg"
                                                                                alt="दामोदर"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                दामोदर
                                                                            </strong>

                                                                            <small>
                                                                                विनोद के पुत्र
                                                                            </small>

                                                                        </div>

                                                                    </a>

                                                                </div>


                                                                <ul>

                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="बोध"
                                                                        >

                                                                            <a href="member.php?id=10">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/10.jpg"
                                                                                        alt="बोध"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        बोध
                                                                                    </strong>

                                                                                    <small>
                                                                                        दामोदर के पुत्र
                                                                                    </small>

                                                                                </div>

                                                                            </a>

                                                                        </div>


                                                                        <ul>

                                                                            <li>

                                                                                <div
                                                                                    class="person-node"
                                                                                    data-name="कधू"
                                                                                >

                                                                                    <a href="member.php?id=11">

                                                                                        <div class="person-photo">

                                                                                            <img
                                                                                                src="assets/images/family/11.jpg"
                                                                                                alt="कधू"
                                                                                                loading="lazy"
                                                                                            >

                                                                                        </div>

                                                                                        <div class="person-info">

                                                                                            <strong>
                                                                                                कधू
                                                                                            </strong>

                                                                                        </div>

                                                                                    </a>

                                                                                </div>


                                                                                <ul>

                                                                                    <li>

                                                                                        <div
                                                                                            class="person-node"
                                                                                            data-name="भोला"
                                                                                        >

                                                                                            <a href="member.php?id=12">

                                                                                                <div class="person-photo">

                                                                                                    <img
                                                                                                        src="assets/images/family/12.jpg"
                                                                                                        alt="भोला"
                                                                                                        loading="lazy"
                                                                                                    >

                                                                                                </div>

                                                                                                <div class="person-info">

                                                                                                    <strong>
                                                                                                        भोला
                                                                                                    </strong>

                                                                                                </div>

                                                                                            </a>

                                                                                        </div>


                                                                                        <ul>

                                                                                            <li>

                                                                                                <div
                                                                                                    class="person-node"
                                                                                                    data-name="ब्रह्मदत्त"
                                                                                                >

                                                                                                    <a href="member.php?id=13">

                                                                                                        <div class="person-photo">

                                                                                                            <img
                                                                                                                src="assets/images/family/13.jpg"
                                                                                                                alt="ब्रह्मदत्त"
                                                                                                                loading="lazy"
                                                                                                            >

                                                                                                        </div>

                                                                                                        <div class="person-info">

                                                                                                            <strong>
                                                                                                                ब्रह्मदत्त
                                                                                                            </strong>

                                                                                                        </div>

                                                                                                    </a>

                                                                                                </div>


                                                                                                <ul>

                                                                                                    <li>

                                                                                                        <div
                                                                                                            class="person-node"
                                                                                                            data-name="कालीप्रसाद"
                                                                                                        >

                                                                                                            <a href="member.php?id=14">

                                                                                                                <div class="person-photo">

                                                                                                                    <img
                                                                                                                        src="assets/images/family/14.jpg"
                                                                                                                        alt="कालीप्रसाद"
                                                                                                                        loading="lazy"
                                                                                                                    >

                                                                                                                </div>

                                                                                                                <div class="person-info">

                                                                                                                    <strong>
                                                                                                                        कालीप्रसाद
                                                                                                                    </strong>

                                                                                                                </div>

                                                                                                            </a>

                                                                                                        </div>

                                                                                                    </li>

                                                                                                </ul>

                                                                                            </li>

                                                                                        </ul>

                                                                                    </li>

                                                                                </ul>

                                                                            </li>

                                                                        </ul>

                                                                    </li>

                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <!-- प्रेम नारायण -->

                                                    <li>

                                                        <div
                                                            class="person-node"
                                                            data-name="प्रेम नारायण"
                                                        >

                                                            <a href="member.php?id=15">

                                                                <div class="person-photo">

                                                                    <img
                                                                        src="assets/images/family/15.jpg"
                                                                        alt="प्रेम नारायण"
                                                                        loading="lazy"
                                                                    >

                                                                </div>

                                                                <div class="person-info">

                                                                    <strong>
                                                                        प्रेम नारायण
                                                                    </strong>

                                                                    <small>
                                                                        डोहरू के पुत्र
                                                                    </small>

                                                                </div>

                                                            </a>

                                                        </div>


                                                        <ul>

                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="दुखहरण"
                                                                >

                                                                    <a href="member.php?id=16">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/16.jpg"
                                                                                alt="दुखहरण"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                दुखहरण
                                                                            </strong>

                                                                        </div>

                                                                    </a>

                                                                </div>


                                                                <ul>

                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="उमानाथ"
                                                                        >

                                                                            <a href="member.php?id=17">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/17.jpg"
                                                                                        alt="उमानाथ"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        उमानाथ
                                                                                    </strong>

                                                                                </div>

                                                                            </a>

                                                                        </div>


                                                                        <ul>

                                                                            <li>

                                                                                <div
                                                                                    class="person-node"
                                                                                    data-name="कमलनयन चौधरी"
                                                                                >

                                                                                    <a href="member.php?id=18">

                                                                                        <div class="person-photo">

                                                                                            <img
                                                                                                src="assets/images/family/18.jpg"
                                                                                                alt="कमलनयन चौधरी"
                                                                                                loading="lazy"
                                                                                            >

                                                                                        </div>

                                                                                        <div class="person-info">

                                                                                            <strong>
                                                                                                कमलनयन चौधरी
                                                                                            </strong>

                                                                                        </div>

                                                                                    </a>

                                                                                </div>


                                                                                <ul>

                                                                                    <li>

                                                                                        <div
                                                                                            class="person-node"
                                                                                            data-name="कुजेमन चौधरी"
                                                                                        >

                                                                                            <a href="member.php?id=19">

                                                                                                <div class="person-photo">

                                                                                                    <img
                                                                                                        src="assets/images/family/19.jpg"
                                                                                                        alt="कुजेमन चौधरी"
                                                                                                        loading="lazy"
                                                                                                    >

                                                                                                </div>

                                                                                                <div class="person-info">

                                                                                                    <strong>
                                                                                                        कुजेमन चौधरी
                                                                                                    </strong>

                                                                                                </div>

                                                                                            </a>

                                                                                        </div>


                                                                                        <ul>


                                                                                            <li>

                                                                                                <div
                                                                                                    class="person-node"
                                                                                                    data-name="नन्दलाल चौधरी"
                                                                                                >

                                                                                                    <a href="member.php?id=20">

                                                                                                        <div class="person-photo">

                                                                                                            <img
                                                                                                                src="assets/images/family/20.jpg"
                                                                                                                alt="नन्दलाल चौधरी"
                                                                                                                loading="lazy"
                                                                                                            >

                                                                                                        </div>

                                                                                                        <div class="person-info">

                                                                                                            <strong>
                                                                                                                नन्दलाल चौधरी
                                                                                                            </strong>

                                                                                                        </div>

                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>


                                                                                            <li>

                                                                                                <div
                                                                                                    class="person-node"
                                                                                                    data-name="हीरालाल चौधरी"
                                                                                                >

                                                                                                    <a href="member.php?id=21">

                                                                                                        <div class="person-photo">

                                                                                                            <img
                                                                                                                src="assets/images/family/21.jpg"
                                                                                                                alt="हीरालाल चौधरी"
                                                                                                                loading="lazy"
                                                                                                            >

                                                                                                        </div>

                                                                                                        <div class="person-info">

                                                                                                            <strong>
                                                                                                                हीरालाल चौधरी
                                                                                                            </strong>

                                                                                                        </div>

                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>


                                                                                            <li>

                                                                                                <div
                                                                                                    class="person-node"
                                                                                                    data-name="श्यामलाल चौधरी"
                                                                                                >

                                                                                                    <a href="member.php?id=22">

                                                                                                        <div class="person-photo">

                                                                                                            <img
                                                                                                                src="assets/images/family/22.jpg"
                                                                                                                alt="श्यामलाल चौधरी"
                                                                                                                loading="lazy"
                                                                                                            >

                                                                                                        </div>

                                                                                                        <div class="person-info">

                                                                                                            <strong>
                                                                                                                श्यामलाल चौधरी
                                                                                                            </strong>

                                                                                                        </div>

                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>

                                                                                    </li>

                                                                                </ul>

                                                                            </li>

                                                                        </ul>

                                                                    </li>

                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>


                                            <!-- हरिवंश -->

                                            <li>

                                                <div
                                                    class="person-node"
                                                    data-name="हरिवंश"
                                                >

                                                    <a href="member.php?id=23">

                                                        <div class="person-photo">

                                                            <img
                                                                src="assets/images/family/23.jpg"
                                                                alt="हरिवंश"
                                                                loading="lazy"
                                                            >

                                                        </div>

                                                        <div class="person-info">

                                                            <strong>
                                                                हरिवंश
                                                            </strong>

                                                            <small>
                                                                हरिराम के पुत्र
                                                            </small>

                                                        </div>

                                                    </a>

                                                </div>


                                                <ul>


                                                    <!-- दयानाथ -->

                                                    <li>

                                                        <div
                                                            class="person-node"
                                                            data-name="दयानाथ"
                                                        >

                                                            <a href="member.php?id=24">

                                                                <div class="person-photo">

                                                                    <img
                                                                        src="assets/images/family/24.jpg"
                                                                        alt="दयानाथ"
                                                                        loading="lazy"
                                                                    >

                                                                </div>

                                                                <div class="person-info">

                                                                    <strong>
                                                                        दयानाथ
                                                                    </strong>

                                                                </div>

                                                            </a>

                                                        </div>


                                                        <ul>

                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="नारायण"
                                                                >

                                                                    <a href="member.php?id=25">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/25.jpg"
                                                                                alt="नारायण"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                नारायण
                                                                            </strong>

                                                                        </div>

                                                                    </a>

                                                                </div>


                                                                <ul>

                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="भोलनाथ"
                                                                        >

                                                                            <a href="member.php?id=26">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/26.jpg"
                                                                                        alt="भोलनाथ"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        भोलनाथ
                                                                                    </strong>

                                                                                </div>

                                                                            </a>

                                                                        </div>


                                                                        <ul>


                                                                            <li>

                                                                                <div
                                                                                    class="person-node"
                                                                                    data-name="गोवर्धन"
                                                                                >

                                                                                    <a href="member.php?id=27">

                                                                                        <div class="person-photo">

                                                                                            <img
                                                                                                src="assets/images/family/27.jpg"
                                                                                                alt="गोवर्धन"
                                                                                                loading="lazy"
                                                                                            >

                                                                                        </div>

                                                                                        <div class="person-info">

                                                                                            <strong>
                                                                                                गोवर्धन
                                                                                            </strong>

                                                                                        </div>

                                                                                    </a>

                                                                                </div>

                                                                            </li>


                                                                            <li>

                                                                                <div
                                                                                    class="person-node"
                                                                                    data-name="गिरधारी"
                                                                                >

                                                                                    <a href="member.php?id=28">

                                                                                        <div class="person-photo">

                                                                                            <img
                                                                                                src="assets/images/family/28.jpg"
                                                                                                alt="गिरधारी"
                                                                                                loading="lazy"
                                                                                            >

                                                                                        </div>

                                                                                        <div class="person-info">

                                                                                            <strong>
                                                                                                गिरधारी
                                                                                            </strong>

                                                                                        </div>

                                                                                    </a>

                                                                                </div>

                                                                            </li>

                                                                        </ul>

                                                                    </li>

                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <!-- कृपानाथ -->

                                                    <li>

                                                        <div
                                                            class="person-node"
                                                            data-name="कृपानाथ"
                                                        >

                                                            <a href="member.php?id=29">

                                                                <div class="person-photo">

                                                                    <img
                                                                        src="assets/images/family/29.jpg"
                                                                        alt="कृपानाथ"
                                                                        loading="lazy"
                                                                    >

                                                                </div>

                                                                <div class="person-info">

                                                                    <strong>
                                                                        कृपानाथ
                                                                    </strong>

                                                                </div>

                                                            </a>

                                                        </div>


                                                        <ul>

                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="शिवचरण"
                                                                >

                                                                    <a href="member.php?id=30">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/30.jpg"
                                                                                alt="शिवचरण"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                शिवचरण
                                                                            </strong>

                                                                        </div>

                                                                    </a>

                                                                </div>


                                                                <ul>


                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="खेमकरण"
                                                                        >

                                                                            <a href="member.php?id=31">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/31.jpg"
                                                                                        alt="खेमकरण"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        खेमकरण
                                                                                    </strong>

                                                                                </div>

                                                                            </a>

                                                                        </div>

                                                                    </li>


                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="निलाम्बर"
                                                                        >

                                                                            <a href="member.php?id=32">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/32.jpg"
                                                                                        alt="निलाम्बर"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        निलाम्बर
                                                                                    </strong>

                                                                                    <small>
                                                                                        (महेशपुर वासी)
                                                                                    </small>

                                                                                </div>

                                                                            </a>

                                                                        </div>

                                                                    </li>

                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>

                                    </li>


                                    <!-- =================================================
                                         कामदेव
                                    ================================================== -->

                                    <li>

                                        <div
                                            class="person-node"
                                            data-name="कामदेव"
                                        >

                                            <a href="member.php?id=33">

                                                <div class="person-photo">

                                                    <img
                                                        src="assets/images/family/33.jpg"
                                                        alt="कामदेव"
                                                        loading="lazy"
                                                    >

                                                </div>

                                                <div class="person-info">

                                                    <span class="generation">
                                                        तृतीय पीढ़ी
                                                    </span>

                                                    <strong>
                                                        कामदेव
                                                    </strong>

                                                    <small>
                                                        अर्जुन के पुत्र
                                                    </small>

                                                </div>

                                            </a>

                                        </div>


                                        <ul>

                                            <li>

                                                <div
                                                    class="person-node"
                                                    data-name="खेदू"
                                                >

                                                    <a href="member.php?id=34">

                                                        <div class="person-photo">

                                                            <img
                                                                src="assets/images/family/34.jpg"
                                                                alt="खेदू"
                                                                loading="lazy"
                                                            >

                                                        </div>

                                                        <div class="person-info">

                                                            <strong>
                                                                खेदू
                                                            </strong>

                                                        </div>

                                                    </a>

                                                </div>


                                                <ul>

                                                    <li>

                                                        <div
                                                            class="person-node"
                                                            data-name="हरिशंकर"
                                                        >

                                                            <a href="member.php?id=35">

                                                                <div class="person-photo">

                                                                    <img
                                                                        src="assets/images/family/35.jpg"
                                                                        alt="हरिशंकर"
                                                                        loading="lazy"
                                                                    >

                                                                </div>

                                                                <div class="person-info">

                                                                    <strong>
                                                                        हरिशंकर
                                                                    </strong>

                                                                </div>

                                                            </a>

                                                        </div>


                                                        <ul>


                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="हरजीव"
                                                                >

                                                                    <a href="member.php?id=36">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/36.jpg"
                                                                                alt="हरजीव"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                हरजीव
                                                                            </strong>

                                                                        </div>

                                                                    </a>

                                                                </div>

                                                            </li>


                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="देवकृष्ण"
                                                                >

                                                                    <a href="member.php?id=37">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/37.jpg"
                                                                                alt="देवकृष्ण"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                देवकृष्ण
                                                                            </strong>

                                                                        </div>

                                                                    </a>

                                                                </div>

                                                            </li>


                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>

                                    </li>

                                </ul>

                            </li>


                            <!-- =================================================
                                 वशी
                            ================================================== -->

                            <li>

                                <div
                                    class="person-node"
                                    data-name="वशी"
                                >

                                    <a href="member.php?id=4">

                                        <div class="person-photo">

                                            <img
                                                src="assets/images/family/4.jpg"
                                                alt="वशी"
                                                loading="lazy"
                                            >

                                        </div>

                                        <div class="person-info">

                                            <span class="generation">
                                                द्वितीय पीढ़ी
                                            </span>

                                            <strong>
                                                वशी
                                            </strong>

                                            <small>
                                                जुड़ान ठाकुर के पुत्र
                                            </small>

                                        </div>

                                    </a>

                                </div>


                                <ul>

                                    <li>

                                        <div
                                            class="person-node"
                                            data-name="प्रेम"
                                        >

                                            <a href="member.php?id=38">

                                                <div class="person-photo">

                                                    <img
                                                        src="assets/images/family/38.jpg"
                                                        alt="प्रेम"
                                                        loading="lazy"
                                                    >

                                                </div>

                                                <div class="person-info">

                                                    <strong>
                                                        प्रेम
                                                    </strong>

                                                </div>

                                            </a>

                                        </div>


                                        <ul>

                                            <li>

                                                <div
                                                    class="person-node"
                                                    data-name="मधुसूदन मसूदन"
                                                >

                                                    <a href="member.php?id=39">

                                                        <div class="person-photo">

                                                            <img
                                                                src="assets/images/family/39.jpg"
                                                                alt="मधुसूदन"
                                                                loading="lazy"
                                                            >

                                                        </div>

                                                        <div class="person-info">

                                                            <strong>
                                                                मधुसूदन
                                                            </strong>

                                                            <small>
                                                                (मसूदन)
                                                            </small>

                                                        </div>

                                                    </a>

                                                </div>


                                                <ul>

                                                    <li>

                                                        <div
                                                            class="person-node"
                                                            data-name="बाबूराम"
                                                        >

                                                            <a href="member.php?id=40">

                                                                <div class="person-photo">

                                                                    <img
                                                                        src="assets/images/family/40.jpg"
                                                                        alt="बाबूराम"
                                                                        loading="lazy"
                                                                    >

                                                                </div>

                                                                <div class="person-info">

                                                                    <strong>
                                                                        बाबूराम
                                                                    </strong>

                                                                </div>

                                                            </a>

                                                        </div>


                                                        <ul>

                                                            <li>

                                                                <div
                                                                    class="person-node"
                                                                    data-name="शिवनाथ"
                                                                >

                                                                    <a href="member.php?id=41">

                                                                        <div class="person-photo">

                                                                            <img
                                                                                src="assets/images/family/41.jpg"
                                                                                alt="शिवनाथ"
                                                                                loading="lazy"
                                                                            >

                                                                        </div>

                                                                        <div class="person-info">

                                                                            <strong>
                                                                                शिवनाथ
                                                                            </strong>

                                                                        </div>

                                                                    </a>

                                                                </div>


                                                                <ul>


                                                                    <!-- मोती -->

                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="मोती"
                                                                        >

                                                                            <a href="member.php?id=42">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/42.jpg"
                                                                                        alt="मोती"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        मोती
                                                                                    </strong>

                                                                                </div>

                                                                            </a>

                                                                        </div>


                                                                        <ul>

                                                                            <li>

                                                                                <div
                                                                                    class="person-node"
                                                                                    data-name="मनु"
                                                                                >

                                                                                    <a href="member.php?id=43">

                                                                                        <div class="person-photo">

                                                                                            <img
                                                                                                src="assets/images/family/43.jpg"
                                                                                                alt="मनु"
                                                                                                loading="lazy"
                                                                                            >

                                                                                        </div>

                                                                                        <div class="person-info">

                                                                                            <strong>
                                                                                                मनु
                                                                                            </strong>

                                                                                        </div>

                                                                                    </a>

                                                                                </div>


                                                                                <ul>

                                                                                    <li>

                                                                                        <div
                                                                                            class="person-node"
                                                                                            data-name="रंगू"
                                                                                        >

                                                                                            <a href="member.php?id=44">

                                                                                                <div class="person-photo">

                                                                                                    <img
                                                                                                        src="assets/images/family/44.jpg"
                                                                                                        alt="रंगू"
                                                                                                        loading="lazy"
                                                                                                    >

                                                                                                </div>

                                                                                                <div class="person-info">

                                                                                                    <strong>
                                                                                                        रंगू
                                                                                                    </strong>

                                                                                                </div>

                                                                                            </a>

                                                                                        </div>

                                                                                    </li>


                                                                                    <li>

                                                                                        <div
                                                                                            class="person-node"
                                                                                            data-name="भतु"
                                                                                        >

                                                                                            <a href="member.php?id=45">

                                                                                                <div class="person-photo">

                                                                                                    <img
                                                                                                        src="assets/images/family/45.jpg"
                                                                                                        alt="भतु"
                                                                                                        loading="lazy"
                                                                                                    >

                                                                                                </div>

                                                                                                <div class="person-info">

                                                                                                    <strong>
                                                                                                        भतु
                                                                                                    </strong>

                                                                                                </div>

                                                                                            </a>

                                                                                        </div>

                                                                                    </li>

                                                                                </ul>

                                                                            </li>

                                                                        </ul>

                                                                    </li>


                                                                    <!-- मुरली -->

                                                                    <li>

                                                                        <div
                                                                            class="person-node"
                                                                            data-name="मुरली"
                                                                        >

                                                                            <a href="member.php?id=46">

                                                                                <div class="person-photo">

                                                                                    <img
                                                                                        src="assets/images/family/46.jpg"
                                                                                        alt="मुरली"
                                                                                        loading="lazy"
                                                                                    >

                                                                                </div>

                                                                                <div class="person-info">

                                                                                    <strong>
                                                                                        मुरली
                                                                                    </strong>

                                                                                </div>

                                                                            </a>

                                                                        </div>

                                                                    </li>


                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<style>/* =========================================================
   BANSHAWALI SECTION
========================================================= */

.bansawali-section {
    padding: 90px 0;
    background:
        radial-gradient(
            circle at top left,
            rgba(216,170,50,.08),
            transparent 30%
        ),
        #fffaf5;
    overflow: hidden;
}

.bansawali-title {
    color: #3e0507;
    font-size: clamp(28px, 4vw, 44px);
    font-weight: 800;
    margin-bottom: 10px;
}

.bansawali-subtitle {
    color: #816b6b;
    font-size: 15px;
}


.tree-scroll {
    width: 100%;

    overflow-x: auto;
    overflow-y: visible;

    padding: 20px 20px 80px;

    scrollbar-width: thin;
}

.family-tree {
    min-width: 1800px;

    display: flex;
    justify-content: center;

    padding-top: 20px;
}


/* =========================================================
   TREE BASIC
========================================================= */

.family-tree ul {
    position: relative;

    display: flex;

    justify-content: center;

    margin: 0;
    padding: 35px 0 0;

    list-style: none;
}

.family-tree > ul {
    padding-top: 0;
}

.family-tree li {
    position: relative;

    text-align: center;

    padding: 35px 12px 0;
}


/* vertical line from parent */

.family-tree li::before,
.family-tree li::after {
    content: "";

    position: absolute;

    top: 0;

    width: 50%;
    height: 35px;

    border-top: 2px solid #d8aa32;
}

.family-tree li::before {
    right: 50%;
}

.family-tree li::after {
    left: 50%;

    border-left: 2px solid #d8aa32;
}


/* remove first and last horizontal */

.family-tree li:first-child::before {
    border: 0;
}

.family-tree li:last-child::after {
    border: 0;
}


/* single child */

.family-tree li:only-child::before,
.family-tree li:only-child::after {
    display: none;
}

.family-tree li:only-child {
    padding-top: 0;
}


/* parent vertical line */

.family-tree li > ul::before {
    content: "";

    position: absolute;

    top: 0;
    left: 50%;

    width: 2px;
    height: 35px;

    background: #d8aa32;

    transform: translateX(-50%);
}


/* =========================================================
   PERSON NODE
========================================================= */

.person-node {
    position: relative;

    width: 190px;

    min-height: 92px;

    margin: 0 auto;

    border-radius: 16px;

    background: rgba(255,255,255,.96);

    border: 1px solid #ead8ca;

    box-shadow:
        0 8px 25px rgba(62,5,7,.07);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;

    z-index: 5;
}

.person-node:hover {
    transform: translateY(-6px);

    border-color: #d8aa32;

    box-shadow:
        0 15px 35px rgba(62,5,7,.15);
}

.person-node a {
    min-height: 92px;

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 12px;

    text-decoration: none;

    color: inherit;
}


/* PHOTO */

.person-photo {
    flex: 0 0 58px;

    width: 58px;
    height: 58px;

    border-radius: 50%;

    overflow: hidden;

    display: flex;

    align-items: center;
    justify-content: center;

    background: #fff0dc;

    border: 3px solid #fff;

    box-shadow:
        0 0 0 1px #d8aa32;
}

.person-photo img {
    width: 100%;
    height: 100%;

    object-fit: cover;
}

.person-photo i {
    color: #761015;

    font-size: 26px;
}


/* INFO */

.person-info {
    text-align: left;

    min-width: 0;
}

.person-info strong {
    display: block;

    color: #3e0507;

    font-size: 14px;

    line-height: 1.3;

    font-weight: 800;
}

.person-info small {
    display: block;

    color: #8c7474;

    font-size: 10px;

    margin-top: 3px;
}

.generation {
    display: inline-block;

    color: #9a7414;

    background: #fff5df;

    padding: 3px 7px;

    border-radius: 50px;

    font-size: 8px;

    font-weight: 700;

    margin-bottom: 4px;
}


/* ARROW */

.node-arrow {
    position: absolute;

    right: 7px;
    top: 7px;

    width: 23px;
    height: 23px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #fff5df;

    color: #9a7414;

    font-size: 10px;
}

.person-node:hover .node-arrow {
    background: #761015;

    color: #fff;
}


/* ROOT */

.root-node {
    width: 240px;

    border: 2px solid #d8aa32;

    background:
        linear-gradient(
            145deg,
            #fff,
            #fff8ef
        );

    box-shadow:
        0 15px 40px rgba(118,16,21,.14);
}

.root-node .person-photo {
    width: 68px;
    height: 68px;

    flex-basis: 68px;
}

.root-node .person-info strong {
    font-size: 18px;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {

    .bansawali-section {
        padding: 60px 0;
    }

    .tree-scroll {
        padding-left: 10px;
        padding-right: 10px;
    }

}
/* =========================================================
   FAMILY TREE - AUTO FIT TO SCREEN
   पूरा वंश-वृक्ष स्क्रीन के अंदर फिट होगा।
   Horizontal/vertical internal scrolling बंद है।
========================================================= */

.bansawali-section {
    overflow: hidden;
}

.tree-scroll {
    width: 100%;
    max-width: 100%;
    overflow: hidden !important;
    padding: 20px 0 40px;
    position: relative;
}

.family-tree {
    width: max-content;
    min-width: 0 !important;
    display: flex;
    justify-content: flex-start;
    padding-top: 20px;
    margin: 0;
    transform-origin: top left;
    will-change: transform;
}

.family-tree ul {
    flex-shrink: 0;
}

@media (max-width: 768px) {
    .bansawali-section {
        padding: 55px 0;
    }

    .tree-scroll {
        padding: 15px 0 30px;
    }

    .family-tree {
        padding-top: 10px;
    }
}

</style>





<!-- =========================================================
     ABOUT
========================================================= -->

<section
    id="about"
    class="family-section about-section"
>

    <div class="container">

        <div class="row align-items-center g-5">


            <div class="col-lg-6">

                <span class="section-badge">

                    <i class="bi bi-heart-fill me-1"></i>

                    हमारे बारे में

                </span>


                <h2 class="section-title">

                    हमारी कहानी,
                    <br>
                    हमारी विरासत

                </h2>


                <p class="section-subtitle mt-3">

                    अपने परिवार की जड़ों और आने वाली पीढ़ियों
                    के बीच एक डिजिटल सेतु बनाने का हमारा प्रयास।

                </p>

            </div>


            <div class="col-lg-6">

                <div class="about-box">

                    <p>

                        यह वेबसाइट हमारे परिवार की वंशावली,
                        पारिवारिक संबंधों और ऐतिहासिक विरासत
                        को डिजिटल रूप में सुरक्षित रखने का
                        एक प्रयास है।

                    </p>


                    <div class="about-item">

                        <div class="about-icon">

                            <i class="bi bi-tree-fill"></i>

                        </div>

                        <div>

                            <h5>हमारी जड़ें</h5>

                            <p>

                                हमारे पूर्वजों और पारिवारिक
                                इतिहास को आने वाली पीढ़ियों
                                तक पहुँचाना।

                            </p>

                        </div>

                    </div>


                    <div class="about-item">

                        <div class="about-icon">

                            <i class="bi bi-people-fill"></i>

                        </div>

                        <div>

                            <h5>हमारा परिवार</h5>

                            <p>

                                परिवार के सदस्यों और उनके
                                आपसी संबंधों को एक स्थान पर
                                व्यवस्थित रखना।

                            </p>

                        </div>

                    </div>


                    <div class="about-item">

                        <div class="about-icon">

                            <i class="bi bi-bookmark-heart-fill"></i>

                        </div>

                        <div>

                            <h5>हमारी विरासत</h5>

                            <p>

                                परिवार की पहचान, परंपरा और
                                स्मृतियों को सुरक्षित रखना।

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CONTACT
========================================================= -->

<section
    id="contact"
    class="family-section contact-section"
>

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-badge">

                <i class="bi bi-envelope-fill me-1"></i>

                संपर्क करें

            </span>


            <h2 class="section-title">

                परिवार से जुड़ें

            </h2>


            <p class="section-subtitle">

                यदि आपके पास परिवार की वंशावली से जुड़ी
                कोई जानकारी है, तो हमारे साथ साझा करें।

            </p>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="contact-card">

                    <form
                        action="#"
                        method="POST"
                    >

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">

                                    आपका नाम

                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="अपना नाम लिखें"
                                    required
                                >

                            </div>


                            <div class="col-md-6">

                                <label class="form-label fw-semibold">

                                    मोबाइल नंबर

                                </label>

                                <input
                                    type="tel"
                                    name="mobile"
                                    class="form-control"
                                    placeholder="मोबाइल नंबर"
                                >

                            </div>


                            <div class="col-12">

                                <label class="form-label fw-semibold">

                                    संदेश

                                </label>

                                <textarea
                                    name="message"
                                    class="form-control"
                                    placeholder="अपना संदेश लिखें..."
                                    required
                                ></textarea>

                            </div>


                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn btn-family-primary"
                                >

                                    <i class="bi bi-send-fill me-2"></i>

                                    संदेश भेजें

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     JAVASCRIPT
     FAMILY TREE AUTO FIT
========================================================= -->

<script>
(function () {

    function fitFamilyTree() {

        const container = document.querySelector('.tree-scroll');
        const tree = document.querySelector('.family-tree');

        if (!container || !tree) {
            return;
        }

        /* Reset first so the natural width can be measured */
        tree.style.transform = 'scale(1)';
        tree.style.marginLeft = '0px';

        const naturalWidth = tree.scrollWidth;
        const naturalHeight = tree.scrollHeight;
        const availableWidth = Math.max(container.clientWidth - 10, 1);

        if (!naturalWidth || !naturalHeight) {
            return;
        }

        /*
         * If the tree is wider than the screen, automatically
         * reduce it until the complete tree fits in one view.
         */
        let scale = Math.min(1, availableWidth / naturalWidth);

        /* Keep a tiny safety margin on very small screens */
        scale = Math.max(scale, 0.10);

        tree.style.transformOrigin = 'top left';
        tree.style.transform = 'scale(' + scale + ')';

        /*
         * CSS transforms do not change layout height, therefore
         * adjust the wrapper height to prevent blank/overlapping area.
         */
        container.style.height = Math.ceil((naturalHeight * scale) + 35) + 'px';
    }

    let resizeTimer;

    function scheduleFit() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            requestAnimationFrame(fitFamilyTree);
        }, 80);
    }

    /* Run after all page assets/images have had a chance to load */
    window.addEventListener('load', function () {
        fitFamilyTree();

        setTimeout(fitFamilyTree, 300);
        setTimeout(fitFamilyTree, 1000);
    });

    window.addEventListener('resize', scheduleFit);

    document.addEventListener('DOMContentLoaded', function () {
        fitFamilyTree();
        setTimeout(fitFamilyTree, 300);
    });

})();
</script>


<?php
include 'includes/footer.php';
?>

