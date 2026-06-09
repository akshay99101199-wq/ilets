@extends('layouts.app')
@section('title', 'Work Visa')
@section('content')

    <style>
        /* ================= HERO SECTION ================= */

        .hero-section {
            position: relative;
            padding: 61px 0;
            background: linear-gradient(rgba(5, 20, 40, .82), rgb(5 20 40 / 54%)), url('public/assets/assets/img/visapage-7.avif');
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
            border: 1px solid #edf2f7;
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
                        Seeking Adventure? <br>
                        <span>Thrills and Opportunities Await!</span>
                    </h1>

                    <p class="hero-text">
                        Get expert help with Student, Work, Business, and Tourist visas.
                        Smooth, fast, and reliable support for <br> every country with personalized travel planning.
                    </p>

                    <!-- <a href="#" class="hero-btn "  data-bs-toggle="modal" data-bs-target="#popupForm">
                        Apply Now
                    </a> -->
                </div>

                <!-- <div class="col-lg-5">
                    <div class="hero-card">
                        <h5>Available Countries</h5>

                        <div class="country-list">
                            <div class="country-item">Mauritius</div>
                            <div class="country-item">Slovenia</div>
                            <div class="country-item">Schengen</div>
                            <div class="country-item">Dubai</div>
                            <div class="country-item">Georgia</div>
                            <div class="country-item">Belarus</div>
                            <div class="country-item">Moldova</div>
                            <div class="country-item">Bulgaria</div>
                            <div class="country-item">USA</div>
                            <div class="country-item">Australia</div>

                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <!-- ================= FEATURES ================= -->

    <section class="section-padding">
        <div class="container">

            <div class="section-title">
                <h2>Why Choose ShiftAbroad?</h2>
                <p>
                    We provide complete visa guidance with professional consultation,
                    documentation support, interview preparation, and personalized travel planning.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <h4 class="mt-3">Student & Work Visas</h4>

                        <p>
                            Get expert help with student, work, and dependent visa applications
                            with smooth and reliable support for every country.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-globe2"></i>
                        </div>

                        <h4 class="mt-3">Travel Opportunities</h4>

                        <p>
                            Discover global travel opportunities with professional visa
                            guidance tailored for tourism, business, and adventure trips.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-person-check"></i>
                        </div>

                        <h4 class="mt-3">Personalized Planning</h4>

                        <p>
                            From documentation to interview preparation, we create a visa
                            strategy designed around your goals and travel timeline.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= VISA CATEGORY ================= -->

    <section class="visa-category section-padding">
        <!-- <div class="container">

            <div class="section-title">
                <h2>Visa Categories</h2>
                <p>
                    Explore our complete range of visa services designed to help you study,
                    work, travel, and grow globally.
                </p>
            </div>

            <div class="row g-4">


                <div class="col-lg-3 col-md-6">
                    <div class="visa-card">

                        <div class="visa-img">
                            <img src="{{ asset('public/assets/assets/img/visapage-1.avif') }}">
                        </div>

                        <div class="visa-content">
                            <h3>Business Visa</h3>
                            <p>
                                Expand your business globally with expert support for meetings,
                                partnerships, investments, and international opportunities.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="visa-card">

                        <div class="visa-img">
                            <img src="{{ asset('public/assets/assets/img/visapage-2.avif') }}">
                        </div>

                        <div class="visa-content">
                            <h3>Working Visa</h3>
                            <p>
                                Build your career abroad confidently with complete documentation,
                                application, and approval assistance.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="visa-card">

                        <div class="visa-img">
                            <img src="{{ asset('public/assets/assets/img/images.jfif') }}">
                        </div>

                        <div class="visa-content">
                            <h3>Student Visa</h3>
                            <p>
                                Achieve your study abroad dreams with admission support,
                                visa filing, and interview preparation.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="visa-card">

                        <div class="visa-img">
                            <img src="{{ asset('public/assets/assets/img/visapage-4.avif') }}">
                        </div>

                        <div class="visa-content">
                            <h3>Tourist Visa</h3>
                            <p>
                                Explore the world effortlessly with smooth tourist visa
                                processing and expert travel guidance.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div> -->

        <div class="container">

            <div class="section-title">
                <h2>Visa Categories</h2>
                <p>
                    Explore our complete range of visa services designed to help you study,
                    work, travel, and grow globally.
                </p>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="visa-card">
                        <div class="row align-items-center g-4">

                            <div class="col-md-5">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop"
                                    class="visa-img" alt="">
                            </div>

                            <div class="col-md-7">
                                <h3 class="visa-title">Business Visa</h3>

                                <p class="visa-text">
                                    Expand your business globally with ease.
                                    Our experts guide entrepreneurs and
                                    investors through visa requirements,
                                    meetings, partnerships, and international
                                    opportunities.
                                </p>

                                <div class="card-bottom">
                                    <div class="icon-btn">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>

                                    <div class="icon-btn">
                                        <i class="bi bi-shield"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-6">
                    <div class="visa-card">
                        <div class="row align-items-center g-4">

                            <div class="col-md-5">
                                <img src="https://remote.co/wp-content/uploads/2020/03/18101122/work-visa.png"
                                    class="visa-img" alt="">
                            </div>

                            <div class="col-md-7">
                                <h3 class="visa-title">Working Visa</h3>

                                <p class="visa-text">
                                    Build your career abroad with confidence.
                                    From documentation to approval, we handle
                                    every step of your work visa process with
                                    complete transparency.
                                </p>

                                <div class="card-bottom">
                                    <div class="icon-btn">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>

                                    <div class="icon-btn">
                                        <i class="bi bi-fullscreen"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-6">
                    <div class="visa-card">
                        <div class="row align-items-center g-4">

                            <div class="col-md-5">
                                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?q=80&w=1200&auto=format&fit=crop"
                                    class="visa-img" alt="">
                            </div>

                            <div class="col-md-7">
                                <h3 class="visa-title">Student Visa</h3>

                                <p class="visa-text">
                                    Achieve your academic dreams anywhere in
                                    the world. Our consultants guide you through
                                    admissions, documentation, and visa filing
                                    to make your study abroad journey stress-free.
                                </p>

                                <div class="card-bottom">
                                    <div class="icon-btn">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>

                                    <div class="icon-btn">
                                        <i class="bi bi-house"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-6">
                    <div class="visa-card">
                        <div class="row align-items-center g-4">

                            <div class="col-md-5">
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop"
                                    class="visa-img" alt="">
                            </div>

                            <div class="col-md-7">
                                <h3 class="visa-title">Tourist Visa</h3>

                                <p class="visa-text">
                                    Explore new cultures and destinations
                                    effortlessly. We simplify your tourist visa
                                    process so you can travel freely and focus
                                    on making unforgettable memories.
                                </p>

                                <div class="card-bottom">
                                    <div class="icon-btn">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>

                                    <div class="icon-btn">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Marquee Countries Slider -->
    <section class="countries-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold wt-colr">Available Countries</h2>
                <p class="wt-colr">Our expert services cover these major destinations</p>
            </div>


            <!-- <div class="marquee-container">
            <div class="marquee-scroll">

                <div class="country-card"><img src="https://flagcdn.com/w160/mu.png" class="country-flag"><p class="country-name">Mauritius</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/si.png" class="country-flag"><p class="country-name">Slovenia</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/eu.png" class="country-flag"><p class="country-name">Schengen</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/ae.png" class="country-flag"><p class="country-name">Dubai (UAE)</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/ge.png" class="country-flag"><p class="country-name">Georgia</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/us.png" class="country-flag"><p class="country-name">USA</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/au.png" class="country-flag"><p class="country-name">Australia</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/md.png" class="country-flag"><p class="country-name">Moldova</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/bg.png" class="country-flag"><p class="country-name">Bulgaria</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/by.png" class="country-flag"><p class="country-name">Belarus</p></div>


                <div class="country-card"><img src="https://flagcdn.com/w160/mu.png" class="country-flag"><p class="country-name">Mauritius</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/si.png" class="country-flag"><p class="country-name">Slovenia</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/eu.png" class="country-flag"><p class="country-name">Schengen</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/ae.png" class="country-flag"><p class="country-name">Dubai (UAE)</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/ge.png" class="country-flag"><p class="country-name">Georgia</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/us.png" class="country-flag"><p class="country-name">USA</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/au.png" class="country-flag"><p class="country-name">Australia</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/md.png" class="country-flag"><p class="country-name">Moldova</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/bg.png" class="country-flag"><p class="country-name">Bulgaria</p></div>
                <div class="country-card"><img src="https://flagcdn.com/w160/by.png" class="country-flag"><p class="country-name">Belarus</p></div>
            </div>
        </div> -->
            <div class="row g-4">

                <!-- LEFT SIDE TAB MENU -->
                <div class="col-lg-3">

                    <div class="continent-box">

                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#asia">
                                Asia
                            </button>

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#europe">
                                Europe
                            </button>

                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#north-america">
                                North America
                            </button>

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#australia">
                                Australia
                            </button>

                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#latin-america">
                                Latin America
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

                        <!-- NORTH AMERICA -->
                        <div class="tab-pane fade show active" id="north-america">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="country-card active" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/us.png" class="flag" alt="">

                                        <h3 class="country-name">USA</h3>

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

                        <!-- ASIA -->
                        <div class="tab-pane fade" id="asia">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/in.png" class="flag" alt="">

                                        <h3 class="country-name">India</h3>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/jp.png" class="flag" alt="">

                                        <h3 class="country-name">Japan</h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- EUROPE -->
                        <div class="tab-pane fade" id="europe">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/fr.png" class="flag" alt="">

                                        <h3 class="country-name">France</h3>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="country-card" onclick="selectCountry(this)">

                                        <img src="https://flagcdn.com/w320/de.png" class="flag" alt="">

                                        <h3 class="country-name">Germany</h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ================= BUSINESS VISA ================= -->

    <section class="content-block">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="content-image">
                        <img src="{{ asset('public/assets/assets/img/visa/business.png') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-text">

                        <h2>Business Visa</h2>

                        <p>
                            Explore global opportunities with a stress-free business visa process.
                            From conferences and investments to company expansion, our experts
                            guide you through every requirement.
                        </p>

                        <ul class="list-style">
                            <li><i class="bi bi-check-circle-fill"></i> Business meetings & trade events</li>
                            <li><i class="bi bi-check-circle-fill"></i> Investment & expansion opportunities</li>
                            <li><i class="bi bi-check-circle-fill"></i> Global networking support</li>
                            <li><i class="bi bi-check-circle-fill"></i> Flight & travel planning assistance</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= WORK VISA ================= -->

    <section class="content-block bg-light">
        <div class="container">

            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <div class="col-lg-6">
                    <div class="content-image">
                        <img src="{{ asset('public/assets/assets/img/visa/work.png') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-text">

                        <h2>Working Visa</h2>

                        <p>
                            Unlock international career opportunities with complete working
                            visa support including documentation, interviews, and approvals.
                        </p>

                        <ul class="list-style">
                            <li><i class="bi bi-check-circle-fill"></i> Legal work authorization</li>
                            <li><i class="bi bi-check-circle-fill"></i> Better global salary opportunities</li>
                            <li><i class="bi bi-check-circle-fill"></i> PR & residency pathways</li>
                            <li><i class="bi bi-check-circle-fill"></i> Visa interview preparation</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= STUDENT VISA ================= -->

    <section class="content-block">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="content-image">
                        <img src="{{ asset('public/assets/assets/img/visa/student.png') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-text">

                        <h2>Student Visa</h2>

                        <p>
                            Study abroad with confidence through expert university selection,
                            documentation support, SOP guidance, and visa filing assistance.
                        </p>

                        <ul class="list-style">
                            <li><i class="bi bi-check-circle-fill"></i> Global universities guidance</li>
                            <li><i class="bi bi-check-circle-fill"></i> SOP & document preparation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Work while studying opportunities</li>
                            <li><i class="bi bi-check-circle-fill"></i> Pre-departure support</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= TOURIST VISA ================= -->

    <section class="content-block bg-light">
        <div class="container">

            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <div class="col-lg-6">
                    <div class="content-image">
                        <img src="{{ asset('public/assets/assets/img/visa/tourist.png') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-text">

                        <h2>Tourist Visa</h2>

                        <p>
                            Travel the world without stress. We simplify your tourist visa
                            process with fast approvals and complete embassy coordination.
                        </p>

                        <ul class="list-style">
                            <li><i class="bi bi-check-circle-fill"></i> Fast tourist visa processing</li>
                            <li><i class="bi bi-check-circle-fill"></i> Travel itinerary support</li>
                            <li><i class="bi bi-check-circle-fill"></i> Embassy appointment booking</li>
                            <li><i class="bi bi-check-circle-fill"></i> Travel insurance guidance</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= CTA ================= -->

    <section class="cta-section">
        <div class="container">

            <h2>Ready to Start Your Journey?</h2>

            <p>
                Whether you want to study, work, travel, or expand your business abroad,
                ShiftAbroad Visa Services is here to guide you every step of the way.
            </p>

            <a href="contactus" class="hero-btn">
                Contact Our Experts
            </a>

        </div>
    </section>



    <!-- modal -->
    <!-- Modal -->
    <div class="modal fade" id="popupForm" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="popup-header">
                    Enroll Now
                    <span class="close-btn" data-bs-dismiss="modal">&times;</span>
                </div>

                <div class="modal-body p-4">

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>

                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Phone Number">
                    </div>

                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Select Service</option>
                            <option>Web Development</option>
                            <option>Digital Marketing</option>
                            <option>Graphic Design</option>
                        </select>
                    </div>

                    <button class="btn btn-custom w-100">Submit</button>

                </div>

            </div>
        </div>
    </div>

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
