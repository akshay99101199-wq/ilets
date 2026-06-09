@extends('layouts.app')
@section('title','blog')
@section('content')

<style>
  .recent-card {
  background: #fff;
  padding: 10px;
  border-radius: 12px;
  transition: 0.3s;
  align-items: center;
}

.recent-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.recent-img {
  width: 90px;
  height: 90px;
  object-fit: cover;
  border-radius: 10px;
}

.tag {
  font-size: 12px;
  background: #eef3ff;
  color: #c33bdb;
  padding: 3px 8px;
  border-radius: 5px;
}
  </style>
<main class="main">

<!-- Hero -->
<section class="services-hero d-flex align-items-center text-center text-white">
  <div class="container">
    
    <h1 class="hero-title mb-3">
      Learn Smarter, <span>Achieve Higher</span>
    </h1>
    
    <p class="hero-subtitle mb-4">
      IELTS | PTE | German Language Tips & Resources
    </p>

    <!-- <div class="hero-buttons">
      <a href="#" class="btn btn-primary me-2">Start Learning</a>
      <a href="#" class="btn btn-outline-light">Free Demo</a>
    </div> -->

  </div>
</section>

<!-- Content -->
<div class="container my-5">
  <div class="row">

    <!-- Blog Posts -->
    <div class="col-lg-10">
      <div class="row">

        <!-- Blog Card -->
        <div class="col-md-4 mb-4">
          <div class="card edu-card">
            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350">
            <div class="card-body">
              <div class="mb-2">
                <span class="tag">IELTS</span>
                <span class="tag">Writing</span>
              </div>
              <h5>How to Score 7+ in IELTS Writing</h5>
              <p>Learn structure, vocabulary & tips to boost your score.</p>
              <small>By Admin | 5 min read</small>
            </div>
          </div>
        </div>

        <!-- Blog Card -->
        <div class="col-md-4 mb-4">
          <div class="card edu-card">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0">
            <div class="card-body">
              <div class="mb-2">
                <span class="tag">PTE</span>
                <span class="tag">Speaking</span>
              </div>
              <h5>PTE Speaking Tricks</h5>
              <p>Improve fluency and pronunciation quickly.</p>
              <small>By Trainer | 4 min read</small>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card edu-card">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0">
            <div class="card-body">
              <div class="mb-2">
                <span class="tag">PTE</span>
                <span class="tag">Speaking</span>
              </div>
              <h5>PTE Speaking Tricks</h5>
              <p>Improve fluency and pronunciation quickly.</p>
              <small>By Trainer | 4 min read</small>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card edu-card">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0">
            <div class="card-body">
              <div class="mb-2">
                <span class="tag">PTE</span>
                <span class="tag">Speaking</span>
              </div>
              <h5>PTE Speaking Tricks</h5>
              <p>Improve fluency and pronunciation quickly.</p>
              <small>By Trainer | 4 min read</small>
            </div>
          </div>
        </div>

        <!-- Blog Card -->
        <div class="col-md-4 mb-4">
          <div class="card edu-card">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b">
            <div class="card-body">
              <div class="mb-2">
                <span class="tag">German</span>
                <span class="tag">A1</span>
              </div>
              <h5>German A1 Basics</h5>
              <p>Start your German journey with essential words.</p>
              <small>By Expert | 6 min read</small>
            </div>
          </div>
        </div>

        <!-- Blog Card -->
        <div class="col-md-4 mb-4">
          <div class="card edu-card">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">
            <div class="card-body">
              <div class="mb-2">
                <span class="tag">Tips</span>
              </div>
              <h5>Study Plan for Students</h5>
              <p>Organize your daily routine for success.</p>
              <small>By Mentor | 3 min read</small>
            </div>
          </div>
        </div>

      </div>

         <!-- resenct blog -->

<!-- Recent Blogs Section -->
<section class="recent-blogs py-5 bg-light">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="fw-bold">Recent Blogs</h3>
      <!-- <a href="#" class="text-primary fw-semibold">View All →</a> -->
    </div>

    <div class="row">

      <!-- Blog Item -->
      <div class="col-md-6 mb-4">
        <div class="recent-card d-flex">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="recent-img">
          <div class="ms-3">
            <span class="tag">IELTS</span>
            <h6 class="mt-2 mb-1">Top IELTS Reading Tips</h6>
            <small class="text-muted">2 days ago • 5 min read</small>
          </div>
        </div>
      </div>

      <!-- Blog Item -->
      <div class="col-md-6 mb-4">
        <div class="recent-card d-flex">
          <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6" class="recent-img">
          <div class="ms-3">
            <span class="tag">PTE</span>
            <h6 class="mt-2 mb-1">PTE Listening Hacks</h6>
            <small class="text-muted">3 days ago • 4 min read</small>
          </div>
        </div>
      </div>

      <!-- Blog Item -->
      <div class="col-md-6 mb-4">
        <div class="recent-card d-flex">
          <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7" class="recent-img">
          <div class="ms-3">
            <span class="tag">German</span>
            <h6 class="mt-2 mb-1">German Daily Sentences</h6>
            <small class="text-muted">5 days ago • 6 min read</small>
          </div>
        </div>
      </div>

      <!-- Blog Item -->
      <div class="col-md-6 mb-4">
        <div class="recent-card d-flex">
          <img src="https://images.unsplash.com/photo-1517520287167-4bbf64a00d66" class="recent-img">
          <div class="ms-3">
            <span class="tag">Tips</span>
            <h6 class="mt-2 mb-1">How to Stay Consistent</h6>
            <small class="text-muted">1 week ago • 3 min read</small>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
    </div>

 

    <!-- Sidebar -->
    <div class="col-lg-2 sidebar">

      <div class="widget">
        <h5>Search</h5>
        <input type="text" class="form-control" placeholder="Search courses...">
      </div>

      <div class="widget">
        <h5>Categories</h5>
        <ul class="list-unstyled">
          <li>IELTS Preparation</li>
          <li>PTE Coaching</li>
          <li>German Language</li>
          <li>Study Tips</li>
        </ul>
      </div>

      <div class="widget">
        <h5>Latest Posts</h5>
        <p>Band 9 Vocabulary List</p>
        <p>PTE Score Boost Tips</p>
        <p>German Grammar Guide</p>
      </div>

    </div>

  </div>
</div>

  </main>
@endsection



