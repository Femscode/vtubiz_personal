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


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('phuz_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('phuz_asset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('phuz_asset/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('phuz_asset/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('phuz_asset/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('phuz_asset/assets/css/variables.css')}}" rel="stylesheet">

    <link href="{{ asset('phuz_asset/assets/css/main.css')}}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center scrollto me-auto me-lg-0">

                @if($user->logo !== null)
                <img class="header-profile-user"
                    src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" style='width:150px' />
                @else
                <h1>{{ $user->brand_name }}<span>.</span></h1>
                @endif
            </a>

            <nav id="navbar" class="navbar">
                <ul>



                    <li><a class="nav-link scrollto" href="#">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Our Pricing</a></li>
                    <li><a href="#features">Features</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            <a class="btn-getstarted scrollto" href="/register">Get Started</a>

        </div>
    </header><!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            @if($user->image_1 !== null )
            <img src="https://vtubiz.com/newpersonal/public/website_images/{{  $user->image_1 }}" alt="" style='border-radius:15px;width:'
                class="img-fluid w-100">
            @else
            <img src="{{ asset('phuz_asset/assets/img/hero-carousel/hero-carousel-3.svg')}}" class="img-fluid animated">
            @endif

            <h2><span>{{ $user->heading_1 ?? "Welcome to ". $user->brand_name }}</span></h2>
            <p>{{ $user->sub_heading_1 ?? "Top-Up, Pay Bills, Stay Connected"}}.</p>
            <div class="d-flex">
                <a href="/login" class="btn-get-started scrollto">Login</a>
                <a href="/register" class="btn-watch-video d-flex align-items-center"><span>Get Started</span></a>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Airtime Top-Up</a></h4>
                            <p>Top Up your airtime at a discounted price and enjoy more call time.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">Affordable Data Plans</a></h4>
                            <p>
                                Enjoy the internet with our cheap data plans.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Cable(Tv) Subscription</a></h4>
                            <p>

                                Streamline Your Entertainment with our Cable Subscription Plans without.

                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-lightbulb icon"></i></div>
                            <h4><a href="" class="stretched-link">Pay Light Bills</a></h4>
                            <p>
                                Light Up Your Building with Effortless Bill Payments.
                            </p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-book icon"></i></div>
                            <h4><a href="" class="stretched-link"> Exam Result Checkers</a></h4>
                            <p>
                                Easily Access Your Exam Results at a giveaway prices.

                            </p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-box-seam-fill icon"></i></div>
                            <h4><a href="" class="stretched-link">Bulk SMS</a></h4>
                            <p>
                                Reach Your Audience Seamlessly with our Bulk SMS packages.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        {{-- <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam
                        voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('phuz_asset/assets/img/about.jpg')}}" class="img-fluid" alt="">
        </div>
        </div>

        <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Neque officiis dolore maiores et exercitationem quae est seda lidera
                pat claero</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
                <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

                <div class="tab-pane fade show active" id="tab1">

                    <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                        doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                        suscipit voluptatem.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                    </div>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                        dolorum non eveniet magni quaerat nemo et.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                    </div>
                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                        tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                        Dolorem quo tempora. Quia et perferendis.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                    </div>
                    <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                        officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                        odit enim quaerat. Vero error error voluptatem eum.</p>

                </div><!-- End Tab 1 Content -->

                <div class="tab-pane fade show" id="tab2">

                    <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                        doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                        suscipit voluptatem.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                    </div>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                        dolorum non eveniet magni quaerat nemo et.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                    </div>
                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                        tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                        Dolorem quo tempora. Quia et perferendis.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                    </div>
                    <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                        officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                        odit enim quaerat. Vero error error voluptatem eum.</p>

                </div><!-- End Tab 2 Content -->

                <div class="tab-pane fade show" id="tab3">

                    <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                        doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                        suscipit voluptatem.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                    </div>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                        dolorum non eveniet magni quaerat nemo et.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                    </div>
                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                        tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                        Dolorem quo tempora. Quia et perferendis.</p>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                    </div>
                    <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                        officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                        odit enim quaerat. Vero error error voluptatem eum.</p>

                </div><!-- End Tab 3 Content -->

            </div>

        </div>

        </div>

        </div>
        </section><!-- End About Section --> --}}

        <!-- ======= Clients Section ======= -->
        {{-- <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-1.png')}}"
        class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-2.png')}}"
                class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-3.png')}}"
                class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-4.png')}}"
                class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-5.png')}}"
                class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-6.png')}}"
                class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-7.png')}}"
                class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('phuz_asset/assets/img/clients/client-8.png')}}"
                class="img-fluid" alt=""></div>
        </div>
        </div>

        </div>
        </section><!-- End Clients Section --> --}}

        <!-- ======= Call To Action Section ======= -->
        <section id="about" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>About <em>Us</em>.</h3>
                        <p> {{ $user->about_us ?? " We provide a comprehensive platform for all your data, airtime,
                            electricity, and cable subscription needs. Our mission is to empower your digital lifestyle
                            through affordability, automation, and lightning-fast transactions."}}.</p>
                        <a class="cta-btn align-self-start" style='background:black' href="/register">Get Started</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            @if($user->image_2 !== null )
                            <img src="https://vtubiz.com/newpersonal/public/website_images/{{  $user->image_2 }}" alt="" style='border-radius:15px'
                                class="img-fluid w-100">
                            @else
                            <img src="{{ asset('phuz_asset/assets/img/cta.jpg')}}" alt="" class="img-fluid">
                            @endif

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 position-relative">
                        @if($user->image_3 !== null )
                        
                        <img src="https://vtubiz.com/newpersonal/public/website_images/{{  $user->image_3 }}" alt="" style='border-radius:15px;width:'
                            class="img-fluid w-100">
                        @else
                       <img src="{{ asset('phuz_asset/assets/img/features-1.svg')}}" alt="" class="img-fluid">
                        @endif

                    </div>
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100">
                            <h3>{{ $user->heading_2 ?? " Top Up Airtime, Data, Cable Subscriptions, and More, All at
                                Your Convenience." }}</h3>
                            <p class="fst-italic">
                                {{ $user->sub_heading_2 ?? "Simplify Your Digital Transactions" }}
                            </p>
                            {{-- <ul>
                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul> --}}
                            <a href="/register" class="read-more align-self-start"><span>Get Started</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End On Focus Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-binoculars color-cyan"></i>
                            <h4>Everything Automated</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-box-seam color-indigo"></i>
                            <h4>Redo Transaction</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-brightness-high color-teal"></i>
                            <h4>Bulk Purchase</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-command color-red"></i>
                            <h4>Add Up Beneficiaries</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            <i class="bi bi-easel color-blue"></i>
                            <h4>Schedule For Later Purchase</h4>
                        </a>
                    </li><!-- End Tab 5 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                            <i class="bi bi-map color-orange"></i>
                            <h4>24/7 Support System</h4>
                        </a>
                    </li><!-- End Tab 6 Nav -->

                </ul>

               

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                        dolores adipisci aliquam.</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('phuz_asset/assets/img/services-1.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus
                dolores iure perferendis.</p>
        </div>
        </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
                <div class="img">
                    <img src="{{ asset('phuz_asset/assets/img/services-2.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Eosle Commodi</h3>
                    </a>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                        eum hic non ut nesciunt dolorem.</p>
                </div>
            </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
                <div class="img">
                    <img src="{{ asset('phuz_asset/assets/img/services-3.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Ledo Markt</h3>
                    </a>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                        voluptas adipisci eos earum corrupti.</p>
                </div>
            </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
                <div class="img">
                    <img src="{{ asset('phuz_asset/assets/img/services-4.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Asperiores Commodit</h3>
                    </a>
                    <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea
                        fuga sit provident adipisci neque.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
                <div class="img">
                    <img src="{{ asset('phuz_asset/assets/img/services-5.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Velit Doloremque</h3>
                    </a>
                    <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut.
                        Sed animi at autem alias eius labore.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
                <div class="img">
                    <img src="{{ asset('phuz_asset/assets/img/services-6.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Dolori Architecto</h3>
                    </a>
                    <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                        Corrupti recusandae ducimus enim.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div><!-- End Service Item -->

        </div>

        </div>
        </section><!-- End Services Section --> --}}

        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('phuz_asset/assets/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img')}}" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                class="bi bi-star-fill"></i>
        </div>
        <p>
            <i class="bi bi-quote quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
            rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
            risus at semper.
            <i class="bi bi-quote quote-icon-right"></i>
        </p>
        </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('phuz_asset/assets/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img')}}" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i>
                </div>
                <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                    legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('phuz_asset/assets/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img')}}" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i>
                </div>
                <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                    minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('phuz_asset/assets/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img')}}" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i>
                </div>
                <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                    dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('phuz_asset/assets/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img')}}" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i>
                </div>
                <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                    culpa fore nisi cillum quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
        </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
        </div>

        </div>
        </section> --}}


        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
                    <p>Get yourself familarized with our cheap data plans.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <div class="section-title">
                                    <img src="https://www.vtubiz.com/frontend/img/mtn.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">MTN DATA PLANS</div>
                                </div>

                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($mtn as $data)
                                        <tr>
                                            <td>{{ $data->plan_name }}</td>
                                            <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/data"
                                        class="btn btn-dark mx-auto d-block">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <br>
                                <div class="section-title">
                                    <img src="https://www.vtubiz.com/frontend/img/glo.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">GLO DATA PLANS</div>
                                </div>



                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($glo as $data)
                                        <tr>
                                            <td>{{ $data->plan_name }}</td>
                                            <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/data"
                                        class="btn btn-dark mx-auto d-block">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <br>
                                <div class="section-title">
                                    <img src="https://www.vtubiz.com/frontend/img/airtel.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">AIRTEL DATA PLANS</div>
                                </div>



                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($airtel as $data)
                                        <tr>
                                            <td>{{ $data->plan_name }}</td>
                                            <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/data"
                                        class="btn btn-dark mx-auto d-block">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <br>
                                <div class="section-title">
                                    <img src="https://www.vtubiz.com/frontend/img/9mobile.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">9MOBILE DATA PLANS</div>
                                </div>



                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($nmobile as $data)
                                        <tr>
                                            <td>{{ $data->plan_name }}</td>
                                            <td><b>₦{{ number_format($data->admin_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/data" class="btn btn-dark mx-auto d-block"><i
                                            class="bi bi-cart"></i>Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        {{-- <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Non consectetur a erat nam at lectus urna duis?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                        suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                        Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                        turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                </div>

            </div>
        </section><!-- End F.A.Q Section --> --}}

        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                   
                </div>

            </div>

            <div class="map">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3309.092319743308!2d3.3792069!3d6.5243793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b81dbcc6a88d7%3A0x2e3a6e5c12b56ae8!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1640585401002"
                frameborder="0" allowfullscreen
            ></iframe>
            
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>Get in touch</h3>
                           
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Lagos State</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>{{ $user->email }}</p>
        </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
                <h4>Call:</h4>
                <p>+234 {{ $user->phone }}</p>
            </div>
        </div><!-- End Info Item -->

        </div>

        </div>

        <div class="col-lg-8">
            <form action="#" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject"
                        placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div><!-- End Contact Form -->

        </div>

        </div>
        </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            @if($user->logo !== null)
                            <img class="header-profile-user"
                                src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo}}" style='width:150px' />
                            @else
                            <h3>{{ $user->brand_name }}<span>.</span></h3>
                            @endif

                            <p>
                                {{ $user->about_us }}
                                <br><br>
                                <strong>Phone:</strong> +234 {{ $user->phone }}<br>
                                <strong>Email:</strong> {{ $user->email }}<br>
                                <strong>Address:</strong> {{ $user->address }}<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Affordable Data Plans</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Airtime Top-Up</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Cable(TV) Subscription</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Exam Result Checker</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Bulk SMS</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to our newsletter today, to receive first hand information from us</p>
                        {{-- <form action="#" method="post"> --}}
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                        {{-- </form> --}}

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>{{ $user->brand_name }}</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="{{ $user->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{ $user->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $user->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $user->whatsapp }}" class="google-plus"><i class="bi bi-whatsapp"></i></a>
                    {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('phuz_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('phuz_asset/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('phuz_asset/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('phuz_asset/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('phuz_asset/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('phuz_asset/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('phuz_asset/assets/js/main.js')}}"></script>

</body>

</html>