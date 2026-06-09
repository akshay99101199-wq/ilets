@extends('layouts.app')
@section('title', 'Home')
@section('content')


<style>

/* ===== HERO BANNER ===== */
.hero{
    position:relative;
    height:320px;
    background:linear-gradient(135deg,#1a237e,#3f51b5);
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    overflow:hidden;
}
.card h2 {
    font-size: 25px;
    font-weight: 600;
}
.hero h1{
    font-size:42px;
        color: #fff;
}

.hero p{
    margin-top:10px;
    opacity:0.9;
     color: #fff;
}

/* shapes */
.shape{
    position:absolute;
    border-radius:50%;
    background:#fff;
    opacity:0.15;
}

.shape1{width:200px;height:200px;top:-60px;left:-60px;}
.shape2{width:300px;height:300px;bottom:-120px;right:-120px;}
.shape3{width:150px;height:150px;top:40%;left:75%;}

/* wave */
.hero::after{
    content:"";
    position:absolute;
    bottom:-1px;
    width:100%;
    height:80px;
    background:#f4f6fb;
    border-radius:50% 50% 0 0;
}

.hero:before {
    content: "";
    background: color-mix(in srgb, var(--background-color), #8123be00 60%);
    position: absolute;
    inset: 0;
    z-index: 2;
}

/* ===== CONTAINER ===== */
.container{
    max-width:1100px;
    margin:-18px auto 40px;
    padding:20px;
}

/* ===== CARD ===== */
.card{
    background:#fff;
    border-radius:14px;
    padding:25px;
    margin-bottom:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

/* headings */
h2{
    color:#1a237e;
    margin-bottom:10px;
}

ul{padding-left:20px;}
li{margin-bottom:6px;}

/* highlight */
.highlight{
    background:#eef3ff;
    padding:15px;
    border-left:4px solid #3f51b5;
    border-radius:8px;
    margin:15px 0;
}

/* responsive */
@media(max-width:768px){
.hero h1{font-size:28px;}
.container{margin-top:-40px;}
}
</style>

<!-- HERO -->
<section class="hero">
    <div>
        <h1>Privacy Policy</h1>
        <p>The Assigner • Your data is safe & protected</p>
    </div>
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
</section>

<div class="container">

<div class="card">
<p>This Privacy Notice for <strong>The Assigner</strong> describes how we collect, use, and protect your personal information when you use our services.</p>
</div>

<div class="card">
<h2>Services Covered</h2>
<ul>
<li>Website: theassigner.com</li>
<li>Mobile & Facebook Applications</li>
<li>IELTS, PTE, German & English Courses</li>
<li>Marketing, sales, and events</li>
</ul>
</div>

<div class="card">
<h2>1. What Information Do We Collect?</h2>

<div class="highlight">
<strong>Personal Information:</strong>
<ul>
<li>Names</li>
<li>Phone numbers</li>
<li>Email addresses</li>
<li>Mailing & Billing addresses</li>
<li>Account credentials</li>
</ul>
</div>

<div class="highlight">
<strong>2. How Do We Process Your Information?
</strong>
<p>We process personal information for various reasons, including:
</p>
<ul>
<li>Account Management: To create and authenticate your account
</li>
<li>Communication: To send important updates and respond to your queries
</li>
<li>Security: To prevent fraud and ensure the safety of our services
</li>
<li>Service Improvement: To enhance and optimize our services
</li>
</ul>
</div>
</div>

<div class="card">
<h2>2. How Do We Process Your Information?</h2>
<ul>
<li>Account Management</li>
<li>Communication</li>
<li>Security & fraud prevention</li>
<li>Service improvement</li>
</ul>
</div>

<div class="card">
<h2>3. What Legal Bases Do We Rely on to Process Your Personal Information?
</h2>
<p>We process your personal information based on valid legal bases, such as:

</p>
<ul>
<li>Consent: When you have granted permission to process your data
</li>
<li>Legal Obligations: To comply with legal requirements
</li>
<li>Vital Interests: When necessary to protect someone's vital interests
</li>
</ul>
</div>

<div class="card">
<h2>4. We may share your personal information in specific situations, such as:
</h2>
<ul>
<li>Business Transfers: In connection with mergers or acquisitions</li>
<li>Legal Requirements: When required by law or legal process</li>
<li>Service Providers: With trusted third-party service providers</li>
</ul>
</div>

<div class="card">
<h2>5. Do We Use Cookies and Other Tracking Technologies?
</h2>
<p>Yes, we use cookies and similar technologies for analytics and advertising purposes. These help us understand how you use our services and improve your experience.
</p>
</div>

<div class="card">
<h2>6. How Do We Handle Your Social Logins?
</h2>
<p>If you choose to log in via social media accounts, we may receive profile information such as your name, email address, and profile picture. This information is used to create and manage your account with us.

</p>
</div>

<div class="card">
<h2>7. How Long Do We Keep Your Information?
</h2>
We retain personal information for as long as needed to fulfill the purposes outlined in this Privacy Notice unless otherwise required by law. The retention period may vary depending on the type of data and its purpose.
</div>

<div class="card">
<h2>8. How Do We Keep Your Information Safe?
</h2>
<p>We implement appropriate security measures to protect your information, including encryption, access controls, and regular security assessments. However, no system is 100% secure, and we cannot guarantee absolute security of your data.
</p>
</div>

<div class="card">
<h2>9. Do We Collect Information From Minors?
</h2>
<p>We do not knowingly collect data from children under 18 years of age. If we discover that we have collected such information, we will delete it promptly. If you believe we might have collected information from a minor, please contact us immediately.

</p>
</div>

<div class="card">
<h2>10. What Are Your Privacy Rights?
/h2>
<ul>
<li>Access your data</li>
<li>Correct information</li>
<li>Delete data</li>
<li>Object to processing</li>
<li>Data portability</li>
</ul>
</div>

<div class="card">
<h2>11. Controls for Do-Not-Track Features
</h2>
<p>We currently do not respond to Do-Not-Track signals from browsers. However, you can control tracking through your browser settings and our cookie preferences.

</p>
</div>

<div class="card">
<h2>12. Do United States Residents Have Specific Privacy Rights?
</h2>
<ul>
<li>Right to know collected data</li>
<li>Right to request deletion of personal information
</li>
<li>Right to opt-out of the sale of personal information</li>
<li>Right to non-discrimination for exercising privacy rights</li>
</ul>
</div>

<div class="card">
<h2>13. Do We Make Updates to This Notice?
</h2>
<p>Yes, we will update this Privacy Notice as necessary to remain compliant with relevant laws. We will notify you of any material changes by posting the new Privacy Notice on our website and updating the "Last Updated" date.

</p>
</div>

<div class="card">
<h2>14. How Can You Contact Us About This Notice?</h2>
<p><strong>Email:</strong> info@theassigner.com</p>
<p><strong>Address:</strong><br>
Sco39, Basement, Behind Old Bus Stand<br>
Shakti Colony, Karnal, Haryana 132001, India</p>
</div>

<div class="card">
<h2>15. How Can You Review, Update, or Delete the Data We Collect From You?
</h2>
<p>You may review, update, or request deletion of your personal information by visiting our Contact Us page. We will respond to your request within a reasonable timeframe.</p>
</div>



</div>




@endsection





