@extends('layouts.app')
@section('title', 'Terms & Conditions')
@section('content')


<style>

/* HERO */
.hero{
    position:relative;
    height:320px;
    background:linear-gradient(135deg,#0d47a1,#1976d2);
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
.hero:before {
    content: "";
    background: color-mix(in srgb, var(--background-color), #8123be00 60%);
    position: absolute;
    inset: 0;
    z-index: 2;
}

.hero h1{font-size:42px;}
.hero p{margin-top:10px;opacity:0.9;}

/* shapes */
.shape{
    position:absolute;
    border-radius:50%;
    background:#fff;
    opacity:0.1;
}
.shape1{
    width:200px;
    height:200px;
    top:-60px;
    left:-60px;
}
.shape2{width:300px;
height:300px;
bottom:-120px;
right:-120px;
}
.shape3{
    width:150px;
    height:150px;
    top:40%;
    left:75%;
}

.hero::after{
    content:"";
    position:absolute;
    bottom:-1px;
    width:100%;
    height:80px;
    background:#f4f6fb;
    border-radius:50% 50% 0 0;
}

/* PAGE LAYOUT */
.page-layout{
    display:flex;
    gap:25px;
    max-width:1200px;
    margin:-40px auto 40px;
    padding:20px;
}

/* SIDEBAR */
.sidebar{
    width:260px;
    position:sticky;
    top:20px;
    height:fit-content;
}

.toc{
    background:#fff;
    border-radius:14px;
    padding:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);
}

.toc h2{
    font-size:18px;
    margin-bottom:10px;
    color:#0d47a1;
}

.toc a{
    display:block;
    padding:8px 10px;
    border-radius:8px;
    text-decoration:none;
    color:#333;
    font-size:14px;
    transition:0.3s;
}

.toc a:hover{
    background:#e3f2fd;
    color:#1976d2;
    transform:translateX(5px);
}

/* CONTENT */
.content{
    flex:1;
}

/* CARD */
.card{
    background:#fff;
    border-radius:16px;
    padding:25px;
    margin-bottom:20px;
    box-shadow:0 12px 30px rgba(0,0,0,0.06);
    transition:0.3s;
}

.card:hover{transform:translateY(-5px);}

h2{color:#0d47a1;margin-bottom:10px;}
h3{margin-top:15px;color:#333;}

ul{padding-left:20px;}
li{margin-bottom:6px;}

/* RESPONSIVE */
@media(max-width:900px){
    .page-layout{flex-direction:column;}
    .sidebar{width:100%;position:relative;}
}

</style>

<!-- HERO -->
<section class="hero">
    <div>
        <h1 class="text-white">Terms & Conditions</h1>
        <p class="text-white">The Assigner • Legal Terms & User Agreement</p>
    </div>
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
</section>

<div class="page-layout">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="toc">
            <h2>Contents</h2>
            <a href="#services">1. Our Services</a>
            <a href="#ip">2. Intellectual Property</a>
            <a href="#user">3. User Representations</a>
            <a href="#purchase">5. Payments</a>
            <a href="#subscription">6. Subscriptions</a>
            <a href="#prohibited">8. Prohibited Activities</a>
            <a href="#termination">13. Termination</a>
            <a href="#law">15. Governing Law</a>
            <a href="#contact">25. Contact</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="card">
            <p><strong>Last updated April 15, 2026</strong></p>
            <p>These Legal Terms constitute a legally binding agreement between you and <strong>The Assigner</strong>. By using our services, you agree to these terms.</p>
        </div>

        <div id="services" class="card">
            <h2>1. Our Services</h2>
            <p>We provide language training services including German, IELTS, PTE, and English speaking courses.</p>
        </div>

        <div id="ip" class="card">
            <h2>2. Intellectual Property Rights</h2>
            <p>All content belongs to The Assigner.</p>
            <h3>Your Usage</h3>
            <ul>
                <li>Personal use only</li>
                <li>No resale</li>
                <li>No copying</li>
            </ul>
        </div>

        <div id="user" class="card">
            <h2>3. User Representations</h2>
            <ul>
                <li>Accurate info</li>
                <li>No illegal use</li>
                <li>Follow laws</li>
            </ul>
        </div>

        <div class="card">
            <h2>4. User Registration</h2>
            <p>You are responsible for your account.</p>
        </div>

        <div id="purchase" class="card">
            <h2>5. Purchases & Payment</h2>
            <ul>
                <li>PayPal, Visa accepted</li>
                <li>Prices may change</li>
                <li>Payments in Euros</li>
            </ul>
        </div>

        <div id="subscription" class="card">
            <h2>6. Subscriptions</h2>
            <ul>
                <li>Auto-renewal</li>
                <li>Cancel anytime</li>
            </ul>
        </div>

        <div class="card">
            <h2>7. Policy</h2>
            <p>No refunds.</p>
        </div>

        <div id="prohibited" class="card">
            <h2>8. Prohibited Activities</h2>
            <ul>
                <li>No hacking</li>
                <li>No illegal actions</li>
                <li>No bots</li>
            </ul>
        </div>

        <div id="termination" class="card">
            <h2>13. Termination</h2>
            <p>Access may be terminated anytime.</p>
        </div>

        <div id="law" class="card">
            <h2>15. Governing Law</h2>
            <p>Governed by Indian law.</p>
        </div>

        <div class="card">
            <h2>16. Dispute Resolution</h2>
            <p>Arbitration in Karnal, Haryana.</p>
        </div>

        <div id="contact" class="card">
            <h2>25. Contact Us</h2>
            <p><strong>The Assigner</strong></p>
            <p>Sco39, Basement, behind Old Bus Stand<br>Karnal, Haryana</p>
            <p>Phone: +91 7206969466</p>
            <p>Email: info@theassigner.com</p>
        </div>

    </div>
</div>

<!-- ACTIVE LINK SCRIPT -->
<script>
const links = document.querySelectorAll('.toc a');

window.addEventListener('scroll', () => {
    let fromTop = window.scrollY;

    links.forEach(link => {
        let section = document.querySelector(link.getAttribute('href'));

        if (
            section.offsetTop <= fromTop + 120 &&
            section.offsetTop + section.offsetHeight > fromTop + 120
        ) {
            link.style.background = '#1976d2';
            link.style.color = '#fff';
        } else {
            link.style.background = 'transparent';
            link.style.color = '#333';
        }
    });
});
</script>

@endsection





