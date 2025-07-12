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
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('brand_images/'.$user->logo) }}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: {{ $user->brand_color ?? '#6366f1' }};
            --primary-dark: #4f46e5;
            --primary-light: #a5b4fc;
            --secondary-color: #f8fafc;
            --accent-color: #06b6d4;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --gradient-primary: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: #ffffff;
            overflow-x: hidden;
        }
        
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Header Styles */
        .top-bar {
            background: var(--gradient-primary);
            color: white;
            padding: 8px 0;
            font-size: 14px;
            font-weight: 500;
        }
        
        .navbar-modern {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(99, 102, 241, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar-modern.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-lg);
            padding: 0.5rem 0;
        }
        
        .navbar-brand-modern {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .brand-logo {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            object-fit: cover;
            border: 2px solid var(--primary-light);
        }
        
        .nav-link-modern {
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link-modern:hover {
            color: var(--primary-color);
            background: rgba(99, 102, 241, 0.1);
        }
        
        .btn-primary-modern {
            background: var(--gradient-primary);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }
        
        .btn-primary-modern:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 100px 0;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx=".5" cy=".5" r=".5"><stop offset="0%" stop-color="%23ffffff" stop-opacity=".1"/><stop offset="100%" stop-color="%23ffffff" stop-opacity="0"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="150" fill="url(%23a)"/><circle cx="400" cy="700" r="120" fill="url(%23a)"/></svg>') no-repeat center center;
            background-size: cover;
            opacity: 0.1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hero-image {
            width: 120px;
            height: 120px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: var(--shadow-lg);
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.7;
        }
        
        /* Services Grid */
        .services-section {
            padding: 100px 0;
            background: #f8fafc;
        }
        
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid rgba(99, 102, 241, 0.1);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            transition: all 0.4s ease;
            z-index: 1;
            opacity: 0;
        }
        
        .service-card:hover::before {
            left: 0;
            opacity: 0.05;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-color);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            position: relative;
            z-index: 2;
        }
        
        .service-icon i {
            font-size: 2rem;
            color: white;
        }
        
        .service-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }
        
        .service-description {
            color: var(--text-light);
            font-size: 0.95rem;
            position: relative;
            z-index: 2;
        }
        
        /* About Section */
        .about-section {
            padding: 100px 0;
            background: white;
        }
        
        .about-card {
            background: var(--gradient-primary);
            border-radius: 24px;
            padding: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .about-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 3rem;
        }
        
        /* Pricing Section */
        .pricing-section {
            padding: 100px 0;
            background: #f8fafc;
        }
        
        .pricing-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            border: 1px solid rgba(99, 102, 241, 0.1);
            height: 100%;
        }
        
        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }
        
        .pricing-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .network-logo {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            margin: 0 auto 1rem;
            border: 3px solid var(--primary-light);
        }
        
        .network-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
        }
        
        .pricing-table {
            border: none;
        }
        
        .pricing-table td {
            padding: 0.75rem 1rem;
            border: none;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .pricing-table tr:hover {
            background: rgba(99, 102, 241, 0.05);
        }
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: var(--gradient-secondary);
            color: white;
        }
        
        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(10px);
        }
        
        .feature-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }
        
        .feature-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .feature-description {
            opacity: 0.9;
            line-height: 1.6;
        }
        
        /* Footer */
        .footer-modern {
            background: var(--text-dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 2rem;
        }
        
        .footer-logo {
            width: 50px;
            height: 50px;
            border-radius: 12px;
        }
        
        .footer-brand-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }
        
        .footer-section h6 {
            color: var(--primary-light);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .footer-link {
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            padding: 0.25rem 0;
        }
        
        .footer-link:hover {
            color: var(--primary-light);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-light);
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        .footer-bottom {
            border-top: 1px solid #334155;
            padding-top: 2rem;
            margin-top: 3rem;
            text-align: center;
            color: #94a3b8;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-card {
                padding: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 2rem;
            }
        }
        
        /* Animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .fade-in-up.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.6s ease;
        }
        
        .scale-in.animate {
            opacity: 1;
            transform: scale(1);
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
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span><i class="bi bi-star-fill me-2"></i>Super Value Deals - Save more with {{ $user->brand_name }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-modern fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand-modern" href="#">
                @if($user->logo !== null)
                    <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" alt="{{ $user->brand_name }}" class="brand-logo">
                @endif
                <span>{{ $user->brand_name }}</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link-modern" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-modern" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-modern" href="#data_prices">Data Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-modern" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-modern" href="https://wa.me/234{{ substr($user->phone,1) }}">Contact</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="/register" class="btn btn-primary-modern">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="hero-card" data-aos="fade-up" data-aos-duration="800">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h1 class="hero-title">{{ $user->heading_1 ?? "Transform Your Digital Experience" }}</h1>
                                    <p class="hero-subtitle">{{ $user->sub_heading_1 ?? "Seamlessly manage all your digital services - from airtime and data to bills and subscriptions. Experience the future of digital transactions with lightning-fast processing and unmatched reliability." }}</p>
                                    <div class="d-flex gap-3 flex-wrap">
                                       
                                        <a href="/register" class="btn btn-outline-primary btn-lg">
                                            <i class="bi bi-rocket-takeoff me-2"></i>Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                              <img src="{{ asset('phuz_asset/assets/img/hero-carousel/hero-carousel-3.svg')}}" class="img-fluid animated">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title" data-aos="fade-up">Our Premium Services</h2>
                    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Experience seamless digital transactions with our comprehensive suite of services designed for modern convenience.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="/airtime" class="text-decoration-none">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h3 class="service-title">Airtime Top-Up</h3>
                            <p class="service-description">Instant airtime recharge for all networks with competitive rates and lightning-fast processing.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="/data" class="text-decoration-none">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-wifi"></i>
                            </div>
                            <h3 class="service-title">Data Bundles</h3>
                            <p class="service-description">Affordable data plans for all networks with instant activation and flexible packages.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="/cable" class="text-decoration-none">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3 class="service-title">Cable TV</h3>
                            <p class="service-description">Subscribe to your favorite cable TV packages with instant activation and renewal.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <a href="/electricity" class="text-decoration-none">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <h3 class="service-title">Electricity Bills</h3>
                            <p class="service-description">Pay your electricity bills instantly with secure transactions and instant confirmation.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <a href="/examination" class="text-decoration-none">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h3 class="service-title">Exam Results</h3>
                            <p class="service-description">Check your examination results quickly and securely with our reliable platform.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <a href="/bulksms" class="text-decoration-none">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h3 class="service-title">Bulk SMS</h3>
                            <p class="service-description">Send bulk SMS messages to multiple recipients with high delivery rates and analytics.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-card">
                        <h2 class="text-white mb-4">About {{ $user->brand_name }}</h2>
                        <p class="text-white opacity-90 mb-0">{{ $user->about_us ?? "We are a leading digital services platform committed to revolutionizing how you manage your digital transactions. Our cutting-edge technology ensures secure, fast, and reliable services for all your digital needs. From airtime and data to bill payments and subscriptions, we've got you covered with 24/7 support and competitive pricing." }}</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="text-center">
                                <div class="display-4 fw-bold text-primary mb-2">50K+</div>
                                <p class="text-muted">Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <div class="display-4 fw-bold text-primary mb-2">99.9%</div>
                                <p class="text-muted">Uptime</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <div class="display-4 fw-bold text-primary mb-2">24/7</div>
                                <p class="text-muted">Support</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <div class="display-4 fw-bold text-primary mb-2">5★</div>
                                <p class="text-muted">Rating</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Pricing Section -->
    <section id="data_prices" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title" data-aos="fade-up">Data Pricing Plans</h2>
                    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Choose from our competitive data plans across all major networks in Nigeria.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- MTN Data Plans -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <img src="https://www.steadysub.com/frontend/img/mtn.png" alt="MTN" class="network-logo">
                            <div class="network-name">MTN DATA PLANS</div>
                        </div>
                        <table class="table pricing-table">
                            <tbody>
                                @foreach($mtn as $data)
                                <tr>
                                    <td>{{ $data->plan_name }}</td>
                                    <td class="fw-bold text-primary">₦{{ number_format($data->admin_price) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <a href="/data" class="btn btn-primary-modern w-100">
                                <i class="bi bi-cart-plus me-2"></i>Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- GLO Data Plans -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <img src="https://www.steadysub.com/frontend/img/glo.png" alt="GLO" class="network-logo">
                            <div class="network-name">GLO DATA PLANS</div>
                        </div>
                        <table class="table pricing-table">
                            <tbody>
                                @foreach($glo as $data)
                                <tr>
                                    <td>{{ $data->plan_name }}</td>
                                    <td class="fw-bold text-primary">₦{{ number_format($data->admin_price) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <a href="/data" class="btn btn-primary-modern w-100">
                                <i class="bi bi-cart-plus me-2"></i>Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Airtel Data Plans -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <img src="https://www.steadysub.com/frontend/img/airtel.png" alt="Airtel" class="network-logo">
                            <div class="network-name">AIRTEL DATA PLANS</div>
                        </div>
                        <table class="table pricing-table">
                            <tbody>
                                @foreach($airtel as $data)
                                <tr>
                                    <td>{{ $data->plan_name }}</td>
                                    <td class="fw-bold text-primary">₦{{ number_format($data->admin_price) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <a href="/data" class="btn btn-primary-modern w-100">
                                <i class="bi bi-cart-plus me-2"></i>Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- 9Mobile Data Plans -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <img src="https://www.steadysub.com/frontend/img/9mobile.png" alt="9Mobile" class="network-logo">
                            <div class="network-name">9MOBILE DATA PLANS</div>
                        </div>
                        <table class="table pricing-table">
                            <tbody>
                                @foreach($nmobile as $data)
                                <tr>
                                    <td>{{ $data->plan_name }}</td>
                                    <td class="fw-bold text-primary">₦{{ number_format($data->admin_price) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <a href="/data" class="btn btn-primary-modern w-100">
                                <i class="bi bi-cart-plus me-2"></i>Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="text-white mb-4" data-aos="fade-up">Why Choose {{ $user->brand_name }}?</h2>
                    <p class="text-white opacity-90" data-aos="fade-up" data-aos-delay="100">Discover the powerful features that make us the preferred choice for digital services.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="feature-item">
                        <div class="feature-number">01</div>
                        <h4 class="feature-title">Everything Automated</h4>
                        <p class="feature-description">Experience fully automated payment and purchase processes with zero manual intervention required.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="feature-item">
                        <div class="feature-number">02</div>
                        <h4 class="feature-title">Transaction Redo</h4>
                        <p class="feature-description">Effortlessly retry failed transactions with our one-click redo feature for seamless user experience.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="feature-item">
                        <div class="feature-number">03</div>
                        <h4 class="feature-title">Bulk Purchase</h4>
                        <p class="feature-description">Streamline your bulk purchases with our efficient processing system designed for volume transactions.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                    <div class="feature-item">
                        <div class="feature-number">04</div>
                        <h4 class="feature-title">Schedule Purchases</h4>
                        <p class="feature-description">Plan ahead with our smart scheduling feature that automates your future purchases.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="500">
                    <div class="feature-item">
                        <div class="feature-number">05</div>
                        <h4 class="feature-title">Beneficiary Management</h4>
                        <p class="feature-description">Save and manage contacts, decoder numbers, and meter numbers for quick future transactions.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="600">
                    <div class="feature-item">
                        <div class="feature-number">06</div>
                        <h4 class="feature-title">24/7 Support</h4>
                        <p class="feature-description">Round-the-clock customer support to assist you whenever you need help or have questions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-brand">
                        @if($user->logo !== null)
                            <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" alt="{{ $user->brand_name }}" class="footer-logo">
                        @endif
                        <span class="footer-brand-name">{{ $user->brand_name }}</span>
                    </div>
                    <p class="text-muted mb-4">Your trusted partner for all digital services. Fast, secure, and reliable transactions at your fingertips.</p>
                    <div class="social-links">
                        <a href="{{ $user->facebook ?? 'https://facebook.com/vtubiz' }}" class="social-link">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="{{ $user->twitter ?? 'https://twitter.com/vtubiz' }}" class="social-link">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="{{ $user->instagram ?? 'https://instagram.com/vtubiz' }}" class="social-link">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="{{ $user->whatsapp ?? 'https://wa.me/2348000000000' }}" class="social-link">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h6>Company</h6>
                        <a href="#about" class="footer-link">About Us</a>
                        <a href="#data_prices" class="footer-link">Data Prices</a>
                        <a href="#" class="footer-link">Help Center</a>
                        <a href="#" class="footer-link">Our Values</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h6>Services</h6>
                        <a href="/data" class="footer-link">Data Bundles</a>
                        <a href="/airtime" class="footer-link">Airtime Top-up</a>
                        <a href="/cable" class="footer-link">Cable TV</a>
                        <a href="/electricity" class="footer-link">Electricity Bills</a>
                        <a href="/bulksms" class="footer-link">Bulk SMS</a>
                        <a href="/examination" class="footer-link">Exam Results</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h6>Contact Info</h6>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-telephone me-2 text-primary"></i>
                            <span>{{ $user->phone }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope me-2 text-primary"></i>
                            <span>{{ $user->email }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock me-2 text-primary"></i>
                            <span>24/7 Support Available</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="mb-0">© <span id="currentYear"></span> {{ $user->brand_name }}. All rights reserved. Powered by innovation and excellence.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
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
        
        // Set current year
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        
        // Add loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
        
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.fade-in-up, .scale-in').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>