<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $user->brand_name }} | {{ $user->description }}</title>
    
    <!-- Enhanced Meta Tags for Social Sharing -->
    <meta name="description" content="{{ $user->description ?? 'Revolutionary digital services with ' . $user->brand_name }}">
    <meta name="keywords" content="airtime, data plans, bill payment, cable subscription, {{ $user->brand_name }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $user->brand_name }} | {{ $user->description ?? 'Revolutionary Digital Services' }}">
    <meta property="og:description" content="{{ $user->about_us ?? 'Transform your digital experience with seamless airtime, data, and bill payment solutions at ' . $user->brand_name }}">
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
    <meta name="twitter:title" content="{{ $user->brand_name }} | {{ $user->description ?? 'Revolutionary Digital Services' }}">
    <meta name="twitter:description" content="{{ $user->about_us ?? 'Transform your digital experience with seamless airtime, data, and bill payment solutions at ' . $user->brand_name }}">
    @if($user->logo)
    <meta name="twitter:image" content="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}">
    @elseif($user->image_1)
    <meta name="twitter:image" content="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_1 }}">
    @else
    <meta name="twitter:image" content="{{ asset('phuz_asset/assets/img/hero-carousel/hero-carousel-3.svg') }}">
    @endif
    
    <!-- WhatsApp Specific Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta name="theme-color" content="#053A66">
    
    <!-- Favicon -->
    @if($user->logo)
    <link rel="icon" type="image/png" href="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}">
    @endif

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #053A66;
            --secondary-color: #5AB8DC;
            --accent-gradient: linear-gradient(45deg, #053A66 0%, #5AB8DC 100%);
            --text-primary: #ffffff;
            --text-secondary: #d1e8f3;
            --bg-dark: #04152b;
            --card-bg: rgba(255, 255, 255, 0.05);
            --border-color: rgba(90, 184, 220, 0.3);
            --glow-color: #5AB8DC;
            --shadow-color: rgba(0, 0, 0, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--bg-dark);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.8;
        }

        .cosmic-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: radial-gradient(circle at center, #0e2a50 0%, #04152b 100%);
            overflow: hidden;
        }

        .cosmic-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"%3E%3Ccircle cx="50" cy="50" r="2" fill="%235AB8DC" fill-opacity="0.3"/%3E%3Ccircle cx="150" cy="150" r="3" fill="%235AB8DC" fill-opacity="0.2"/%3E%3Ccircle cx="100" cy="100" r="1.5" fill="%235AB8DC" fill-opacity="0.4"/%3E%3C/svg%3E');
            animation: cosmicDrift 30s linear infinite;
            opacity: 0.3;
        }

        @keyframes cosmicDrift {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-50%, -50%); }
        }

        .orbit-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 25px;
            padding: 3rem;
            margin-top:20px;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .orbit-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(90, 184, 220, 0.2) 0%, transparent 70%);
            transition: all 0.5s ease;
            opacity: 0;
        }

        .orbit-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 15px 40px rgba(90, 184, 220, 0.4);
            border-color: var(--glow-color);
        }

        .orbit-card:hover::before {
            opacity: 1;
        }

        .navbar-cosmic {
            background: rgba(4, 21, 43, 0.9);
            backdrop-filter: blur(20px);
            /* padding: 1.5rem 0; */
            /* position: fixed; */
            width: 100%;
            z-index: 1000;
            transition: all 0.5s ease;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all 0.3s ease;
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            padding: 0.7rem 1.5rem !important;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--glow-color) !important;
            text-shadow: 0 0 12px rgba(90, 184, 220, 0.6);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 1.5rem;
            width: 0;
            height: 4px;
            background: var(--accent-gradient);
            transition: width 0.4s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: calc(100% - 3rem);
        }

        .btn-cosmic {
            background: var(--accent-gradient);
            border: none;
            padding: 1rem 2rem;
            border-radius: 100px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--text-primary);
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
            z-index: 1;
        }

        .btn-cosmic::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
            z-index: -1;
        }

        .btn-cosmic:hover::before {
            left: 100%;
        }

        .btn-cosmic:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(90, 184, 220, 0.5);
        }

        .btn-outline-cosmic {
            border: 3px solid var(--glow-color);
            background: transparent;
            color: var(--glow-color);
            padding: 1rem 3rem;
            border-radius: 100px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.5s ease;
        }

        .btn-outline-cosmic:hover {
            background: var(--glow-color);
            color: var(--bg-dark);
            box-shadow: 0 0 30px rgba(90, 184, 220, 0.7);
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 6rem 0;
            overflow: hidden;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
            text-shadow: 0 0 20px rgba(90, 184, 220, 0.4);
        }

        .hero-content p {
            font-size: 1.4rem;
            color: var(--text-secondary);
            margin-bottom: 3.5rem;
            max-width: 800px;
            font-weight: 300;
        }

        .cosmic-orb {
            position: absolute;
            background: radial-gradient(circle, rgba(90, 184, 220, 0.4) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 6s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.2); opacity: 0.5; }
        }

        .service-orb {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 5%;
            width: 300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .service-orb:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 15px 40px rgba(90, 184, 220, 0.5);
            border-color: var(--glow-color);
        }

        .service-orb::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(90, 184, 220, 0.3) 0%, transparent 70%);
            transition: all 0.5s ease;
            opacity: 0;
        }

        .service-orb:hover::before {
            opacity: 1;
        }

        .service-icon {
            font-size: 3rem;
            color: var(--glow-color);
            margin-bottom: 1.5rem;
            transition: all 0.5s ease;
        }

        .service-orb:hover .service-icon {
            transform: scale(1.2);
            text-shadow: 0 0 15px rgba(90, 184, 220, 0.7);
        }

        .footer {
            background: rgba(4, 21, 43, 0.95);
            backdrop-filter: blur(20px);
            border-top: 1px solid var(--border-color);
            padding: 6rem 0 3rem;
        }

        .social-links a {
            transition: all 0.5s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            font-size: 1.5rem;
        }

        .social-links a:hover {
            transform: scale(1.2) rotate(360deg);
            background: var(--glow-color);
            color: var(--bg-dark) !important;
            box-shadow: 0 0 20px rgba(90, 184, 220, 0.6);
        }

        .back-to-top {
            position: fixed;
            bottom: 3rem;
            right: 3rem;
            background: var(--accent-gradient);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease;
            z-index: 1000;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 3.5rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }

            .navbar-nav {
                text-align: center;
                padding: 2rem 0;
            }

            .navbar-cosmic .d-flex {
                justify-content: center;
                margin-top: 2rem;
            }

            .service-orb {
                width: 250px;
                height: 250px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 4rem 0;
            }

            .hero-content h1 {
                font-size: 2.8rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .orbit-card {
                padding: 2rem;
            }

            .service-orb {
                width: 200px;
                height: 200px;
            }

            .service-icon {
                font-size: 2.5rem;
            }

            .navbar-brand img {
                height: 40px;
            }
        }

        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }

            .btn-cosmic, .btn-outline-cosmic {
                padding: 0.8rem 2rem;
                font-size: 0.9rem;
            }

            .service-orb {
                width: 280px;
                height: 280px;
                padding:20px;
            }

            .footer .d-flex {
                flex-direction: column;
                gap: 1.5rem;
            }

            .footer .d-flex input {
                margin-bottom: 1.5rem;
            }
        }

        ::-webkit-scrollbar {
            width: 14px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent-gradient);
            border-radius: 7px;
        }

        ::-webkit-scrollbar-thumb:hover {
           (background: var(--glow-color);
        }
    </style>
</head>
<body>
    <div class="cosmic-bg"></div>

    <nav class="navbar navbar-expand-lg navbar-cosmic">
        <div class="container">
            <a class="navbar-brand" href="#">
                @if($user->logo !== null)
                    <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" alt="Logo" style="height: 50px; object-fit: contain;">
                @else
                    {{ $user->brand_name }}
                @endif
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-white fs-3"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-4">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                
                <div class="d-flex gap-4 ms-4">
                    <a href="/login" class="btn-outline-cosmic">Login</a>
                    <a href="/register" class="btn-cosmic">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="cosmic-orb" style="width: 200px; height: 200px; top: 10%; left: 10%; animation-delay: 0s;"></div>
        <div class="cosmic-orb" style="width: 150px; height: 150px; top: 60%; left: 80%; animation-delay: 2s;"></div>
        <div class="cosmic-orb" style="width: 180px; height: 180px; top: 30%; left: 70%; animation-delay: 4s;"></div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="hero-content">
                        <h1>  {{ $user->heading_1 ?? "Explore". $user->brand_name }}</h1>
                        <p>{{ $user->sub_heading_1 ?? "Embark on a journey of seamless digital transactions with our revolutionary platform, crafted for speed, security, and style." }}</p>
                        
                        <div class="d-flex gap-4 flex-wrap">
                            <a href="/register" class="btn-cosmic">Register Now</a>
                            <a href="/login" class="btn-outline-cosmic">Sign In</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                    @if($user->image_1 !== null)
                        <div class="orbit-card">
                            <img src="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_1 }}" alt="Hero Image" class="img-fluid" style="border-radius: 25px; object-fit: cover; width: 100%;">
                        </div>
                    @else
                        <div class="orbit-card text-center">
                            <i class="bi bi-rocket-takeoff" style="font-size: 7rem; color: var(--glow-color);"></i>
                            <h3>Launch Your Experience</h3>
                            <p>Discover innovation</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-down">
                <h2 class="display-4 fw-bold mb-3" style="font-family: 'Playfair Display', serif;">Our Services</h2>
                <p class="lead text-secondary">{{ $user->heading_2 ?? "Orbit around our stellar digital solutions" }}</p>
            </div>
            
            <div class="d-flex flex-wrap justify-content-center gap-5">
                <div class="service-orb" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bi bi-phone service-icon"></i>
                    <h4>Airtime Top-Up</h4>
                    <p>Instantly recharge with stellar speed across all networks.</p>
                </div>
                
                <div class="service-orb" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-wifi service-icon"></i>
                    <h4>Data Bundles</h4>
                    <p>Explore affordable data plans with cosmic connectivity.</p>
                </div>
                
                <div class="service-orb" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bi bi-tv service-icon"></i>
                    <h4>Cable TV</h4>
                    <p>Orbit your favorite shows with seamless subscriptions.</p>
                </div>
                
                <div class="service-orb" data-aos="zoom-in" data-aos-delay="400">
                    <i class="bi bi-lightning service-icon"></i>
                    <h4>Electricity Bills</h4>
                    <p>Pay bills with the speed of light using our system.</p>
                </div>
                
                <div class="service-orb" data-aos="zoom-in" data-aos-delay="500">
                    <i class="bi bi-file-text service-icon"></i>
                    <h4>Exam Results</h4>
                    <p>Access results instantly with our galactic platform.</p>
                </div>
                
                <div class="service-orb" data-aos="zoom-in" data-aos-delay="600">
                    <i class="bi bi-chat-dots service-icon"></i>
                    <h4>Bulk SMS</h4>
                    <p>Send messages across the universe with ease.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left" data-aos-duration="1500">
                    @if($user->image_2 !== null)
                        <div class="orbit-card">
                            <img src="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_2 }}" alt="About Image" class="img-fluid" style="border-radius: 25px; object-fit: cover; width: 100%;">
                        </div>
                    @else
                        <div class="orbit-card text-center">
                            <i class="bi bi-shield-check" style="font-size: 7rem; color: var(--glow-color);"></i>
                            <h3>Galactic Trust</h3>
                            <p>Secure and reliable services</p>
                        </div>
                    @endif
                </div>
                
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="1500">
                    <div class="orbit-card">
                        <h2 class="display-5 fw-bold mb-4" style="font-family: 'Playfair Display', serif;">About Us</h2>
                        <p class="lead">{{ $user->about_us ?? "We are your gateway to digital transactions, offering unmatched speed, security, and affordability for all your needs." }}</p>
                        <a href="/register" class="btn-cosmic mt-4">Join the Journey</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-5" style="background: linear-gradient(135deg, rgba(4,21,43,0.9), rgba(20,50,90,0.95));">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-down">
                <h2 class="display-4 fw-bold mb-3" style="font-family: 'Playfair Display', serif;">Our Data Plans</h2>
                <!-- <p class="lead text-secondary">Launch into our competitive pricing</p> -->
            </div>
            
            <div class="row g-5">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="orbit-card text-center">
                        <img src="https://www.vtubiz.com/frontend/img/mtn.png" 
                             class="rounded mx-auto d-block mb-4" 
                             style="height: 70px; width: 70px; padding: 8px; border: 3px solid var(--glow-color); border-radius: 15px; object-fit: contain;">
                        <h5 style="color: var(--glow-color);">MTN DATA PLANS</h5>
                        <div class="table-responsive mt-4">
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
                        <a href="/data" class="btn-cosmic mt-4">Buy Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="orbit-card text-center">
                        <img src="https://www.vtubiz.com/frontend/img/glo.png" 
                             class="rounded mx-auto d-block mb-4" 
                             style="height: 70px; width: 70px; padding: 8px; border: 3px solid var(--glow-color); border-radius: 15px; object-fit: contain;">
                        <h5 style="color: var(--glow-color);">GLO DATA PLANS</h5>
                        <div class="table-responsive mt-4">
                            <table class="table table-dark table-striped">
                                <tbody>
                                    @foreach($glo as $Darren)
                                    <tr>
                                        <td>{{ $data->plan_name }}</td>
                                        <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="/data" class="btn-cosmic mt-4">Buy Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="orbit-card text-center">
                        <img src="https://www.vtubiz.com/frontend/img/airtel.png" 
                             class="rounded mx-auto d-block mb-4" 
                             style="height: 70px; width: 70px; padding: 8px; border: 3px solid var(--glow-color); border-radius: 15px; object-fit: contain;">
                        <h5 style="color: var(--glow-color);">AIRTEL DATA PLANS</h5>
                        <div class="table-responsive mt-4">
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
                        <a href="/data" class="btn-cosmic mt-4">Buy Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="orbit-card text-center">
                        <img src="https://www.vtubiz.com/frontend/img/9mobile.png" 
                             class="rounded mx-auto d-block mb-4" 
                             style="height: 70px; width: 70px; padding: 8px; border: 3px solid var(--glow-color); border-radius: 15px; object-fit: contain;">
                        <h5 style="color: var(--glow-color);">9MOBILE DATA PLANS</h5>
                        <div class="table-responsive mt-4">
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
                        <a href="/data" class="btn-cosmic mt-4">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="orbit-card text-center">
                        <h3 class="mb-5" style="font-family: 'Playfair Display', serif;">Connect Across the Cosmos</h3>
                        
                        <div class="contact-info">
                            <div class="d-flex align-items-center mb-5 p-4 orbit-card">
                                <i class="bi bi-telephone me-4" style="font-size: 2rem; color: var(--glow-color);"></i>
                                <div>
                                    <h6 class="mb-1">Phone</h6>
                                    <span>{{ $user->phone ?? '+234 123 456 7890' }}</span>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-5 p-4 orbit-card">
                                <i class="bi bi-envelope me-4" style="font-size: 2rem; color: var(--glow-color);"></i>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <span>{{ $user->email ?? 'info@vtubiz.com' }}</span>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-5 p-4 orbit-card">
                                <i class="bi bi-chat-dots me-4" style="font-size: 2rem; color: var(--glow-color);"></i>
                                <div>
                                    <h6 class="mb-1">Live Chat</h6>
                                    <span>Available 24/7 on <a href="https://wa.me/234{{ substr($user->phone, 1) }}" class="text-decoration-none" style="color: var(--glow-color);">WhatsApp</a></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links mt-5">
                            <h6 class="mb-4">Follow Our Socials</h6>
                            <a href="{{ $user->facebook ?? '#' }}" class="me-4"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $user->twitter ?? '#' }}" class="me-4"><i class="bi bi-twitter-x"></i></a>
                            <a href="{{ $user->instagram ?? '#' }}" class="me-4"><i class="bi bi-instagram"></i></a>
                            <a href="{{ $user->whatsapp  ?? '#'}}"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold mb-4" style="font-family: 'Playfair Display', serif;">{{ $user->brand_name }}</h5>
                    <p class="text-secondary">{{ $user->about_us ?? "Your hub for digital transactions, delivering speed, security, and affordability." }}</p>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4">Services</h6>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Airtime</a></li>
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Data</a></li>
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Cable TV</a></li>
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Electricity</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4">Company</h6>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">About Us</a></li>
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Contact</a></li>
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Privacy</a></li>
                        <li class="mb-3"><a href="#" class="text-secondary text-decoration-none hover-glow">Terms</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h6 class="fw-bold mb-4">Newsletter</h6>
                    <p class="text-secondary mb-4">Stay in our orbit with updates on new features and offers.</p>
                    <div class="d-flex flex-column flex-md-row gap-3">
                        <input type="email" class="form-control" placeholder="Your email" style="background: rgba(255,255,255,0.1); border: 1px solid var(--border-color); color: white; border-radius: 15px;">
                        <button class="btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
            
            <hr style="border-color: var(--border-color); margin: 3rem 0;">
            
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-secondary mb-0">© {{ date('Y') }} {{ $user->brand_name }}. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-links">
                        @if($user->facebook)
                            <a href="{{ $user->facebook }}" class="me-4"><i class="bi bi-facebook"></i></a>
                        @endif
                        @if($user->twitter)
                            <a href="{{ $user->twitter }}" class="me-4"><i class="bi bi-twitter-x"></i></a>
                        @endif
                        @if($user->instagram)
                            <a href="{{ $user->instagram }}" class="me-4"><i class="bi bi-instagram"></i></a>
                        @endif
                        @if($user->whatsapp)
                            <a href="{{ $user->whatsapp }}"><i class="bi bi-whatsapp"></i></a>
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
            duration: 1500,
            once: true,
            offset: 150
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
            const navbar = document.querySelector('.navbar-cosmic');
            const backToTop = document.querySelector('#backToTop');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(4, 21, 43, 0.98)';
                backToTop.classList.add('show');
            } else {
                navbar.style.background = 'rgba(4, 21, 43, 0.9)';
                backToTop.classList.remove('show');
            }
        });

        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 150;
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