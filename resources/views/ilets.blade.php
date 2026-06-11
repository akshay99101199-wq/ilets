@extends('layouts.app')
@section('title', 'IELTS')
@section('content')

    <style>
        html,
        body {
            overflow-x: hidden;
        }


        .btn-primary {
            border-radius: 30px;
            padding: 10px 25px;
        }

        /* SECTION TITLE */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        /* CARDS */
        .custom-card {
            border-radius: 15px;
            padding: 25px;
            background: #fff;
            transition: 0.4s;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        /* TABLE */
        .table-custom th {
            background: #dd0dfd;
            color: #fff;
        }

        /* STEP BOX */
        .step-box {
            text-align: center;
            padding: 20px;
        }

        .step-box i {
            font-size: 35px;
            color: #fd0df9;
            margin-bottom: 10px;
        }

        /* SECTION BACKGROUND */
        .pte-section {
            background: linear-gradient(135deg, #250f2735, #43203e13, #642c5a17);
            position: relative;
            overflow: hidden;
        }

        /* HERO */
        .pte-hero span {
            color: #e600e2;
        }

        .pte-hero p {
            margin: auto;
            opacity: 0.9;
            color: #000;
        }

        /* BUTTON */
        .btn-demo {
            background: #e600db;
            color: #fff;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-demo:hover {
            background: #c107cb;
            transform: translateY(-3px);
        }

        /* CONTENT TEXT */
        .pte-content {
            color: #fff;
        }

        .pte-content h2 {
            font-weight: bold;
        }

        /* GLASS CARD */
        .pte-card {
            background: #fff;
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: 0.4s;
        }

        /* HOVER EFFECT */
        .pte-card:hover {
            transform: translateY(-10px);
        }

        /* LIST */
        .pte-card ul {
            list-style: none;
            padding: 0;
        }

        .pte-card li {
            margin-bottom: 10px;
            font-size: 15px;
            color: #000;
        }

        /* ANIMATION */
        .pte-section {
            animation: fadeInUp 1s ease;
        }

        .checking {
            background: #fff;
            padding: 20px;
            margin: 0;
        }

        /* SECTION */
        .why-choose {
            background: #f8fafc;
        }

        /* TITLE */
        .why-choose h2 span {
            color: #bf00ff;
        }

        /* CARD BASE */
        .why-card {
            background: #fff;
            padding: 30px 25px;
            border-radius: 20px;
            text-align: center;
            transition: 0.4s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* ICON */
        .icon-box {
            width: 70px;
            height: 70px;
            margin: auto;
            margin-bottom: 20px;
            border-radius: 50%;
            background: linear-gradient(45deg, #cc00ff, #ad00e6);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-box i {
            color: #fff;
            font-size: 26px;
        }

        /* TEXT */
        .why-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .why-card p {
            color: #666;
            font-size: 14px;
        }

        /* HOVER EFFECT */
        .why-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        /* GLOW BORDER EFFECT */
        .why-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 20px;
            padding: 2px;
            background: linear-gradient(45deg, #bb00ff, #a900e6);
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: 0.4s;
        }

        .why-card:hover::before {
            opacity: 1;
        }

        /* CENTER CARD HIGHLIGHT */
        .highlight {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ff00ea, #b400e6);
            color: #fff;
        }

        .highlight p {
            color: #fff;
        }

        .highlight .icon-box {
            background: #fff;
        }

        .highlight .icon-box i {
            color: #8800ff;
        }

        /* SECTION */
        .pte-overview {
            background: #f8fafc;
        }

        /* TITLE */
        .pte-overview h2 span {
            color: #bf00ff;
        }

        /* CARD */
        .overview-card {
            background: #fff;
            padding: 30px 20px;
            border-radius: 20px;
            position: relative;
            transition: 0.4s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        /* TOP GRADIENT LINE */
        .overview-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 5px;
            width: 100%;
            background: linear-gradient(45deg, #ff00ff, #c000e6);
        }

        /* ICON */
        .overview-card .icon {
            width: 70px;
            height: 70px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 50%;
            background: linear-gradient(45deg, #f200ff, #b400e6);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overview-card .icon i {
            color: #fff;
            font-size: 26px;
        }

        /* TITLE */
        .overview-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* TIME BADGE */
        .time-badge {
            display: inline-block;
            background: #eef9ff;
            color: #bb00ff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        /* HOVER */
        .overview-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        /* ICON ANIMATION */
        .overview-card:hover .icon {
            transform: rotate(10deg) scale(1.1);
        }


        /* TITLE */
        .pte-benefits h2 span {
            color: #de00e6;
        }

        /* CARD */
        .benefit-card {
            background: #fff;
            backdrop-filter: blur(10px);
            padding: 30px 20px;
            border-radius: 20px;
            color: #fff;
            transition: 0.4s;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        /* ICON */
        .benefit-card .icon {
            width: 65px;
            height: 65px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 50%;
            background: linear-gradient(45deg, #cc00ff, #b000e6);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .benefit-card .icon i {
            color: #fff;
            font-size: 24px;
        }

        /* NUMBER */
        .benefit-card h3 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        /* TEXT */
        .benefit-card p {
            opacity: 0.85;
            font-size: 14px;
            color: #000;
        }

        /* HOVER */
        .benefit-card:hover {
            transform: translateY(-10px) scale(1.05);
        }

        /* HIGHLIGHT CARD */
        .highlight {
            background: linear-gradient(135deg, #c300ff, #e600cf);
            color: #000;
        }

        .highlight .icon {
            background: #fff;
        }

        .highlight .icon i {
            color: #ff00ea;
        }

        /* SECTION */
        .steps-section {
            background: #f8fafc;
        }

        /* TITLE */
        .steps-section h2 span {
            color: #ae00ff;
        }

        /* CONNECTING LINE */
        .step-line {
            position: absolute;
            top: 50px;
            left: 10%;
            width: 80%;
            height: 4px;
            background: linear-gradient(45deg, #ea00ff, #a100e6);
            z-index: 0;
        }

        /* HOVER */
        .benefit-card:hover {
            transform: translateY(-10px) scale(1.05);
            background: linear-gradient(135deg, #c300ff, #e600cf);
        }

        .benefit-card:hover .highlight {
            transform: translateY(-10px) scale(1.05);
            background: linear-gradient(135deg, #c300ff, #e600cf);
        }

        .benefit-card:hover .icon {
            background: #fff;
        }

        .benefit-card:hover i {
            color: #cd00f3;
        }

        .benefit-card:hover h3.counter {
            color: #fff;
        }

        .benefit-card:hover p {
            color: #fff;
        }

        .opacity-75 {
            opacity: .75 !important;
            color: #000;
        }

        /* CARD */
        .step-card {
            position: relative;
            background: #fff;
            padding: 30px 15px;
            border-radius: 20px;
            transition: 0.4s;
            z-index: 1;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* NUMBER BADGE */
        .step-number {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(45deg, #ee00ff, #a500e6);
            color: #fff;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* ICON */
        .step-card .icon {
            width: 60px;
            height: 60px;
            margin: auto;
            margin-bottom: 10px;
            border-radius: 50%;
            background: #eef9ff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-card .icon i {
            color: #ea00ff;
            font-size: 22px;
        }

        /* TEXT */
        .step-card h6 {
            margin-top: 10px;
            font-weight: 600;
        }

        /* HOVER */
        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }


        .pte-course {
            background: linear-gradient(to right, #f8fbff, #eef5ff);
        }

        .pte-course h2 span {
            color: #c50dfd;
        }

        /* MAIN CARDS */
        .course-card {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .course-card:hover {
            transform: translateY(-8px);
        }

        .course-card ul {
            padding-left: 18px;
        }

        .course-card ul li {
            margin-bottom: 10px;
            position: relative;
        }

        .course-card ul li::before {
            content: "✔";
            color: #d10dfd;
            font-weight: bold;
            margin-right: 8px;
        }

        /* MINI CARDS */
        .mini-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            transition: 0.3s;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .mini-card:hover {
            transform: translateY(-6px);
        }

        .mini-card h6 {
            margin-top: 15px;
            font-weight: 600;
        }

        .mini-card p {
            font-size: 14px;
            color: #666;
        }

        /* ICONS */
        .mini-card .icon {
            width: 60px;
            height: 60px;
            margin: auto;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .speaking {
            background: #0d6efd;
        }

        .writing {
            background: #198754;
        }

        .reading {
            background: #fd7e14;
        }

        .listening {
            background: #6f42c1;
        }

        .section-light {
            background: linear-gradient(135deg, #f8fbff, #eef5ff) !important;
        }

        .section-dark {
            background: #ffffff !important;
        }

        /* SECTION BACKGROUND */
        .assigner-why {
            background: linear-gradient(135deg, #f8fbff, #eef5ff);
        }

        /* TITLE */
        .assigner-why h2 span {
            color: #c500ff;
        }

        /* CARD DESIGN */
        .assigner-card {
            background: #fff;
            padding: 30px 25px;
            border-radius: 20px;
            text-align: center;
            transition: 0.4s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* ICON */
        .assigner-card .icon {
            width: 70px;
            height: 70px;
            margin: auto;
            margin-bottom: 20px;
            border-radius: 50%;
            background: linear-gradient(45deg, #cc00ff, #a000e6);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .assigner-card .icon i {
            color: #fff;
            font-size: 26px;
        }

        /* TEXT */
        .assigner-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .assigner-card p {
            font-size: 14px;
            color: #666;
        }

        /* HOVER EFFECT */
        .assigner-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        /* GLOW BORDER */
        .assigner-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 20px;
            padding: 2px;
            background: linear-gradient(45deg, #d400ff, #a000e6);
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: 0.4s;
        }

        .assigner-card:hover::before {
            opacity: 1;
        }

        /* HIGHLIGHT CARDS */
        .assigner-card.highlight {
            background: linear-gradient(135deg, #d100ff, #a000e6);
            color: #fff;
        }

        .assigner-card.highlight p {
            color: #fff;
        }

        .assigner-card.highlight .icon {
            background: #fff;
        }

        .assigner-card.highlight .icon i {
            color: #a000e6;
        }

        /* SECTION BACKGROUND */
        .pte-exam-overview {
            background: linear-gradient(135deg, #f8fbff, #eef5ff);
        }

        /* TITLE */
        .pte-exam-overview h2 span {
            color: #c500ff;
        }

        /* CARD */
        .pte-module-card {
            background: #fff;
            padding: 30px 20px;
            border-radius: 20px;
            text-align: center;
            transition: 0.4s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .pte-sec {
            background: linear-gradient(#8e3bc5e0, #ae6bdf94),
                url('public/assets/assets/img/edu.jpg') center center/cover no-repeat;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        /* ICON BASE */
        .pte-module-card .icon {
            width: 70px;
            height: 70px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 26px;
        }

        /* COLOR VARIANTS */
        .listening {
            background: linear-gradient(45deg, #6f42c1, #9b5de5);
        }

        .reading {
            background: linear-gradient(45deg, #fd7e14, #ff9f43);
        }

        .writing {
            background: linear-gradient(45deg, #198754, #20c997);
        }

        .speaking {
            background: linear-gradient(45deg, #0d6efd, #4dabf7);
        }

        /* TEXT */
        .pte-module-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .pte-module-card p {
            font-size: 14px;
            color: #666;
        }

        /* HOVER */
        .pte-module-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        /* TOP BORDER EFFECT */
        .pte-module-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 5px;
            width: 100%;
            background: linear-gradient(45deg, #e100ff, #a000e6);
        }

        /* SECTION BACKGROUND */
        .benefits-modern {
            background: linear-gradient(135deg, #8a29ad, #aa3784);
            color: #fff;
            padding: 70px 0;
        }

        /* TITLE */
        .benefits-modern h2 span {
            color: #ffccff;
        }

        /* ROW */
        .benefits-row {
            position: relative;
        }

        /* ITEM */
        .benefit-item {
            padding: 30px 20px;
            position: relative;
            transition: 0.3s;
        }

        /* VERTICAL DIVIDER */
        .benefit-item:not(:last-child)::after {
            content: "";
            position: absolute;
            right: 0;
            top: 20%;
            height: 60%;
            width: 1px;
            background: rgba(255, 255, 255, 0.3);
        }

        /* NUMBER */
        .benefit-item h3 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #fff;
        }

        .benefits-modern h2 {
            color: #fff;
        }

        /* TITLE */
        .benefit-item h5 {
            font-weight: 600;
            margin-bottom: 10px;
            color: #fff;
        }

        /* TEXT */
        .benefit-item p {
            font-size: 14px;
            opacity: 0.85;
        }

        /* HOVER EFFECT */
        .benefit-item:hover {
            transform: translateY(-10px);
        }

        /* BOTTOM TEXT */
        .benefits-modern .lead {
            opacity: 0.9;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .benefit-item {
                margin-bottom: 25px;
            }

            .benefit-item::after {
                display: none;
            }

            .benefit-item h3 {
                font-size: 30px;
            }

            .pte-module-card {
                padding: 25px 15px;
            }

            .assigner-card {
                padding: 25px 20px;
            }

            .course-card {
                margin-bottom: 20px;
            }

            .benefit-card h3 {
                font-size: 26px;
            }

            .step-line {
                display: none;
            }

            .step-card {
                margin-bottom: 20px;
            }

            .overview-card {
                padding: 25px 15px;
            }

            .highlight {
                transform: none;
            }

            .pte-hero h1 {
                font-size: 26px;
            }

            .pte-card {
                padding: 20px;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="services-hero">
        <div class="container" data-aos="fade-up">
            <h1>Best IELTS Coaching in Karnal – Score 7+ Bands</h1>
            <p>Live Classes, Expert Trainers & Mock Tests</p>
        </div>
    </section>


    <!-- ABOUT PTE -->
    <section class="pte-section section-light">
        <div class=" checking">

            <!-- HERO -->
            <div class="container mx-auto pte-hero text-center text-white mb-5">

                <span class="badge-custom mb-3">🔥 Top Rated Coaching</span>

                <h1 class="fw-bold mb-3">
                    Crack <span>Score 7+ Bands with Expert Training</span> , Mock Tests & Personal Guidance

                </h1>

                <p class="mb-4">
                    Looking to crack the IELTS on your first try? The Assigner is the leading choice for offline IELTS
                    coaching in Karnal, known for its results-focused training and strong student success record. With
                    certified trainers, up-to-date materials, and mock test-based learning, we help you reach your target
                    band with confidence. Be it higher education or permanent residency, The Assigner is here to guide you
                    toward IELTS success.

                </p>

                <!-- <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#" class="btn btn-demo">Book Free Demo</a>
            <a href="#" class="btn btn-primary">View Courses</a>
          </div> -->
            </div>
        </div>
    </section>

    <!-- PTE TYPES -->
    <section class="assigner-why py-5">
        <div class="container">

            <!-- TITLE -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Why Choose <span>The Assigner</span> The Assigner for IELTS?

                </h2>
            </div>

            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="assigner-card">
                        <div class="icon"><i class="fas fa-user-tie"></i></div>
                        <h5>Expert Trainers</h5>
                        <p>
                            Learn from certified instructors with proven results and deep understanding of exam patterns.
                        </p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4">
                    <div class="assigner-card">
                        <div class="icon"><i class="fas fa-layer-group"></i></div>
                        <h5>Updated Study Material</h5>
                        <p>Get band-boosting writing templates, listening strategies, and daily vocabulary practice.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">
                    <div class="assigner-card">
                        <div class="icon"><i class="fas fa-file-alt"></i></div>
                        <h5>Flexible Batches
                        </h5>
                        <p>Simulate real exam settings and receive expert feedback to boost your performance.</p>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-md-4">
                    <div class="assigner-card">
                        <div class="icon"><i class="fas fa-book-open"></i></div>
                        <h5>Affordable Fees</h5>
                        <p>Get the best IELTS coaching in Karnal without breaking the bank.</p>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="col-md-4">
                    <div class="assigner-card">
                        <div class="icon"><i class="fas fa-layer-group"></i></div>
                        <h5>Customized Study Plan</h5>
                        <p>Our structured curriculum is personalized to match your skill level and target score.</p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="col-md-4">
                    <div class="assigner-card ">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <h5>Mock Tests & Evaluation
                        </h5>
                        <p>Full-length mock tests with exam-style environments and 1-on-1 performance analysis.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- WHY CHOOSE -->
    <section class="why-choose py-5 section-light">
        <div class="container">

            <!-- TITLE -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Choose <span>The Assigner</span></h2>
                <p class="text-muted">Smart learning. Real results. Global success.</p>
            </div>

            <div class="row  g-4">

                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="why-card">
                        <div class="icon-box">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Expert Trainers</h5>
                        <p>Certified trainers with real exam experience to guide you step-by-step.</p>
                    </div>
                </div>

                <!-- CARD 2 (CENTER HIGHLIGHT) -->
                <div class="col-md-4">
                    <div class="why-card highlight">
                        <div class="icon-box">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Mock Tests</h5>
                        <p>Real exam simulations with detailed performance tracking & feedback.</p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">
                    <div class="why-card">
                        <div class="icon-box">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h5>Study Materials</h5>
                        <p>Updated, exam-focused study materials designed for high scores.</p>
                    </div>
                </div>



            </div>

        </div>
    </section>

    <section class="pte-overview py-5 section-dark">
        <div class="container">

            <!-- TITLE -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">IELTS Test <span>Overview</span></h2>
                <p class="text-muted">Understand each section of the IELTS exam</p>
            </div>

            <div class="row  g-4 text-center">

                <!-- LISTENING -->
                <div class="col-md-3 col-sm-6">
                    <div class="overview-card">
                        <div class="icon">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <h5>Listening</h5>
                        <span>Listen, understand, and generate detailed notes with precisio</span>
                    </div>
                </div>

                <!-- READING -->
                <div class="col-md-3 col-sm-6">
                    <div class="overview-card">
                        <div class="icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h5>Reading</h5>
                        <span>Speed reading & comprehension skills
                        </span>
                    </div>
                </div>

                <!-- WRITING -->
                <div class="col-md-3 col-sm-6">
                    <div class="overview-card">
                        <div class="icon">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                        <h5>Writing</h5>
                        <span>Structured answers & grammar accuracy
                        </span>
                    </div>
                </div>

                <!-- SPEAKING -->
                <div class="col-md-3 col-sm-6">
                    <div class="overview-card">
                        <div class="icon">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <h5>Speaking</h5>
                        <span>Fluency, pronunciation & confidence building
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- BENEFITS -->
    <section class="pte-benefits pte-sec py-5">
        <div class="container">

            <!-- TITLE -->
            <div class="text-center mb-5 text-white">
                <h2 class="fw-bold pte-content">Benefits of Our IELTS Coaching</h2>
                <p class=" pte-content">Real results backed by performance & practice</p>
            </div>

            <div class="row  g-4 text-center">

                <!-- ITEM 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="benefit-card">
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="counter">200+</h3>
                        <p>Mock Tests</p>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="benefit-card">
                        <div class="icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h3 class="counter">1200+</h3>
                        <p>Practice Questions</p>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="benefit-card">
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="counter">100+</h3>
                        <p>Training Hours</p>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="benefit-card ">
                        <div class="icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="counter">80%</h3>
                        <p>Success Rate</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- BACKGROUND GLOW -->
        <div class="glow glow1"></div>
        <div class="glow glow2"></div>
    </section>


    <section class="steps-section section-dark py-5">
        <div class="container">

            <!-- TITLE -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Steps to <span>Join</span></h2>
                <p class="text-muted">Start your journey in just a few simple steps</p>
            </div>

            <div class="row  position-relative">

                <!-- LINE -->
                <!-- <div class="step-line d-none d-md-block"></div> -->

                <!-- STEP 1 -->
                <div class="col-md-3 col-6 text-center">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="icon"><i class="fas fa-book"></i></div>
                        <h6>Course Selection</h6>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="col-md-3 col-6 text-center">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <div class="icon"><i class="fas fa-user"></i></div>
                        <h6>Sign Up</h6>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="col-md-3 col-6 text-center">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="icon"><i class="fas fa-credit-card"></i></div>
                        <h6>Payment</h6>
                    </div>
                </div>

                <!-- STEP 4 -->
                <div class="col-md-3 col-6 text-center">
                    <div class="step-card">
                        <div class="step-number">4</div>
                        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                        <h6>Start Learning</h6>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- PTE COURSE OUTLINE -->
    <section class="pte-course section-light py-5">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">The Assigner’s <span>IELTS Course Outline</span></h2>
                <p class="text-muted">Master every module with expert strategies & real exam practice</p>
            </div>

            <div class="row g-4">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="course-card h-100">
                        <h4 class="mb-3 ">Speaking Module</h4>

                        <ul>
                            <li>Boost your Pronunciation and Oral Fluency</li>
                            <li>Improve speech clarity for better IELTS scores</li>
                            <li>Learn theoretical & practical approaches</li>
                            <li>Professional tips to sound natural & confident</li>
                            <li>Master response for short questions</li>
                            <li>Quick & accurate answering strategies</li>
                            <li>Extract key information from audio clips</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="course-card h-100">
                        <h4 class="mb-3 ">Speaking Practice Tasks</h4>

                        <ul>
                            <li>Describe Image confidently using templates</li>
                            <li>Evaluate and explain visual data</li>
                            <li>Read Aloud with fluency & confidence</li>
                            <li>Practice with real exam-level exercises</li>
                            <li>Repeat Sentence with memory techniques</li>
                            <li>Practice frequently asked sentences</li>
                            <li>Retell Lecture for high score improvement</li>
                            <li>Improve listening + speaking together</li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-md-6 col-lg-3">
                    <div class="mini-card text-center">
                        <div class="icon speaking">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <h6>Speaking</h6>
                        <p>Develop smooth, clear speech and effective response techniques</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mini-card text-center">
                        <div class="icon writing">
                            <i class="fas fa-pen"></i>
                        </div>
                        <h6>Writing</h6>
                        <p>Essay writing, summaries, grammar, and vocabulary</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mini-card text-center">
                        <div class="icon reading">
                            <i class="fas fa-book"></i>
                        </div>
                        <h6>Reading</h6>
                        <p>Comprehension, fill-in-the-blanks, and reordering paragraphs</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mini-card text-center">
                        <div class="icon listening">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <h6>Listening</h6>
                        <p>Dictation, summarization, and identifying incorrect words</p>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-5">
                <p class="lead">
                    The Assigner offers the best offline IELTS coaching with expert guidance, study materials & mock tests.
                </p>
                <!-- <a href="#" class="btn btn-primary px-4 py-2">Book Free Demo</a> -->
            </div>

        </div>
    </section>

    <!-- FAQ - ENHANCED DESIGN -->
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

                            What documents are usually required while applying for an international business visa process?
                        </button>
                    </h2>

                    <div id="q1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            You’ll typically need an invitation letter, valid passport,
                            business registration proof, financial documents, and travel details.
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

                            Can I learn both German and English languages together through one professional training
                            program?
                        </button>
                    </h2>

                    <div id="q2" class="accordion-collapse collapse" aria-labelledby="heading2"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            Yes! We offer combined programs so you can learn multiple languages efficiently.
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

                            How long does it usually take to process and approve a business visa application request?
                        </button>
                    </h2>

                    <div id="q3" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            Processing time varies by country, but most applications are completed within 7–15 working days.
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

                            Is it possible to convert a business visa into a work permit or employment visa later?
                        </button>
                    </h2>

                    <div id="q4" class="accordion-collapse collapse" aria-labelledby="heading4"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            In some countries, yes — but conversion depends on the destination’s immigration policies.
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

                            Is travel insurance compulsory and mandatory for international business visa approval purposes?
                        </button>
                    </h2>

                    <div id="q5" class="accordion-collapse collapse" aria-labelledby="heading5"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            Yes, most embassies require valid travel insurance covering your entire stay abroad.
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q6" aria-expanded="false" aria-controls="q6">

                            <span class="icon me-2">
                                <i class="fa-solid fa-plane"></i>
                            </span>

                            Do you also provide assistance for multiple-entry international business visa applications?
                        </button>
                    </h2>

                    <div id="q6" class="accordion-collapse collapse" aria-labelledby="heading6"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            Absolutely! We help clients secure both single-entry and multiple-entry business visas for
                            ongoing international operations.
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q7" aria-expanded="false" aria-controls="q7">

                            <span class="icon me-2">
                                <i class="fa-solid fa-file"></i>
                            </span>

                            Can your team help prepare professional visa interview documents and embassy paperwork properly?
                        </button>
                    </h2>

                    <div id="q7" class="accordion-collapse collapse" aria-labelledby="heading7"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            Yes, we guide you with documentation, interview preparation, and application review.
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q8" aria-expanded="false" aria-controls="q8">

                            <span class="icon me-2">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                            </span>

                            Can I apply online for visa consultation and digital document submission services from home?
                        </button>
                    </h2>

                    <div id="q8" class="accordion-collapse collapse" aria-labelledby="heading8"
                        data-bs-parent="#faq">

                        <div class="accordion-body">
                            Yes, you can apply online and submit your required documents digitally.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
