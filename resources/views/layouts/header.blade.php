<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('public/assets/assets/img/logo-logo.png') }}" alt="">
    </a>

    <!-- Navbar -->
    <nav id="navmenu" class="navmenu">
      <ul>

        <li>
          <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
            Home
          </a>
        </li>

        <li>
          <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
            About
          </a>
        </li>

        <li>
          <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">
            Blog
          </a>
        </li>

        <!-- Services Dropdown -->
        <li class="dropdown">
          <a href="{{ route('services') }}"
             class="{{ request()->routeIs('services') || request()->routeIs('pteonline') || request()->routeIs('pteoffline') || request()->routeIs('ielts') || request()->routeIs('german') || request()->routeIs('englishonline') || request()->routeIs('englishoffline') || request()->routeIs('support') ? 'active' : '' }}">
             
            <span>Services</span>
            <i class="bi bi-chevron-down toggle-dropdown"></i>
          </a>

          <ul>
             <li><a href="{{ route('visa') }}" class="{{ request()->routeIs('visa') ? 'active' : '' }}">Visa </a></li>
          <!-- <li><a href="{{ route('pteonline') }}" class="{{ request()->routeIs('pteonline') ? 'active' : '' }}">PTE Online</a></li>  -->
            <li><a href="{{ route('pteoffline') }}" class="{{ request()->routeIs('pteoffline') ? 'active' : '' }}">PTE </a></li>
            <li><a href="{{ route('ielts') }}" class="{{ request()->routeIs('ielts') ? 'active' : '' }}">IELTS</a></li>
            <li><a href="{{ route('german') }}" class="{{ request()->routeIs('german') ? 'active' : '' }}">German</a></li>
            <li><a href="{{ route('englishonline') }}" class="{{ request()->routeIs('englishonline') ? 'active' : '' }}">English Online</a></li>
            <li><a href="{{ route('englishoffline') }}" class="{{ request()->routeIs('englishoffline') ? 'active' : '' }}">English Offline</a></li>
             <li><a href="https://www.assignmentthesis.com/" class="{{ request()->routeIs('support') ? 'active' : '' }}">Assistance Help</a></li> 
          </ul>
        </li>

        <li>
          <a href="{{ route('contactus') }}" class="{{ request()->routeIs('contactus') ? 'active' : '' }}">
            Contact Us
          </a>
        </li>

      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Button -->
    <!-- <a class="btn-getstarted {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">
      Get Started
    </a> -->

  </div>
</header>