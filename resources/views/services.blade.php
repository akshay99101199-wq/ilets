@extends('layouts.app')
@section('title', 'servcies')
@section('content')

<style>
.services-section{
  background: #f8fbff;
}

.service-subtitle{
  color: #0d6efd;
  font-weight: 600;
  letter-spacing: 2px;
  font-size: 14px;
}

.service-title{
  font-size: 42px;
  font-weight: 700;
  margin-top: 10px;
  color: #111;
}

.service-desc{
  max-width: 700px;
  margin: auto;
  color: #666;
  font-size: 17px;
  line-height: 1.8;
}

.service-card{
  background: #fff;
  padding: 35px 28px;
  border-radius: 20px;
  transition: 0.4s ease;
  height: 100%;
  box-shadow: 0 10px 35px rgba(0,0,0,0.06);
  position: relative;
  overflow: hidden;
}

.service-card:hover{
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

.icon-box{
  width: 75px;
  height: 75px;
  border-radius: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 25px;
}

.icon-box i{
  font-size: 30px;
  color: #fff;
}

/* Different Colors */
.ielts{
  background: linear-gradient(135deg,#0d6efd,#5a9cff);
}

.pte{
  background: linear-gradient(135deg,#ff6b6b,#ff9f43);
}

.german{
  background: linear-gradient(135deg,#6f42c1,#9b6dff);
}

.online{
  background: linear-gradient(135deg,#198754,#4cd137);
}

.offline{
  background: linear-gradient(135deg,#fd7e14,#ffb347);
}

.visa{
  background: linear-gradient(135deg,#dc3545,#ff6b81);
}

.service-card h4{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 15px;
  color: #111;
}

.service-card p{
  color: #666;
  line-height: 1.8;
  font-size: 15px;
}

.service-btn{
  display: inline-block;
  margin-top: 18px;
  text-decoration: none;
  color: #0d6efd;
  font-weight: 600;
  transition: 0.3s;
}

.service-btn:hover{
  letter-spacing: 1px;
  color: #0a58ca;
}

/* Responsive */
@media(max-width:768px){

  .service-title{
    font-size: 30px;
  }

  .service-card{
    padding: 30px 22px;
  }

}
</style>
    <main class="main">

    <!-- HERO -->
<section class="services-hero">
  <div class="container" data-aos="fade-up">
    <h1>Our Services</h1>
    <p>Master IELTS, PTE, German & Spoken English with expert guidance and modern learning techniques.</p>
  </div>
</section>

<!-- ===== SERVICES SECTION ===== -->
<section class="services-section py-5" id="services">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <span class="service-subtitle">OUR SERVICES</span>
      <h2 class="service-title">Professional Training & Visa Services</h2>
      <p class="service-desc">
        Learn languages, prepare for international exams, and get expert visa assistance
        with personalized guidance from experienced professionals.
      </p>
    </div>

    <!-- Services Row -->
    <div class="row g-4">

      <!-- IELTS -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card">
          <div class="icon-box ielts">
            <i class="fas fa-book-open"></i>
          </div>
          <h4>IELTS Coaching</h4>
          <p>
            Comprehensive IELTS preparation with expert guidance for Listening,
            Reading, Writing, and Speaking modules to help you achieve your target band score.
          </p>
          <a href="{{ route('ielts')}}" class="service-btn">Read More</a>
        </div>
      </div>

      <!-- PTE -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card">
          <div class="icon-box pte">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h4>PTE Training</h4>
          <p>
            Prepare for PTE Academic with advanced mock tests, AI-based practice,
            and expert coaching available in both online and offline modes.
          </p>
          <a href="{{ route('pteoffline')}}" class="service-btn">Read More</a>
        </div>
      </div>

      <!-- German -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="icon-box german">
            <i class="fas fa-language"></i>
          </div>
          <h4>German Language</h4>
          <p>
            Learn German from beginner to advanced level with interactive sessions,
            grammar practice, and real-life communication training.
          </p>
          <a href="{{ route('german')}}" class="service-btn">Read More</a>
        </div>
      </div>

      <!-- Spoken English Online -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="service-card">
          <div class="icon-box online">
            <i class="fas fa-video"></i>
          </div>
          <h4>Online Spoken English</h4>
          <p>
            Improve fluency, vocabulary, pronunciation, and communication skills
            through flexible online spoken English classes from home.
          </p>
          <a href="{{ route('englishonline')}}" class="service-btn">Read More</a>
        </div>
      </div>

      <!-- Spoken English Offline -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="service-card">
          <div class="icon-box offline">
            <i class="fas fa-users"></i>
          </div>
          <h4>Offline English Classes</h4>
          <p>
            Classroom-based spoken English training with group discussions,
            confidence-building activities, and personality development sessions.
          </p>
          <a href="{{ route('englishoffline')}}" class="service-btn">Read More</a>
        </div>
      </div>

      <!-- Visa Services -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
        <div class="service-card">
          <div class="icon-box visa">
            <i class="fas fa-passport"></i>
          </div>
          <h4>Visa Assistance</h4>
          <p>
            Get complete support for study, tourist, and work visas including
            documentation, SOP guidance, interview preparation, and application assistance.
          </p>
          <a href="{{ route('visa')}}" class="service-btn">Read More</a>
        </div>
      </div>

    </div>
  </div>
</section>




  </main>
@endsection




