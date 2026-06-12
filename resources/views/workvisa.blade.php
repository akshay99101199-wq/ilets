@extends('layouts.app')
@section('title', 'Working Visa')
@section('content')

    <style>
        .hero-section {
            position: relative;
            padding: 61px 0;
            background: linear-gradient(rgba(5, 20, 40, .82), rgb(5 20 40 / 54%)), url('public/assets/assets/img/working_visa.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .2);
            padding: 10px 18px;
            border-radius: 50px;
            margin-bottom: 25px;
            backdrop-filter: blur(10px);
            font-size: 14px;
        }

        .hero-title {
            font-size: 47px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-title span {
            color: #4cc9f0;
        }

        .hero-text {
            color: #d7e2f0;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .hero-btn {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: #fff;
            padding: 14px 35px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: .4s;
            display: inline-block;
            border: 1px solid #fff;
        }

        .hero-btn:hover {
            transform: translateY(-4px);
            color: #fff;
        }

        .hero-card {
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .15);
            padding: 30px;
            border-radius: 25px;
            backdrop-filter: blur(12px);
        }

        .hero-card h5 {
            font-weight: 700;
            margin-bottom: 25px;
        }

        .country-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        
        .tab-pane.fade {
            opacity: 0;
            transform: translateY(42px);
            transition: opacity 0.42s ease, transform 0.42s ease;
            will-change: opacity, transform;
        }

        .tab-pane.fade.show.active {
            display: block !important;
            opacity: 1;
            transform: translateY(0);
        }

        .country-item {
            background: rgba(255, 255, 255, .08);
            border-radius: 12px;
            padding: 12px;
            text-align: center;
            font-size: 14px;
        }

        /* ================= FEATURES ================= */

        .section-padding {
            padding: 40px 0;
        }

        .wt-colr {
            color: #fff !important;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: #666;
            max-width: 700px;
            margin: auto;
            font-size: 15px;
            font-weight: 400;
        }

        .feature-card {
            background: #fff;
            border-radius: 25px;
            padding: 20px;
            transition: .4s;
            height: 100%;
            /* border: 1px solid #edf2f7; */
            border-top: 4px solid #c53bae;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
        }


        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            color: #fff;
            margin-bottom: 25px;
            background: #9f32b4;
            margin: auto;
        }

        .feature-card h4 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
        }

        /* ================= VISA CATEGORY ================= */

        .visa-category {
            background: var(--light);
        }

        .visa-card {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
            transition: .4s;
            height: 100%;
            padding: 20px;
        }

        .visa-card:hover {
            transform: translateY(-8px);
        }

        .visa-img {
            height: 240px;
            overflow: hidden;
        }

        .visa-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s;
        }

        .visa-card:hover img {
            transform: scale(1.1);
        }

        .visa-content {
            padding: 30px;
        }

        .visa-content h3 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .visa-content p {
            color: #666;
            line-height: 1.8;
        }

        /* ================= CONTENT SECTION ================= */

        .content-block {
            padding: 100px 0;
        }

        .content-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .1);
        }

        .content-text h2 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 25px;
            color: var(--dark);
        }

        .content-text p {
            color: #666;
            line-height: 1.9;
            margin-bottom: 20px;
        }

        .list-style {
            list-style: none;
            padding: 0;
            margin-top: 25px;
        }

        .list-style li {
            margin-bottom: 15px;
            color: #444;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .list-style i {
            color: var(--primary);
            font-size: 20px;
            margin-top: 2px;
        }

        /* ================= CTA ================= */

        .cta-section {
            background:
                linear-gradient(rgb(154 48 188), rgb(165 55 175 / 52%)), url(https://images.unsplash.com/photo-1488085061387-422e29b40080?q=80&w=1400&auto=format&fit=crop);
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 110px 0;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 52px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #fff;
        }

        .cta-section p {
            max-width: 750px;
            margin: auto;
            color: #dbe7f4;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:991px) {

            .hero-title {
                font-size: 42px;
            }

            .content-text {
                margin-top: 40px;
            }

            .cta-section h2 {
                font-size: 38px;
            }

        }

        @media(max-width:576px) {

            .hero-section {
                padding: 90px 0;
            }

            .hero-title {
                font-size: 34px;
            }

            .section-title h2,
            .content-text h2 {
                font-size: 30px;
                line-hight: 40px;
            }

            .country-list {
                grid-template-columns: 1fr;
            }

            .cta-section h2 {
                font-size: 30px;
            }

        }



        /* Marquee Countries - Super Stable Version */
        .countries-section {
            padding: 60px 0;
            background: linear-gradient(rgb(118 71 212 / 56%), rgb(154 48 188)), url(http://localhost/ilets/ilets/public/assets/assets/img/visapage-7.avif);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            overflow: hidden;
        }

        .countries-section p {
            color: #000;
        }

        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            padding: 20px 0;
        }

        .marquee-scroll {
            display: inline-flex;
            animation: marqueeAnimation 40s linear infinite;
        }

        .country-card {
            flex: 0 0 160px;
            background: #fff;
            padding: 20px 10px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(1, 41, 112, 0.08);
            margin: 0 15px;
            display: inline-block;
            border: 1px solid #eee;
            vertical-align: middle;
        }

        .country-flag {
            width: 55px;
            height: 38px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .country-name {
            font-weight: 600;
            color: #012970;
            margin: 0;
            font-size: 14px;
            white-space: normal;
        }

        @keyframes marqueeAnimation {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* visa category */
        text-align:center;
        color:#fff;
        font-size:42px;
        font-weight:700;
        margin-bottom:50px;
        }

        .visa-card {
            background: #fff;
            border-radius: 24px;
            padding: 20px;
            border: 3px solid #cfa9ff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            height: 100%;
        }

        .visa-card:hover {
            transform: translateY(-5px);
        }

        .visa-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 18px;
        }

        .visa-title {
            font-size: 24px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 12px;
        }

        .visa-text {
            color: #6b7280;
            font-size: 15px;
            line-height: 1.8;
        }

        .card-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .icon-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid #d1d5db;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #374151;
            font-size: 20px;
            transition: 0.3s;
            cursor: pointer;
        }

        .icon-btn:hover {
            background: #5b2ca0;
            color: #fff;
            border-color: #5b2ca0;
        }


        /* LEFT SIDE TABS */

        .continent-box {
            background: #fff;
            border-radius: 20px;
            padding: 10px;
            border: 1px solid #ececec;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .nav-pills .nav-link {
            width: 100%;
            border: none;
            background: #fff;
            padding: 16px 18px;
            border-radius: 14px;
            margin-bottom: 10px;
            text-align: left;
            font-weight: 500;
            color: #555;
            border: 1px solid #ededed;
            transition: 0.3s;
        }

        .nav-pills .nav-link:hover {
            background: #7b5bbd;
            color: #fff;
        }

        .nav-pills .nav-link.active {
            background: #7b5bbd !important;
            color: #fff !important;
            box-shadow: 0 8px 20px rgba(123, 91, 189, 0.3);
        }

        /* COUNTRY CARD */

        .country-card {
            background: #fff;
            border-radius: 15px;
            padding: 9px 28px;
            border: 2px solid transparent;
            background-image: linear-gradient(#fff, #fff),
                linear-gradient(90deg, #d946ef, #3b82f6);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            display: flex;
            align-items: center;
            gap: 18px;
            cursor: pointer;
            transition: 0.3s;
            height: 100%;
        }

        .country-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .country-card.active {
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(123, 91, 189, 0.2);
        }

        .flag {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .country-name {
            font-size: 24px;
            font-weight: 600;
            color: #4c3b72;
            margin: 0;
        }

        @media(max-width:768px) {
            .continent-box {
                margin-bottom: 25px;
            }

            .country-name {
                font-size: 18px;
            }

            .flag {
                width: 45px;
                height: 45px;
            }

            .country-card {
                padding: 18px;
            }

        }

        @media(max-width:992px) {
            .visa-img {
                height: 160px;
            }

            .visa-title {
                font-size: 22px;
            }
        }

        @media(max-width:768px) {

            .main-heading {
                font-size: 30px;
            }

            .visa-card {
                padding: 16px;
            }

            .visa-img {
                height: 220px;
            }
        }

        @media(max-width:576px) {

            body {
                padding: 40px 15px;
            }

            .main-heading {
                font-size: 24px;
            }

            .visa-img {
                height: 180px;
            }

            .visa-title {
                font-size: 20px;
            }

            .visa-text {
                font-size: 14px;
            }
        }
    </style>




    <!-- ================= HERO ================= -->

    <section class="hero-section">
        <div class="container">
            <div class="row text-center g-5">

                <div class="col-lg-12">
                    <!-- <div class="hero-badge">
                                    <i class="bi bi-airplane-engines"></i>
                                    Trusted Visa & Immigration Experts
                                </div> -->

                    <h1 class="hero-title">
                        Work Abroad with<br>
                        <span>Complete Visa Support!</span>
                    </h1>

                    <p class="hero-text">
                     ShiftAbroad helps professionals go global with smooth work <br/>visa processing from documentation to final approval.
                    </p>
                </div>


            </div>
        </div>
    </section>

    <!-- ================= FEATURES ================= -->

    <!-- ABOUT SECTION - CREATIVE -->
    <section class="about-section py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Choose a <span class="text-primary">Working  Visa?</span></h2>
                <p class="text-muted">
                   A Working Visa is your gateway to global employment, allowing you to work abroad while experiencing new cultures and building an international network. It’s the first step toward a successful global career.
                </p>
            </div>

            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 mb-4">
                    <h4 class="fw-semibold mb-3">
                      Build Your Global Career: Work Abroad with Confidence
                    </h4>
                    <p class="text-muted">
                     At ShiftAbroad Visa Services, we help professionals unlock global career opportunities with a smooth and hassle-free Working Visa process. Whether you’re aiming for a corporate role in the UK, tech opportunities in Canada, or skilled work in Australia, our experts handle everything — from application to approval — ensuring accuracy, speed, and compliance.
                    </p>

                    <div class="highlight-box mt-4">
                        <p>
                            💡 <strong>Why Choose Us?</strong><br>
                          A Working Visa empowers you to take your skills beyond borders. It’s more than a travel permit — it’s your gateway to professional growth and global recognition. Here’s why thousands choose to apply for a Working Visa each year:
                        </p>
                    </div>
                </div>

                <!-- Right Features -->
                <div class="col-lg-6">

                    <div class="row g-4">

                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="icon"><i class="fas fa-user-graduate"></i></div>
                                <h6>Legal Work Authorization</h6>
                                <p>Secure a legitimate work permit in your chosen country.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="icon"><i class="fas fa-file-signature"></i></div>
                                <h6>Career Advancement</h6>
                                <p>Expand your experience with international companies and industries.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="icon">🗣️</div>
                                <h6>Better Earning Potential</h6>
                                <p>Access global job markets with competitive salaries.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="icon"><i class="fas fa-globe-americas"></i></div>
                                <h6>Pathway to Residency</h6>
                                <p>Many working visas offer eligibility for PR or citizenship.</p>
                            </div>
                        </div>
                      

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="countries-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold wt-colr">Available Countries</h2>
                <p class="wt-colr">Our expert services cover these major destinations</p>
            </div>

            <div class="row g-4">

                <!-- LEFT SIDE TAB MENU -->
                <div class="col-lg-3">

                    <div class="continent-box">

                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">

                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#asia">
                                Asia
                            </button>

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#europe">
                                Europe
                            </button>

                            <button class="nav-link " data-bs-toggle="pill" data-bs-target="#north-america">
                                North America
                            </button>

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#australia">
                                Australia
                            </button>

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#africa">
                                Africa
                            </button>

                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDE CONTENT -->
                <div class="col-lg-9">

                    <div class="tab-content">

                        <!-- ASIA -->
                        <div class="tab-pane fade show active" id="asia">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/sg.png" class="flag" alt="">

                                        <h3 class="country-name">Singapore</h3>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/ae.png" class="flag" alt="">

                                        <h3 class="country-name">United Arab Emirates</h3>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/sa.png" class="flag" alt="">

                                        <h3 class="country-name">Saudi Arabia</h3>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/ru.png" class="flag" alt="">

                                        <h3 class="country-name">Russia</h3>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- EUROPE -->
                        <div class="tab-pane fade" id="europe">

                            <div class="row g-4">

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/gb.png" class="flag" alt="">
                                        <h3 class="country-name">United Kingdom (UK)</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/ch.png" class="flag" alt="">
                                        <h3 class="country-name">Switzerland</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/mt.png" class="flag" alt="">
                                        <h3 class="country-name">Malta</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/de.png" class="flag" alt="">
                                        <h3 class="country-name">Germany</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/fr.png" class="flag" alt="">
                                        <h3 class="country-name">France</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/ie.png" class="flag" alt="">
                                        <h3 class="country-name">Ireland</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/fi.png" class="flag" alt="">
                                        <h3 class="country-name">Finland</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/no.png" class="flag" alt="">
                                        <h3 class="country-name">Norway</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/dk.png" class="flag" alt="">
                                        <h3 class="country-name">Denmark</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/pl.png" class="flag" alt="">
                                        <h3 class="country-name">Poland</h3>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/es.png" class="flag" alt="">
                                    <h3 class="country-name">Spain</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/it.png" class="flag" alt="">
                                    <h3 class="country-name">Italy</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/pt.png" class="flag" alt="">
                                    <h3 class="country-name">Portugal</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/gr.png" class="flag" alt="">
                                    <h3 class="country-name">Greece</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/bg.png" class="flag" alt="">
                                    <h3 class="country-name">Bulgaria</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/by.png" class="flag" alt="">
                                    <h3 class="country-name">Belarus</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/ua.png" class="flag" alt="">
                                    <h3 class="country-name">Ukraine</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="country-card" onclick="selectCountry(this)">
                                    <img src="https://flagcdn.com/w320/cy.png" class="flag" alt="">
                                    <h3 class="country-name">Cyprus</h3>
                                </div>
                            </div> --}}

                            </div>

                        </div>
                        <!-- NORTH AMERICA -->
                        <div class="tab-pane fade" id="north-america">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="country-card active" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/us.png" class="flag" alt="">

                                        <h3 class="country-name">United States (USA)</h3>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/ca.png" class="flag" alt="">

                                        <h3 class="country-name">Canada</h3>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- AUSTRALIA -->
                        <div class="tab-pane fade" id="australia">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/au.png" class="flag" alt="">
                                        <h3 class="country-name">Australia</h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/nz.png" class="flag" alt="">
                                        <h3 class="country-name">New Zealand</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- AFRICA -->
                        <div class="tab-pane fade" id="africa">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="country-card" onclick="selectCountry(this)">
                                        <img src="https://flagcdn.com/w320/mu.png" class="flag" alt="">
                                        <h3 class="country-name">Mauritius</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="why-choose py-5">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our <span>Working   Visa</span> Support  Includes:</h2>
                <p class="text-muted">We provide comprehensive support to ensure your working visa application is smooth
                    and successful.</p>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <div class="icon-box">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h5>Document Verification & Submission</h5>
                        <p>We ensure your paperwork meets embassy standards.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <div class="icon-box">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h5>Employment Contract Assistance</h5>
                        <p>Help reviewing job offers and compliance documents.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <div class="icon-box">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h5>Visa Interview Preparation</h5>
                        <p>Confidence-building mock sessions to boost success rates.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <div class="icon-box">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h5>Professional Exposure</h5>
                        <p>Experience multicultural workplaces and modern business practices.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <div class="icon-box">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h5>Medical & Police Clearance Guidance</h5>
                        <p>Complete end-to-end coordination.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <div class="icon-box">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h5>Post-Approval Support </h5>
                        <p>Assistance with travel, housing, and local onboarding.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="cta">
        <h2>Get Started Today – Your First Step to Global Success!</h2>
        <p>Call or WhatsApp: +91 7206969466</p>
        <!-- <a href="#" class="btn btn-light">Book FREE Demo</a> -->
    </section>

    <section class="faq-section py-5">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Frequently Asked Questions</h2>
                <p class="text-muted">
                    Everything you need to know before getting started
                </p>
            </div>

            <div class="accordion custom-faq" id="faq">

                <!-- FAQ 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1"
                            aria-expanded="true" aria-controls="q1">

                            <span class="icon me-2">
                                <i class="fa fa-question" aria-hidden="true"></i>
                            </span>

                           Who can apply for a Working Visa?
                        </button>
                    </h2>

                    <div id="q1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                         Anyone with a valid job offer, skill certification, or employer sponsorship can apply for a working visa.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q2" aria-expanded="false" aria-controls="q2">

                            <span class="icon me-2">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </span>

                            How long is a Working Visa valid?
                        </button>
                    </h2>

                    <div id="q2" class="accordion-collapse collapse" aria-labelledby="heading2"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                           Validity varies by country — typically between 1 to 5 years, with renewal options available.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q3" aria-expanded="false" aria-controls="q3">

                            <span class="icon me-2">
                                <i class="fa-solid fa-clock"></i>
                            </span>

Can my family accompany me?
                        </button>
                    </h2>

                    <div id="q3" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                     Yes, most countries allow dependent or spouse visas under the same category.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q4" aria-expanded="false" aria-controls="q4">

                            <span class="icon me-2">
                                <i class="fa-solid fa-briefcase"></i>
                            </span>

                            Is prior work experience necessary?
                        </button>
                    </h2>

                    <div id="q4" class="accordion-collapse collapse" aria-labelledby="heading4"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
While some countries require experience, others accept applications based on skill qualifications or education.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q5" aria-expanded="false" aria-controls="q5">

                            <span class="icon me-2">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>

                          How early should I apply?
                        </button>
                    </h2>

                    <div id="q5" class="accordion-collapse collapse" aria-labelledby="heading5"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                          We recommend starting at least 3–4 months before your expected joining date for smooth processing.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================= CTA ================= -->


    <!-- modal -->


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function selectCountry(card) {

            document.querySelectorAll(".country-card")
                .forEach(item => {
                    item.classList.remove("active");
                });

            card.classList.add("active");

        }
    </script>

@endsection
