@extends('layouts.app')
@section('title','blog')
@section('content')


<style>

/* HERO */
.blog-hero{
    height: 350px;
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
    url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size: cover;
    background-position: center;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
}

.blog-hero h1{
    font-size:42px;
    font-weight:600;
}

.blog-hero p{
    opacity:0.8;
}

/* BLOG CARD */
.blog-content{
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

.blog-content img{
    width:100%;
    border-radius:10px;
    margin:20px 0;
}

/* SIDEBAR */
.sidebar{
    background:#fff;
    padding:20px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

.sidebar h5{
    margin-bottom:15px;
}

.sidebar a{
    display:block;
    color:#333;
    text-decoration:none;
    margin-bottom:10px;
}

.sidebar a:hover{
    color:#0d6efd;
}

/* AUTHOR */
.author-box{
    display:flex;
    gap:15px;
    margin-top:40px;
    padding:20px;
    background:#f1f5ff;
    border-radius:10px;
}

.author-box img{
    width:70px;
    height:70px;
    border-radius:50%;
}

/* COMMENTS */
.comment-box{
    margin-top:40px;
}

.comment{
    background:#fff;
    padding:15px;
    border-radius:10px;
    margin-bottom:15px;
}

.comment strong{
    color:#0d6efd;
}

.blog-hero h1 {
    font-size: 42px;
    font-weight: 600;
    color: #fff;
}

/* RESPONSIVE */
@media(max-width:768px){
    .blog-hero h1{
        font-size:28px;
    }
}

</style>

<!-- HERO -->
<section class="blog-hero">
    <div>
        <h1>Exploring Nature Beauty</h1>
        <p>Posted on April 20, 2026 • Travel Blog</p>
    </div>
</section>

<!-- CONTENT -->
<div class="container my-5">
<div class="row">

<!-- BLOG -->
<div class="col-lg-8">
<div class="blog-content">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet facilisis urna. Praesent ultricies eros sit amet lorem aliquet, nec volutpat dui dictum.</p>

    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">

    <h4>Beautiful Moments</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

    <blockquote class="blockquote bg-light p-3 rounded">
        "Travel makes you realize how small you are and how big the world is."
    </blockquote>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus.</p>

    <!-- AUTHOR -->
    <div class="author-box">
        <img src="https://i.pravatar.cc/100" alt="author">
        <div>
            <h6>John Doe</h6>
            <p class="mb-0">Travel Blogger & Photographer</p>
        </div>
    </div>

    <!-- COMMENTS -->
    <div class="comment-box">
        <h5>Comments (2)</h5>

        <div class="comment">
            <strong>Akanksha</strong>
            <p>Wow! This place looks amazing 😍</p>
        </div>

        <div class="comment">
            <strong>Rahul</strong>
            <p>Great blog! Waiting for more travel stories.</p>
        </div>

        <!-- COMMENT FORM -->
        <form class="mt-4">
            <input type="text" class="form-control mb-2" placeholder="Your Name">
            <textarea class="form-control mb-2" rows="3" placeholder="Your Comment"></textarea>
            <button class="btn btn-primary">Post Comment</button>
        </form>

    </div>

</div>
</div>

<!-- SIDEBAR -->
<div class="col-lg-4 mt-4 mt-lg-0">
<div class="sidebar">

    <h5>Recent Posts</h5>
    <a href="#">Mountain Adventure</a>
    <a href="#">Beach Travel Guide</a>
    <a href="#">Forest Camping Tips</a>

    <hr>

    <h5>Categories</h5>
    <a href="#">Travel</a>
    <a href="#">Nature</a>
    <a href="#">Lifestyle</a>

    <hr>

    <h5>Tags</h5>
    <span class="badge bg-primary">Travel</span>
    <span class="badge bg-success">Nature</span>
    <span class="badge bg-dark">Vlog</span>

</div>
</div>

</div>
</div>


@endsection



