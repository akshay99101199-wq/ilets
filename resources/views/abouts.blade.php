@extends('layouts.app')
@section('title','About Us')
@section('content')

<main class="main">

   <section class="services-hero d-flex align-items-center text-center text-white">
  <div class="overlay"></div>

  <div class="container hero-content">
    <h1 class="hero-title">
      Visa <span> Assistance That Makes </span> Your Journey Easy
    </h1>

    <p class="hero-subtitle">
      Turn your study, work, or travel dreams into reality with trusted visa guidance from The Assigner.
    </p>

    <!-- <div class="hero-buttons">
      <a href="#" class="btn btn-primary me-3">Get Started</a>
      <a href="#" class="btn btn-outline-light">Free Demo</a>
    </div> -->
  </div>
</section>

<!-- ABOUT SECTION - CREATIVE -->
<section class="about-section py-5">
  <div class="container">
    
    <!-- Section Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">What is <span class="text-primary">The Assigner?</span></h2>
      <p class="text-muted">
        A performance-driven language institute helping you achieve global success.
      </p>
    </div>

    <div class="row align-items-center">
      
      <!-- Left Content -->
      <div class="col-lg-6 mb-4">
        <h4 class="fw-semibold mb-3">
          Your Gateway to International Opportunities
        </h4>
        <p class="text-muted">
          The Assigner empowers students with expert-led training in IELTS, PTE,
          German, and Spoken English. We focus on real results with personalized
          mentorship and proven strategies.
        </p>

        <div class="highlight-box mt-4">
          <p>
            💡 <strong>Why Choose Us?</strong><br>
            One-on-one mentorship, result-oriented strategies, and expert guidance
            for study abroad & career growth.
          </p>
        </div>
      </div>

      <!-- Right Features -->
      <div class="col-lg-6">
        <div class="row g-4">

          <div class="col-md-6">
            <div class="feature-card">
              <div class="icon"><i class="fas fa-user-graduate"></i></div>
              <h6>IELTS & PTE Coaching</h6>
              <p>Expert trainers with proven success strategies.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card">
              <div class="icon"><i class="fas fa-file-signature"></i></div>
              <h6>German Classes</h6>
              <p>Structured A1–B2 level training programs.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card">
              <div class="icon">🗣️</div>
              <h6>Spoken English</h6>
              <p>Boost confidence and communication skills.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card">
              <div class="icon"><i class="fas fa-globe-americas"></i></div>
              <h6>Study Abroad Help</h6>
              <p>Visa guidance & career consultation support.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE - ADVANCED DESIGN -->
<section class="why-choose py-5">
  <div class="container">

    <!-- Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">Why Choose <span>The Assigner?</span></h2>
      <p class="text-muted">We deliver results with smart learning and expert guidance</p>
    </div>

    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="choose-card">
          <div class="icon-box">
            <i class="fas fa-user-graduate"></i>
          </div>
          <h5>Expert Faculty</h5>
          <p>Learn from certified trainers with real-world teaching experience.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="choose-card">
          <div class="icon-box">
            <i class="fas fa-cogs"></i>
          </div>
          <h5>Tailored Learning</h5>
          <p>Personalized study plans designed for your specific goals.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="choose-card">
          <div class="icon-box">
            <i class="fas fa-laptop"></i>
          </div>
          <h5>Flexible Learning</h5>
          <p>Attend classes anytime with online & offline options.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- VISION SECTION -->
<section class="vm-split py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Image -->
      <div class="col-lg-6">
        <div class="vm-img">
          <img src="{{ 'public/assets/' }}assets/img/edu.jpg" alt="" data-aos="fade-in">
        </div>
      </div>

      <!-- Content -->
      <div class="col-lg-6">
        <div class="vm-content">
          <h2>Our Vision</h2>
          <p class="text-muted mb-4">
            We aim to create a world where language is not a barrier but a bridge to global opportunities.
          </p>
          <ul>
            <li>Break language barriers</li>
            <li>Empower global success</li>
            <li>Build confident communicators</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- MISSION SECTION -->
<section class="vm-split bg-light py-5">
  <div class="container">
    <div class="row align-items-center g-5 flex-lg-row-reverse">
      
      <!-- Image -->
      <div class="col-lg-6">
        <div class="vm-img">
          <!-- <img src="assets/img/mission.jpg" alt="Mission" class="img-fluid rounded-4"> -->
           <img src="{{ 'public/assets/' }}assets/img/mission.jpeg" alt="" data-aos="fade-in">
        </div>
      </div>

      <!-- Content -->
      <div class="col-lg-6">
        <div class="vm-content">
          <h2>Our Mission</h2>
          <p class="text-muted mb-4">
            Our mission is to deliver high-quality language training that transforms learning into real-world success.
          </p>
          <ul>
            <li>Innovative IELTS & PTE strategies</li>
            <li>Simplify German learning</li>
            <li>Improve real-life communication</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- CORE GOALS - CREATIVE DESIGN -->
<section class="core-goals py-5">
  <div class="container">
    
    <!-- Section Title -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Our Core Goals</h2>
      <p class="text-muted">
        We focus on helping you achieve global success with confidence
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Goal 1 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="goal-card text-center">
          
          <div class="icon-box">
            <i class="fas fa-file-signature"></i>
          </div>

          <h5>Ace Exams</h5>

          <p>
            Score high in IELTS, PTE & language tests with expert strategies.
          </p>

        </div>
      </div>

      <!-- Goal 2 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="goal-card text-center">

          <div class="icon-box">
            <i class="fas fa-comments"></i>
          </div>

          <h5>Fluency</h5>

          <p>
            Speak English confidently with real-life practice sessions.
          </p>

        </div>
      </div>

      <!-- Goal 3 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="goal-card text-center">

          <div class="icon-box">
            <i class="fas fa-globe-americas"></i>
          </div>

          <h5>Study Abroad</h5>

          <p>
            Prepare for global opportunities with language mastery.
          </p>

        </div>
      </div>

      <!-- Goal 4 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
        <div class="goal-card text-center">

          <div class="icon-box">
            <i class="fas fa-chart-line"></i>
          </div>

          <h5>Career Growth</h5>

          <p>
            Boost your career with strong communication skills.
          </p>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- TEAM - CREATIVE DESIGN -->
<!-- <section class="team-section py-5">
  <div class="container text-center">

  
    <div class="mb-5">
      <h2 class="fw-bold">Meet Our Expert Team</h2>
      <p class="text-muted">Guiding you towards success with experience & dedication</p>
    </div>

    <div class="row g-4">

      
      <div class="col-md-6 col-lg-3">
        <div class="team-card">
          <div class="team-img">
            <img src="https://i.pravatar.cc/300?img=1" class="img-fluid">
            <div class="overlay">
              <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h5>Rahul Sharma</h5>
            <span>IELTS Trainer</span>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-3">
        <div class="team-card">
          <div class="team-img">
            <img src="https://i.pravatar.cc/300?img=2" class="img-fluid">
            <div class="overlay">
              <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h5>Anna Müller</h5>
            <span>German Instructor</span>
          </div>
        </div>
      </div>

    
      <div class="col-md-6 col-lg-3">
        <div class="team-card">
          <div class="team-img">
            <img src="https://i.pravatar.cc/300?img=3" class="img-fluid">
            <div class="overlay">
              <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h5>Priya Verma</h5>
            <span>English Coach</span>
          </div>
        </div>
      </div>

    
      <div class="col-md-6 col-lg-3">
        <div class="team-card">
          <div class="team-img">
            <img src="https://i.pravatar.cc/300?img=4" class="img-fluid">
            <div class="overlay">
              <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h5>Arjun Singh</h5>
            <span>Visa Advisor</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->

<!-- Testimonials Section -->
   <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
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
                  <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Priyanshi </h3>
                  <h4>Canada – Student Visa</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>My Canada student visa process went really smoothly. I got proper guidance at every step, so I didn’t feel confused at any point. Everything was well-managed, and overall it was a stress-free experience for me.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Naitik </h3>
                  <h4>UK – Tourist Visa</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>I applied for a UK tourist visa and had a really good experience. All my doubts were cleared on time, and the process was handled properly. I didn’t face any major issues throughout.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Aman Bissyer </h3>
                  <h4>Australia – Study Visa</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>My Australia study visa process was quite smooth. I got clear instructions for documents and interview, which made things much easier for me. Overall, everything was handled nicely.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Vishal </h3>
                  <h4>New Zealand</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>New Zealand</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/ss.jpg" class="testimonial-img" alt="">
                  <h3>Tanu  </h3>
                  <h4>IELTS Coaching</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>My IELTS preparation experience was really good. The classes were easy to understand, and I got proper support for all sections. The tips and practice sessions helped me improve my score a lot.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

             <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/ssss.jpg" class="testimonial-img" alt="">
                  <h3>Sakshi   </h3>
                  <h4>IELTS Coaching</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>I had a nice experience preparing for IELTS. The trainers explained everything clearly, and the regular practice made me more confident. Overall, it helped me perform much better in the exam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/sssss.avif" class="testimonial-img" alt="">
                  <h3>Sakshi   </h3>
                  <h4>PTE Coaching</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>My PTE preparation went really well. The trainers explained each section clearly, and the practice materials were very helpful. I felt more confident after attending the sessions</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ 'public/assets/' }}assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Shiv    </h3>
                  <h4>PTE Coaching</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>I had a good experience with PTE coaching. The guidance was clear, and I got to practice a lot, which improved my performance. Overall, it was very helpful for my exam.</span>
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

<!-- CTA -->
<section class="cta">
  <h2>Get Started Today – Your First Step to Global Success!</h2>
  <p>Call or WhatsApp: +91 7206969466</p>
  <!-- <a href="#" class="btn btn-light">Book FREE Demo</a> -->
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

            Can I learn both German and English languages together through one training program?
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

            Can your team help prepare professional visa interview documents and embassy paperwork?
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

  </main>
@endsection





