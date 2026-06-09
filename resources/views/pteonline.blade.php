@extends('layouts.app')
@section('title','PTE Online')
@section('content')

<style>
    html, body {
  overflow-x: hidden;
}
    /* HERO SLIDER */
.carousel-item {
  height: 90vh;
  background-size: cover;
  background-position: center;
  position: relative;
}

.carousel-overlay {
  position: absolute;
  inset: 0;
  background: rgb(0 0 0 / 47%);
}

.carousel-caption {
  bottom: 30%;
}

.carousel-caption h1 {
  font-size: 42px;
  font-weight: 700;
  color:#fff;
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
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  height: 100%;
}

.custom-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.15);
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
  max-width: 700px;
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
  color: #000;
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
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
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
  color:#000;
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
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
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
  box-shadow: 0 20px 50px rgba(0,0,0,0.15);
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
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
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
  box-shadow: 0 20px 50px rgba(0,0,0,0.15);
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
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
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
  color:#000;
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

/* GLOW EFFECT */
.glow {
  position: absolute;
  border-radius: 50%;
  filter: blur(100px);
  opacity: 0.3;
}

.glow1 {
  width: 300px;
  height: 300px;
  background: #a100e6;
  top: -50px;
  left: -50px;
}

.glow2 {
  width: 250px;
  height: 250px;
  background: #d000ff;
  bottom: -50px;
  right: -50px;
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

/* CARD */
.step-card {
  position: relative;
  background: #fff;
  padding: 30px 15px;
  border-radius: 20px;
  transition: 0.4s;
  z-index: 1;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
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
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
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
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
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
  box-shadow: 0 8px 25px rgba(0,0,0,0.05);
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

.speaking { background: #0d6efd; }
.writing { background: #198754; }
.reading { background: #fd7e14; }
.listening { background: #6f42c1; }

.section-light {
  background: linear-gradient(135deg, #f8fbff, #eef5ff) !important;
}

.section-dark {
  background: #ffffff !important;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .course-card {
    margin-bottom: 20px;
  }
}

/* RESPONSIVE */
@media (max-width: 768px) {
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

/* RESPONSIVE */
@media (max-width: 768px) {
  .pte-hero h1 {
    font-size: 26px;
  }

  .pte-card {
    padding: 20px;
  }
}
    </style>

<!-- HERO SLIDER -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">

    <div class="carousel-item active" style="background-image:url('https://images.unsplash.com/photo-1523240795612-9a054b0db644')">
      <div class="carousel-overlay"></div>
      <div class="carousel-caption">
        <h1>Best PTE Online Coaching in India – </h1>
        <p>Live Classes, Expert Trainers & Mock Tests</p>
        <!-- <a href="#" class="btn btn-primary">Book Free Demo</a> -->
      </div>
    </div>

    <div class="carousel-item" style="background-image:url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b')">
      <div class="carousel-overlay"></div>
      <div class="carousel-caption">
         <h1>Best PTE Online Coaching in India – </h1>
        <p>Live Classes, Expert Trainers & Mock Tests</p>
      </div>
    </div>

  </div>

</div>

<!-- ABOUT PTE -->
<section class="pte-section section-light">
  <div class=" checking">

    <!-- HERO -->
    <div class="pte-hero text-center text-white mb-5">
      
      <span class="badge-custom mb-3">🔥 Top Rated Coaching</span>

      <h1 class="fw-bold mb-3">
        Crack <span>PTE Exam</span> with Confidence
      </h1>

      <p class="mb-4">
        Live classes, expert trainers, real exam strategies & AI-based feedback 
        to help you achieve your dream score.
      </p>

      <!-- <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="#" class="btn btn-demo">Book Free Demo</a>
        <a href="#" class="btn btn-primary">View Courses</a>
      </div> -->
    </div>
  </div>

  <div class="container second-check ">
     <!-- CONTENT -->
    <div class="row  align-items-center g-5">

      <!-- LEFT -->
      <div class="col-lg-12">
        <div class="pte-content mt-4">
          <h2 class="mb-2">What is PTE?</h2>

          <p>
            <strong>Pearson Test of English (PTE)</strong> is a computer-based 
            English proficiency exam designed for non-native speakers.
          </p>

          <p>
            It is accepted globally by universities, governments, and employers 
            for study, work, and migration.
          </p>
        </div>
      </div>
<div class="col-lg-6">
     <div class="pte-features">
            <div class="feature-box mb-2">
              <i class="fas fa-bolt"></i>
              <span>Quick Results</span>
            </div>

            <div class="feature-box mb-2">
              <i class="fas fa-globe"></i>
              <span>Global Acceptance</span>
            </div>

            <div class="feature-box mb-2">
              <i class="fas fa-robot"></i>
              <span>AI Scoring</span>
            </div>

            <div class="feature-box mb-2">
              <i class="fas fa-calendar-alt"></i>
              <span>Flexible Dates</span>
            </div>
          </div>
</div>
      <!-- RIGHT -->
      <div class="col-lg-6">
        <div class="pte-card">
          <h4 class="mb-4">Why Students Prefer PTE?</h4>

          <ul>
            <li>⚡ Results in 48 hours</li>
            <li>🎯 Accurate AI scoring</li>
            <li>🌍 Accepted worldwide</li>
            <li>📅 Multiple test dates</li>
            <li>🧠 No human bias</li>
          </ul>

          <a href="#" class="btn btn-demo w-100 mt-3">
            Start Your Preparation
          </a>
        </div>
      </div>

    </div>
  </div>
  <!-- FLOATING SHAPES -->
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
</section>

<!-- PTE TYPES -->
<section class="py-5 section-dark">
<div class="container">
<div class="text-center mb-5">
      <h2 class="fw-bold">PTE <span>Type</span></h2>
    </div>

<div class="table-responsive" data-aos="fade-up">
<table class="table table-bordered table-custom text-center">
<thead>
<tr>
<th>Type</th>
<th>Purpose</th>
<th>Content</th>
<th>Applicable For</th>
</tr>
</thead>
<tbody>
<tr>
<td>PTE Academic</td>
<td>Study Abroad</td>
<td>Speaking, Writing, Reading, Listening</td>
<td>Students</td>
</tr>
<tr>
<td>Generic PTE</td>
<td>General English</td>
<td>All Skills</td>
<td>Professionals</td>
</tr>
<tr>
<td>Young Learner</td>
<td>Kids Learning</td>
<td>Fun Activities</td>
<td>Age 7–12</td>
</tr>
<tr>
<td>Home PTE</td>
<td>Visa Process</td>
<td>Speaking & Listening</td>
<td>Family Visa</td>
</tr>
</tbody>
</table>
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
      <h2 class="fw-bold">PTE Test <span>Overview</span></h2>
      <p class="text-muted">Understand each section of the PTE exam</p>
    </div>

    <div class="row  g-4 text-center">

      <!-- LISTENING -->
      <div class="col-md-3 col-sm-6">
        <div class="overview-card">
          <div class="icon">
            <i class="fas fa-headphones"></i>
          </div>
          <h5>Listening</h5>
          <span class="time-badge">30–43 mins</span>
        </div>
      </div>

      <!-- READING -->
      <div class="col-md-3 col-sm-6">
        <div class="overview-card">
          <div class="icon">
            <i class="fas fa-book-reader"></i>
          </div>
          <h5>Reading</h5>
          <span class="time-badge">29–30 mins</span>
        </div>
      </div>

      <!-- WRITING -->
      <div class="col-md-3 col-sm-6">
        <div class="overview-card">
          <div class="icon">
            <i class="fas fa-pen-nib"></i>
          </div>
          <h5>Writing</h5>
          <span class="time-badge">54–67 mins</span>
        </div>
      </div>

      <!-- SPEAKING -->
      <div class="col-md-3 col-sm-6">
        <div class="overview-card">
          <div class="icon">
            <i class="fas fa-microphone"></i>
          </div>
          <h5>Speaking</h5>
          <span class="time-badge">54–67 mins</span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- BENEFITS -->
<section class="pte-benefits section-light py-5">
  <div class="container">

    <!-- TITLE -->
    <div class="text-center mb-5 text-white">
      <h2 class="fw-bold">Benefits of Our <span>PTE Coaching</span></h2>
      <p class="opacity-75">Real results backed by performance & practice</p>
    </div>

    <div class="row  g-4 text-center">

      <!-- ITEM 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="benefit-card">
          <div class="icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h3 class="counter">50+</h3>
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
        <div class="benefit-card highlight">
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
      <h2 class="fw-bold">The Assigner’s <span>PTE Course Outline</span></h2>
      <p class="text-muted">Master every module with expert strategies & real exam practice</p>
    </div>

    <div class="row g-4">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">
        <div class="course-card h-100">
          <h4 class="mb-3 ">Speaking Module</h4>

          <ul>
            <li>Boost your Pronunciation and Oral Fluency</li>
            <li>Improve speech clarity for better PTE scores</li>
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
          <p>Fluency, pronunciation & confidence building</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="mini-card text-center">
          <div class="icon writing">
            <i class="fas fa-pen"></i>
          </div>
          <h6>Writing</h6>
          <p>Structured answers & grammar accuracy</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="mini-card text-center">
          <div class="icon reading">
            <i class="fas fa-book"></i>
          </div>
          <h6>Reading</h6>
          <p>Speed reading & comprehension skills</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="mini-card text-center">
          <div class="icon listening">
            <i class="fas fa-headphones"></i>
          </div>
          <h6>Listening</h6>
          <p>Audio understanding & note-taking</p>
        </div>
      </div>

    </div>

    <!-- Bottom CTA -->
    <div class="text-center mt-5">
      <p class="lead">
        The Assigner offers the best offline PTE coaching with expert guidance, study materials & mock tests.
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
          <button class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q1"
            aria-expanded="true"
            aria-controls="q1">

            <span class="icon me-2">
              <i class="fa fa-question" aria-hidden="true"></i>
            </span>

            What documents are required for a business visa?
          </button>
        </h2>

        <div id="q1"
          class="accordion-collapse collapse show"
          aria-labelledby="heading1"
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
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q2"
            aria-expanded="false"
            aria-controls="q2">

            <span class="icon me-2">
              <i class="fa fa-globe" aria-hidden="true"></i>
            </span>

            Can I learn German & English together?
          </button>
        </h2>

        <div id="q2"
          class="accordion-collapse collapse"
          aria-labelledby="heading2"
          data-bs-parent="#faq">

          <div class="accordion-body">
            Yes! We offer combined programs so you can learn multiple languages efficiently.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading3">
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q3"
            aria-expanded="false"
            aria-controls="q3">

            <span class="icon me-2">
              <i class="fa-solid fa-clock"></i>
            </span>

            How long does it take to process a business visa?
          </button>
        </h2>

        <div id="q3"
          class="accordion-collapse collapse"
          aria-labelledby="heading3"
          data-bs-parent="#faq">

          <div class="accordion-body">
            Processing time varies by country, but most applications are completed within 7–15 working days.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading4">
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q4"
            aria-expanded="false"
            aria-controls="q4">

            <span class="icon me-2">
              <i class="fa-solid fa-briefcase"></i>
            </span>

            Can I convert a business visa into a work visa later?
          </button>
        </h2>

        <div id="q4"
          class="accordion-collapse collapse"
          aria-labelledby="heading4"
          data-bs-parent="#faq">

          <div class="accordion-body">
            In some countries, yes — but conversion depends on the destination’s immigration policies.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading5">
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q5"
            aria-expanded="false"
            aria-controls="q5">

            <span class="icon me-2">
              <i class="fa-solid fa-shield-halved"></i>
            </span>

            Is travel insurance required for a business visa?
          </button>
        </h2>

        <div id="q5"
          class="accordion-collapse collapse"
          aria-labelledby="heading5"
          data-bs-parent="#faq">

          <div class="accordion-body">
            Yes, most embassies require valid travel insurance covering your entire stay abroad.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading6">
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q6"
            aria-expanded="false"
            aria-controls="q6">

            <span class="icon me-2">
              <i class="fa-solid fa-plane"></i>
            </span>

            Do you assist with multiple-entry business visas?
          </button>
        </h2>

        <div id="q6"
          class="accordion-collapse collapse"
          aria-labelledby="heading6"
          data-bs-parent="#faq">

          <div class="accordion-body">
            Absolutely! We help clients secure both single-entry and multiple-entry business visas for ongoing international operations.
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading7">
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q7"
            aria-expanded="false"
            aria-controls="q7">

            <span class="icon me-2">
              <i class="fa-solid fa-file"></i>
            </span>

            Can you help prepare visa interview documents?
          </button>
        </h2>

        <div id="q7"
          class="accordion-collapse collapse"
          aria-labelledby="heading7"
          data-bs-parent="#faq">

          <div class="accordion-body">
            Yes, we guide you with documentation, interview preparation, and application review.
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading8">
          <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q8"
            aria-expanded="false"
            aria-controls="q8">

            <span class="icon me-2">
              <i class="fa fa-laptop" aria-hidden="true"></i>
            </span>

            Can I apply online for visa services?
          </button>
        </h2>

        <div id="q8"
          class="accordion-collapse collapse"
          aria-labelledby="heading8"
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


