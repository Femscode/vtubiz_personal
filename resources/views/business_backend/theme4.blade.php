<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $user->brand_name }} | {{ $user->description }} </title>
    
    <!-- Enhanced Meta Tags for WhatsApp Sharing -->
    <meta name="description" content="{{ $user->description ?? 'Top-Up, Pay Bills, Stay Connected with ' . $user->brand_name }}">
    <meta name="keywords" content="airtime, data plans, bill payment, cable subscription, {{ $user->brand_name }}">
    
    <!-- Open Graph Meta Tags for WhatsApp -->
    <meta property="og:title" content="{{ $user->brand_name }} | {{ $user->description ?? 'Top-Up, Pay Bills, Stay Connected' }}">
    <meta property="og:description" content="{{ $user->about_us ?? 'Experience seamless airtime top-up, affordable data plans, cable subscriptions, and bill payments with ' . $user->brand_name }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    @if($user->logo)
    <meta property="og:image" content="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}">
    @elseif($user->image_1)
    <meta property="og:image" content="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_1 }}">
    @else
    <meta property="og:image" content="{{ asset('phuz_asset/assets/img/hero-carousel/hero-carousel-3.svg') }}">
    @endif
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="{{ $user->brand_name }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $user->brand_name }} | {{ $user->description ?? 'Top-Up, Pay Bills, Stay Connected' }}">
    <meta name="twitter:description" content="{{ $user->about_us ?? 'Experience seamless airtime top-up, affordable data plans, cable subscriptions, and bill payments with ' . $user->brand_name }}">
    @if($user->logo)
    <meta name="twitter:image" content="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}">
    @elseif($user->image_1)
    <meta name="twitter:image" content="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_1 }}">
    @else
    <meta name="twitter:image" content="{{ asset('phuz_asset/assets/img/hero-carousel/hero-carousel-3.svg') }}">
    @endif
    
    <!-- WhatsApp Specific Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta name="theme-color" content="#25D366">
    
    <!-- Favicon -->
    @if($user->logo)
    <link rel="icon" type="image/png" href="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}">
    @endif
  
  <!-- Modern Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('brand_images/'.$user->logo) }}">
  
  <!-- CSS Libraries -->
  <link href="{{ asset('theme1/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme1/assets/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Custom Modern Styles -->
  <style>
    :root {
      --primary-color: {{ $user->brand_color ?? '#6366f1' }};
      --primary-dark: #4f46e5;
      --primary-light: #a5b4fc;
      --secondary-color: #f59e0b;
      --accent-color: #10b981;
      --text-primary: #1f2937;
      --text-secondary: #6b7280;
      --bg-primary: #ffffff;
      --bg-secondary: #f9fafb;
      --bg-dark: #111827;
      --border-color: #e5e7eb;
      --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --gradient-primary: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
      --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --gradient-accent: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      color: var(--text-primary);
      background-color: var(--bg-primary);
      overflow-x: hidden;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Modern Header */
    .modern-header {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border-color);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      transition: all 0.3s ease;
    }
    
    .modern-header.scrolled {
      background: rgba(255, 255, 255, 0.98);
      box-shadow: var(--shadow-lg);
    }
    
    .header-top {
      background: var(--gradient-primary);
      color: white;
      padding: 8px 0;
      font-size: 14px;
      text-align: center;
    }
    
    .navbar-modern {
      padding: 15px 0;
      transition: all 0.3s ease;
    }
    
    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 700;
      font-size: 24px;
      color: var(--text-primary);
      text-decoration: none;
    }
    
    .brand-logo {
      width: 45px;
      height: 45px;
      border-radius: 12px;
      object-fit: cover;
      box-shadow: var(--shadow-md);
    }
    
    .nav-links {
      display: flex;
      align-items: center;
      gap: 30px;
      list-style: none;
    }
    
    .nav-link {
      color: var(--text-primary);
      text-decoration: none;
      font-weight: 500;
      font-size: 15px;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .nav-link:hover {
      color: var(--primary-color);
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--gradient-primary);
      transition: width 0.3s ease;
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    .cta-buttons {
      display: flex;
      gap: 15px;
      align-items: center;
    }
    
    .btn-modern {
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    
    .btn-primary {
      background: var(--gradient-primary);
      color: white;
      box-shadow: var(--shadow-md);
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-xl);
      color: white;
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary-color);
      border: 2px solid var(--primary-color);
    }
    
    .btn-outline:hover {
      background: var(--primary-color);
      color: white;
      transform: translateY(-2px);
    }
    
    /* Hero Section */
    .hero-section {
      margin-top: 80px;
      min-height: 100vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
      opacity: 0.3;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 600px;
      color: white;
    }
    
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 8px 16px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 24px;
    }
    
    .hero-title {
      font-family: 'Poppins', sans-serif;
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 800;
      line-height: 1.1;
      margin-bottom: 24px;
      background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .hero-subtitle {
      font-size: 20px;
      line-height: 1.6;
      margin-bottom: 32px;
      opacity: 0.9;
    }
    
    .hero-actions {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    
    .hero-visual {
      position: absolute;
      right: -10%;
      top: 50%;
      transform: translateY(-50%);
      width: 50%;
      height: 80%;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 30px;
      backdrop-filter: blur(20px);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    /* Services Section */
    .services-section {
      padding: 100px 0;
      background: var(--bg-secondary);
    }
    
    .section-header {
      text-align: center;
      margin-bottom: 80px;
    }
    
    .section-badge {
      display: inline-block;
      background: var(--gradient-primary);
      color: white;
      padding: 8px 20px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 16px;
    }
    
    .section-title {
      font-family: 'Poppins', sans-serif;
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 16px;
    }
    
    .section-subtitle {
      font-size: 18px;
      color: var(--text-secondary);
      max-width: 600px;
      margin: 0 auto;
    }
    
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 60px;
    }
    
    .service-card {
      background: white;
      border-radius: 20px;
      padding: 40px 30px;
      text-align: center;
      box-shadow: var(--shadow-md);
      transition: all 0.3s ease;
      border: 1px solid var(--border-color);
      position: relative;
      overflow: hidden;
    }
    
    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--gradient-primary);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }
    
    .service-card:hover::before {
      transform: scaleX(1);
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-xl);
    }
    
    .service-icon {
      width: 80px;
      height: 80px;
      background: var(--gradient-primary);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 24px;
      transition: all 0.3s ease;
    }
    
    .service-card:hover .service-icon {
      transform: scale(1.1) rotate(5deg);
    }
    
    .service-icon svg {
      width: 40px;
      height: 40px;
      fill: white;
    }
    
    .service-title {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 12px;
      color: var(--text-primary);
    }
    
    .service-description {
      color: var(--text-secondary);
      line-height: 1.6;
    }
    
    /* About Section */
    .about-section {
      padding: 100px 0;
      background: white;
    }
    
    .about-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }
    
    .about-text h2 {
      font-family: 'Poppins', sans-serif;
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 24px;
    }
    
    .about-text p {
      font-size: 18px;
      line-height: 1.8;
      color: var(--text-secondary);
      margin-bottom: 32px;
    }
    
    .about-image {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow-xl);
    }
    
    .about-image img {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }
    
    /* Pricing Section */
    .pricing-section {
      padding: 100px 0;
      background: var(--bg-secondary);
    }
    
    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 60px;
    }
    
    .pricing-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: var(--shadow-md);
      transition: all 0.3s ease;
      border: 1px solid var(--border-color);
    }
    
    .pricing-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-xl);
    }
    
    .pricing-header {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .network-logo {
      width: 60px;
      height: 60px;
      border-radius: 15px;
      margin: 0 auto 16px;
      box-shadow: var(--shadow-md);
    }
    
    .network-name {
      font-size: 18px;
      font-weight: 600;
      color: var(--text-primary);
    }
    
    .pricing-table {
      width: 100%;
      border-collapse: collapse;
    }
    
    .pricing-table tr {
      border-bottom: 1px solid var(--border-color);
    }
    
    .pricing-table td {
      padding: 12px 0;
      font-size: 14px;
    }
    
    .pricing-table td:last-child {
      text-align: right;
      font-weight: 600;
      color: var(--primary-color);
    }
    
    /* Features Section */
    .features-section {
      padding: 100px 0;
      background: white;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      margin-top: 60px;
    }
    
    .feature-item {
      display: flex;
      gap: 20px;
      padding: 30px;
      background: var(--bg-secondary);
      border-radius: 20px;
      transition: all 0.3s ease;
    }
    
    .feature-item:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-lg);
    }
    
    .feature-number {
      width: 60px;
      height: 60px;
      background: var(--gradient-primary);
      color: white;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: 700;
      flex-shrink: 0;
    }
    
    .feature-content h3 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 12px;
      color: var(--text-primary);
    }
    
    .feature-content p {
      color: var(--text-secondary);
      line-height: 1.6;
    }
    
    /* Footer */
    .modern-footer {
      background: var(--bg-dark);
      color: white;
      padding: 80px 0 30px;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 40px;
      margin-bottom: 50px;
    }
    
    .footer-brand h3 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 16px;
    }
    
    .footer-brand p {
      color: #9ca3af;
      line-height: 1.6;
      margin-bottom: 24px;
    }
    
    .footer-section h4 {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 20px;
    }
    
    .footer-links {
      list-style: none;
    }
    
    .footer-links li {
      margin-bottom: 12px;
    }
    
    .footer-links a {
      color: #9ca3af;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .footer-links a:hover {
      color: white;
    }
    
    .footer-bottom {
      border-top: 1px solid #374151;
      padding-top: 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }
    
    .social-links {
      display: flex;
      gap: 15px;
    }
    
    .social-link {
      width: 40px;
      height: 40px;
      background: #374151;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .social-link:hover {
      background: var(--primary-color);
      transform: translateY(-2px);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .hero-content {
        text-align: center;
      }
      
      .hero-visual {
        display: none;
      }
      
      .about-content {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      
      .footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
      }
      
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
    }
    
    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .animate-fade-in-up {
      animation: fadeInUp 0.6s ease-out;
    }
    
    /* Utility Classes */
    .text-gradient {
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .glass-effect {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
  </style>
  
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-M8S4MT3EYG');
  </script>
</head>

<body>
  <!-- Header -->
  <header class="modern-header" id="header">
    <div class="header-top">
      <div class="container">
        <span>🎉 Super Value Deals - Save more with {{ $user->brand_name }}</span>
      </div>
    </div>
    
    <nav class="navbar-modern">
      <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <a href="#" class="navbar-brand">
            @if($user->logo !== null)
              <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" alt="{{ $user->brand_name }}" class="brand-logo" />
            @endif
            <span>{{ $user->brand_name }}</span>
          </a>
          
          <ul class="nav-links">
            <li><a href="#" class="nav-link">Home</a></li>
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#pricing" class="nav-link">Pricing</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="https://wa.me/234{{ substr($user->phone,1) }}" class="nav-link">Contact</a></li>
          </ul>
          
          <div class="cta-buttons">
            <a href="/login" class="btn-modern btn-outline">Login</a>
            <a href="/register" class="btn-modern btn-primary">
              <i class="bi bi-person-plus"></i>
              Get Started
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Hero Section -->
    <section class="hero-section" id="hero">
      <div class="container">
        <div class="hero-content" data-aos="fade-up">
          <div class="hero-badge">
            <i class="bi bi-lightning-charge"></i>
            {{ $user->description ?? $user->brand_name }}
          </div>
          
          <h1 class="hero-title" style="font-family: {{ $user->font_family ?? 'Poppins' }}">
            {{ $user->heading_1 ?? "Digital Solutions That Transform Your Business" }}
          </h1>
          
          <p class="hero-subtitle">
            {{ $user->sub_heading_1 ?? "Experience seamless digital transactions with our comprehensive platform for airtime, data, bills, and more." }}
          </p>
          
          <div class="hero-actions">
            <a href="/register" class="btn-modern btn-primary">
              <i class="bi bi-rocket-takeoff"></i>
              Start Your Journey
            </a>
           
          </div>
        </div>
        
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
          <div style="text-align: center; color: white;">
            <i class="bi bi-phone" style="font-size: 4rem; margin-bottom: 20px;"></i>
            <h3>Digital Excellence</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="section-badge">Our Services</span>
          <h2 class="section-title" style="color: {{ $user->brand_color ?? '#6366f1' }}">Comprehensive Digital Solutions</h2>
          <p class="section-subtitle">Everything you need for your digital lifestyle, all in one powerful platform</p>
        </div>
        
        <div class="services-grid">
          <div class="service-card" data-aos="fade-up" data-aos-delay="100">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M21 16.42l-4.42-4.42a1.5 1.5 0 0 0-2.12 0L12 14.46l-2.46-2.46a1.5 1.5 0 0 0-2.12 0L3 16.42V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v11.42z"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
              </svg>
            </div>
            <h3 class="service-title">Airtime Top-Up</h3>
            <p class="service-description">Instant airtime recharge at discounted rates. Stay connected with lightning-fast top-ups.</p>
          </div>
          
          <div class="service-card" data-aos="fade-up" data-aos-delay="200">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
              </svg>
            </div>
            <h3 class="service-title">Data Bundles</h3>
            <p class="service-description">Affordable data plans for all networks. Browse, stream, and work without limits.</p>
          </div>
          
          <div class="service-card" data-aos="fade-up" data-aos-delay="300">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 12H3V5h18v10z"/>
              </svg>
            </div>
            <h3 class="service-title">Cable TV</h3>
            <p class="service-description">Subscribe to your favorite TV packages. Entertainment made simple and affordable.</p>
          </div>
          
          <div class="service-card" data-aos="fade-up" data-aos-delay="400">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M9 21c0 .5.4 1 1 1h4c.6 0 1-.5 1-1v-1H9v1zm3-19C8.1 2 5 5.1 5 9c0 2.4 1.2 4.5 3 5.7V17h8v-2.3c1.8-1.2 3-3.3 3-5.7 0-3.9-3.1-7-7-7z"/>
              </svg>
            </div>
            <h3 class="service-title">Electricity Bills</h3>
            <p class="service-description">Pay your electricity bills instantly. Keep your power on with seamless payments.</p>
          </div>
          
          <div class="service-card" data-aos="fade-up" data-aos-delay="500">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
              </svg>
            </div>
            <h3 class="service-title">Exam Results</h3>
            <p class="service-description">Check your exam results quickly and securely. Academic success made accessible.</p>
          </div>
          
          <div class="service-card" data-aos="fade-up" data-aos-delay="600">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
              </svg>
            </div>
            <h3 class="service-title">Bulk SMS</h3>
            <p class="service-description">Reach thousands with our bulk SMS service. Marketing and communication simplified.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
      <div class="container">
        <div class="about-content">
          <div class="about-text" data-aos="fade-right">
            <h2 style="color: {{ $user->brand_color ?? '#6366f1' }}">About {{ $user->brand_name }}</h2>
            <p>{{ $user->about_us ?? "We are a leading digital solutions platform dedicated to transforming how you manage your digital transactions. Our comprehensive suite of services empowers individuals and businesses with seamless, secure, and affordable solutions for all their digital needs." }}</p>
            <a href="/register" class="btn-modern btn-primary">
              <i class="bi bi-arrow-right"></i>
              Join Us Today
            </a>
          </div>
          
          <div class="about-image" data-aos="fade-left">
            @if($user->image_1 !== null)
              <img src="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_1 }}" alt="About {{ $user->brand_name }}">
            @else
              <img src="{{ asset('assets/media/logos/fastpay_bg_2.jpg') }}" alt="About {{ $user->brand_name }}">
            @endif
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="section-badge">Data Pricing</span>
          <h2 class="section-title">Transparent & Affordable Rates</h2>
          <p class="section-subtitle">Choose from our competitive data plans across all major networks</p>
        </div>
        
        <div class="pricing-grid">
          <!-- MTN Data Plans -->
          <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-header">
              <img src="https://www.steadysub.com/frontend/img/mtn.png" alt="MTN" class="network-logo">
              <div class="network-name">MTN Data Plans</div>
            </div>
            <table class="pricing-table">
              @foreach($mtn as $data)
              <tr>
                <td>{{ $data->plan_name }}</td>
                <td>₦{{ number_format($data->admin_price) }}</td>
              </tr>
              @endforeach
            </table>
            <div style="margin-top: 20px;">
              <a href="/buydata" class="btn-modern btn-primary" style="width: 100%; justify-content: center;">
                <i class="bi bi-cart-plus"></i>
                Purchase Now
              </a>
            </div>
          </div>
          
          <!-- GLO Data Plans -->
          <div class="pricing-card" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-header">
              <img src="https://www.steadysub.com/frontend/img/glo.png" alt="GLO" class="network-logo">
              <div class="network-name">GLO Data Plans</div>
            </div>
            <table class="pricing-table">
              @foreach($glo as $data)
              <tr>
                <td>{{ $data->plan_name }}</td>
                <td>₦{{ number_format($data->admin_price) }}</td>
              </tr>
              @endforeach
            </table>
            <div style="margin-top: 20px;">
              <a href="/buydata" class="btn-modern btn-primary" style="width: 100%; justify-content: center;">
                <i class="bi bi-cart-plus"></i>
                Purchase Now
              </a>
            </div>
          </div>
          
          <!-- Airtel Data Plans -->
          <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-header">
              <img src="https://www.steadysub.com/frontend/img/airtel.png" alt="Airtel" class="network-logo">
              <div class="network-name">Airtel Data Plans</div>
            </div>
            <table class="pricing-table">
              @foreach($airtel as $data)
              <tr>
                <td>{{ $data->plan_name }}</td>
                <td>₦{{ number_format($data->admin_price) }}</td>
              </tr>
              @endforeach
            </table>
            <div style="margin-top: 20px;">
              <a href="/buydata" class="btn-modern btn-primary" style="width: 100%; justify-content: center;">
                <i class="bi bi-cart-plus"></i>
                Purchase Now
              </a>
            </div>
          </div>
          
          <!-- 9Mobile Data Plans -->
          <div class="pricing-card" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-header">
              <img src="https://www.steadysub.com/frontend/img/9mobile.png" alt="9Mobile" class="network-logo">
              <div class="network-name">9Mobile Data Plans</div>
            </div>
            <table class="pricing-table">
              @foreach($nmobile as $data)
              <tr>
                <td>{{ $data->plan_name }}</td>
                <td>₦{{ number_format($data->admin_price) }}</td>
              </tr>
              @endforeach
            </table>
            <div style="margin-top: 20px;">
              <a href="/buydata" class="btn-modern btn-primary" style="width: 100%; justify-content: center;">
                <i class="bi bi-cart-plus"></i>
                Purchase Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="section-badge">Why Choose Us</span>
          <h2 class="section-title">Powerful Features for Modern Users</h2>
          <p class="section-subtitle">Experience the future of digital transactions with our advanced features</p>
        </div>
        
        <div class="features-grid">
          <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-number">01</div>
            <div class="feature-content">
              <h3>Everything Automated</h3>
              <p>Enjoy fully automated payments and purchases. No manual intervention required - everything works seamlessly in the background.</p>
            </div>
          </div>
          
          <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-number">02</div>
            <div class="feature-content">
              <h3>Transaction Redo</h3>
              <p>Experience hassle-free transaction retries with our one-click Transaction Redo feature. Never lose a failed transaction again.</p>
            </div>
          </div>
          
          <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-number">03</div>
            <div class="feature-content">
              <h3>Bulk Purchase</h3>
              <p>Simplify bulk purchases with our streamlined process. Save time and money with volume transactions.</p>
            </div>
          </div>
          
          <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-number">04</div>
            <div class="feature-content">
              <h3>Schedule for Later</h3>
              <p>Plan your purchases ahead with our 'Schedule for Later Purchase' feature. Set it and forget it.</p>
            </div>
          </div>
          
          <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-number">05</div>
            <div class="feature-content">
              <h3>Beneficiary Management</h3>
              <p>Simplify future purchases by saving contacts, decoder numbers, and meter numbers with our smart beneficiary system.</p>
            </div>
          </div>
          
          <div class="feature-item" data-aos="fade-up" data-aos-delay="600">
            <div class="feature-number">06</div>
            <div class="feature-content">
              <h3>24/7 Support</h3>
              <p>Count on our round-the-clock support system for assistance anytime you need it. We're always here to help.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="modern-footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-brand">
          @if($user->logo !== null)
            <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" alt="{{ $user->brand_name }}" style="width: 50px; height: 50px; border-radius: 12px; margin-bottom: 16px;" />
          @endif
          <h3>{{ $user->brand_name }}</h3>
          <p>Your trusted partner for all digital transactions. Experience the future of digital payments with our comprehensive platform.</p>
          <div class="social-links">
            <a href="{{ $user->facebook ?? '#' }}" class="social-link">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="{{ $user->twitter ?? '#' }}" class="social-link">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="{{ $user->instagram ?? '#' }}" class="social-link">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="{{ $user->whatsapp ?? '#' }}" class="social-link">
              <i class="bi bi-whatsapp"></i>
            </a>
          </div>
        </div>
        
        <div class="footer-section">
          <h4>Company</h4>
          <ul class="footer-links">
            <li><a href="#about">About Us</a></li>
            <li><a href="#pricing">Data Prices</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Our Values</a></li>
          </ul>
        </div>
        
        <div class="footer-section">
          <h4>Services</h4>
          <ul class="footer-links">
            <li><a href="/data">Buy Data</a></li>
            <li><a href="/airtime">Airtime Purchase</a></li>
            <li><a href="/cable">TV Subscription</a></li>
            <li><a href="/electricity">Pay Light Bills</a></li>
            <li><a href="/bulksms">Bulk SMS</a></li>
            <li><a href="/examination">Exam Results</a></li>
          </ul>
        </div>
        
        <div class="footer-section">
          <h4>Contact Info</h4>
          <ul class="footer-links">
            <li><a href="tel:{{ $user->phone }}">{{ $user->phone }}</a></li>
            <li><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
          </ul>
        </div>
      </div>
      
      <div class="footer-bottom">
        <div>
          <span>© {{ $user->brand_name }} <span id="copyright"></span> - All rights reserved.</span>
        </div>
        <div>
          <span>Powered by Innovation & Excellence</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: true,
      offset: 100
    });
    
    // Header scroll effect
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 100) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
    
    // Copyright year
    document.getElementById('copyright').textContent = new Date().getFullYear();
  </script>
</body>
</html>