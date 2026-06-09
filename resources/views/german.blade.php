@extends('layouts.app')
@section('title','German')
@section('content')

<style>

.accordion-button{
    justify-content: space-between;
    gap: 10px;
    font-size: 17px;
    line-height: 1.5;
}

.accordion-button{
    white-space: normal;
    text-align: left;
    padding-right: 50px;
}


/* BACKGROUND */
.intro-creative {
  background: linear-gradient(135deg,#f5f0ff,#ffffff);
}
.german-heading h2{
  font-weight: 700;
}

/* TITLE */
.intro-creative .subtitle {
  color: #777;
  font-size: 16px;
}

/* DESCRIPTION */
.intro-desc {
  max-width: 700px;
  font-size: 16px;
  color: #555;
  line-height: 1.7;
}

/* BOX */
.intro-box {
  background: #fff;
  padding: 30px 20px;
  border-radius: 20px;
  text-align: center;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  height: 100%;
  position: relative;
}

/* ICON */
.intro-box i {
  font-size: 35px;
  color: #7b0dfd;
  margin-bottom: 15px;
}

/* ACTIVE CARD (CENTER ONE) */
.intro-box.active {
  background: linear-gradient(135deg, #b27fa3, #c10dfd);
  color: #fff;
  transform: scale(1.05);
}
.intro-box.active i {
  color: #fff;
}

/* HOVER */
.intro-box:hover {
  transform: translateY(-8px);
}

/* SECTION */
.why-choose {
  background: linear-gradient(135deg,#f9f9ff,#ffffff);
}

/* CARD */
.why-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 20px;
  text-align: center;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  height: 100%;
  position: relative;
}

/* ICON */
.why-card i {
  font-size: 35px;
  color: #7b0dfd;
  margin-bottom: 15px;
}

/* TITLE */
.why-card h6 {
  font-weight: 600;
  margin-bottom: 10px;
}

/* TEXT */
.why-card p {
  font-size: 14px;
  color: #666;
}

/* HOVER EFFECT */
.why-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

/* ACTIVE (CENTER HIGHLIGHT) */
.why-card.active {
  background: linear-gradient(135deg, #d4a0ab, #c10dfd);
  color: #fff;
  transform: scale(1.05);
}
.why-card.active i {
  color: #fff;
}
.why-card.active p {
  color: #eee;
}

/* SECTION */
.german-levels {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.level-badge {
  background: #e7f0ff;
  color: #ae3bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.level-title {
  font-size: 32px;
  font-weight: 700;
}

.level-subtitle {
  color: #6c757d;
}

/* CARD BASE */
.level-card {
  padding: 30px 20px;
  border-radius: 18px;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  position: relative;
  overflow: hidden;
}

.level-card h4 {
  font-size: 28px;
  font-weight: 700;
}

.level-card p {
  font-size: 14px;
  opacity: 0.9;
}

/* HOVER */
.level-card:hover {
  transform: translateY(-8px) scale(1.03);
}

/* COLORS (PROGRESSION STYLE) */
.level-card.a1 { background: linear-gradient(135deg, #74c0fc, #4dabf7); }
.level-card.a2 { background: linear-gradient(135deg, #7763e6, #38d9a9); }
.level-card.b1 { background: linear-gradient(135deg, #b13bff, #a405fa42); color:#000; }
.level-card.b2 { background: linear-gradient(135deg, #be4dff, #ff2bfb); }
.level-card.c1 { background: linear-gradient(135deg, #ff6b6b, #a33ef0); }
.level-card.c2 { background: linear-gradient(135deg, #845ef7, #5f3dc4); }

/* SECTION */
.features-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.feature-badge {
  background: #e7f0ff;
  color: #9b3bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.feature-title {
  font-size: 32px;
  font-weight: 700;
}

.feature-subtitle {
  color: #6c757d;
}

/* CARD */
.feature-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  transition: 0.3s;
  height: 100%;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.feature-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.feature-icon {
  width: 65px;
  height: 65px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #b44edf, #8722be);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}

/* TEXT */
.feature-card h6 {
  font-weight: 600;
  margin-bottom: 8px;
}

.feature-card p {
  font-size: 14px;
  color: #6c757d;
}

/* SECTION */
.process-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.process-badge {
  background: #e7f0ff;
  color: #3b5bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.process-title {
  font-size: 32px;
  font-weight: 700;
}

.process-subtitle {
  color: #6c757d;
}

/* CARD */
.process-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  position: relative;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.process-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.process-icon {
  width: 65px;
  height: 65px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #4e73df, #224abe);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
}

/* TEXT */
.process-card h6 {
  font-weight: 600;
  margin-bottom: 8px;
}

.process-card p {
  font-size: 14px;
  color: #6c757d;
}

/* CONNECTOR LINE */
.process-wrapper {
  position: relative;
}

.process-wrapper::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 10%;
  width: 80%;
  height: 3px;
  background: linear-gradient(to right, #b14edf, #dbe4ff);
  z-index: 0;
}

/* SECTION */
.learning-process {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.process-badge {
  background: #e7f0ff;
  color: #9e3bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.process-title {
  font-size: 32px;
  font-weight: 700;
}

.process-subtitle {
  color: #6c757d;
}

/* CARD */
.process-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  position: relative;
  transition: 0.3s;
  box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

.process-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.process-icon {
  width: 60px;
  height: 60px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #ac4edf, #ae22be);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
}

/* TEXT */
.process-card h6 {
  font-weight: 600;
  margin-bottom: 8px;
}

.process-card p {
  font-size: 14px;
  color: #6c757d;
}

/* CONNECTOR LINE (Optional desktop effect) */
.process-wrapper {
  position: relative;
}

.process-wrapper::before {
  content: '';
  position: absolute;
  top: 50px;
  left: 10%;
  width: 80%;
  height: 3px;
  background: linear-gradient(to right, #a04edf, #dbe4ff);
  z-index: 0;
}

/* SECTION */
.registration-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.reg-badge {
  background: #e7f0ff;
  color: #3b5bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.reg-title {
  font-size: 32px;
  font-weight: 700;
}

.reg-subtitle {
  color: #6c757d;
}

/* CARD */
.reg-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  position: relative;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.reg-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* NUMBER */
.reg-number {
  position: absolute;
  top: -15px;
  left: 50%;
  transform: translateX(-50%);
  background: #bb4edf;
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
.reg-icon {
  width: 65px;
  height: 65px;
  margin: 15px auto;
  border-radius: 50%;
  background: linear-gradient(135deg, #4e73df, #7322be);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
}

/* TEXT */
.reg-card h6 {
  font-weight: 600;
  margin-top: 10px;
}

.reg-card p {
  font-size: 14px;
  color: #6c757d;
}

/* CONNECTOR LINE */
.reg-wrapper {
  position: relative;
}

/* .reg-wrapper::before {
  content: '';
  position: absolute;
  top: 50px;
  left: 15%;
  width: 70%;
  height: 3px;
  background: linear-gradient(to right, #bb4edf, #dbe4ff);
  z-index: 0;
} */

/* =========================
   LEARNING PROCESS
========================= */

.learning-process-section{
    position: relative;
    background: linear-gradient(rgb(15 15 25 / 36%), #ae6bdf), url(https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1400&auto=format&fit=crop);
    background-size: cover;
    background-position: center;
    overflow: hidden;
}

/* HEADING */

.lp-badge{
    display: inline-block;
    padding: 8px 22px;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 30px;
    color: #fff;
    font-size: 14px;
    letter-spacing: 1px;
}

.lp-title{
    font-size: 48px;
    font-weight: 800;
    color: #fff;
    margin-top: 18px;
}

.lp-subtitle{
    max-width: 650px;
    margin: auto;
    color: rgba(255,255,255,0.75);
    font-size: 16px;
}

/* PROCESS LINE */

.process-line{
    position: absolute;
    top: 65px;
    left: 12%;
    width: 76%;
    height: 3px;
    background: linear-gradient(to right, #ff4ecd, #7f5cff);
    z-index: 0;
    border-radius: 20px;
}

/* CARD */

.lp-card{
    position: relative;
    z-index: 2;
    background: #fff;
    border-radius: 22px;
    padding: 30px 25px;
    text-align: center;
    transition: 0.4s ease;
    height: 100%;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

.lp-card:hover{
    transform: translateY(-10px);
}

/* ACTIVE CARD */

.active-card{
    background: linear-gradient(135deg,#7f5cff,#d946ef);
}

.active-card h5,
.active-card p,
.active-card .step-no{
    color: #fff !important;
}

.active-card .lp-circle{
    background: #fff;
    color: #7f5cff;
}

/* ICON */

.lp-circle{
    width: 90px;
    height: 90px;
    margin: auto;
    border-radius: 50%;
    background: linear-gradient(135deg,#7f5cff,#d946ef);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 34px;
    margin-bottom: 25px;
    transition: 0.4s;
}

/* STEP NUMBER */

.step-no{
    display: inline-block;
    font-size: 21px;
    font-weight: 700;
    color: #7f5cff;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

/* TEXT */

.lp-card h5{
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 22px;
    color: #111;
}

.lp-card p{
    color: #666;
    line-height: 1.8;
    font-size: 15px;
}

/* RESPONSIVE */

@media(max-width:991px){

    .lp-title{
        font-size: 36px;
    }

    .lp-card{
        padding: 30px 20px;
    }
}

@media(max-width:576px){

    .lp-title{
        font-size: 28px;
    }

    .lp-subtitle{
        font-size: 14px;
    }

    .lp-circle{
        width: 75px;
        height: 75px;
        font-size: 28px;
    }

    .lp-card h5{
        font-size: 20px;
    }
}




/* MOBILE */
@media (max-width: 768px) {
  .reg-wrapper::before {
    display: none;
  }

  .reg-title {
    font-size: 26px;
  }
  
  .hero h1 {
    font-size: 28px;
    font-weight: 700;
    color: #fff;
}

.hero-content {
    position: relative;
    top: 20%;
    transform: translateY(-50%);
    z-index: 2;
}
}

/* RESPONSIVE */
@media(max-width:768px){
  .feature-title {
    font-size: 26px;
  }
   .process-wrapper::before {
    display: none;
  }

  .process-title {
    font-size: 26px;
  }
   .level-title {
    font-size: 26px;
  }
  .why-card.active {
    transform: none;
  }
  .intro-box.active {
    transform: none;
  }
   .process-wrapper::before {
    display: none;
  }

  .process-title {
    font-size: 26px;
  }
}
    </style>
<!-- HERO -->
<section class="services-hero">
<div class="container hero-content text-center">
    <h1>Learn German Online with The Assigner</h1>
    <p class="mt-3">Open the Door to Global Opportunities</p>
    <!-- <a href="#" class="btn btn-main mt-3">Join Free Demo</a> -->
</div>
</section>

<section class="intro-creative py-5">
  <div class="container text-center">

    <!-- Title -->
    <div class="german-heading">
      <h2>Why Learn German?</h2>
      <p class="subtitle">
        Unlock global opportunities with one of Europe’s most powerful languages
      </p>
    </div>

    <!-- Description -->
    <p class="intro-desc mx-auto">
      German is widely spoken across Europe and plays a vital role in education, career growth, and international business. Learning German can open doors to top universities, global companies, and new cultural experiences.
    </p>

    <!-- Cards -->
    <div class="row g-4 mt-4">

      <div class="col-md-4">
        <div class="intro-box">
          <i class="fas fa-graduation-cap"></i>
          <h6>Study Abroad</h6>
          <p>Access top universities in Germany with affordable education.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="intro-box active">
          <i class="fas fa-briefcase"></i>
          <h6>Career Growth</h6>
          <p>Boost your chances in global jobs and multinational companies.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="intro-box">
          <i class="fas fa-globe-europe"></i>
          <h6>Global Exposure</h6>
          <p>Connect with Europe’s strongest economy and culture.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- WHY CHOOSE -->
<section class="why-choose py-5">
  <div class="container">

    <div class="german-heading text-center">
      <h2>Why Choose The Assigner?</h2>
      <p>We provide result-oriented training with expert guidance</p>
    </div>

    <div class="row g-4 mt-4">

      <div class="col-md-4">
        <div class="why-card">
          <i class="fas fa-user-graduate"></i>
          <h6>Certified Trainers</h6>
          <p>Learn from experienced and certified professionals.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card ">
          <i class="fas fa-chalkboard-teacher"></i>
          <h6>Live Interactive Classes</h6>
          <p>Real-time sessions with active participation.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card">
          <i class="fas fa-clock"></i>
          <h6>Flexible Timings</h6>
          <p>Choose timings that suit your schedule.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card">
          <i class="fas fa-book"></i>
          <h6>Structured Curriculum</h6>
          <p>Step-by-step learning approach for all levels.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card">
          <i class="fas fa-file-alt"></i>
          <h6>Study Material</h6>
          <p>Updated resources for better learning.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card">
          <i class="fas fa-comments"></i>
          <h6>Speaking Practice</h6>
          <p>Improve fluency with daily speaking sessions.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- GERMAN LEVELS -->
<section class="german-levels py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="level-badge">CEFR Levels</span>
      <h2 class="level-title mt-2">German Levels (A1–C2)</h2>
      <p class="level-subtitle">
        Progress step by step from beginner to near-native fluency.
      </p>
    </div>

    <div class="row g-4">

      <!-- A1 -->
      <div class="col-md-4">
        <div class="level-card a1">
          <h4>A1</h4>
          <p>Basic introductions & simple conversations</p>
        </div>
      </div>

      <!-- A2 -->
      <div class="col-md-4">
        <div class="level-card a2">
          <h4>A2</h4>
          <p>Everyday communication & grammar basics</p>
        </div>
      </div>

      <!-- B1 -->
      <div class="col-md-4">
        <div class="level-card b1">
          <h4>B1</h4>
          <p>Intermediate speaking & travel conversations</p>
        </div>
      </div>

      <!-- B2 -->
      <div class="col-md-4">
        <div class="level-card b2">
          <h4>B2</h4>
          <p>Advanced communication & discussions</p>
        </div>
      </div>

      <!-- C1 -->
      <div class="col-md-4">
        <div class="level-card c1">
          <h4>C1</h4>
          <p>Professional & academic fluency</p>
        </div>
      </div>

      <!-- C2 -->
      <div class="col-md-4">
        <div class="level-card c2">
          <h4>C2</h4>
          <p>Near-native mastery</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- FEATURES -->
<section class="features-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="feature-badge">Course Benefits</span>
      <h2 class="feature-title mt-2">What You Get</h2>
      <p class="feature-subtitle">
        Everything you need to master communication with confidence.
      </p>
    </div>

    <div class="row g-4 text-center">

      <!-- Feature -->
      <div class="col-md-3 col-sm-6">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <h6>Small Batches</h6>
          <p>Personal attention for every student.</p>
        </div>
      </div>

      <!-- Feature -->
      <div class="col-md-3 col-sm-6">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h6>Native Practice</h6>
          <p>Real-world communication exposure.</p>
        </div>
      </div>

      <!-- Feature -->
      <div class="col-md-3 col-sm-6">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-book-open"></i>
          </div>
          <h6>Grammar Made Easy</h6>
          <p>Simple and practical explanations.</p>
        </div>
      </div>

      <!-- Feature -->
      <div class="col-md-3 col-sm-6">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h6>Assignments & Tests</h6>
          <p>Track your progress effectively.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- LEARNING PROCESS -->
<section class="learning-process-section py-5">

  <div class="container">

    <!-- Heading -->
    <div class="text-center mb-5">
      <span class="lp-badge">How It Works</span>
      <h2 class="lp-title">Our Learning Process</h2>
      <p class="lp-subtitle">
        Simple, modern and result-oriented learning steps designed for your success.
      </p>
    </div>

    <!-- Process Row -->
    <div class="row g-4 justify-content-center position-relative">

      <!-- LINE -->
      <!-- <div class="process-line d-none d-lg-block"></div> -->

      <!-- Step 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="lp-card">
          <div class="lp-circle">
            <i class="fas fa-user-graduate"></i>
          </div>
          <span class="step-no">01</span>
          <h5>Free Assessment</h5>
          <p>
            Understand your level and choose the right path to achieve your goals.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="lp-card ">
          <div class="lp-circle">
            <i class="fas fa-book-open"></i>
          </div>
          <span class="step-no">02</span>
          <h5>Course Planning</h5>
          <p>
            Personalized learning roadmap created according to your career plans.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="lp-card">
          <div class="lp-circle">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>
          <span class="step-no">03</span>
          <h5>Live Training</h5>
          <p>
            Interactive sessions with expert trainers for better understanding.
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="lp-card">
          <div class="lp-circle">
            <i class="fas fa-award"></i>
          </div>
          <span class="step-no">04</span>
          <h5>Get Certified</h5>
          <p>
            Complete the course successfully and receive your official certificate.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>



<!-- REGISTRATION -->
<section class="registration-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="reg-badge">Easy Steps</span>
      <h2 class="reg-title mt-2">Registration Process</h2>
      <p class="reg-subtitle">
        Join your course in just 3 simple steps.
      </p>
    </div>

    <div class="row g-4 text-center reg-wrapper">

      <!-- Step 1 -->
      <div class="col-md-4">
        <div class="reg-card">
          <div class="reg-number">1</div>
          <div class="reg-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h6>Book Demo</h6>
          <p>Schedule a free demo session with our experts.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-md-4">
        <div class="reg-card">
          <div class="reg-number">2</div>
          <div class="reg-icon">
            <i class="fas fa-layer-group"></i>
          </div>
          <h6>Choose Level</h6>
          <p>Select the course level based on your skills.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md-4">
        <div class="reg-card">
          <div class="reg-number">3</div>
          <div class="reg-icon">
            <i class="fas fa-play-circle"></i>
          </div>
          <h6>Start Learning</h6>
          <p>Begin your journey to fluency and confidence.</p>
        </div>
      </div>

    </div>

    <!-- CTA -->
    <div class="text-center mt-5">
      <a href="#" class="btn btn-primary px-4 py-2">Get Started Now</a>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta">
<h2>Start Your German Learning Journey Today</h2>
<p>Book your free demo class and say “Hallo” to global opportunities</p>
<a href="#" class="btn btn-light">Book Demo</a>
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

            What documents are usually required while applying for an international business visa process?
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

            Can I learn both German and English languages together through one professional training program?
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

            How long does it usually take to process and approve a business visa application request?
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

            Is it possible to convert a business visa into a work permit or employment visa later?
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

            Is travel insurance compulsory and mandatory for international business visa approval purposes?
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

            Do you also provide assistance for multiple-entry international business visa applications?
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

            Can your team help prepare professional visa interview documents and embassy paperwork properly?
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

            Can I apply online for visa consultation and digital document submission services from home?
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


