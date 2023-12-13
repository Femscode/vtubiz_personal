<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from runwebrun.com/startbox/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2022 14:43:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>{{ $user->brand_name }} | Home </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Startbox">
    <meta name="author" content="RunWebRun">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('brand_images/'.$user->logo) }}"><!-- Fonts-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap">
    <!-- Style-->
    <!-- build:css -->
    <link rel="stylesheet" href="{{ asset('theme4/assets/vendors/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('theme4/assets/vendors/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('theme4/assets/css/main.css')}}"><!-- endbuild -->
    <!-- jQuery-->
    <script src="{{ asset('theme4/assets/vendors/js/jquery.min.js')}}"></script>
</head>

<body class=" has-topbar">
    <!-- Header-->
    <!-- Navbar top-->


    <div class="navbar navbar-topbar navbar-expand-xl navbar-dark navbar-absolute top-0 d-none d-xl-flex">
        <div class="container">
            <!-- Language switcher-->

            <ul class="nav navbar-nav nav-gap-xl nav-contacts nav-no-opacity">
                <li class="nav-item"><a class="nav-link" href="tel:{{ $user->phone }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                            <path fill="currentColor"
                                d="M16 11.98v2.408a1.604 1.604 0 0 1-1.094 1.527 1.613 1.613 0 0 1-.66.079 15.941 15.941 0 0 1-6.943-2.465A15.672 15.672 0 0 1 2.476 8.71a15.869 15.869 0 0 1-2.47-6.96A1.603 1.603 0 0 1 .96.136C1.163.047 1.384 0 1.607 0h2.414A1.61 1.61 0 0 1 5.63 1.381c.102.77.29 1.528.563 2.256a1.603 1.603 0 0 1-.362 1.694l-1.022 1.02a12.86 12.86 0 0 0 4.827 4.817l1.022-1.02a1.61 1.61 0 0 1 1.697-.36c.73.271 1.489.46 2.26.561A1.61 1.61 0 0 1 16 11.98Z" />
                        </svg>{{ $user->phone }}</a></li>
                <li class="nav-item"><a class="nav-link" href="mailto:{{ $user->email }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="11" fill="none">
                            <path fill="currentColor" d="M14 0H0l7 4.583L14 0Z" />
                            <path fill="currentColor"
                                d="M14 9.821V2L7 6.5 0 2v7.821C0 10.47.63 11 1.4 11h11.2c.77 0 1.4-.53 1.4-1.179Z" />
                        </svg>{{ $user->email }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                            height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M6 14s6-3.818 6-8.273a5.598 5.598 0 0 0-1.757-4.05A6.148 6.148 0 0 0 6 0a6.148 6.148 0 0 0-4.243 1.677A5.598 5.598 0 0 0 0 5.727C0 10.182 6 14 6 14Zm2-8a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"
                                clip-rule="evenodd" />
                        </svg>{{ $user->address }}</a></li>
            </ul><!-- Socials-->
            <ul class="nav nav-gap-sm navbar-nav nav-social ms-auto nav-no-opacity align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ $user->facebook }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="7" height="14" fill="none">
                            <path fill="currentColor"
                                d="M5.535 2.71h1.053V.748A12.741 12.741 0 0 0 5.055.66c-1.518 0-2.557 1.023-2.557 2.903v1.73H.823v2.195h1.675v5.525h2.053V7.488h1.607l.255-2.195H4.551V3.78c0-.635.159-1.07.984-1.07Z" />
                        </svg></a></li>

                <li class="nav-item"><a class="nav-link" href="{{ $user->twitter }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="15" height="12" fill="none">
                            <path fill="currentColor"
                                d="M12.854 2.986c.009.124.009.248.009.373 0 3.793-2.887 8.163-8.164 8.163a8.108 8.108 0 0 1-4.406-1.288c.23.027.453.036.693.036a5.746 5.746 0 0 0 3.562-1.226 2.874 2.874 0 0 1-2.683-1.99 3.035 3.035 0 0 0 1.297-.053 2.87 2.87 0 0 1-2.3-2.816v-.036a2.89 2.89 0 0 0 1.296.365A2.867 2.867 0 0 1 .88 2.124c0-.533.142-1.022.391-1.448a8.156 8.156 0 0 0 5.916 3.002 3.239 3.239 0 0 1-.07-.657c0-1.581 1.278-2.87 2.869-2.87.826 0 1.572.347 2.096.907a5.65 5.65 0 0 0 1.821-.693 2.862 2.862 0 0 1-1.261 1.581 5.751 5.751 0 0 0 1.652-.444 6.169 6.169 0 0 1-1.44 1.484Z" />
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ $user->instagram }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="13" fill="none">
                            <path fill="currentColor"
                                d="M7.004 3.692c-1.754 0-3.169 1.403-3.169 3.142 0 1.74 1.415 3.142 3.169 3.142 1.753 0 3.168-1.403 3.168-3.142 0-1.739-1.415-3.142-3.168-3.142Zm0 5.185a2.055 2.055 0 0 1-2.06-2.043c0-1.126.924-2.042 2.06-2.042 1.136 0 2.06.916 2.06 2.042a2.055 2.055 0 0 1-2.06 2.043Zm4.036-5.313c0 .407-.33.733-.739.733a.734.734 0 0 1-.739-.733c0-.405.331-.733.74-.733.407 0 .738.328.738.733Zm2.099.744c-.047-.982-.273-1.852-.998-2.568-.723-.716-1.6-.94-2.59-.99-1.02-.057-4.078-.057-5.098 0-.987.047-1.864.27-2.59.987-.724.717-.948 1.586-.997 2.568-.058 1.011-.058 4.044 0 5.056.047.981.273 1.85.998 2.567.725.717 1.6.94 2.589.99 1.02.058 4.078.058 5.098 0 .99-.046 1.867-.27 2.59-.99.722-.716.948-1.586.998-2.567.058-1.012.058-4.042 0-5.053Zm-1.318 6.138a2.077 2.077 0 0 1-1.175 1.165c-.813.32-2.744.246-3.642.246-.9 0-2.832.071-3.643-.246a2.076 2.076 0 0 1-1.175-1.165c-.322-.806-.248-2.72-.248-3.612 0-.891-.071-2.808.248-3.612a2.077 2.077 0 0 1 1.175-1.165c.814-.32 2.744-.246 3.643-.246.898 0 2.831-.071 3.642.246.54.213.957.626 1.175 1.165.322.807.248 2.72.248 3.612 0 .891.074 2.808-.248 3.612Z" />
                        </svg></a></li>

            </ul>
        </div>
    </div><!-- Main-->
    <div class="content-wrap ">
        <!-- Header-->
        <!-- Navbar top-->
        <nav class="navbar navbar-expand-lg navbar-top  navbar-dark navbar-border-bottom navbar-opaque">
            <div class="container"><a class="navbar-brand" href="">
                @if($user->logo !== null)
            <img class="rounded-circle header-profile-user"
            src="https://vtubiz.com/public/brand_images/{{ $user->logo}}" style='width:50px;height:50px' />
           @else
            <h2>{{ $user->brand_name }}</h2>
            @endif
                </a><a class="navbar-toggle order-4 popup-inline"
                    href="#navbar-mobile-style-1"><span></span><span></span><span></span></a>
                <ul class="nav navbar-nav order-2 ms-auto nav-no-opacity">
                    <li class="nav-item "><a class="nav-link" href="#"><span>Home</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="#about_us"><span>About Us</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="#services"><span>Services</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="#data_prices"><span>Data Prices</span></a></li>
                    <li class="nav-item "><a class="nav-link"
                            href="https://wa.me/234{{ substr($user->phone,1) }}"><span>Contact Us</span></a></li>




                </ul><!-- Button-->
                <a class="btn d-none d-sm-inline-flex btn btn-sm btn-accent-1 ms-auto ms-lg-60 me-30 me-lg-0 order-2 order-lg-3"
                    href="/register" target="_self">Create Account</a>
            </div>
        </nav><!-- Navbar mobile-->

        <div class="navbar navbar-mobile navbar-mobile-style-1 bg-white mfp-hide" id="navbar-mobile-style-1">
            <div class="navbar-wrapper">
                <div class="navbar-head"><a class="navbar-brand d-block d-md-none" href="">
                    <h2>{{ $user->brand_name }}</h2>           
                </a><a class="navbar-toggle popup-modal-dismiss"
                        href="#"><span></span><span></span><span></span></a></div>
                <div class="navbar-body">
                    <ul class="nav navbar-nav navbar-nav-collapse">
                        <li class="nav-item "><a class="nav-link" href="#"><span>Home</span></a></li>
                        <li class="nav-item "><a class="nav-link" href="#about_us"><span>About Us</span></a></li>
                        <li class="nav-item "><a class="nav-link" href="#services"><span>Services</span></a></li>
                        <li class="nav-item "><a class="nav-link" href="#services"><span>Data Prices</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="https://wa.me/234{{ substr($user->phone,1) }}"><span>Contact Us</span></a></li>




                    </ul><!-- Button-->
                    <a class="btn d-none d-sm-inline-flex btn btn-sm btn-accent-1 ms-auto ms-lg-60 me-30 me-lg-0 order-2 order-lg-3"
                        href="/register" target="_self">Create Account</a>

                </div>
                <div class="navbar-footer">
                    <!-- Contacts-->
                    <ul class="list-group borderless font-size-15">
                        <li class="list-group-item">Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                        </li>
                        <li class="list-group-item">Phone: <a href="tel:{{ $user->phone }}">{{ $user->phone }}</a></li>
                    </ul><!-- Social-->
                    <ul class="nav nav-gap-sm navbar-nav nav-social mt-30 nav-no-opacity">
                        <li class="nav-item"><a class="nav-link" href="{{ $user->facebook }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="8" height="15" fill="none">
                                    <path fill="currentColor"
                                        d="M5.93 3.08h1.128V.974A13.651 13.651 0 0 0 5.416.882c-1.626 0-2.74 1.096-2.74 3.11v1.853H.882v2.353h1.794v5.92h2.2v-5.92h1.721l.274-2.353H4.875v-1.62c0-.68.171-1.146 1.056-1.146Z" />
                                </svg></a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ $user->twitter }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="none">
                                    <path fill="currentColor"
                                        d="M13.986 3.445c.01.133.01.266.01.4 0 4.064-3.093 8.746-8.747 8.746a8.687 8.687 0 0 1-4.72-1.38c.247.029.485.038.742.038 1.437 0 2.76-.485 3.816-1.313a3.08 3.08 0 0 1-2.874-2.132 3.251 3.251 0 0 0 1.39-.057A3.075 3.075 0 0 1 1.137 4.73v-.038c.41.228.886.37 1.39.39a3.072 3.072 0 0 1-1.37-2.56c0-.571.152-1.095.418-1.552a8.738 8.738 0 0 0 6.34 3.217 3.47 3.47 0 0 1-.077-.704A3.073 3.073 0 0 1 10.912.409c.885 0 1.685.37 2.246.97A6.052 6.052 0 0 0 15.11.637a3.066 3.066 0 0 1-1.352 1.694 6.164 6.164 0 0 0 1.77-.476 6.609 6.609 0 0 1-1.542 1.59Z" />
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ $user->instagram }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <path fill="currentColor"
                                        d="M7.504 4.13c-1.88 0-3.395 1.504-3.395 3.367s1.516 3.366 3.395 3.366 3.394-1.503 3.394-3.366c0-1.863-1.515-3.366-3.394-3.366Zm0 5.556a2.202 2.202 0 0 1-2.207-2.189A2.2 2.2 0 0 1 7.504 5.31 2.2 2.2 0 0 1 9.71 7.497a2.202 2.202 0 0 1-2.207 2.189Zm4.325-5.693a.787.787 0 0 1-.792.785.787.787 0 0 1-.792-.785c0-.433.355-.785.792-.785.437 0 .792.352.792.785Zm2.248.797c-.05-1.052-.293-1.983-1.07-2.75-.774-.769-1.713-1.009-2.774-1.061C9.14.917 5.864.917 4.771.979c-1.058.05-1.997.29-2.774 1.057-.777.768-1.016 1.7-1.07 2.751-.062 1.084-.062 4.333 0 5.417.05 1.052.293 1.983 1.07 2.751.777.768 1.713 1.008 2.774 1.06 1.093.062 4.37.062 5.462 0 1.061-.05 2-.29 2.775-1.06.774-.768 1.016-1.7 1.069-2.75.062-1.085.062-4.331 0-5.415Zm-1.412 6.577a2.225 2.225 0 0 1-1.259 1.248c-.871.343-2.94.264-3.902.264-.963 0-3.034.076-3.903-.264a2.225 2.225 0 0 1-1.259-1.248c-.345-.864-.265-2.915-.265-3.87 0-.955-.077-3.009.265-3.87a2.225 2.225 0 0 1 1.259-1.248c.872-.343 2.94-.264 3.903-.264.963 0 3.034-.076 3.902.264.58.228 1.025.67 1.259 1.248.346.864.266 2.915.266 3.87 0 .955.08 3.009-.266 3.87Z" />
                                </svg></a></li>

                    </ul>
                </div>
            </div>
        </div><!-- Topbar-->
        <div class="swiper bg-dark')}}" data-swiper-slides="1')}}" data-swiper-speed="1000')}}"
            data-swiper-grabcursor="true')}}" data-swiper-parallax="true')}}" data-swiper-pagination="true">
            <div class="swiper-pagination text-white position-absolute mb-30 start-0 w-100 d-none d-lg-block"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide h-auto">
                        <div class="py-200 position-relative overflow-hidden h-100')}}" data-name="">
                            <div class="background">
                                <div class="background-image">
                                    @if($user->image_1 !== null )
                                    <img src="{{ asset('website_images/'.$user->image_1) }}" alt=""
                                        style='border-radius:15px' class="img-fluid w-100" data-swiper-parallax-x="20%">
                                    @else

                                    <img loading="lazy"
                                        src="{{asset('theme4/assets/img/home-3-slide-1-1920x1080.jpg')}}"
                                        data-swiper-parallax-x="20%" alt="">
                                    @endif

                                </div>
                                <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
                                <div class="background-color"
                                    style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0) 150px);">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 offset-lg-1">
                                        <h1 class="text-white mb-40">{{ $user->heading_1 ?? "Top-Up, Pay Bills, Stay
                                            Connected" }}</h1><!-- Button-->
                                            <h4 class='text-white'>{{ $user->sub_heading_1?? "Explore a World of
                                                Convenience" }}</h4>
                                            
                                            <a class="btn btn-accent-3" href="/register"
                                            target="_self">Get Started

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide h-auto">
                        <div class="py-200 position-relative overflow-hidden h-100')}}"
                            data-name="">
                            <div class="background">
                                <div class="background-image">
                                    @if($user->image_1 !== null )
                                    <img src="{{ asset('website_images/'.$user->image_1) }}" alt=""
                                        style='border-radius:15px' loading='lazy' class="img-fluid w-100"
                                        data-swiper-parallax-x="20%">
                                    @else

                                    <img loading="lazy"
                                        src="{{asset('theme4/assets/img/home-3-slide-3-1920x1080.jpg')}}"
                                        data-swiper-parallax-x="20%" alt="">
                                    @endif

                                </div>
                                <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
                                <div class="background-color"
                                    style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0) 150px);">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 offset-lg-1">
                                        <h1 class="text-white mb-40">{{ $user->heading_2 ?? " Top Up Airtime, Data, Cable Subscriptions, and More, All at Your Convenience." }}</h1><!-- Button-->
                                            <h4 class='text-white'>{{ $user->sub_heading_2?? "Simplify Your Digital Transactions" }}</h4>
                                            
                                            <a class="btn btn-accent-3" href="/register"
                                            target="_self">Get Started

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-button-prev swiper-button-position-3 swiper-button-opacity shadow"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z"
                        clip-rule="evenodd" />
                </svg></div>
            <div class="swiper-button-next swiper-button-position-3 swiper-button-opacity shadow"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z"
                        clip-rule="evenodd" />
                </svg></div>
        </div>
        <div class="pt-120 pb-100 shape-parent overflow-hidden">
            <!-- Shape-->
            <div class="shape justify-content-end"><img loading="lazy"
                    src="{{asset('theme4/assets/img/root/home-3-shape-1-536x706.png')}}" alt="" width="536"
                    height="706"></div>
            <div class="container">
                <div class="row align-items-center gy-90">
                    <div class="col-lg-6">
                        <div class="pe-lg-70"><span class="badge bg-light text-dark mb-20" data-show="startbox">What we
                                do</span>
                            <h2 class="mb-45" data-show="startbox" data-show-delay="100"><span class="highlight">About
                                    Us</span></h2>
                            <p class="mb-50" data-show="startbox" data-show-delay="300">{{ $user->about_us ?? "We absolutely
                                provide a comprehensive platform for all your data, airtime, electricity, and cable
                                subscription needs. Our mission is to empower your digital lifestyle through affordability,
                                automation, and lightning-fast transactions."}}.</p>
                            <div data-show="startbox" data-show-delay="400">
                                <!-- Button--><a class="btn btn-accent-1 btn-link btn-clean" href="#"
                                    target="_self">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-75">
                        <div class="ms-70 shape-parent">
                            <!-- Shape-->
                            <div class="shape justify-content-start mt-n40 ms-n40 text-dark')}}"
                                data-jarallax-element="40"><svg xmlns="http://www.w3.org/2000/svg" width="86"
                                    height="85" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M80.607 25.302h-.731c-.226-.173-.001-.45-.172-.65l-.504-.027c-.167.343-.285.84-.879.676-.227-.053-.046-.348-.21-.422-.347-.114-.584.077-.907.254-.42-.59-1.186-.73-1.697-1.258-.1-.406.078-.86-.237-1.256-.098-.124-.065-.51.054-.622.365-.345-.077-.698.04-.933.174-.349.036-.625.104-.894-.314-.13-.425.038-.63.253-.04-.83-.174-1.579.258-2.307l.6-.066c-.1-.364.243-.63.229-.99-.022-.594.163-1.13.465-1.615.253-.406.211-.834.218-1.28l1.073-.983.152.127c.157-.13.313-.354.512-.404.274-.068.46-.357.808-.258.244.07.524.018.787.012.22-.006.457.02.657-.05.26-.091.482-.348.74-.382.48-.064.976-.018 1.505-.018.265.504.846.624 1.31.83.569.254.838.693 1.017 1.168.181.485-.133.986-.361 1.41-.293.542-.673 1.05-1.197 1.406.381.613.73 1.2.226 1.884-.145 1.987-1.385 3.497-2.272 5.156-.235.44-.811.645-.958 1.239ZM6.124 63.859l.2-.241c-.055-.176-.234-.095-.36-.16-.208-.154.062-.442-.176-.629-.076.008-.218-.02-.272.037-.69.724-.816.423-1.428-.124-.073-.065-.11-.066-.212-.075-1.41-.123-1.957-.674-2.116-2.064-.183-.023-.24.272-.5.158-.138-.456-.717-.744-.589-1.394.027-.136-.259-.333-.4-.501.542-.452-.504-1.08.147-1.519-.014-.29-.342-.342-.404-.593-.072-.29.155-.465.23-.698.258-.813.815-1.467 1.217-2.2.34-.62 1.097-.881 1.679-1.217.313.061.413.336.628.463l.202-.513.382.556c.306-.2.094-.472.254-.687h1.54l.422.422c.538-.521.997-.108 1.481.198.64-.648 1.292.338 1.951-.031.283.312.71.472.642.985-.007.056.055.173.094.177.765.078.695.83.992 1.26-.188.468-.538.834-.912 1.182-.082.076-.16.227-.24.228-1.004.004-1.045.951-1.488 1.5-.384.476-.527 1.072-.688 1.632a6.994 6.994 0 0 0-.282 1.705c-.02.637.015 1.427-.876 1.687-.158.046-.277.247-.401.388-.213.24-.446.2-.717.068ZM28.791 48.175c.375-.162.764-.302 1.22-.281.863.038 1.732.048 2.594-.004.43-.026.873.038 1.24.134.292.076.487-.355.722-.03.192.266.498.06.729.145.26.096.48.338.823.165.154-.065-.1-.417.25-.389.683.047.284.933.853 1.1.04-.117.087-.247.136-.386.179-.035.294.15.302.22.067.57.38 1.09.316 1.682-.024.213-.056.399-.158.614-.3.635-.575 1.322-.501 2.037.045.44-.318.716-.269 1.153.043.373.203.828-.204 1.146 0 .677-.04 1.357.01 2.03.066.892-.457 1.422-1.069 1.907-.09.071-.286.01-.422.01-.17-.374-.371-.708-.355-1.285-.207.405-.312.65-.527.839-.294.258-.55.336-.86.05-.129-.12-.215-.304-.446-.285-.649.055-1.11-.301-1.486-.76-.36-.437-.916-.683-1.003-1.399-.064-.516-.52-.976-.753-1.482-.628-1.358-1.262-2.714-1.826-4.097-.273-.667.01-1.34.268-1.973.119-.29.271-.564.416-.86ZM22.87 33.667c-.033-.41.06-.85-.114-1.041-.289-.314.338-.508-.03-.75-.578.446-.551 1.28-1.089 1.752-.38-.165-.752-.343-.935-.614-.308-.053-.35.146-.545.231-.58-.324-1.286-.583-1.708-1.165-.535-.738-1.039-1.526-1.035-2.503.002-.452.038-.907-.006-1.355-.147-1.477.306-2.843.75-4.21.185-.571.492-1.088.854-1.553.257-.158.523-.053.846-.092l.467.467c.316.04.37-.405.669-.46.183-.032.253.125.368.22l.256-.233.139.402c.052.074.092.052.161-.03.507-.603 1.194-.633 1.918-.574.461.296.731.811 1.393.971.682.165.961 1.277.647 1.96-.257.559-.57 1.073-.122 1.704.125.175.104.552.004.769-.277.594-.22 1.251-.43 1.854-.196.561-.31 1.152-.53 1.702-.067.167-.147.312-.157.5-.037.7-.447 1.247-.786 1.818-.216.365-.592.214-.985.23ZM50.532 50.867l.24.205.16-.439c.703.3 1.275-.207 1.916-.326.254-.048 1.214-.208 1.462-.185.07.007.176.064.203.037.301-.309.693-.158 1.036-.236.295-.068.555.397.834.02.56.463 1.216.132 1.823.212.37.049.75.01 1.118.01l.326.325c-.083.15-.3.238-.205.485.318.22.713-.004 1.054.139.315.277.478.572.109.93-.08.078-.206.146-.232.241-.244.883-1.007.922-1.7 1.035-.712.114-1.323.44-1.877.687-.293.772.149 1.372.162 2.026.013.61-.145 1.24.199 1.834.081.142.137.478-.076.621-.352.24-.316.776-.722.925-.182.067-.401.022-.615-.139-.204-.153-.027-.477-.32-.524-.23-.036-.34.146-.442.284-.171.231-.42.214-.607.152-.257-.085-.478-.277-.715-.423-.337.403-.592-.064-.762-.169-.236-.144-.51-.26-.723-.446-.226-.197-.426-.424-.642-.633a.833.833 0 0 1-.26-.462c-.03-.143-.179-.189-.044-.418.144-.247-.303-.054-.398-.317-.381-1.048-1.051-1.962-1.473-2.998a.843.843 0 0 1-.035-.616c.221-.735.55-1.395 1.206-1.837ZM54.604 84.51c-.975-.056-.975-.056-1.134-1.114-.564.526-.564.526-1.137.676-.161-.428-.384-.845-.984-.705-.082.02-.205-.057-.282-.121-.45-.381-.624-.994-1.119-1.34.024-.732-.473-1.449-.203-2.155.286-.75.358-1.557.768-2.28.502-.884 1.043-1.717 1.813-2.458.416.041.858.02 1.096-.462l.261.232c.735-.738.922-1.884 1.828-2.464.357-.171.568.287.825.194.337-.122.557.307.871.104.273-.177.557-.074.808-.05.262.344-.377.498-.104.81.202.042.307-.32.58-.106.159.745-.103 1.419-.386 2.133-.307.774-.735 1.539-.697 2.418.014.316-.204.524-.32.772-.345.729-.587 1.49-.864 2.24-.347.944-.451 1.976-1.014 2.857-.179.279-.387.515-.606.819ZM47.369 22.139c.195-.227-.03-.502.2-.66.324-.053.572.193.55.403-.085.78.432 1.132.934 1.524.148.114.268.262.401.396.207.461-.109.823-.233 1.222-.168.118-.353.046-.532.047-.18-.096 0-.493-.387-.433-.254.088-.35.462-.352.574a3.744 3.744 0 0 1-.487 1.842c.326.704-.208 1.307-.234 1.974-.027.706-.382 1.275-.852 1.79-.199.217-.415.087-.62.168.015-.387-.463-.509-.214-1.146-.407.444-.39.913-.765.881-.602-.05-1.297-.03-1.765-.33-.452-.291-1.258-.416-1.203-1.256a.255.255 0 0 0-.09-.184c-.863-.67-.928-1.721-1.252-2.64-.26-.737-.481-1.485-.477-2.291.001-.45.464-.787.215-1.227.252-.4.719-.59.792-1.172.917.755 1.82-.173 2.694.093.2-.099.12-.283.206-.41.151-.144.353-.007.347-.005.377-.135.166-.44.416-.482.122.072.084.193.092.312.23.265.566.014.83.156l.396.397c.386-.247.455-.685.655-1.097.273.145.41.336.382.662-.03.333-.05.681.353.892ZM53.912.885c.137.215.056.397.23.471.233-.243.007-.575.14-.86l.398-.04v1.088c.209-.643 1.139-.417 1.25-1.082.172.265.432.238.692.215.229-.158 0-.435.166-.62.241-.095.497-.046.757-.029.177.235.042.506.087.758.245.261.461.567.853.642-.112.184.034.478-.027.539-.272.273-.044.743-.454.96-.38.202.073.748-.326.986.433.474-.202.885-.073 1.381.117.451.025.957.025 1.41.2.1.213-.068.316-.106.3-.018.005.344.227.387.049-.033.129-.057.15-.107.277-.657.569-1.32.386-2.057-.192-.772-.24-.78.066-1.749.087-.275-.439-.367-.082-.641.198-.152-.076-.536.252-.685-.133-.233-.169-.52-.393-.702.043-.12.137-.128.247-.135.345-.019.564.128.636.467.061.285-.104.592.089.868.138.197-.102.468.13.668.056.047.056.277.001.319-.382.295-.075.545-.018.844.055.292.089.62-.108.96-.243.418-.07.888.116 1.34.104.255.33.106.434.261-.304.375-.178.8-.171 1.18.121.137.321.106.323.081.036-.337.464-.632.121-1.01.295-.26.502-.682 1.064-.53a4.844 4.844 0 0 1-.208.735c-.084.235-.224.445-.188.71.043.306-.328.484-.23.81.1.336-.186.364-.38.514-.196.15.044.561-.277.732.184.161.376.06.565.086.191-.253.054-.611.37-.873.466-.384.401-.446.692-1.547.105-.4.309-.774.479-1.186.521.38.44.872.242 1.344-.164.396-.251.814-.383 1.2-.123.362-.058.9-.56 1.127-.34.153-.276.67-.648.83-.123-.13-.238-.293-.537-.149l.424.526c-.3.181-.559.146-.776-.14-.388.604-1.206.419-1.613.912-.354-.01-.436-.319-.67-.468l-.138.401c-.153.105-.3-.35-.503.01-.058.104-.43.089-.633.036-.159-.042-.293-.215-.416-.349-.176-.192-.438.004-.626-.14.249-.37-.061-.61-.182-.878-.173-.386-.773-.014-.96-.62-.009-.05.32-.133.2-.306-.434-.635-.22-1.47-.665-2.1-.036-.05.023-.163-.011-.219-.238-.394.612-.781.005-1.17 0-.414-.104-.864.024-1.235.198-.573.194-1.14.2-1.721 0-.07-.024-.14-.041-.235-.221-.037-.275.183-.388.285-.08.07.05.287-.238.321-.006-.943-.157-1.89.566-2.715ZM31.878 76.44c-.009.193-.008.303.1.374.312.192.375-.418.7-.184.078.025.1.08.049.13-.258.259-.646.557-.308.914.39.412-.237.565-.115.866-.355.097-.64.521-1.074.235-.089-.06-.144-.176-.373-.12-.918.724-1.463 1.812-1.883 2.933-.143.385-.395.592-.598.88-1.34-.906-1.34-.906-1.83-.683-.412-.555-.83-1.114-.765-1.87.027-.314-.068-.565-.233-.809.388-.478.065-.938-.107-1.346-.217-.512-.024-1.023-.144-1.519-.015-.063-.1-.108-.172-.178.31-.492.44-1.104 1.035-1.5.501.098 1.093-.157 1.664.126.548.273 1.176.248 1.744.42.525.16.998.492 1.529.765.479-.099.762-.541 1.124-.857.683-.035 1.355-.284 1.773-.653.562-.117 1.181.159 1.71-.26l.456.594c-.926-.196-.877-.088-2.152.5-.787.36-1.268 1.144-2.13 1.242ZM62.335 27.374l.07-.617c.07-.102.109-.082.18.002.116.14.263.236.248.466-.026.413.006.829-.01 1.242-.014.335.009.661.233.92.333.385.172.832.236 1.23-.455.408-.618.875-.726 1.442-.111.578-.09 1.196-.397 1.752-.127.23-.02.588-.02.877-.237.243-.508.442-.557.789h-.47c-.244-.244.008-.582-.16-.85-.176-.077-.389-.124-.383.153.006.297-.523.302-.11.765-.81-.172-1.397-.402-1.955-.286-.33-.042-.123-.361-.412-.484-.801-.34-1.105-.96-1.159-1.782-.064-.997.18-1.929.457-2.865.213-.715.598-1.153 1.41-1.217.736-.059 1.06-.51 1.078-1.27.007-.297 0-.594 0-.88.229-.163.228.13.342.126.3.133.397-.383.726-.178.197.144-.064.43.14.602.048-.029.142-.057.142-.087.006-.328.34-.554.266-.917-.02-.098.178-.087.288-.091.21.122.116.327.127.499.013.183.003.367.003.487.108.197.236.12.413.172ZM76.219 53.438l-.478-.177c-.075-.177-.007-.284.09-.411.177-.228.19-.48-.05-.685-.445-.381-.37-.695.012-1.11.21-.23.38-.62.174-1.031.207-.309.451.182.562.075.27-.262.564-.132.846-.156.261-.022.526-.005.79-.005h.823c.25.325.587.635.747 1.018.116.275.23.59.31.895.094.356-.428.503-.123.883.17.213.078.635.105.963.523.428 1.41.124 1.754.897l-.185.184c.123.186.44.172.507.493.035.17.082.517.342.626l-.268.558c-.047-.028-.136-.053-.14-.088-.018-.147.03-.315-.025-.443s-.201-.217-.306-.322c-.178.063-.097.242-.17.373-.255-.04-.545-.435-.753.13l-.2-.526c-.162.015-.405-.036-.503.06-.496.486-1.102.9-1.358 1.575-.197.516-.606.786-.96 1.15-.342-.222-.326-.494-.174-.685.192-.244.193-.452.052-.761-.206.228-.447.409-.567.65-.135.276-.234.521-.587.5-.227-.263-.024-.59-.129-.857-.292-.008-.167.187-.21.31-.276.195-.552.173-.755-.11-.165-.23-.226-.529-.483-.704-.19-.13-.158-.377-.096-.512.311-.672.428-1.404.641-2.103.121-.398.366-.492.765-.654ZM17.405 76.827c-.226.005-.258-.251-.454-.31l.232-.258a.244.244 0 0 0-.28-.11c-.255.072-.319.41-.628.452-.327-.02-.487-.358-.777-.506-.742-.378-1.162-1.83-.91-2.659.198-.643.19-1.276-.066-1.998.021-.102.206-.001.327-.073.254-.326-.03-.584-.153-.868.08-.318.41-.421.547-.685.335.281.634.425 1.095.257.405-.148.58.323.838.54l-.199.248c.29.24.434.007.562-.154.243-.302.159-.826.704-.944.175-.038.058-.337.072-.515.026-.349.227-.507.524-.566.32.161.004.53.27.688.522-.381.287-1.236 1.033-1.595-.211.738-.453 1.388-.574 2.06-.122.676-.801 1.211-.485 2.085.432-.862.658-1.71.96-2.538a2.16 2.16 0 0 1-.122 1.344c-.373.897-.62 1.847-.926 2.772-.165.494-.326.992-.53 1.47-.054.13-.13.235-.155.39-.13.811-.18.877-.905 1.473Z"
                                        clip-rule="evenodd" />
                                </svg></div>
                            <div data-img-height style="--img-height: 80%;" data-show="startbox"><img class="rounded-4"
                                    loading="lazy" src="{{asset('theme4/assets/img/home-3-image-900x720.jpg')}}" alt="">
                            </div>
                        </div>
                        <div
                            class="rounded-4 overflow-hidden shape-parent text-center d-inline-flex position-absolute mt-n75">
                            <div class="background">
                                <div class="background-color" style="--background-color: #481FA0;"></div>
                            </div><!-- Shape-->
                            <div class="shape shape-visible justify-content-start"><svg class="no-transform"
                                    xmlns="http://www.w3.org/2000/svg" width="51" height="89" fill="none">
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="7"
                                        d="M-4.638 41.934-10.428 85 13.5 70.818 37.429 85l-5.791-43.113M47 14.091c0 18.276-14.998 33.09-33.5 33.09-18.502 0-33.5-14.814-33.5-33.09C-20-4.185-5.002-19 13.5-19 32.002-19 47-4.185 47 14.09Z"
                                        opacity=".2" />
                                </svg></div>
                            <div class="px-60 py-35">
                                <div class="h1 m-0 text-white">328M</div>
                                <div class="h6 m-0 text-white">Happy Customers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="m-0">
        </div>
        <div class="pt-55 pb-130">
            <div class="container" id='services'>
                <div class="row gy-45">
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox">
                        <!-- Category-->
                        <div class="category ">
                            <div class="category-icon text-dark">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Communication/Active-call.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                        <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <div class="category-body ms-40">
                                <h4 class="category-title mb-5">Airtime Top-Up</h4>
                                <p class="category-text font-size-15 text-gray-dark m-0">Top Up your airtime at a discounted price and enjoy more call time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="100">
                        <!-- Category-->
                        <div class="category ">
                            <div class="category-icon text-dark">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Devices/LTE2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M16.4508979,17.4029496 L15.1784978,15.8599014 C16.324501,14.9149052 17,13.5137472 17,12 C17,10.4912085 16.3289582,9.09418404 15.1893841,8.14910121 L16.466112,6.60963188 C18.0590936,7.93073905 19,9.88958759 19,12 C19,14.1173586 18.0528606,16.0819686 16.4508979,17.4029496 Z M19.0211112,20.4681628 L17.7438102,18.929169 C19.7927036,17.2286725 21,14.7140097 21,12 C21,9.28974232 19.7960666,6.77820732 17.7520315,5.07766256 L19.031149,3.54017812 C21.5271817,5.61676443 23,8.68922234 23,12 C23,15.3153667 21.523074,18.3916375 19.0211112,20.4681628 Z M7.54910207,17.4029496 C5.94713944,16.0819686 5,14.1173586 5,12 C5,9.88958759 5.94090645,7.93073905 7.53388797,6.60963188 L8.81061588,8.14910121 C7.67104182,9.09418404 7,10.4912085 7,12 C7,13.5137472 7.67549895,14.9149052 8.82150222,15.8599014 L7.54910207,17.4029496 Z M4.9788888,20.4681628 C2.47692603,18.3916375 1,15.3153667 1,12 C1,8.68922234 2.47281829,5.61676443 4.96885102,3.54017812 L6.24796852,5.07766256 C4.20393339,6.77820732 3,9.28974232 3,12 C3,14.7140097 4.20729644,17.2286725 6.25618985,18.929169 L4.9788888,20.4681628 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M11,14.2919782 C10.1170476,13.9061998 9.5,13.0251595 9.5,12 C9.5,10.6192881 10.6192881,9.5 12,9.5 C13.3807119,9.5 14.5,10.6192881 14.5,12 C14.5,13.0251595 13.8829524,13.9061998 13,14.2919782 L13,20 C13,20.5522847 12.5522847,21 12,21 C11.4477153,21 11,20.5522847 11,20 L11,14.2919782 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <div class="category-body ms-40">
                                <h4 class="category-title mb-5">Affordable Data Plans</h4>
                                <p class="category-text font-size-15 text-gray-dark m-0">Enjoy the internet with our cheap data plans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="200">
                        <!-- Category-->
                        <div class="category ">
                            <div class="category-icon text-dark">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Devices/TV2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,17 C22,17.5522847 21.5522847,18 21,18 L3,18 C2.44771525,18 2,17.5522847 2,17 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M9.632,10.066 L11.032,10.066 L11.032,9.044 L7.035,9.044 L7.035,10.066 L8.435,10.066 L8.435,14 L9.632,14 L9.632,10.066 Z M14.935,14 L16.846,9.044 L15.523,9.044 L14.382,12.558 L14.354,12.558 L13.206,9.044 L11.862,9.044 L13.738,14 L14.935,14 Z" fill="#000000"/>
                                        <rect fill="#000000" opacity="0.3" x="3" y="19" width="18" height="1" rx="0.5"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <div class="category-body ms-40">
                                <h4 class="category-title mb-5">Cable Subscription</h4>
                                <p class="category-text font-size-15 text-gray-dark m-0">Streamline Your Entertainment with our Cable Subscription Plans</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="300">
                        <!-- Category-->
                        <div class="category ">
                            <div class="category-icon text-dark">
                                <span class="svg-icon svg-icon-primary svg-icon-4x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
                                        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <div class="category-body ms-40">
                                <h4 class="category-title mb-5">Bulk SMS</h4>
                                <p class="category-text font-size-15 text-gray-dark m-0">Reach Your Audience Seamlessly with our Bulk SMS packages.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="300">
                        <!-- Category-->
                        <div class="category ">
                            <div class="category-icon text-dark">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Layout/Layout-top-panel-6.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <div class="category-body ms-40">
                                <h4 class="category-title mb-5">Exam Result Checkers</h4>
                                <p class="category-text font-size-15 text-gray-dark m-0">Easily Access Your Exam Results at a giveaway prices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="300">
                        <!-- Category-->
                        <div class="category ">
                            <div class="category-icon text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="38"
                                    height="38" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.3"
                                        d="M19 2v3.09m0 27.82V36M6.976 6.976l2.195 2.195m19.658 19.658 2.195 2.195M2 19h3.09m27.82 0H36M6.976 31.024l2.195-2.195M28.829 9.171l2.195-2.195M26.727 19a7.727 7.727 0 1 1-15.454 0 7.727 7.727 0 0 1 15.454 0Z" />
                                </svg></div>
                            <div class="category-body ms-40">
                                <h4 class="category-title mb-5">Pay Light Bills</h4>
                                <p class="category-text font-size-15 text-gray-dark m-0">Light Up Your Building with Effortless Bill Payments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-120 pb-130 bg-gray-light callToActionPrev">
            <div class="container">
                <div class="row mb-90">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <h2 class="m-0" data-show="startbox" data-show-delay="100">Our Data Plans</h2>
                    </div>
                </div>
                <div class="row" id='data_prices'>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <div class="section-title">
                                    <img src="https://www.steadysub.com/frontend/img/mtn.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">MTN DATA PLANS</div>
                                </div>

                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($mtn as $data)
                                        <tr>
                                            <td style='font-size:12px'>{{ $data->plan_name }}</td>
                                            <td style='font-size:12px'><b>₦{{ number_format($data->data_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"><i
                                            class="bi bi-cart"></i>Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <br>
                                <div class="section-title">
                                    <img src="https://www.steadysub.com/frontend/img/glo.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">GLO DATA PLANS</div>
                                </div>



                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($glo as $data)
                                        <tr>
                                            <td style='font-size:12px'>{{ $data->plan_name }}</td>
                                            <td style='font-size:12px'><b>₦{{ number_format($data->data_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"><i
                                            class="bi bi-cart"></i>Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <br>
                                <div class="section-title">
                                    <img src="https://www.steadysub.com/frontend/img/airtel.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">AIRTEL DATA PLANS</div>
                                </div>



                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($airtel as $data)
                                        <tr>
                                            <td style='font-size:12px'>{{ $data->plan_name }}</td>
                                            <td style='font-size:12px'><b>₦{{ number_format($data->data_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"><i
                                            class="bi bi-cart"></i>Purchase Now</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <br>
                                <div class="section-title">
                                    <img src="https://www.steadysub.com/frontend/img/9mobile.png"
                                        class="rounded mx-auto d-block"
                                        style="height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px">
                                    <div class="mx-auto d-block text-center">9MOBILE DATA PLANS</div>
                                </div>



                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($nmobile as $data)
                                        <tr>
                                            <td style='font-size:12px'>{{ $data->plan_name }}</td>
                                            <td style='font-size:12px'><b>₦{{ number_format($data->data_price) }}</b></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"><i
                                            class="bi bi-cart"></i>Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- Call to action-->


        <div class="pt-120 pb-100 bg-dark shape-parent videoPrev">
            <!-- Shape-->
            <div class="shape justify-content-center ms-n190"><img loading="lazy"
                    src="{{asset('theme4/assets/img/root/home-3-shape-688x354.png')}}" alt="" width="688" height="354">
            </div>
            <div class="container">
                <div class="row gy-45">


                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex" data-show="startbox">
                            <div class="flex-shrink-0">
                                <div class="circle-icon text-white bg-accent-1 mt-10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                        <path fill="currentColor"
                                            d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-40">
                                <div class="h3 m-0 text-white">Everything Automated</div>
                                {{-- <div class="h6 mb-15">Years of exeperience</div> --}}
                                <p class="font-size-15 m-0 text-white">Payment and Purchases fully Automated.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex" data-show="startbox">
                            <div class="flex-shrink-0">
                                <div class="circle-icon text-white bg-accent-1 mt-10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                        <path fill="currentColor"
                                            d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-40">
                                <div class="h3 m-0 text-white">Transaction Redo</div>
                                {{-- <div class="h6 mb-15">Years of exeperience</div> --}}
                                <p class="font-size-15 m-0 text-white">Experience hassle-free transaction retries with our
                                    one-click Transaction Redo feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex" data-show="startbox">
                            <div class="flex-shrink-0">
                                <div class="circle-icon text-white bg-accent-1 mt-10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                        <path fill="currentColor"
                                            d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-40">
                                <div class="h3 m-0 text-white">Bulk Purchase</div>
                                {{-- <div class="h6 mb-15">Years of exeperience</div> --}}
                                <p class="font-size-15 m-0 text-white">Simplify bulk purchases with our streamlined process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex" data-show="startbox">
                            <div class="flex-shrink-0">
                                <div class="circle-icon text-white bg-accent-1 mt-10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                        <path fill="currentColor"
                                            d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-40">
                                <div class="h3 m-0 text-white">Add Up Beneficiaries</div>
                                {{-- <div class="h6 mb-15">Years of exeperience</div> --}}
                                <p class="font-size-15 m-0 text-white">Simplify future purchases by saving contacts, decoder
                                    numbers, and meter numbers with our 'Add Up Beneficiaries' feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex" data-show="startbox">
                            <div class="flex-shrink-0">
                                <div class="circle-icon text-white bg-accent-1 mt-10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                        <path fill="currentColor"
                                            d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-40">
                                <div class="h3 m-0 text-white">Schedule For Later Purchase</div>
                                {{-- <div class="h6 mb-15">Years of exeperience</div> --}}
                                <p class="font-size-15 m-0 text-white">Plan your purchases ahead with our 'Schedule for Later
                                    Purchase' feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex" data-show="startbox">
                            <div class="flex-shrink-0">
                                <div class="circle-icon text-white bg-accent-1 mt-10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                        <path fill="currentColor"
                                            d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-40">
                                <div class="h3 m-0 text-white">24/7 Support System</div>
                                {{-- <div class="h6 mb-15">Years of exeperience</div> --}}
                                <p class="font-size-15 m-0 text-white">Count on our 24/7 support system for assistance anytime you
                                    need it.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="pt-120 pb-130 footerPrev videoNext shape-parent overflow-hidden">
            <!-- Shape-->
            <div class="shape justify-content-start"><img loading="lazy"
                    src="{{asset('theme4/assets/img/root/home-3-shape-2-568x706.png')}}" alt="" width="568"
                    height="706"></div>
            <div class="py-70 ps-md-100 ps-50 position-relative rounded-0 overflow-hidden z-index-1">
                <div class="background">
                    <div class="background-image jarallax')}}" data-jarallax data-speed="0.8"><img class="jarallax-img"
                            loading="lazy" src="{{asset('theme4/assets/img/root/call-to-action-1920x1080.jpg')}}"
                            alt=""></div>
                    <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
                </div>
                <div class="row d-flex align-items-center gy-40">
                    <div class="col-lg-5">
                        <h3 class="text-white m-0" data-show="startbox">Want to get in touch with us?</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <ul class="list-group borderless d-inline-flex">
                            <li class="list-group-item d-flex" data-show="startbox" data-show-delay="100"><svg
                                    class="me-15 align-self-center text-accent-3" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="none">
                                    <path fill="currentColor"
                                        d="M16 11.98v2.408a1.604 1.604 0 0 1-1.094 1.527 1.613 1.613 0 0 1-.66.079 15.941 15.941 0 0 1-6.943-2.465A15.672 15.672 0 0 1 2.476 8.71a15.869 15.869 0 0 1-2.47-6.96A1.603 1.603 0 0 1 .96.136C1.163.047 1.384 0 1.607 0h2.414A1.61 1.61 0 0 1 5.63 1.381c.102.77.29 1.528.563 2.256a1.603 1.603 0 0 1-.362 1.694l-1.022 1.02a12.86 12.86 0 0 0 4.827 4.817l1.022-1.02a1.61 1.61 0 0 1 1.697-.36c.73.271 1.489.46 2.26.561A1.61 1.61 0 0 1 16 11.98Z" />
                                </svg><a class="fw-bold text-white" href="tel:12023580309">{{ $user->phone }}</a></li>
                            <li class="list-group-item d-flex mt-15" data-show="startbox" data-show-delay="200"><svg
                                    class="me-15 align-self-center text-accent-3" xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="11" fill="none">
                                    <path fill="currentColor" d="M14 0H0l7 4.583L14 0Z" />
                                    <path fill="currentColor"
                                        d="M14 9.821V2L7 6.5 0 2v7.821C0 10.47.63 11 1.4 11h11.2c.77 0 1.4-.53 1.4-1.179Z" />
                                </svg><a class="fw-bold text-white" href="mailto:help@startbox.com">{{ $user->email
                                    }}</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 text-start text-lg-end">
                        <div data-show="startbox" data-show-delay="300">
                            <!-- Button--><a class="btn btn-accent-3 me-lg-70"
                                href="https://wa.me/234{{ substr($user->phone, 1) }}" target="_self">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Call to action-->

    </div><!-- Footer-->
    <footer class="bg-dark text-white pt-120 pb-100 footerNext">
        <div class="container">
            <div class="row gy-50">
                <div class="col-12 col-lg-3"><a class="d-block mb-30" href="#">
                    @if($user->logo !== null)
                    <img class="rounded-circle header-profile-user"
                    src="https://vtubiz.com/public/brand_images/{{ $user->logo}}" style='width:50px;height:50px' />
                   @else
                    <h2 class='text-white'>{{ $user->brand_name }}</h2>
                    @endif

                    </a>
                    <ul class="nav text-white align-items-center mb-20 nav-gap-md nav-no-opacity">
                        <li class="nav-item"><a class="nav-link" href="{{ $user->facebook }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="8" height="17" fill="none">
                                    <path fill="currentColor"
                                        d="M6.318 2.8h1.391V.202A16.842 16.842 0 0 0 5.683.088c-2.006 0-3.38 1.353-3.38 3.837v2.287H.089v2.902h2.214v7.303h2.713V9.114H7.14l.338-2.902H5.016v-2c0-.839.21-1.413 1.302-1.413Z" />
                                </svg></a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ $user->twitter }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none">
                                    <path fill="currentColor"
                                        d="M17.477 4.484c.012.165.012.329.012.493 0 5.014-3.817 10.792-10.792 10.792-2.149 0-4.145-.623-5.824-1.703.305.035.599.047.916.047a7.596 7.596 0 0 0 4.709-1.62 3.8 3.8 0 0 1-3.547-2.63c.235.034.47.058.717.058.34 0 .68-.047.998-.13A3.793 3.793 0 0 1 1.625 6.07v-.047a3.82 3.82 0 0 0 1.714.482 3.79 3.79 0 0 1-1.691-3.159c0-.704.188-1.35.517-1.914a10.781 10.781 0 0 0 7.82 3.97 4.282 4.282 0 0 1-.094-.87c0-2.09 1.691-3.793 3.793-3.793 1.092 0 2.079.458 2.771 1.198a7.466 7.466 0 0 0 2.408-.916c-.282.88-.881 1.62-1.668 2.09a7.604 7.604 0 0 0 2.184-.587 8.153 8.153 0 0 1-1.902 1.961Z" />
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ $user->instagram }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none">
                                    <path fill="currentColor"
                                        d="M8.788 4.097C6.47 4.097 4.6 5.95 4.6 8.25c0 2.298 1.87 4.153 4.188 4.153 2.318 0 4.188-1.855 4.188-4.153 0-2.3-1.87-4.153-4.188-4.153Zm0 6.853c-1.498 0-2.723-1.211-2.723-2.7 0-1.49 1.221-2.7 2.723-2.7 1.502 0 2.723 1.21 2.723 2.7 0 1.489-1.225 2.7-2.723 2.7Zm5.336-7.023a.97.97 0 0 1-.977.968.97.97 0 0 1-.976-.968c0-.535.437-.969.976-.969.54 0 .977.434.977.969Zm2.774.983c-.062-1.298-.36-2.447-1.32-3.394C14.624.569 13.465.272 12.156.207c-1.349-.076-5.39-.076-6.74 0C4.113.27 2.954.565 1.995 1.512 1.035 2.46.74 3.61.674 4.906c-.076 1.338-.076 5.346 0 6.683.063 1.298.361 2.447 1.32 3.394.959.947 2.114 1.244 3.423 1.309 1.348.076 5.39.076 6.739 0 1.308-.062 2.468-.358 3.422-1.309.956-.947 1.254-2.096 1.32-3.394.076-1.337.076-5.342 0-6.68Zm-1.742 8.114a2.745 2.745 0 0 1-1.553 1.54c-1.075.423-3.627.325-4.815.325-1.188 0-3.743.095-4.815-.325a2.746 2.746 0 0 1-1.552-1.54c-.427-1.066-.329-3.596-.329-4.774 0-1.179-.094-3.712.329-4.775a2.745 2.745 0 0 1 1.552-1.54C5.048 1.512 7.6 1.61 8.788 1.61c1.188 0 3.743-.094 4.815.325a2.745 2.745 0 0 1 1.553 1.54c.426 1.066.328 3.596.328 4.775 0 1.178.098 3.712-.328 4.774Z" />
                                </svg></a></li>

                    </ul>
                    <p class="font-size-13 text-muted m-0">© 2023 Powered by VTUBIZ.</p>
                </div>
                <div class="col-2 d-none d-lg-block"></div>
                <div class="col-12 col-lg-7">
                    <div class="row gy-50">
                        <div class="col-6 col-md-4">
                            <h6 class="display-6 text-white mb-20">Services</h6>
                            <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                                <li class="nav-item"><a class="nav-link" href="/airtime">Airtime Top-Up</a></li>
                                <li class="nav-item"><a class="nav-link" href="/data">Data Purchase</a></li>
                                <li class="nav-item"><a class="nav-link" href="/cable">Cable Subscription</a></li>
                                <li class="nav-item"><a class="nav-link" href="/electricity">Pay Light Bills</a></li>
                                <li class="nav-item"><a class="nav-link" href="/bulksms">Bulk SMS</a></li>
                                <li class="nav-item"><a class="nav-link" href="/examination">Exam Result Checkers</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4">
                            <h6 class="display-6 text-white mb-20">About</h6>
                            <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                                <li class="nav-item"><a class="nav-link" href="#about_us">About us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#services">Our Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact_us">Get Started</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4">
                            <h6 class="display-6 text-white mb-20">Contact</h6>
                            <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                                <li class="nav-item"><a class="nav-link" href="tel:{{ $user->phone }}">{{ $user->phone
                                        }}</a></li>

                                <li class="nav-item"><a class="nav-link" href="mailto:{{ $user->email }}">{{
                                        $user->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Vendors-->
    <!-- build:js -->
    <script src="{{ asset('theme4/assets/vendors/js/bootstrap.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/isotope.pkgd.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/jarallax.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/jarallax-element.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/ofi.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/jquery.inview.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/swiper-bundle.js')}}"></script>
    <script src="{{ asset('theme4/assets/vendors/js/gist-embed.min.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/helpers.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/show-on-scroll.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/countdown.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/isotope.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/navbar.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/stretch-column.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/swiper.js')}}"></script>
    <script src="{{ asset('theme4/assets/js/controllers/others.js')}}"></script><!-- endbuild -->
</body>


<!-- Mirrored from runwebrun.com/startbox/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2022 14:43:53 GMT -->

</html>