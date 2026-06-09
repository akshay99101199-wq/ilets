@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

<style>

/* ===== HEADER ===== */
.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url('public/assets/assets/img/edu.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 150px 0 100px;
    text-align: center;
}

.page-header h1 {
    color: #fff;
    font-weight: 700;
    font-size: 42px;
    margin-bottom: 10px;
}

.page-header p{
    font-size: 16px;
    opacity: 0.9;
}

/* ===== CONTACT SECTION ===== */
.contact {
    background: #f4f7ff;
    padding: 70px 0;
}

/* LEFT CONTACT */
.left-contect {
    background: linear-gradient(135deg, #8825cfb5, #6d1b7b);
    padding: 30px;
    border-radius: 20px;
    height: 100%;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

/* INFO BOX */
.info-item {
    background: rgba(255,255,255,0.12);
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    transition: 0.3s ease;
    backdrop-filter: blur(5px);
}

.info-item:hover {
    transform: translateY(-5px);
    background: rgba(255,255,255,0.18);
}

.info-item i {
    font-size: 20px;
    color: #9e3491;
    background: #fff;
    width: 48px;
    height: 48px;
    min-width: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}

.info-item h4 {
    color: #fff;
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 600;
}

.info-item p {
    color: rgba(255,255,255,0.85);
    margin: 0;
    font-size: 14px;
    line-height: 1.6;
}

/* FOLLOW US */
.follow-us {
    margin-top: 30px;
}

.follow-us h4 {
    color: #fff;
    margin-bottom: 18px;
    font-weight: 600;
    font-size: 22px;
}

.social-icons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.social-icons a {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    background: #fff;
    color: #9e3491;
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* FORM CARD */
.cont-form {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.cont-form:hover {
    box-shadow: 0 18px 45px rgba(0,0,0,0.12);
}

/* INPUTS */
.php-email-form input,
.php-email-form textarea {
    width: 100%;
    border: 1px solid #d7d7d7;
    border-radius: 12px;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 14px;
    color: #333;
}

.php-email-form input::placeholder,
.php-email-form textarea::placeholder {
    color: #777;
    font-weight: 500;
}

.php-email-form input:focus,
.php-email-form textarea:focus {
    border-color: #1976d2;
    box-shadow: 0 0 8px rgba(25,118,210,0.2);
    outline: none;
}

/* BUTTON */
.php-email-form button {
    background: linear-gradient(135deg,#0d47a1,#1976d2);
    color: white;
    border: none;
    padding: 14px 35px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    font-size: 15px;
}

.php-email-form button:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(25,118,210,0.3);
}

/* STATUS */
.loading,
.error-message,
.sent-message {
    font-size: 14px;
    margin-bottom: 12px;
}

.sent-message {
    color: green;
}

.error-message {
    color: red;
}

/* MAP */
.map iframe{
    border: 0;
    width: 100%;
    height: 320px;
}

/* RESPONSIVE */
@media(max-width:991px){

    .left-contect{
        margin-bottom: 30px;
    }

    .page-header{
        padding: 120px 0 80px;
    }

    .page-header h1{
        font-size: 34px;
    }

    .cont-form{
        padding: 25px;
    }
}

@media(max-width:576px){

    .page-header h1{
        font-size: 28px;
    }

    .social-icons{
        justify-content: start;
    }

    .social-icons a{
        width: 42px;
        height: 42px;
        font-size: 18px;
    }
}

</style>

<main class="main">

<!-- PAGE HEADER -->
<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with us for your software development needs</p>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">

<div class="container" data-aos="fade-up">
    <div class="row gy-4">
        <div class="col-lg-4">
            <div class="left-contect">
                <div class="info-item" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                        <h4>Address</h4>
                        <p>Sco39, Basement, behind Old Bus Stand, Shakti Colony, Karnal, Haryana 132001</p>
                    </div>
                </div>
                <div class="info-item" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-telephone"></i>
                    <div>
                        <h4>Call Us</h4>
                        <p>+91 7206969466</p>
                    </div>
                </div>
                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-envelope"></i>
                    <div>
                        <h4>Email Us</h4>
                        <p>info@theassigner.com</p>
                    </div>
                </div>
                <div class="follow-us" data-aos="fade-up" data-aos-delay="400">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61557623896920&mibextid=kFxxJD" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/theassigner/" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@The_Assigner" target="_blank">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/theassigner/" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://x.com/the_assigner" target="_blank">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE FORM -->
        <div class="col-lg-8">

            <form action="forms/contact.php"
                  method="post"
                  class="php-email-form cont-form"
                  data-aos="fade-up"
                  data-aos-delay="200">

                <div class="row gy-3">

                    <div class="col-md-6">
                        <input type="text"
                               name="name"
                               placeholder="Your Name"
                               required>
                    </div>

                    <div class="col-md-6">
                        <input type="email"
                               name="email"
                               placeholder="Your Email"
                               required>
                    </div>

                    <div class="col-md-12">
                        <input type="text"
                               name="subject"
                               placeholder="Subject"
                               required>
                    </div>

                    <div class="col-md-12">
                        <textarea name="message"
                                  rows="6"
                                  placeholder="Write your message..."
                                  required></textarea>
                    </div>

                    <div class="col-md-12 text-center">

                        <div class="loading">Loading...</div>

                        <div class="error-message"></div>

                        <div class="sent-message">
                            Your message has been sent successfully ✅
                        </div>

                        <button type="submit">
                            Send Message
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- MAP -->
<div class="map mt-5" data-aos="fade-up" data-aos-delay="300">

    <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
    frameborder="0"
    allowfullscreen=""
    loading="lazy">
    </iframe>

</div>

</section>

</main>

@endsection