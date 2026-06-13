@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <style>
        .hero-section {
            position: relative;
            padding: 120px 0;
            background: linear-gradient(rgba(5, 20, 40, .82), rgb(5 20 40 / 10%)), url('public/assets/assets/img/visa (1).png');
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
            font-size: 58px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-title span {
            color: #af88ff;
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

        /* about */

        .about-visa-section {
            padding: 90px 0;
            position: relative;
            overflow: hidden;
        }

        .about-card {
            border-radius: 30px;
            position: relative;
            z-index: 2;
        }

        .sub-title {
            color: #8825d0;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .main-title {
            font-size: 35px;
            font-weight: 700;
            line-height: 1.2;
            color: #111827;
            margin-bottom: 25px;
        }

        .main-title span {
            color: #8825d0;
        }

        .about-text {
            color: #6b7280;
            font-size: 16px;
            line-height: 1.9;
            margin-bottom: 35px;
        }

        .about-box {
            display: flex;
            gap: 15px;
            margin-bottom: 22px;
        }

        .about-icon {
            min-width: 55px;
            height: 55px;
            border-radius: 15px;
            background: #e9f2ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #8825d0;
            font-weight: bold;
        }

        .about-box h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #111827;
        }

        .about-box p {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
            line-height: 1.7;
        }

        .visa-image {
            position: relative;
        }

        .visa-image img {
            width: 100%;
            border-radius: 30px;
            object-fit: cover;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }



        .btn-custom {
            background: #ae6bdf;
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #ae43fc;
            color: #fff;
            transform: translateY(-2px);
        }

        .visa-img img {
            height: 340px;
        }

        .choose-ti {
            font-weight: 700;
        }

        /* Section */
        .section-title {
            font-size: 38px;
            color: #0b1c39;
            position: relative;
        }

        /* Card Design */
        .course-card {
            background: #fff;
            padding: 35px 25px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        /* Hover Animation */
        .course-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }

        /* Icon Wrapper */
        .icon-wrapper {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0;
            transition: all 0.5s ease;
        }

        /* Icon Animation */
        .icon-wrapper i {
            font-size: 38px;
            color: #fff;
            transition: transform 0.5s ease;
        }

        /* Rotate Icon on Hover */
        .course-card:hover .icon-wrapper {
            transform: rotate(10deg) scale(1.08);
        }

        .course-card:hover .icon-wrapper i {
            transform: rotate(-10deg) scale(1.15);
        }

        /* Heading */
        .course-card h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #0b1c39;
        }

        /* Paragraph */
        .course-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 25px;
            flex-grow: 1;
        }

        /* Buttons */
        .course-card .btn {
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .course-card .btn:hover {
            transform: scale(1.05);
        }

        /* Card Design */
        .course-item {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            width: 100%;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
        }

        .course-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        /* Image */
        .course-img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: 0.5s;
        }

        .course-item:hover .course-img {
            transform: scale(1.05);
        }

        /* Content */
        .course-content {
            padding: 25px;
            text-align: center;
            /* flex-grow: 1; */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Heading Alignment Fix */
        .course-content h3 {
            font-size: 22px;
            font-weight: 700;
            min-height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        /* Paragraph Alignment */
        .course-content p {
            color: #666;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 0;
        }

        .text-center.ourcorce {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .course-img {
                height: 220px;
            }

            .course-content h3 {
                font-size: 20px;
            }
        }

        /* Responsive */
        @media (max-width: 991px) {
            .course-card {
                padding: 30px 20px;
            }

            .section-title {
                font-size: 30px;
            }
        }

        @media(max-width:991px) {

            .about-card {
                padding: 35px;
            }

            .main-title {
                font-size: 38px;
            }

            .visa-image {
                margin-top: 40px;
            }

        }

        @media(max-width:576px) {

            .about-card {
                padding: 25px;
            }

            .main-title {
                font-size: 30px;
            }

        }
    </style>
    <main class="main">

        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center g-5">

                    <div class="col-lg-7">
                        <div class="hero-badge">
                            <i class="bi bi-airplane-engines"></i>
                            Trusted Visa & Immigration Experts
                        </div>

                        <h1 class="hero-title">
                            Seeking Adventure? <br>
                            <span>Thrills and Opportunities Await!</span>
                        </h1>

                        <p class="hero-text">
                            Get expert help with Student, Work, Business, and Tourist visas.
                            Smooth, fast, and reliable support for every country with personalized travel planning.
                        </p>

                        <a href="#" class="hero-btn " data-bs-toggle="modal" data-bs-target="#popupForm">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- about us -->

        <section class="about-visa-section">
            <div class="container">
                <div class="about-card">
                    <div class="row align-items-center">

                        <!-- Left Content -->
                        <div class="col-lg-6">
                            <p class="sub-title">About Our Visa Services</p>

                            <h2 class="main-title">
                                Trusted <span> Visa Experts</span><br>
                                For Your Global Journey!
                            </h2>

                            <p class="about-text">
                                We help students, travelers, professionals, and families
                                achieve their international dreams with trusted visa
                                consultation and smooth application support. From tourist
                                visas to work permits, our experts guide you at every step.
                            </p>

                            <div class="about-box">
                                <div class="about-icon">✓</div>
                                <div>
                                    <h5>Fast Visa Processing</h5>
                                    <p>Quick documentation and hassle-free application support.</p>
                                </div>
                            </div>

                            <div class="about-box">
                                <div class="about-icon">✓</div>
                                <div>
                                    <h5>Trusted Experts</h5>
                                    <p>Professional guidance for student, tourist, and work visas.</p>
                                </div>
                            </div>

                            <div class="about-box">
                                <div class="about-icon">✓</div>
                                <div>
                                    <h5>Global Opportunities</h5>
                                    <p>Helping you explore education, travel, and career options worldwide.</p>
                                </div>
                            </div>

                            <a href="#" class="btn-custom mt-3">
                                Explore More
                            </a>
                        </div>

                        <!-- Right Image -->
                        <div class="col-lg-6">
                            <div class="visa-image">
                                <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1200&auto=format&fit=crop"
                                    alt="Visa Travel">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- visa slide -->

        <section class="visa-section">
            <div class="container">

                <div id="visaSliderClean" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- SLIDE 1 -->
                        <div class="carousel-item active">
                            <div class="visa-card">
                                <div class="row g-0">

                                    <div class="col-md-6 visa-img">
                                        <img src="{{ 'public/assets/' }}assets/img/study.jpg" alt="visa">
                                        <div class="visa-overlay"></div>
                                        <div class="visa-badge">✔ 95% Success</div>
                                    </div>

                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="visa-content">
                                            <h2>Study Visa Services</h2>
                                            <p>Get expert help for studying abroad with top universities and high visa
                                                approval rate.</p>
                                            <a href="#" class="visa-btn" data-bs-toggle="modal"
                                                data-bs-target="#popupForm">Apply Now</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- SLIDE 2 -->
                        <div class="carousel-item">
                            <div class="visa-card">
                                <div class="row g-0">

                                    <div class="col-md-6 visa-img">
                                        <img src="{{ 'public/assets/' }}assets/img/vissa.jpg" alt="travel">

                                        <div class="visa-overlay"></div>
                                    </div>

                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="visa-content">
                                            <h2>Tourist Visa</h2>
                                            <p>Travel anywhere in the world with quick and easy visa processing.</p>
                                            <a href="#" class="visa-btn" data-bs-toggle="modal"
                                                data-bs-target="#popupForm ">Apply Now</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- SLIDE 3 -->
                        <div class="carousel-item">
                            <div class="visa-card">
                                <div class="row g-0">

                                    <div class="col-md-6 visa-img">
                                        <img src="{{ 'public/assets/' }}assets/img/workvis.jpg" alt="work visa">
                                        <div class="visa-overlay"></div>
                                    </div>

                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="visa-content">
                                            <h2>Work Visa Assistance</h2>
                                            <p>Start your international career with trusted visa consultancy services.</p>
                                            <a href="#" class="visa-btn" data-bs-toggle="modal"
                                                data-bs-target="#popupForm">Apply Now</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- CONTROLS -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#visaSliderClean"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#visaSliderClean"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

            </div>
        </section>


        <section id="about" class="about section py-5">
            <div class="container">
                <div class="row align-items-center gy-5">

                    <!-- Image -->
                    <div class="col-lg-6 order-lg-2 text-center" data-aos="fade-left">
                        <img src="public/assets/assets/img/about.jpg" class="img-fluid about-img" alt="">
                    </div>

                    <!-- Content -->
                    <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                        <h2 class="choose-ti mb-3">Why Choose Us</h2>
                        <p class="text-muted mb-4">
                            We believe every learner is unique. At <strong>The Assigner</strong>, we design customized
                            courses with modern techniques and full support to help you achieve your goals faster.
                        </p>

                        <div class="row gy-4">
                            <!-- Item -->
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-person-check"></i>
                                    <h5>Experienced Trainers</h5>
                                    <p>Learn from certified professionals with proven success.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-journal-text"></i>
                                    <h5>Customized Plans</h5>
                                    <p>Courses tailored to your level & target score.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-laptop"></i>
                                    <h5>Online & Offline</h5>
                                    <p>Attend classes your way — flexible learning.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h5>Proven Results</h5>
                                    <p>Students consistently achieve high scores.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-book"></i>
                                    <h5>Full Support</h5>
                                    <p>Mock tests, materials & doubt sessions included.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-gift"></i>
                                    <h5>Free Demo</h5>
                                    <p>Try classes before you enroll.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--
            <section id="counts" class="section counts light-background">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Students</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Courses</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Events</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Trainers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <section id="why-us" class="section why-us why-box py-5">
            <div class="container">
                <div class="row justify-content-center mb-1">
                    <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="fw-bold section-title m-0">Our Expert-Led Courses</h3>
                        <p class="mt-3">
                            Learn from experienced trainers with practical and result-oriented training programs.
                        </p>
                    </div>
                </div>

                <div class="row gy-4">

                    <!-- English -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box course-card h-100 text-center">
                            <div class="icon-wrapper">
                                <i class="bi bi-translate"></i>
                            </div>

                            <h4>English</h4>

                            <p>
                                Improve your fluency, pronunciation, and vocabulary. Gain confidence for interviews and
                                daily communication.
                            </p>

                            <div class="d-flex justify-content-center gap-2 mt-auto flex-wrap">
                                <a href="{{ route('englishonline') }}" class="btn btn-primary btn-sm px-4">
                                    Online
                                </a>

                                <a href="{{ route('englishoffline') }}" class="btn btn-outline-secondary btn-sm px-4">
                                    Offline
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- German -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box course-card h-100 text-center">
                            <div class="icon-wrapper">
                                <i class="bi bi-globe-europe-africa"></i>
                            </div>

                            <h4>German</h4>

                            <p>
                                Learn German A1 to B2 with practical speaking, grammar, and listening training for students
                                and professionals.
                            </p>

                            <div class="d-flex justify-content-center gap-2 mt-auto flex-wrap">
                                <a href="#" class="btn btn-primary btn-sm px-4">
                                    Online
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- PTE -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box course-card h-100 text-center">
                            <div class="icon-wrapper">
                                <i class="bi bi-journal-check"></i>
                            </div>

                            <h4>PTE</h4>

                            <p>
                                Comprehensive PTE preparation with expert trainers, AI mock tests, and official scoring
                                pattern practice.
                            </p>

                            <div class="d-flex justify-content-center gap-2 mt-auto flex-wrap">
                                <a href="{{ route('englishonline') }}" class="btn btn-primary btn-sm px-4">
                                    Online
                                </a>

                                <a href="{{ route('englishoffline') }}" class="btn btn-outline-secondary btn-sm px-4">
                                    Offline
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- IELTS -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box course-card h-100 text-center">
                            <div class="icon-wrapper">
                                <i class="bi bi-mortarboard"></i>
                            </div>

                            <h4>IELTS</h4>

                            <p>
                                Master Listening, Reading, Writing, and Speaking with band-focused strategies and daily
                                practice sessions.
                            </p>

                            <div class="d-flex justify-content-center gap-2 mt-auto flex-wrap">
                                <a href="{{ route('englishonline') }}" class="btn btn-primary btn-sm px-4">
                                    Online
                                </a>

                                <a href="{{ route('englishoffline') }}" class="btn btn-outline-secondary btn-sm px-4">
                                    Offline
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- /Why Us Section -->


        <!-- Courses Section -->
        <!-- Courses Section -->
        <section id="courses" class="courses section py-5">

            <!-- Section Title -->
            <div class="container text-center" data-aos="fade-up">
                <div class="courses-sec mb-3">
                    <h2 class="fw-bold">Courses</h2>
                    <p>What Makes Our Classes Different?</p>
                </div>

            </div>

            <div class="container">
                <div class="row gy-4">

                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{ asset('public/assets/assets/img/ielts.jpg') }}" class="img-fluid course-img"
                                alt="Counselling">
                            <div class="course-content">
                                <h3>One-on-One Counselling</h3>
                                <p>
                                    Personalized mentorship to understand your goals and challenges.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="course-item">
                            <img src="{{ asset('public/assets/assets/img/test.jpg') }}" class="img-fluid course-img"
                                alt="Practice Test">
                            <div class="course-content">
                                <h3>Live Practice Tests</h3>
                                <p>
                                    Simulate real exam environments with time-bound assessments.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="course-item">
                            <img src="{{ asset('public/assets/assets/img/payment.jpg') }}" class="img-fluid course-img"
                                alt="Payment Options">
                            <div class="course-content">
                                <h3>Flexible Payment Options</h3>
                                <p>
                                    EMI and custom payment plans for all course types.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{ asset('public/assets/assets/img/24into7.webp') }}" class="img-fluid course-img"
                                alt="Learning Portal">
                            <div class="course-content">
                                <h3>24/7 Learning Portal</h3>
                                <p>
                                    Access recorded lectures, PDFs, assignments, and quizzes anytime.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="course-item">
                            <img src="{{ asset('public/assets/assets/img/result.jpg') }}" class="img-fluid course-img"
                                alt="Results Focused">
                            <div class="course-content">
                                <h3>Results-Focused Methods</h3>
                                <p>
                                    Learn exam techniques, not just theory and achieve target scores with expert guidance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in-up" data-aos-delay="300">
                        <div class="course-item">
                            <img src="{{ asset('public/assets/assets/img/visapage-2.avif') }}"
                                class="img-fluid course-img" alt="Expert Trainers">
                            <div class="course-content">
                                <h3>Expert Trainers</h3>
                                <p>
                                    Learn from certified professionals with years of teaching and industry experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container courses-sec text-center" data-aos="fade-up">
                <h2>Reviews</h2>
                <p>What Our Students Say</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-2.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Priyanshi </h3>
                                    <h4>Canada – Student Visa</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>My Canada student visa process went really smoothly. I got proper guidance at
                                            every step, so I didn’t feel confused at any point. Everything was well-managed,
                                            and overall it was a stress-free experience for me.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-3.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Naitik </h3>
                                    <h4>UK – Tourist Visa</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>I applied for a UK tourist visa and had a really good experience. All my
                                            doubts were cleared on time, and the process was handled properly. I didn’t face
                                            any major issues throughout.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-4.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Aman Bissyer </h3>
                                    <h4>Australia – Study Visa</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>My Australia study visa process was quite smooth. I got clear instructions for
                                            documents and interview, which made things much easier for me. Overall,
                                            everything was handled nicely.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/sssds.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Vishal </h3>
                                    <h4>New Zealand</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Italicized feedback and mock tests with a proper system really worked well.
                                            Preparing in the model classroom setup helped me be precise with time</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/ss.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Tanu </h3>
                                    <h4>IELTS Coaching</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>My IELTS preparation experience was really good. The classes were easy to
                                            understand, and I got proper support for all sections. The tips and practice
                                            sessions helped me improve my score a lot.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/ssss.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sakshi </h3>
                                    <h4>IELTS Coaching</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>I had a nice experience preparing for IELTS. The trainers explained everything
                                            clearly, and the regular practice made me more confident. Overall, it helped me
                                            perform much better in the exam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/sssss.avif" class="testimonial-img"
                                        alt="">
                                    <h3>Sakshi </h3>
                                    <h4>PTE Coaching</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>My PTE preparation went really well. The trainers explained each section
                                            clearly, and the practice materials were very helpful. I felt more confident
                                            after attending the sessions</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-5.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Shivani </h3>
                                    <h4>PTE Coaching</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>I had a good experience with PTE coaching. The guidance was clear, and I got
                                            to practice a lot, which improved my performance. Overall, it was very helpful
                                            for my exam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- /Testimonials Section -->
    </main>


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
@endsection
