<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $user->brand_name }} | {{ $user->description }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #7b61ff 0%, #9a4dff 100%);
            --secondary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ff8e53 100%);
            --accent-gradient: linear-gradient(135deg, #2af598 0%, #009efd 100%);
            --dark-bg: #121212;
            --card-bg: rgba(255, 255, 255, 0.08);
            --text-primary: #f5f5f5;
            --text-secondary: #d1d1d1;
            --border-color: rgba(255, 255, 255, 0.15);
            --glow-color: #2af598;
            --shadow-color: rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-bg);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.7;
        }

        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(-45deg, #121212, #1e1e2e, #1a263f, #0f3460);
            background-size: 400% 400%;
            animation: gradientShift 20s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--border-color);
            border-radius: 15px;
            padding: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px var(--shadow-color);
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(42, 245, 152, 0.2);
            border-color: var(--glow-color);
        }

        .navbar-custom {
            background: rgba(18, 18, 18, 0.95);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Orbitron', monospace;
            font-weight: 700;
            font-size: 1.8rem;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--glow-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 1rem;
            width: 0;
            height: 2px;
            background: var(--accent-gradient);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: calc(100% - 2rem);
        }

        .btn-glow {
            background: var(--accent-gradient);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(42, 245, 152, 0.3);
        }

        .btn-glow:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(42, 245, 152, 0.5);
            color: white;
        }

        .btn-outline-glow {
            border: 2px solid var(--glow-color);
            background: transparent;
            color: var(--glow-color);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-outline-glow:hover {
            background: var(--glow-color);
            color: var(--dark-bg);
            box-shadow: 0 0 20px rgba(42, 245, 152, 0.5);
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
        }

        .hero-content h1 {
            font-family: 'Orbitron', monospace;
            font-size: 3.8rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            max-width: 700px;
        }

        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            background: var(--glow-color);
            border-radius: 50%;
            opacity: 0.15;
            animation: float 8s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-30px) scale(1.2); }
        }

        .service-card {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--border-color);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 4px 20px var(--shadow-color);
        }

        .service-card:hover {
            transform: translateY(-8px) scale(1.03);
            border-color: var(--glow-color);
            box-shadow: 0 10px 30px rgba(42, 245, 152, 0.2);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 1.5rem;
            background: var(--accent-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: rotate(360deg);
        }

        .stats-card {
            text-align: center;
            padding: 2rem;
        }

            .stats-number {
            font-family: 'Orbitron', monospace;
            font-size: 3rem;
            font-weight: 700;
            background: var(--secondary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .footer {
            background: rgba(18, 18, 18, 0.95);
            backdrop-filter: blur(15px);
            border-top: 1px solid var(--border-color);
            padding: 4rem 0 2rem;
        }

        .social-links a {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .social-links a:hover {
            transform: translateY(-3px);
            background: var(--glow-color);
            color: var(--dark-bg) !important;
        }

        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--accent-gradient);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .navbar-nav {
                text-align: center;
                padding: 1rem 0;
            }

            .navbar-custom .d-flex {
                justify-content: center;
                margin-top: 1rem;
            }

            .footer .row > div {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 2rem 0;
            }

            .hero-content h1 {
                font-size: 2.2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .glass-card {
                padding: 1.5rem;
            }

            .service-card {
                padding: 1.5rem;
            }

            .navbar-brand img {
                height: 30px;
            }

            .table-responsive {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 1.8rem;
            }

            .btn-glow, .btn-outline-glow {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
            }

            .footer .d-flex {
                flex-direction: column;
                gap: 1rem;
            }

            .footer .d-flex input {
                margin-bottom: 1rem;
            }

            .pricing-card img {
                width: 40px;
                height: 40px;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent-gradient);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--glow-color);
        }
    </style>
</head>
<body>
    <div class="animated-bg"></div>

    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                @if($user->logo !== null)
                    <img src="https://vtubiz.com/public/brand_images/{{ $user->logo}}" alt="Logo" style="height: 40px; object-fit: contain;">
                @else
                    {{ $user->brand_name }}
                @endif
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-white fs-3"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-2">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                
                <div class="d-flex gap-2">
                    <a href="/login" class="btn-outline-glow">Login</a>
                    <a href="/register" class="btn-glow">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="particles">
            <div class="particle" style="width: 5px; height: 5px; top: 15%; left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="width: 7px; height: 7px; top: 65%; left: 85%; animation-delay: 2s;"></div>
            <div class="particle" style="width: 4px; height: 4px; top: 35%; left: 65%; animation-delay: 4s;"></div>
            <div class="particle" style="width: 6px; height: 6px; top: 85%; left: 25%; animation-delay: 1s;"></div>
        </div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    <div class="hero-content">
                        <h1>Welcome to {{ $user->brand_name }}</h1>
                        <p>{{ $user->heading_1 ?? "Experience the future of digital transactions with our cutting-edge platform. Fast, secure, and reliable services at your fingertips." }}</p>
                        
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="/register" class="btn-glow">Get Started Now</a>
                            <a href="/login" class="btn-outline-glow">Sign In</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200">
                    <div class="text-center">


                        
                        @if($user->image_1 !== null)
                            <img src="https://vtubiz.com/public/website_images/{{ $user->image_1 }}" alt="Hero Image" class="img-fluid" style="border-radius: 15px; max-height: 450px; object-fit: cover; width: 100%;">
                        @else
                            
                                <img src="{{ asset('phuz_asset/assets/img/hero-carousel/hero-carousel-3.svg')}}" class="img-fluid animated">
                                
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-4 fw-bold mb-3" style="font-family: 'Orbitron', monospace;">Our Services</h2>
                <p class="lead text-secondary">Comprehensive digital solutions for all your needs</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4>Airtime Top-Up</h4>
                        <p>Instant airtime recharge with competitive rates and instant delivery to all networks.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-wifi"></i>
                        </div>
                        <h4>Data Bundles</h4>
                        <p>Affordable data plans for all networks with instant activation and great value.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-tv"></i>
                        </div>
                        <h4>Cable TV</h4>
                        <p>Subscribe to your favorite cable TV packages with seamless payment processing.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-lightning"></i>
                        </div>
                        <h4>Electricity Bills</h4>
                        <p>Pay your electricity bills quickly and securely with our automated system.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-file-text"></i>
                        </div>
                        <h4>Exam Results</h4>
                        <p>Check your exam results instantly with our comprehensive result checking service.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <h4>Bulk SMS</h4>
                        <p>Send bulk SMS messages to your audience with our reliable messaging platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    @if($user->image_2 !== null)
                        <img src="https://vtubiz.com/public/website_images/{{ $user->image_2 }}" alt="About Image" class="img-fluid" style="border-radius: 15px; object-fit: cover; width: 100%;">
                    @else
                        <div class="glass-card text-center">
                            <i class="bi bi-shield-check" style="font-size: 5rem; color: var(--glow-color);"></i>
                            <h3>Trusted Platform</h3>
                            <p>Secure and reliable services</p>
                        </div>
                    @endif
                </div>
                
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200">
                    <div class="glass-card">
                        <h2 class="display-5 fw-bold mb-4" style="font-family: 'Orbitron', monospace;">About Us</h2>
                        <p class="lead">{{ $user->about_us ?? "We are a leading digital platform providing comprehensive solutions for all your telecommunication and utility needs. Our mission is to simplify digital transactions and empower users with fast, secure, and reliable services." }}</p>
                        <a href="/register" class="btn-glow mt-3">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-5" style="background: linear-gradient(135deg, rgba(0,0,0,0.85), rgba(20,20,20,0.95));">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-4 fw-bold mb-3" style="font-family: 'Orbitron', monospace;">Why Choose Us</h2>
                <p class="lead text-secondary">Discover the powerful features that make us stand out</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center h-100">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-arrow-repeat" style="font-size: 2.5rem; color: var(--glow-color);"></i>
                        </div>
                        <h4>Transaction Redo</h4>
                        <p class="text-secondary">Easily repeat your previous transactions with just one click. Save time and effort with our smart transaction history.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center h-100">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-stack" style="font-size: 2.5rem; color: var(--glow-color);"></i>
                        </div>
                        <h4>Bulk Purchase</h4>
                        <p class="text-secondary">Purchase multiple services at once for different numbers. Perfect for businesses and families managing multiple lines.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center h-100">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-clock-history" style="font-size: 2.5rem; color: var(--glow-color);"></i>
                        </div>
                        <h4>Schedule Transactions</h4>
                        <p class="text-secondary">Schedule your purchases for later. Set up automatic renewals and never worry about running out of data or airtime.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-card text-center h-100">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-people" style="font-size: 2.5rem; color: var(--glow-color);"></i>
                        </div>
                        <h4>Beneficiary Management</h4>
                        <p class="text-secondary">Add and manage your frequently used numbers. Quick access to family and friends for faster transactions.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="glass-card text-center h-100">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-lightning-charge" style="font-size: 2.5rem; color: var(--glow-color);"></i>
                        </div>
                        <h4>Instant Processing</h4>
                        <p class="text-secondary">Lightning-fast transaction processing. Get your services activated within seconds of payment confirmation.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="glass-card text-center h-100">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-shield-check" style="font-size: 2.5rem; color: var(--glow-color);"></i>
                        </div>
                        <h4>Secure Payments</h4>
                        <p class="text-secondary">Bank-level security for all transactions. Your money and personal information are always protected with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-4 fw-bold mb-3" style="font-family: 'Orbitron', monospace;">Data Pricing</h2>
                <p class="lead text-secondary">Get yourself familiarized with our cheap data plans</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center">
                        <div class="mb-3">
                            <img src="https://www.steadysub.com/frontend/img/mtn.png" 
                                 class="rounded mx-auto d-block" 
                                 style="height: 50px; width: 50px; padding: 5px; border: 2px solid var(--glow-color); border-radius: 10px; object-fit: contain;">
                            <h5 class="mt-2" style="color: var(--glow-color);">MTN DATA PLANS</h5>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <tbody>
                                    @foreach($mtn as $data)
                                    <tr>
                                        <td>{{ $data->plan_name }}</td>
                                        <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <a href="/data" class="btn-glow mt-3">Purchase Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center">
                        <div class="mb-3">
                            <img src="https://www.steadysub.com/frontend/img/glo.png" 
                                 class="rounded mx-auto d-block" 
                                 style="height: 50px; width: 50px; padding: 5px; border: 2px solid var(--glow-color); border-radius: 10px; object-fit: contain;">
                            <h5 class="mt-2" style="color: var(--glow-color);">GLO DATA PLANS</h5>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <tbody>
                                    @foreach($glo as $data)
                                    <tr>
                                        <td>{{ $data->plan_name }}</td>
                                        <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <a href="/data" class="btn-glow mt-3">Purchase Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center">
                        <div class="mb-3">
                            <img src="https://www.steadysub.com/frontend/img/airtel.png" 
                                 class="rounded mx-auto d-block" 
                                 style="height: 50px; width: 50px; padding: 5px; border: 2px solid var(--glow-color); border-radius: 10px; object-fit: contain;">
                            <h5 class="mt-2" style="color: var(--glow-color);">AIRTEL DATA PLANS</h5>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <tbody>
                                    @foreach($airtel as $data)
                                    <tr>
                                        <td>{{ $data->plan_name }}</td>
                                        <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <a href="/data" class="btn-glow mt-3">Purchase Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-card text-center">
                        <div class="mb-3">
                            <img src="https://www.steadysub.com/frontend/img/9mobile.png" 
                                 class="rounded mx-auto d-block" 
                                 style="height: 50px; width: 50px; padding: 5px; border: 2px solid var(--glow-color); border-radius: 10px; object-fit: contain;">
                            <h5 class="mt-2" style="color: var(--glow-color);">9MOBILE DATA PLANS</h5>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <tbody>
                                    @foreach($nmobile as $data)
                                    <tr>
                                        <td>{{ $data->plan_name }}</td>
                                        <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <a href="/data" class="btn-glow mt-3">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1200">
                    <div class="glass-card">
                        <h3 class="mb-4" style="font-family: 'Orbitron', monospace;">Quick Contact</h3>
                        
                        <div class="contact-info">
                            <div class="d-flex align-items-center mb-4 p-3" style="background: rgba(255,255,255,0.05); border-radius: 15px; border: 1px solid var(--border-color);">
                                <i class="bi bi-telephone me-3" style="font-size: 1.5rem; color: var(--glow-color);"></i>
                                <div>
                                    <h6 class="mb-1">Phone</h6>
                                    <span>{{ $user->phone ?? '+234 123 456 7890' }}</span>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-4 p-3" style="background: rgba(255,255,255,0.05); border-radius: 15px; border: 1px solid var(--border-color);">
                                <i class="bi bi-envelope me-3" style="font-size: 1.5rem; color: var(--glow-color);"></i>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <span>{{ $user->email ?? 'info@vtubiz.com' }}</span>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-4 p-3" style="background: rgba(255,255,255,0.05); border-radius: 15px; border: 1px solid var(--border-color);">
                                <i class="bi bi-chat-dots me-3" style="font-size: 1.5rem; color: var(--glow-color);"></i>
                                <div>
                                    <h6 class="mb-1">Live Chat</h6>
                                    <span>Available 24/7 on <a href="https://wa.me/234{{ substr($user->phone, 1) }}" class="text-decoration-none" style="color: var(--glow-color);">WhatsApp</a></span>
                                </div>
                            </div>
                        </div>
                        
                         <div class="social-links mt-4 text-center">
                            <h6 class="mb-3">Follow Us</h6>
                           
                                <a href="{{ $user->facebook ?? '#' }}" class="me-3"><i class="bi bi-facebook fs-5"></i></a>
                           
                                <a href="{{ $user->twitter ?? '#' }}" class="me-3"><i class="bi bi-twitter-x fs-5"></i></a>
                           
                                <a href="{{ $user->instagram ?? '#' }}" class="me-3"><i class="bi bi-instagram fs-5"></i></a>
                           
                                <a href="{{ $user->whatsapp  ?? '#'}}"><i class="bi bi-whatsapp fs-5"></i></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold mb-3" style="font-family: 'Orbitron', monospace;">{{ $user->brand_name }}</h5>
                    <p class="text-secondary">Your trusted partner for all digital transaction needs. Fast, secure, and reliable services.</p>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Airtime</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Data</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Cable TV</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Electricity</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Contact</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Privacy</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-glow">Terms</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h6 class="fw-bold mb-3">Newsletter</h6>
                    <p class="text-secondary mb-3">Subscribe to get updates on new features and offers.</p>
                    <div class="d-flex flex-column flex-md-row gap-2">
                        <input type="email" class="form-control" placeholder="Your email" style="background: rgba(255,255,255,0.1); border: 1px solid var(--border-color); color: white; border-radius: 10px;">
                        <button class="btn-glow">Subscribe</button>
                    </div>
                </div>
            </div>
            
            <hr style="border-color: var(--border-color); margin: 2rem 0;">
            
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-secondary mb-0">© {{ date('Y') }} {{ $user->brand_name }}. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-links">
                        @if($user->facebook)
                            <a href="{{ $user->facebook }}" class="me-3"><i class="bi bi-facebook fs-5"></i></a>
                        @endif
                        @if($user->twitter)
                            <a href="{{ $user->twitter }}" class="me-3"><i class="bi bi-twitter-x fs-5"></i></a>
                        @endif
                        @if($user->instagram)
                            <a href="{{ $user->instagram }}" class="me-3"><i class="bi bi-instagram fs-5"></i></a>
                        @endif
                        @if($user->whatsapp)
                            <a href="{{ $user->whatsapp }}"><i class="bi bi-whatsapp fs-5"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#home" class="back-to-top" id="backToTop"><i class="bi bi-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            const backToTop = document.querySelector('#backToTop');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(18, 18, 18, 0.98)';
                backToTop.classList.add('show');
            } else {
                navbar.style.background = 'rgba(18, 18, 18, 0.95)';
                backToTop.classList.remove('show');
            }
        });

        // Highlight active nav link based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.scrollY >= sectionTop) {
                    currentSection = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === currentSection) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>