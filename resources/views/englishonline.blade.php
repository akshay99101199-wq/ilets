
@extends('layouts.app')
@section('title','English Online')
@section('content')

<style>
/* HERO */
.hero-section {
  position: relative;
  height: 90vh;
  background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f') center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* OVERLAY (GRADIENT) */
.hero-overlay {
  position: absolute;
  inset: 0;
  /*background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(155, 78, 223, 0.6));*/
}

/* CONTENT */
.hero-content {
  position: relative;
  color: #fff;
  max-width: 750px;
}

/* BADGE */
.hero-badge {
  background: rgba(255,255,255,0.2);
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  backdrop-filter: blur(5px);
}

/* TITLE */
.hero-title {
  font-size: 45px;
  font-weight: 700;
  line-height: 1.3;
  color:#fff
}

.hero-title span {
  color: #f83bff;
}

.cta h2 {
    color: #fff;
    font-weight: 600;
    font-size: 35px;
}

/* TEXT */
.hero-text {
  font-size: 17px;
  opacity: 0.95;
}

/* BUTTONS */
.hero-buttons .btn {
  padding: 10px 24px;
  border-radius: 30px;
  font-weight: 500;
}

/* HIGHLIGHTS */
.hero-highlights span {
  display: inline-block;
  background: rgba(255,255,255,0.2);
  padding: 6px 12px;
  margin: 5px;
  border-radius: 20px;
  font-size: 13px;
}

/* OPTIONAL ANIMATION */
.hero-content {
  animation: fadeUp 1s ease;
}

/* SECTION */
.intro-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

/* BOX */
.intro-box {
  max-width: 750px;
  /* background: #fff; */
  padding: 45px 35px;
  border-radius: 20px;
  /* box-shadow: 0 15px 40px rgba(0,0,0,0.08); */
  transition: 0.3s;
}
.tip-card:hover {
  background: linear-gradient(135deg, #e90dfd, #8910f2);
}
.tip-card:hover p, .tip-card:hover h6{
  color:#fff;
}

.intro-box:hover {
  transform: translateY(-5px);
}

/* BADGE */
.intro-badge {
  background: #bc5bdf24;
  color: #a83bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

/* TITLE */
.intro-title {
  font-size: 32px;
  font-weight: 700;
}

.intro-title span {
  color: #ac4edf;
}

/* TEXT */
.intro-text {
  color: #6c757d;
  font-size: 16px;
  line-height: 1.7;
}

/* HIGHLIGHTS */
.intro-highlights span {
  display: inline-block;
  color: #8123be;
  background: #ece0fa;
  padding: 8px 14px;
  margin: 5px;
  border-radius: 20px;
  font-size: 14px;
}

/* SECTION */
.why-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.why-badge {
  background: #9240d424;
  color: #a63bdb;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.why-title {
  font-size: 32px;
  font-weight: 700;
}

/* LIST */
.why-list {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.why-item {
  background: #fff;
  padding: 15px 20px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  gap: 12px;
  transition: 0.3s;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.why-item:hover {
  transform: translateX(5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* ICON */
.why-item i {
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #9e4edf, #7822be);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

/* TEXT */
.why-item span {
  font-size: 15px;
  font-weight: 500;
}

/* IMAGE BOX */
.why-image-box {
  background: #fff;
  padding: 15px;
  border-radius: 20px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

.why-image-box img {
  border-radius: 15px;
  transition: 0.3s;
}

.why-image-box img:hover {
  transform: scale(1.03);
}

/* SECTION */
.levels-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.levels-badge {
  background: #b44edf2b;
  color: #772d9e;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
}

.levels-title {
  font-size: 32px;
  font-weight: 700;
}

.levels-subtitle {
  color: #6c757d;
}

/* CARD */
.level-card {
  background: #fff;
  padding: 30px 25px;
  border-radius: 20px;
  text-align: center;
  position: relative;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.level-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.level-icon {
  width: 65px;
  height: 65px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, #6a358a, #8d22be);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}

/* TEXT */
.level-card h5 {
  font-weight: 600;
  margin-bottom: 10px;
}

.level-card p {
  font-size: 14px;
  color: #6c757d;
}

/* ACTIVE CARD */
.level-card.active {
  border: 2px solid #aa4edf;
  transform: scale(1.05);
}

/* BADGE */
.level-badge {
  position: absolute;
  top: 15px;
  right: 15px;
  background: #b44edf;
  color: #fff;
  font-size: 12px;
  padding: 5px 10px;
  border-radius: 20px;
}

/* SECTION */
.skills-section {
  background: linear-gradient(135deg, #f8f9ff, #eef3ff);
}

.skills-badge {
  background: #a80ff51a;
  color: #9f0ff3;
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
  background: linear-gradient(135deg, #b14edf, #7a22be);
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
  background: #f9f9ff;
  position: relative;
}

/* WRAPPER */
.steps-wrapper {
  display: flex;
  justify-content: space-between;
  position: relative;
  margin-top: 50px;
  flex-wrap: wrap;
}

/* LINE CONNECTOR */
.steps-wrapper::before {
  content: '';
  position: absolute;
  top: 35px;
  left: 5%;
  width: 90%;
  height: 3px;
  background: linear-gradient(90deg,#e90dfd,#8910f2);
  z-index: 0;
}

/* STEP ITEM */
.step-item {
  width: 18%;
  text-align: center;
  position: relative;
  z-index: 1;
  transition: 0.3s;
}

.step-item:hover {
  transform: translateY(-8px);
}

/* CIRCLE */
.step-circle {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg,#e90dfd,#8910f2);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  font-size: 20px;
  font-weight: bold;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  margin-bottom: 15px;
}

/* TEXT */
.step-item h6 {
  font-weight: 600;
  color: #333;
}
.step-item p {
  font-size: 14px;
  color: #666;
}

/* SECTION BACKGROUND */
.tips-section {
  background: linear-gradient(135deg,#f9f9ff,#ffffff);
}

/* TIP CARD */
.tip-card {
  background: #fff;
  padding: 25px;
  border-radius: 20px;
  text-align: center;
  transition: 0.3s;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  height: 100%;
}

.tip-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

/* ICON */
.tip-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg,#e90dfd,#8910f2);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  font-size: 25px;
  margin-bottom: 15px;
}

/* TEXT */
.tip-card h6 {
  font-weight: 600;
  margin-bottom: 10px;
}
.tip-card p {
  font-size: 14px;
  color: #666;
}

/* HIGHLIGHT CARD */


.why-image-box img{
    max-width: 100%;
    height: 470px;
    object-fit: cover;
}

/* RESPONSIVE */
@media(max-width:768px){
  .tip-card {
    padding: 20px;
  }
}

/* RESPONSIVE */
@media(max-width:991px){
  .step-item {
    width: 45%;
    margin-bottom: 30px;
  }

  .steps-wrapper::before {
    display: none;
  }
}

@media(max-width:576px){
  .step-item {
    width: 100%;
  }
}

@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* MOBILE */
@media (max-width: 768px) {
  .intro-title {
    font-size: 26px;
  }
  .hero-title {
    font-size: 30px;
  }
  .why-title {
    font-size: 26px;
  }
}

</style>
<section class="services-hero">
  <div class="container" data-aos="fade-up">
    <h1>Online English Course 2026</h1>
    <p>Your complete guide to fluency, confidence & real-life communication — learn anytime, anywhere.</p>
  </div>
</section>


<section class="intro-section py-5">
  <div class="container">

    <div class="intro-box text-center mx-auto">

      <span class="intro-badge">Get Started</span>

      <h2 class="intro-title mt-3">
        Introduction to <span>Spoken English</span>
      </h2>

      <p class="intro-text mt-3">
        Strong English communication is essential for global success. 
        Learn effectively from home with structured online training 
        designed to improve fluency, confidence, and real-world communication skills.
      </p>

      <!-- Highlights -->
      <div class="intro-highlights mt-4">
        <span>✔ Flexible Learning</span>
        <span>✔ Practical Approach</span>
        <span>✔ Expert Guidance</span>
      </div>

    </div>

  </div>
</section>

<!-- WHY -->
<section class="why-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="why-badge">Why Choose Us</span>
      <h2 class="why-title mt-2">Why Learn Through The Assigner?</h2>
    </div>

    <div class="row align-items-center g-5">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">
        <div class="why-list">

          <div class="why-item">
            <i class="fas fa-user-graduate"></i>
            <span>Expert Trainers & Personal Guidance</span>
          </div>

          <div class="why-item">
            <i class="fas fa-laptop"></i>
            <span>Flexible Online Classes</span>
          </div>

          <div class="why-item">
            <i class="fas fa-book"></i>
            <span>High-Quality Study Material</span>
          </div>

          <div class="why-item">
            <i class="fas fa-comments"></i>
            <span>Practical Communication Practice</span>
          </div>

          <div class="why-item">
            <i class="fas fa-certificate"></i>
            <span>Certification & Career Growth</span>
          </div>

          <div class="why-item">
            <i class="fas fa-rupee-sign"></i>
            <span>Affordable Fees</span>
          </div>

        </div>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 text-center">
        <div class="why-image-box">
          <img src="{{ 'public/assets/' }}assets/img/events-item-2.jpg" alt="Online Learning" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LEVELS -->
<section class="levels-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <span class="levels-badge">Choose Your Level</span>
      <h2 class="levels-title mt-2">Course Levels</h2>
      <p class="levels-subtitle">
        Start from your current level and progress step by step to fluency.
      </p>
    </div>

    <div class="row g-4">
      <!-- Beginner -->
      <div class="col-md-4">
        <div class="level-card">
          <div class="level-icon">
            <i class="fas fa-seedling"></i>
          </div>
          <h5>Beginner</h5>

          <p><strong>Skills:</strong> Basic conversations, greetings</p>
          <p><strong>Ideal For:</strong> Beginners & students</p>
          <a href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#popupForm">Start Now</a>
        </div>
      </div>

      <!-- Intermediate (Highlight) -->
      <div class="col-md-4">
        <div class="level-card active">
          <div class="level-badge">Popular</div>

          <div class="level-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h5>Intermediate</h5>

          <p><strong>Skills:</strong> Daily & formal communication</p>
          <p><strong>Ideal For:</strong> Job seekers & professionals</p>

          <a href="#" class="btn btn-primary  w-100 mt-3" data-bs-toggle="modal" data-bs-target="#popupForm"> Start Now</a>
        </div>
      </div>

      <!-- Advanced -->
      <div class="col-md-4">
        <div class="level-card">
          <div class="level-icon">
            <i class="fas fa-user-tie"></i>
          </div>
          <h5>Advanced</h5>
          <p><strong>Skills:</strong> Business English & interviews</p>
          <p><strong>Ideal For:</strong> Professionals & entrepreneurs</p>
          <a href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#popupForm">Start Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section class="skills-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="skills-badge">What You’ll Gain</span>
      <h2 class="skills-title mt-2">Skills You Will Learn</h2>
      <p class="skills-subtitle">
        Build powerful communication skills to succeed in academics, career, and daily life.
      </p>
    </div>

    <div class="row text-center g-4">

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-comments"></i>
          </div>
          <h6>Fluent Speaking</h6>
          <p>Speak confidently in real-life situations.</p>
        </div>
      </div>

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-headphones"></i>
          </div>
          <h6>Listening</h6>
          <p>Understand accents and conversations clearly.</p>
        </div>
      </div>

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-pen"></i>
          </div>
          <h6>Writing</h6>
          <p>Write with clarity and proper structure.</p>
        </div>
      </div>

      <!-- Skill -->
      <div class="col-md-3 col-sm-6">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-microphone"></i>
          </div>
          <h6>Pronunciation</h6>
          <p>Improve clarity and natural speech flow.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- STEPS -->
<section class="steps-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="skills-badge">Registration Process
</span>
      <h2 class="skills-title mt-2">Follow simple steps to start your English learning journey
</h2>
    </div>

    <div class="steps-wrapper">

      <div class="step-item">
        <div class="step-circle">1</div>
        <h6>Select Level</h6>
        <p>Choose your level after a quick assessment.</p>
      </div>

      <div class="step-item">
        <div class="step-circle">2</div>
        <h6>Register</h6>
        <p>Fill in your details and choose your schedule.</p>
      </div>

      <div class="step-item">
        <div class="step-circle">3</div>
        <h6>Get Started</h6>
        <p>Attend your first class and begin learning.</p>
      </div>

      <div class="step-item">
        <div class="step-circle">4</div>
        <h6>Payment</h6>
        <p>Easy and flexible payment options available.</p>
      </div>

      <div class="step-item">
        <div class="step-circle">5</div>
        <h6>Free Demo</h6>
        <p>Experience our teaching with a demo class.</p>
      </div>

    </div>

  </div>
</section>

<!-- TIPS -->
<section class="tips-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <span class="skills-badge">Smart Learning Tips</span>
      <h2 class="skills-title mt-2">Simple strategies to boost your English fluency faster</h2>
    </div>

    <div class="row g-4">

      <!-- TIP 1 -->
      <div class="col-md-4">
        <div class="tip-card">
          <div class="tip-icon"><i class="fas fa-comments"></i></div>
          <h6>Speak Daily</h6>
          <p>Practice for 15–30 minutes every day to build confidence.</p>
        </div>
      </div>

      <!-- TIP 2 -->
      <div class="col-md-4">
        <div class="tip-card">
          <div class="tip-icon"><i class="fas fa-microphone"></i></div>
          <h6>Record Yourself</h6>
          <p>Playback helps you identify mistakes and improve pronunciation.</p>
        </div>
      </div>

      <!-- TIP 3 -->
      <div class="col-md-4">
        <div class="tip-card">
          <div class="tip-icon"><i class="fas fa-film"></i></div>
          <h6>Watch & Learn</h6>
          <p>Use subtitles to understand sentence flow and vocabulary.</p>
        </div>
      </div>

      <!-- TIP 4 -->
      <div class="col-md-4">
        <div class="tip-card">
          <div class="tip-icon"><i class="fas fa-brain"></i></div>
          <h6>Don’t Fear Mistakes</h6>
          <p>Speak freely — confidence grows with practice.</p>
        </div>
      </div>

      <!-- TIP 5 -->
      <div class="col-md-4">
        <div class="tip-card">
          <div class="tip-icon"><i class="fas fa-sync-alt"></i></div>
          <h6>Revise Regularly</h6>
          <p>Revisit lessons to strengthen memory and fluency.</p>
        </div>
      </div>

      <!-- TIP 6 -->
      <div class="col-md-4">
        <div class="tip-card highlight">
          <div class="tip-icon"><i class="fas fa-rocket"></i></div>
          <h6>Stay Consistent</h6>
          <p>Consistency is the key to mastering spoken English.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- CTA -->
<section class="py-5">
  <div class="">
    <div class="cta">
      <h2>Join Our Free Demo Class</h2>
      <p>Experience live training & boost your confidence</p>
      <a href="#" class="btn btn-light mt-3">Join Now</a>
    </div>
  </div>
</section>


<!-- FAQ - ENHANCED DESIGN -->
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
            business registration proof, financial documents, travel itinerary,
            hotel booking confirmation, passport-size photographs, and complete
            travel details depending on the embassy requirements and destination country.
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
            Our training modules are designed to improve speaking, listening, reading,
            writing, and professional communication skills in both German and English together.
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
            Processing time varies by country, embassy workload, and document verification.
            However, most business visa applications are completed within 7–15 working days,
            while some countries may take additional time for background checks and approvals.
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
            Applicants may need a valid employment offer, sponsorship documents,
            and approval from local immigration authorities before conversion is accepted.
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
            Insurance policies generally include medical emergencies, hospitalization,
            accidental coverage, and other travel-related risks during international travel.
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
            Absolutely! We help clients secure both single-entry and multiple-entry business visas
            for ongoing international operations, meetings, conferences, exhibitions,
            and regular overseas business travel requirements professionally and efficiently.
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
            Yes, we guide you with documentation, interview preparation, application review,
            embassy paperwork, and professional consultation to improve your confidence
            and increase the chances of successful visa approval during the interview process.
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
            Our online process allows applicants to complete consultation,
            document uploads, application tracking, and support services from anywhere conveniently.
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