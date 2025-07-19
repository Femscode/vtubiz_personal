<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>{{ $user->brand_name }}</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('brand_images/'.$user->logo) }}">

    <!-- Libs CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('theme1/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme1/assets/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme1/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme1/assets/libs/slick-carousel/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme1/assets/libs/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme1/assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('theme1/assets/css/theme.min.css') }}">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f9fafb;
        }
        .navbar {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            transition: transform 0.3s ease;
        }
        .navbar-brand img:hover {
            transform: scale(1.1);
        }
        .nav-link {
            font-weight: 500;
            color: #1f2937 !important;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: {{ $user->brand_color ?? '#2563eb' }} !important;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
        }
        .img-zoom {
            overflow: hidden;
            border-radius: 15px;
        }
        .img-zoom img {
            transition: transform 0.5s ease;
        }
        .img-zoom img:hover {
            transform: scale(1.05);
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: {{ $user->brand_color ?? '#2563eb' }};
            border-color: {{ $user->brand_color ?? '#2563eb' }};
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: {{ $user->brand_color ? $user->brand_color : '#1e40af' }};
        }
        footer {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: #ffffff;
        }
        footer a {
            color: #d1d5db;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #ffffff;
        }
        .service-card {
            background: #ffffff;
            border-left: 5px solid {{ $user->brand_color ?? '#2563eb' }};
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-M8S4MT3EYG');
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container mx-auto px-4 py-3">
            <a class="navbar-brand" href="#">
                @if($user->logo !== null)
                    <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}" alt="{{ $user->brand_name }}" style="width: 60px; height: 60px;" class="rounded-full">
                @else
                    <h2 class="text-2xl font-bold text-gray-800">{{ $user->brand_name }}</h2>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto space-x-4">
                    <li class="nav-item">
                        <a class="nav-link text-lg" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg" href="#data_prices">Data Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg" href="#electricity_prices">Electricity Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg" href="https://wa.me/234{{ substr($user->phone,1) }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg" href="/register">Register/Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        <section class="py-12 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">{{ $user->brand_name ?? "VTUBIZ" }}</h1>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Your one-stop platform for airtime, data, electricity, and cable subscriptions.</p>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="img-zoom">
                        @if($user->image_1 !== null)
                            <img src="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_1 }}" alt="" class="img-fluid w-full rounded-lg">
                        @else
                            <img src="{{ asset('assets/media/logos/fastpay_bg_2.jpg') }}" alt="" class="img-fluid w-full rounded-lg">
                        @endif
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $user->heading_1 ?? "Top-Up, Pay Bills, Stay Connected." }}</h2>
                        <p class="text-gray-600 text-lg">{{ $user->sub_heading_1 ?? "Top Up Airtime, Data, Cable Subscriptions, and More, All at Your Convenience." }}</p>
                        <a href="/register" class="btn btn-primary mt-4">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 bg-gradient-to-r from-yellow-50 to-yellow-100">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4" style="font-family: {{ $user->font_family }}; color: {{ $user->brand_color ?? '#856404' }};">About Us</h2>
                        <p class="text-gray-600 text-lg lead">{{ $user->about_us ?? "We provide a comprehensive platform for all your data, airtime, electricity, and cable subscription needs. Our mission is to empower your digital lifestyle through affordability, automation, and lightning-fast transactions." }}</p>
                    </div>
                    <div class="img-zoom">
                        @if($user->image_2 !== null)
                            <img src="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_2 }}" alt="" class="img-fluid w-full rounded-lg">
                        @else
                            <img src="{{ asset('assets/media/logos/fastpay_bg_2.jpg') }}" alt="" class="img-fluid w-full rounded-lg">
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="container mx-auto px-4">
                <hr class="my-12 border-gray-200">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="img-zoom">
                        @if($user->image_3 !== null)
                            <img src="https://vtubiz.com/newpersonal/public/website_images/{{ $user->image_3 }}" alt="" class="img-fluid w-full rounded-lg">
                        @else
                            <img src="{{ asset('assets/media/logos/fastpay_bg_2.jpg') }}" alt="" class="img-fluid w-full rounded-lg">
                        @endif
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $user->heading_2 ?? "Top Up Airtime, Data, Cable Subscriptions, and More, All at Your Convenience." }}</h2>
                        <p class="text-gray-600 text-lg">{{ $user->sub_heading_2 ?? "Simplify Your Digital Transactions" }}</p>
                    </div>
                </div>
                <hr class="my-12 border-gray-200">
            </div>
        </section>

        <section class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <a href="/airtime">
                        <div class="card p-6 service-card rounded-lg">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000" />
                                        <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    </g>
                                </svg>
                            </span>
                            <h3 class="text-xl font-bold mt-2">Airtime Top Up <svg xmlns="http://www.w3.org/2000/svg" width="42" height="11" fill="none"><path stroke="currentColor" stroke-width="2" d="M0 5.5h40m0 0L34.6 1M40 5.5 34.6 10" /></svg></h3>
                        </div>
                    </a>
                    <a href="/data">
                        <div class="card p-6 service-card rounded-lg">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M16.4508979,17.4029496 L15.1784978,15.8599014 C16.324501,14.9149052 17,13.5137472 17,12 C17,10.4912085 16.3289582,9.09418404 15.1893841,8.14910121 L16.466112,6.60963188 C18.0590936,7.93073905 19,9.88958759 19,12 C19,14.1173586 18.0528606,16.0819686 16.4508979,17.4029496 Z M19.0211112,20.4681628 L17.7438102,18.929169 C19.7927036,17.2286725 21,14.7140097 21,12 C21,9.28974232 19.7960666,6.77820732 17.7520315,5.07766256 L19.031149,3.54017812 C21.5271817,5.61676443 23,8.68922234 23,12 C23,15.3153667 21.523074,18.3916375 19.0211112,20.4681628 Z M7.54910207,17.4029496 C5.94713944,16.0819686 5,14.1173586 5,12 C5,9.88958759 5.94090645,7.93073905 7.53388797,6.60963188 L8.81061588,8.14910121 C7.67104182,9.09418404 7,10.4912085 7,12 C7,13.5137472 7.67549895,14.9149052 8.82150222,15.8599014 L7.54910207,17.4029496 Z M4.9788888,20.4681628 C2.47692603,18.3916375 1,15.3153667 1,12 C1,8.68922234 2.47281829,5.61676443 4.96885102,3.54017812 L6.24796852,5.07766256 C4.20393339,6.77820732 3,9.28974232 3,12 C3,14.7140097 4.20729644,17.2286725 6.25618985,18.929169 L4.9788888,20.4681628 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M11,14.2919782 C10.1170476,13.9061998 9.5,13.0251595 9.5,12 C9.5,10.6192881 10.6192881,9.5 12,9.5 C13.3807119,9.5 14.5,10.6192881 14.5,12 C14.5,13.0251595 13.8829524,13.9061998 13,14.2919782 L13,20 C13,20.5522847 12.5522847,21 12,21 C11.4477153,21 11,20.5522847 11,20 L11,14.2919782 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <h3 class="text-xl font-bold mt-2">Data Subscription <svg xmlns="http://www.w3.org/2000/svg" width="42" height="11" fill="none"><path stroke="currentColor" stroke-width="2" d="M0 5.5h40m0 0L34.6 1M40 5.5 34.6 10" /></svg></h3>
                        </div>
                    </a>
                    <a href="/cable">
                        <div class="card p-6 service-card rounded-lg">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,17 C22,17.5522847 21.5522847,18 21,18 L3,18 C2.44771525,18 2,17.5522847 2,17 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M9.632,10.066 L11.032,10.066 L11.032,9.044 L7.035,9.044 L7.035,10.066 L8.435,10.066 L8.435,14 L9.632,14 L9.632,10.066 Z M14.935,14 L16.846,9.044 L15.523,9.044 L14.382,12.558 L14.354,12.558 L13.206,9.044 L11.862,9.044 L13.738,14 L14.935,14 Z" fill="#000000" />
                                        <rect fill="#000000" opacity="0.3" x="3" y="19" width="18" height="1" rx="0.5" />
                                    </g>
                                </svg>
                            </span>
                            <h3 class="text-xl font-bold mt-2">Cable(Tv) Subscription <svg xmlns="http://www.w3.org/2000/svg" width="42" height="11" fill="none"><path stroke="currentColor" stroke-width="2" d="M0 5.5h40m0 0L34.6 1M40 5.5 34.6 10" /></svg></h3>
                        </div>
                    </a>
                    <a href="/electricity">
                        <div class="card p-6 service-card rounded-lg">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="9" r="8" />
                                        <path d="M14.5297296,11 L9.46184488,11 L11.9758349,17.4645458 L14.5297296,11 Z M10.5679953,19.3624463 L6.53815512,9 L17.4702704,9 L13.3744964,19.3674279 L11.9759405,18.814912 L10.5679953,19.3624463 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M10,22 L14,22 L14,22 C14,23.1045695 13.1045695,24 12,24 L12,24 C10.8954305,24 10,23.1045695 10,22 Z" fill="#000000" opacity="0.3" />
                                        <path d="M9,20 C8.44771525,20 8,19.5522847 8,19 C8,18.4477153 8.44771525,18 9,18 C8.44771525,18 8,17.5522847 8,17 C8,16.4477153 8.44771525,16 9,16 L15,16 C15.5522847,16 16,16.4477153 16,17 C16,17.5522847 15.5522847,18 15,18 C15.5522847,18 16,18.4477153 16,19 C16,19.5522847 15.5522847,20 15,20 C15.5522847,20 16,20.4477153 16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 C8,20.4477153 8.44771525,20 9,20 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <h3 class="text-xl font-bold mt-2">Pay Light Bills <svg xmlns="http://www.w3.org/2000/svg" width="42" height="11" fill="none"><path stroke="currentColor" stroke-width="2" d="M0 5.5h40m0 0L34.6 1M40 5.5 34.6 10" /></svg></h3>
                        </div>
                    </a>
                    <a href="/examination">
                        <div class="card p-6 service-card rounded-lg">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1" />
                                        <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1" />
                                    </g>
                                </svg>
                            </span>
                            <h3 class="text-xl font-bold mt-2">Exam Result Checker <svg xmlns="http://www.w3.org/2000/svg" width="42" height="11" fill="none"><path stroke="currentColor" stroke-width="2" d="M0 5.5h40m0 0L34.6 1M40 5.5 34.6 10" /></svg></h3>
                        </div>
                    </a>
                    <a href="/bulksms">
                        <div class="card p-6 service-card rounded-lg">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                            </span>
                            <h3 class="text-xl font-bold mt-2">Bulk SMS <svg xmlns="http://www.w3.org/2000/svg" width="42" height="11" fill="none"><path stroke="currentColor" stroke-width="2" d="M0 5.5h40m0 0L34.6 1M40 5.5 34.6 10" /></svg></h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="data_prices" class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Data Prices</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="card p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://www.vtubiz.com/frontend/img/mtn.png" alt="MTN" class="mx-auto h-12 w-12 border-2 border-yellow-600 rounded">
                        <h3 class="text-xl font-bold text-center mt-4">MTN DATA PLANS</h3>
                        <table class="table-auto w-full mt-4">
                            <tbody>
                                @foreach($mtn as $data)
                                    <tr>
                                        <td class="py-2">{{ $data->plan_name }}</td>
                                        <td class="py-2 text-right font-bold">₦{{ number_format($data->admin_price) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/buydata" class="btn btn-primary mt-4 block text-center">Purchase Now</a>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://www.vtubiz.com/frontend/img/glo.png" alt="GLO" class="mx-auto h-12 w-12 border-2 border-green-600 rounded">
                        <h3 class="text-xl font-bold text-center mt-4">GLO DATA PLANS</h3>
                        <table class="table-auto w-full mt-4">
                            <tbody>
                                @foreach($glo as $data)
                                    <tr>
                                        <td class="py-2">{{ $data->plan_name }}</td>
                                        <td class="py-2 text-right font-bold">₦{{ number_format($data->admin_price) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/buydata" class="btn btn-primary mt-4 block text-center">Purchase Now</a>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://www.vtubiz.com/frontend/img/airtel.png" alt="AIRTEL" class="mx-auto h-12 w-12 border-2 border-red-600 rounded">
                        <h3 class="text-xl font-bold text-center mt-4">AIRTEL DATA PLANS</h3>
                        <table class="table-auto w-full mt-4">
                            <tbody>
                                @foreach($airtel as $data)
                                    <tr>
                                        <td class="py-2">{{ $data->plan_name }}</td>
                                        <td class="py-2 text-right font-bold">₦{{ number_format($data->admin_price) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/buydata" class="btn btn-primary mt-4 block text-center">Purchase Now</a>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://www.vtubiz.com/frontend/img/9mobile.png" alt="9MOBILE" class="mx-auto h-12 w-12 border-2 border-green-600 rounded">
                        <h3 class="text-xl font-bold text-center mt-4">9MOBILE DATA PLANS</h3>
                        <table class="table-auto w-full mt-4">
                            <tbody>
                                @foreach($nmobile as $data)
                                    <tr>
                                        <td class="py-2">{{ $data->plan_name }}</td>
                                        <td class="py-2 text-right font-bold">₦{{ number_format($data->admin_price) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/buydata" class="btn btn-primary mt-4 block text-center">Purchase Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Why Choose Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="card p-6 bg-white rounded-lg shadow-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-clock text-primary mx-auto mb-4" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Unlock Cost Savings</h3>
                        <p class="text-gray-600">Experience affordability with our budget-friendly options for data, airtime, electricity, and cable subscriptions.</p>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-gift text-primary mx-auto mb-4" viewBox="0 0 16 16">
                            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Bulk Purchases</h3>
                        <p class="text-gray-600">Simplify bulk purchases with our streamlined process.</p>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-box-seam text-primary mx-auto mb-4" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Seamless Automation</h3>
                        <p class="text-gray-600">Say goodbye to manual processes – our platform offers automated purchasing for ultimate convenience.</p>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-tablet text-primary mx-auto mb-4" viewBox="0 0 16 16">
                            <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Lightning-Fast Transactions</h3>
                        <p class="text-gray-600">Enjoy swift processing for data, airtime, electricity, and cable subscriptions.</p>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-truck text-primary mx-auto mb-4" viewBox="0 0 16 16">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Add Up Beneficiaries</h3>
                        <p class="text-gray-600">Simplify future purchases by saving contacts, decoder numbers, and meter numbers.</p>
                    </div>
                    <div class="card p-6 bg-white rounded-lg shadow-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-arrow-repeat text-primary mx-auto mb-4" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Redo Transactions & Schedule</h3>
                        <p class="text-gray-600">Plan your purchases ahead with our 'Schedule for Later Purchase' feature.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        @if($user->logo !== null)
                            <img src="https://vtubiz.com/newpersonal/public/brand_images/{{ $user->logo }}" alt="{{ $user->brand_name }}" class="h-12 w-12 rounded-full mr-2">
                        @else
                            <h2 class="text-xl font-bold">{{ $user->brand_name }}</h2>
                        @endif
                    </div>
                    <p class="text-gray-400">{{ $user->about_us ?? "Empowering your digital lifestyle with affordable and fast transactions." }}</p>
                </div>
                <div>
                    <h6 class="text-lg font-bold mb-4 text-white">Get to Know Us</h6>
                    <ul class="space-y-2">
                        <li><a href="#about_us" class="hover:text-white">About Us</a></li>
                        <li><a href="#data_prices" class="hover:text-white">Data Prices</a></li>
                        <li><a href="#!" class="hover:text-white">Help Center</a></li>
                        <li><a href="#!" class="hover:text-white">Our Value</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-lg font-bold mb-4 text-white">Contact Us</h6>
                    <ul class="space-y-2">
                        <li><a href="#!" class="hover:text-white">Phone: {{ $user->phone }}</a></li>
                        <li><a href="#!" class="hover:text-white">Email: {{ $user->email }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-4 text-center">
                <p class="text-sm text-gray-400">© {{ $user->brand_name }} <span id="copyright"><script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> All rights reserved.</p>
                <ul class="flex justify-center space-x-4 mt-4">
                    <li><a href="{{ $user->facebook ?? 'https://facebook.com/vtubiz' }}" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" /></svg></a></li>
                    <li><a href="{{ $user->twitter ?? 'https://twitter.com/vtubiz' }}" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" /></svg></a></li>
                    <li><a href="{{ $user->instagram ?? 'https://instagram.com/vtubiz' }}" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" /></svg></a></li>
                    <li><a href="{{ $user->whatsapp ?? 'https://wa.me/2348030000000' }}" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.882.326 1.185.398.302.072.552.06.819-.088.265-.148.592-.467.776-.666.182-.198.346-.132.445-.099.1.066.669.318.865.517.197.198.198.397.099.595-.099.197-.445.648-.842.986z" /></svg></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="{{ asset('theme1/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('theme1/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('theme1/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{ asset('theme1/assets/libs/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{ asset('theme1/assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <script src="{{ asset('theme1/assets/js/theme.min.js')}}"></script>
    <script src="{{ asset('theme1/assets/js/vendors/slick-slider.js')}}"></script>
    <script src="{{ asset('theme1/assets/js/vendors/tns-slider.js')}}"></script>
    <script src="{{ asset('theme1/assets/js/vendors/zoom.js')}}"></script>
    <script src="{{ asset('theme1/assets/js/vendors/increment-value.js')}}"></script>
</body>
</html>