@extends('layouts.app')
@section('title','English Offline')
@section('content')

<style>
.accordion-body {
    font-weight: 500;
}
  .hero-section {
  position: relative;
  height: 90vh;
  background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f') center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}



.hero-title {
    color: #fff;
}
.hero-content {
    position: relative;
    color: #fff;
    max-width: 750px;
}
.hero-content {
    animation: fadeUp 1s ease;
}

.hero-text {
    font-size: 17px;
    opacity: 0.95;
    color: #fff;
}
.hero-overlay {
    position: absolute;
    inset: 0;
    /*background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(155, 78, 223, 0.6));*/
}
.hero-badge {
    background: rgba(255,255,255,0.2);
    padding: 6px 14px;
    border-radius: 50px;
    font-size: 13px;
        backdrop-filter: blur(5px);
    color: #fff
}
.hero-text {
    font-size: 17px;
    opacity: 0.95;
}
.hero-highlights span {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    padding: 6px 12px;
    margin: 5px;
    border-radius: 20px;
    font-size: 13px;
    color:#fff;
}
  /* COURSES */

.course-badge {
  background: #8d4edf17;
  color: #a83bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.course-title {
  font-size: 32px;
  font-weight: 700;
}

.course-subtitle {
  color: #6c757d;
}

/* CARD */
.course-card {
  background: #fff;
  padding: 30px 25px;
  border-radius: 20px;
  text-align: center;
  position: relative;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.course-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.course-icon {
  width: 65px;
  height: 65px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #7c4edf, #9a30bc);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}

/* LIST */
.course-card ul {
  list-style: none;
  padding: 0;
  margin: 15px 0;
}

.course-card ul li {
  margin-bottom: 8px;
  font-size: 14px;
  color: #555;
}

/* ACTIVE CARD */
.course-card.active {
  border: 2px solid #8d4edf;
  transform: scale(1.05);
}

/* BADGE */
.popular-badge {
  position: absolute;
  top: 15px;
  right: 15px;
  background: #8d4edf;
  color: #fff;
  font-size: 12px;
  padding: 5px 10px;
  border-radius: 20px;
}

/* WHY SECTION */
.why-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.why-badge {
  background: #8d4edf17;
  color: #8d4edf;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.why-title {
  font-size: 32px;
  font-weight: 700;
}

.why-subtitle {
  color: #6c757d;
  font-size: 15px;
}

/* CARD */
.why-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  transition: 0.3s;
  height: 100%;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.why-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.icon-box {
  width: 60px;
  height: 60px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #8d4edf, #9a30bc);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 22px;
}

.why-card h6 {
  font-weight: 600;
  margin-bottom: 10px;
}

.why-card p {
  font-size: 14px;
  color: #6c757d;
}

.intro-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.intro-box {
  max-width: 750px;
  /* background: #fff; */
  padding: 40px 30px;
  border-radius: 20px;
  /* box-shadow: 0 15px 40px rgba(0,0,0,0.08); */
  transition: 0.3s;
}

.intro-box:hover {
  transform: translateY(-5px);
}

.intro-badge {
  display: inline-block;
  background: #8d4edf17;
  color: #8d4edf;
  padding: 6px 14px;
  font-size: 13px;
  border-radius: 50px;
  font-weight: 600;
}

.intro-title {
  font-size: 32px;
  font-weight: 700;
}

.intro-title span {
  color: #8d4edf;
}

.intro-text {
  color: #6c757d;
  font-size: 16px;
  line-height: 1.6;
}

.intro-points span {
  background: #9a4edf26;
  padding: 8px 15px;
  border-radius: 50px;
  margin: 5px;
  font-size: 14px;
  font-weight: 500;
}

/* SKILLS SECTION */
.skills-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.skills-badge {
  background: #8d4edf17;
  color: #8d4edf;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.skills-title {
  font-size: 32px;
  font-weight: 700;
}

.skills-subtitle {
  color: #6c757d;
}

/* CARD */
.skill-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  transition: 0.3s;
  height: 100%;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.skill-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.skill-icon {
  width: 65px;
  height: 65px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #7e4edf, #9a30bc);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}

/* TEXT */
.skill-card h6 {
  font-weight: 600;
  margin-bottom: 8px;
}

.skill-card p {
  font-size: 14px;
  color: #6c757d;
}

/* STEPS SECTION */
.steps-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.steps-badge {
  background: #8d4edf17;
  color: #8d4edf;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.steps-title {
  font-size: 32px;
  font-weight: 700;
}

.steps-subtitle {
  color: #6c757d;
}

/* CARD */
.step-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 18px;
  transition: 0.3s;
  position: relative;
  height: 100%;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.step-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* NUMBER */
.step-number {
  width: 55px;
  height: 55px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #924edf, #9a30bc);
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* TEXT */
.step-card h6 {
  font-weight: 600;
  margin-bottom: 8px;
}

.step-card p {
  font-size: 14px;
  color: #6c757d;
}

/* SECTION */
.enroll-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.enroll-badge {
  background: #8d4edf17;
  color: #733bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.enroll-title {
  font-size: 32px;
  font-weight: 700;
}

.enroll-subtitle {
  color: #6c757d;
}

/* TIMELINE */
.timeline {
  position: relative;
  margin-top: 40px;
}

.timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  width: 3px;
  height: 100%;
  background: #dbe4ff;
  transform: translateX(-50%);
}

/* ITEM */
.timeline-item {
  width: 50%;
  padding: 20px 40px;
  position: relative;
}

.timeline-item:nth-child(odd) {
  left: 0;
  text-align: right;
}

.timeline-item:nth-child(even) {
  left: 50%;
}

/* CONTENT */
.timeline-content {
  background: rgba(255, 255, 255, 0.9);
  padding: 25px;
  border-radius: 15px;
  backdrop-filter: blur(10px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  transition: 0.3s;
}

.timeline-content:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* STEP CIRCLE */
.step-circle {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #774edf, #9a30bc);
  color: #fff;
  font-weight: 700;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}

/* OPTIONAL LINE CONNECTOR (DESKTOP) */
@media (min-width: 768px) {

  .step-card {
    position: relative;
    z-index: 1;
  }
  .timeline::before {
    left: 20px;
  }

  .timeline-item {
    width: 100%;
    padding-left: 60px;
    padding-right: 20px;
    text-align: left !important;
  }

  .timeline-item:nth-child(even) {
    left: 0;
  }
}
  </style>
  <section class="services-hero">
  <div class="container" data-aos="fade-up">
    <h1>Offline Classes in Karnal</h1>
    <p>Improve your fluency, confidence & communication skills with expert trainers at <strong>The Assigner</p>
    
    <div class="hero-highlights mt-4  flex-wrap">
          <span>✔ Certified Trainers</span>
          <span>✔ Practical Learning</span>
          <span>✔ 1000+ Students</span>
        </div>
  </div>
</section>
  

<!-- INTRO -->
<section class="intro-section py-5">
  <div class="container">

    <div class=" text-center mx-auto">
      <span class="intro-badge mb-3">Start Your Journey</span>

      <h2 class="intro-title mb-3">
        Introduction to <span>Spoken English</span>
      </h2>

      <p class="intro-text mb-4">
        Fluent English is essential for students, professionals, and job seekers. 
        It boosts confidence, improves communication skills, and opens doors to 
        global opportunities.
      </p>

      <div class="intro-points d-flex justify-content-center flex-wrap">
        <span>✔ Build Confidence</span>
        <span>✔ Better Communication</span>
        <span>✔ Career Growth</span>
      </div>

    </div>

  </div>
</section>

<!-- WHY -->
<section class="why-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="why-badge">Why It Matters</span>
      <h2 class="why-title mt-2">Why Spoken English Matters</h2>
      <p class="why-subtitle">
        Mastering spoken English opens doors to global success and career growth.
      </p>
    </div>

    <div class="row g-4">
      <!-- Item -->
      <div class="col-md-3 col-sm-6">
        <div class="why-card text-center">
          <div class="icon-box">
            <i class="fas fa-globe"></i>
          </div>
          <h6>Global Opportunities</h6>
          <p>Connect with people worldwide and explore international careers.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="col-md-3 col-sm-6">
        <div class="why-card text-center">
          <div class="icon-box">
            <i class="fas fa-briefcase"></i>
          </div>
          <h6>Corporate Communication</h6>
          <p>Communicate professionally in meetings and workplaces.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="col-md-3 col-sm-6">
        <div class="why-card text-center">
          <div class="icon-box">
            <i class="fas fa-user-tie"></i>
          </div>
          <h6>Interviews & GD</h6>
          <p>Perform confidently in interviews and group discussions.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="col-md-3 col-sm-6">
        <div class="why-card text-center">
          <div class="icon-box">
            <i class="fas fa-plane"></i>
          </div>
          <h6>Study Abroad</h6>
          <p>Prepare for global education and university requirements.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- COURSES -->
<section class="courses-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="course-badge">Our Programs</span>
      <h2 class="course-title mt-2">Courses Offered</h2>
      <p class="course-subtitle">
        Choose the perfect course to improve your English communication skills.
      </p>
    </div>

    <div class="row g-4">

      <!-- Course 1 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon">
            <i class="fas fa-book-open"></i>
          </div>
          <h5>Basic Spoken English</h5>

          <ul>
            <li>✔ Vocabulary Building</li>
            <li>✔ Grammar Basics</li>
            <li>✔ Daily Conversations</li>
          </ul>

          <a href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#popupForm">Enroll Now</a>
        </div>
      </div>

      <!-- Course 2 (Highlighted) -->
      <div class="col-md-4">
        <div class="course-card active">
          <div class="popular-badge">Popular</div>

          <div class="course-icon">
            <i class="fas fa-comments"></i>
          </div>
          <h5>Advanced Communication</h5>

          <ul>
            <li>✔ Public Speaking</li>
            <li>✔ Interview Preparation</li>
            <li>✔ Business English</li>
          </ul>

          <a href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#popupForm">Enroll Now</a>
        </div>
      </div>

      <!-- Course 3 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon">
            <i class="fas fa-user-graduate"></i>
          </div>
          <h5>IELTS & Personality</h5>

          <ul>
            <li>✔ Resume Writing</li>
            <li>✔ Accent Training</li>
            <li>✔ Presentation Skills</li>
          </ul>

          <a href="#" class="btn btn-primary w-100 mt-3"data-bs-toggle="modal" data-bs-target="#popupForm">Enroll Now</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- SKILLS -->
<section class="skills-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="skills-badge">Your Growth</span>
      <h2 class="skills-title mt-2">Skills You Will Gain</h2>
      <p class="skills-subtitle">
        Build strong communication skills that help you succeed in every area of life.
      </p>
    </div>

    <div class="row g-4 text-center">

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-comments"></i>
          </div>
          <h6>Fluent Speech</h6>
          <p>Speak confidently and naturally in daily conversations.</p>
        </div>
      </div>

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-headphones"></i>
          </div>
          <h6>Listening</h6>
          <p>Understand accents and improve comprehension skills.</p>
        </div>
      </div>

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-pen"></i>
          </div>
          <h6>Writing</h6>
          <p>Write clearly with proper grammar and structure.</p>
        </div>
      </div>

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-microphone"></i>
          </div>
          <h6>Pronunciation</h6>
          <p>Improve clarity and sound more fluent and natural.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- STEPS -->
<section class="steps-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="steps-badge">Easy Process</span>
      <h2 class="steps-title mt-2">Enrollment Process</h2>
      <p class="steps-subtitle">
        Follow simple steps to start your English learning journey.
      </p>
    </div>

    <div class="row g-4 text-center position-relative">

      <!-- Step 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="step-card">
          <div class="step-number">1</div>
          <h6>Select Level</h6>
          <p>Choose your course based on your current level.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="step-card">
          <div class="step-number">2</div>
          <h6>Visit Institute</h6>
          <p>Visit us or connect online for guidance.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="step-card">
          <div class="step-number">3</div>
          <h6>Demo Class</h6>
          <p>Attend a free demo session before joining.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="step-card">
          <div class="step-number">4</div>
          <h6>Register</h6>
          <p>Complete registration and begin learning.</p>
        </div>
      </div>

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

            What documents are usually required while applying for an international business visa process?
          </button>
        </h2>

        <div id="q1"
          class="accordion-collapse collapse show"
          aria-labelledby="heading1"
          data-bs-parent="#faq">

          <div class="accordion-body">
            <p>You’ll typically need an invitation letter, valid passport,
            business registration proof, financial documents, travel itinerary,
            hotel booking confirmation, passport-size photographs, and complete
            travel details depending on the embassy requirements and destination country.</p>
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
            <p>Yes! We offer combined programs so you can learn multiple languages efficiently.
            Our training modules are designed to improve speaking, listening, reading,
            writing, and professional communication skills in both German and English together.</p>
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

            How long does it usually take to process and approve an international business visa application request?
          </button>
        </h2>

        <div id="q3"
          class="accordion-collapse collapse"
          aria-labelledby="heading3"
          data-bs-parent="#faq">

          <div class="accordion-body">
            <p>Processing time varies by country, embassy workload, and document verification.
            However, most business visa applications are completed within 7–15 working days,
            while some countries may take additional time for background checks and approvals.</p>
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
            <p>In some countries, yes — but conversion depends on the destination’s immigration policies.
            Applicants may need a valid employment offer, sponsorship documents,
            and approval from local immigration authorities before conversion is accepted.</p>
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
            <p>Yes, most embassies require valid travel insurance covering your entire stay abroad.
            Insurance policies generally include medical emergencies, hospitalization,
            accidental coverage, and other travel-related risks during international travel.</p>
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
            <p>Absolutely! We help clients secure both single-entry and multiple-entry business visas
            for ongoing international operations, meetings, conferences, exhibitions,
            and regular overseas business travel requirements professionally and efficiently.</p>
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
            <p>Yes, we guide you with documentation, interview preparation, application review,
            embassy paperwork, and professional consultation to improve your confidence
            and increase the chances of successful visa approval during the interview process.</p>
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
           <p> Yes, you can apply online and submit your required documents digitally.
            Our online process allows applicants to complete consultation,
            document uploads, application tracking, and support services from anywhere conveniently.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


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