<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Best Interiors Designers in Bangalore - Krish-V Global interiors</title>
    <meta name="author" content="Themeholy" />
    <meta name="description" content="Discover Krish-V Global Interiors, Bangalore’s trusted name in interior design. From luxury homes to stylish offices, we bring your dream spaces to life. Contact us for a free consultation!" />
    <meta name="keywords" content="" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
    <link rel="icon" sizes="57x57" href="@assetPath('assets/img/1.png')">
    <link rel="manifest" href="@assetPath('assets/img/favicons/manifest.json')" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    {{-- <meta name="msapplication-TileImage" content="@assetPath('assets/img/favicons/ms-icon-144x144.png')" /> --}}
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Add Font Awesome CDN link in the <head> section of your HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" href="@assetPath('assets/css/app.min.css')" />
    <link rel="stylesheet" href="@assetPath('assets/css/fontawesome.min.css')" />
    <link rel="stylesheet" href="@assetPath('assets/css/style.css')" />


</head>
<body class="">
    <div class="preloader">
        <div class="preloader-inner">
            <img src="@assetPath('assets/img/loader.gif')" alt="loading">
        </div>
    </div>
    <div class="th-cursor"></div>


    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="@assetPath('assets/img/krish-v-logo-Global.png')" alt="Krish-V"/>
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a class="{{ request()->routeIs('complete_home_interiors')
                            || request()->routeIs('renovation')
                            || request()->routeIs('home_automation')
                            || request()->routeIs('upvc')
                            || request()->routeIs('customized_interior_designs')
                            || request()->routeIs('flooring')
                            || request()->routeIs('false_ceiling')
                            || request()->routeIs('commercial_interiors')
                            || request()->routeIs('turnkey_projects')
                            ? 'active' : '' }}" href="#">
                            Services
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('complete_home_interiors')}}">Complete Home Interiors</a></li>
                            <li><a href="{{route('renovation')}}">Renovation</a></li>
                            <li><a href="{{route('home_automation')}}">Home Automation</a></li>
                            <li><a href="{{route('upvc')}}">UPVC & Aluminium - Doors & Windows</a></li>
                            <li><a href="{{route('customized_interior_designs')}}">Customized Interior Designs</a></li>
                            <li><a href="{{route('flooring')}}">Flooring Solutions</a></li>
                            <li><a href="{{route('false_ceiling')}}">False Ceiling</a></li>
                            <li><a href="{{route('commercial_interiors')}}">Commercial Interiors</a></li>
                            <li><a href="{{route('turnkey_projects')}}">Complete Turnkey Projects</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('tour')}}">Virtual Tour</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li class="menu-item-has-children">
                        <a class="{{ request()->routeIs('carrer')
                            || request()->routeIs('blog')
                            || request()->routeIs('contact')
                            || request()->routeIs('do_more')
                            ? 'active' : '' }}" href="#">
                            More
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('carrer')}}">Careers</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('do_more')}}">Do More</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="social-media gradient-icon">
                    <a href="https://www.facebook.com/krishvglobalinteriors" target="_blank" class="social-icon facebook"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/krishvglobalinteriors" target="_blank" class="social-icon twitter"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@krishvglobalinteriors" target="_blank" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/krishvglobalinteriors/" target="_blank" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="mobile-number">
                    <a href="tel:+91 888 022 5544" class="btn-phone1">
                        <i class="fas fa-phone"></i> +91 888 022 5544
                    </a>
                </div>
            </div>
        </div>
    </div>



    <header class="th-header header-layout2 ">
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="th-container container">
                    <div class="menu-area">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="@assetPath('assets/img/krish1-removebg-preview.png')" alt="Krish-V"/>
                                </a>
                            </div>

                            <nav class="main-menu d-none d-lg-block">
                                <ul>
                                    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a class="{{ request()->routeIs('complete_home_interiors')
                                            || request()->routeIs('renovation')
                                            || request()->routeIs('home_automation')
                                            || request()->routeIs('upvc')
                                            || request()->routeIs('customized_interior_designs')
                                            || request()->routeIs('flooring')
                                            || request()->routeIs('false_ceiling')
                                            || request()->routeIs('commercial_interiors')
                                            || request()->routeIs('turnkey_projects')
                                            ? 'active' : '' }}" href="#">
                                            Services
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('complete_home_interiors')}}">Complete Home Interiors</a></li>
                                            <li><a href="{{route('renovation')}}">Renovation</a></li>
                                            <li><a href="{{route('home_automation')}}">Home Automation</a></li>
                                            <li><a href="{{route('upvc')}}">UPVC & Aluminium - Doors & Windows</a></li>
                                            <li><a href="{{route('customized_interior_designs')}}">Customized Interior Designs</a></li>
                                            <li><a href="{{route('flooring')}}">Flooring Solutions</a></li>
                                            <li><a href="{{route('false_ceiling')}}">False Ceiling</a></li>
                                            <li><a href="{{route('commercial_interiors')}}">Commercial Interiors</a></li>
                                            <li><a href="{{route('turnkey_projects')}}">Complete Turnkey Projects</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('tour')}}">Virtual Tour</a></li>
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    <li class="menu-item-has-children">
                                        <a class="{{ request()->routeIs('carrer')
                                            || request()->routeIs('blog')
                                            || request()->routeIs('contact')
                                            || request()->routeIs('do_more')
                                            ? 'active' : '' }}" href="#">
                                            More
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('carrer')}}">Careers</a></li>
                                            <li><a href="{{route('blog')}}">Blog</a></li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            <li><a href="{{route('do_more')}}">Do More</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                            <!-- Right Side -->
                            <div class="header-actions">
                                <a href="tel:+918880225544" class="btn btn-phone d-none d-lg-inline-flex">
                                    <i class="fas fa-phone"></i> +91 888 022 5544
                                </a>
                                <button type="button" class="th-menu-toggle d-inline-flex d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    {{-- Hero Section --}}
    <div class="th-hero-wrapper hero-1">
        <div class="hero-slider-1 th-carousel" id="heroSlide1" data-fade="true" data-slide-show="1">
            <div class="th-hero-slide">
                <div class="video-container">
                    <video autoplay muted loop playsinline>
                        <source src="https://krishvglobalinteriors.com/public/assets/images/background/website-banner.webm" type="video/webm">
                        <source src="fallback.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay"></div>
                </div>

                <div class="container">
                    <div class="hero-style1">
                        <h1 class="hero-title hero-tight">
                            <span data-ani="slideinleft" data-ani-delay="0.3s">Welcome Home:</span><br>
                            <span data-ani="slideinleft" data-ani-delay="0.5s">Your Story & Home - </span><br>
                            <span class="text-transparent" data-ani="slideinleft" data-ani-delay="0.7s">
                                Beautifully Designed by <span class="text-theme">Krish-V Global Interiors</span>
                            </span>
                        </h1>
                    </div>
                </div>
            <div class="hero-shape"></div>
            </div>
        </div>
    </div>


    {{-- About Section of home --}}
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-5 mb-xl-0 wow fadeInLeft" data-wow-delay="0.2s" >
                    <div class="img-box1">
                        <div class="img1">
                            <img src="@assetPath('assets/img/Freepik-images/About/Compressed/About.webp')" alt="About" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <h2 class="sec-title margin about-content"> Your Premier Interior Design Partner<span class="text-theme"> in Bengaluru</span>  </h2>
                    <p class=""> At <b style="color: #fecc52;"> Krish-V Global Interiors,</b> we don't just design spaces; we craft the backdrop to your life's most precious moments. We believe a home is more than just walls—it’s where dreams, love, and memories come to life. Our vision is to create spaces that reflect your heart, enhance your lifestyle, and feel like home from the very first step. Krish-V Global Interiors is<b style="color: #fecc52;"> Bengaluru's premier interior design company,</b> dedicated to transforming your vision into reality. </p>
                    <p class=""> With years of invaluable experience, Krish-V has successfully completed over  <b style="color: #fecc52;">30,000+  homes,</b> bringing countless dreams to life. Our reputation for reliability speaks for itself. </p>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump" data-top="0" data-right="0">
            <img src="@assetPath('assets/img/shape/shape_3.png')" alt="shape" />
        </div>
    </div>


    {{-- Why choose us section --}}
    <div class="" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading">
                Why Choose <span> Us?</span>
            </h2>
        </div>
        <div class="marque-sec1">
            <div class="slick-marquee" data-speed="0.25" data-pausable="true">
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/costumer1.png')" style="width: 60px; height: 60px;" alt="Logo" />
                        <a href="">30,000+ Happy Customers</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/warehouse1.png')" style="width: 60px; height: 60px;"  alt="Logo" />
                        <a href="">In-house Production</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/blueprint1.png')" alt="Logo" />
                        <a href="">Unlimited Designs</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/painting1.png')" alt="Logo" />
                        <a href="">End-to-end Services</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/cabinet1.png')" alt="Logo" />
                        <a href="">Modular Setup</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/support1.png')" alt="Logo" />
                        <a href="">24*7 Customer Support</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/good-quality1.png')" alt="Logo" />
                        <a href="">Stringent Quality Checks</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/iso-certificate1.png')" alt="Logo" />
                        <a href="">ISO Certified Standards</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/breakdown1.png')" alt="Logo" />
                        <a href="">Advanced Machineries</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/24-hours-support1.png')" alt="Logo" />
                        <a href="">Free Consultation</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/expert1.png')" alt="Logo" />
                        <a href="">Skilled Workforce</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/transparency1.png')" alt="Logo" />
                        <a href="">100% Transparency</a>
                    </div>
                </div>
                <div class="marque-item">
                    <div class="marque-text">
                        <img src="@assetPath('assets/img/icon/white/human-centered.png')" alt="Logo" />
                        <a href="">VR Experience</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Mobile Service Section --}}
    <section class="mobile-service-section" id="main-services" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading">
                Complete <span> Interior Solutions </span>
            </h2>
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-area">
                        <div class="sec-title-wrapper">
                            <p class="section-description mt-3">
                            We take great pride in offering a comprehensive range of interior designs and provide customized design services that reflect your style and personality. Our experts transform your spaces into captivating realms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row service-card-grid">
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/living-room/Compressed/l7.webp')" alt="Bedroom" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/double-bed.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Complete Home Interiors</h3>
                            <a href="Complete-Home-Interiors.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Renovation/Resizer/after03_optimized.webp')" alt="kitchen" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/house.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Renovation</h3>
                            <a href="Renovation.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Home-automation/Compressed/H7.webp')" alt="kids-room" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/smart-home.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Home Automation</h3>
                            <a href="Home-automation.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br4.webp')" alt="living-room" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/living.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Customized Interior Designs</h3>
                            <a href="Customized-Interior-Designs.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Work-space/Compressed/w6.webp')" alt="home-automation" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/workspace.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Commercial Interiors </h3>
                            <a href="Work-space.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Turnkey-projects/Compressed/T34.webp')" alt="upvc" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/protection.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Complete Turnkey Projects</h3>
                            <a href="Turnkey-Projects.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Flooring/Compressed/F14.webp')" alt="renovation-img" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/tiles.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">Flooring Solutions</h3>
                            <a href="Flooring-Solutions.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/False-ceiling/Compressed/F5.webp')" alt="Workspace" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/ceiling.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">False Ceiling</h3>
                            <a href="False-Ceiling.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 service-card">
                    <div class="service-card-inner">
                        <img src="@assetPath('assets/img/Freepik-images/Upvc/Compressed/u8.webp')" alt="Dining" class="service-img">
                        <div class="service-content">
                            <img src="@assetPath('assets/img/icon/services/windows.svg')" alt="Bed Icon" class="service-icon svg-img">
                            <h3 class="service-title">UPVC & Aluminium - Doors & Windows</h3>
                            <a href="upvc.html" target="_blank" class="service-link">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Desktop Service Section --}}
    <section class="space service-flip-section"  style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading mb-4">
                Complete <span> Interior Solutions</span>
            </h2>
            <p class="what-we-do">Our mission is simple: to turn your dream home into reality—beautiful, functional, and uniquely yours. We offer end-to-end solutions, covering every stage of the design process, from ideation to final execution. We are your complete interior partner and a one-stop solution for all your interior needs.</p>
            <div class="flip-card-grid">
                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/living-room/Compressed/l7.webp')" alt="Service Image" />
                            <h3>Complete Home Interiors</h3>
                            <p>Interiors tailored to your lifestyle and comfort.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Modular Furniture</li>
                                <li><i class="fas fa-angle-double-right"></i>Theme-Based Design</li>
                                <li><i class="fas fa-angle-double-right"></i>Customized Wardrobes & Kitchens</li>
                                <li><i class="fas fa-angle-double-right"></i>Smart Lighting Solutions</li>
                                <li><i class="fas fa-angle-double-right"></i>End-to-End Project Management</li>
                                <li><i class="fas fa-angle-double-right"></i>Hassle-Free Installation</li>
                            </ul>
                            <a href="Complete-Home-Interiors.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Renovation/Resizer/after03_optimized.webp')" alt="Service Image" />
                            <h3>Renovation</h3>
                            <p>Transform and refresh your space with smart, modern renovation solutions.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Structural Upgrades</li>
                                <li><i class="fas fa-angle-double-right"></i> Space Reconfiguration</li>
                                <li><i class="fas fa-angle-double-right"></i>Wall & Paint Refresh</li>
                                <li><i class="fas fa-angle-double-right"></i> Electrical & Plumbing Overhaul</li>
                                <li><i class="fas fa-angle-double-right"></i>Flooring & Ceiling Works</li>
                                <li><i class="fas fa-angle-double-right"></i>Modern Aesthetic Finishes</li>
                            </ul>
                            <a href="Renovation.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Home-automation/Compressed/H7.webp')" alt="Service Image" />
                            <h3>Home Automation</h3>
                            <p>Seamless smart home solutions that bring comfort, control, and convenience.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Smart Device Control</li>
                                <li><i class="fas fa-angle-double-right"></i>Energy Efficiency</li>
                                <li><i class="fas fa-angle-double-right"></i>Voice Command Integration</li>
                                <li><i class="fas fa-angle-double-right"></i>Automated Security</li>
                                <li><i class="fas fa-angle-double-right"></i>Smart Lighting & Sensors</li>
                                <li><i class="fas fa-angle-double-right"></i>App-Based Monitoring</li>
                            </ul>
                            <a href="Home-automation.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed7.webp')" alt="Service Image" />
                            <h3>Customized Interior Designs</h3>
                            <p>Smart, stylish interiors made for you.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Optimized Storage</li>
                                <li><i class="fas fa-angle-double-right"></i>Space-Saving Layouts</li>
                                <li><i class="fas fa-angle-double-right"></i>Quick Installation</li>
                                <li><i class="fas fa-angle-double-right"></i>Customizable Modules</li>
                                <li><i class="fas fa-angle-double-right"></i>Easy to Maintain</li>
                                <li><i class="fas fa-angle-double-right"></i>Sleek Modern Aesthetic</li>
                            </ul>
                            <a href="Customized-Interior-Designs.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Work-space/Compressed/w16.webp')" alt="Service Image" />
                            <h3>Commercial Interiors</h3>
                            <p>Smart workspace design that boosts productivity and showcases your brand.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Ergonomic Workstations</li>
                                <li><i class="fas fa-angle-double-right"></i>Defined Team Zones</li>
                                <li><i class="fas fa-angle-double-right"></i>Collaborative Areas</li>
                                <li><i class="fas fa-angle-double-right"></i>Brand-Aligned Interiors</li>
                                <li><i class="fas fa-angle-double-right"></i>Efficient Space Utilization</li>
                                <li><i class="fas fa-angle-double-right"></i>Smart Tech Integration</li>
                            </ul>
                            <a href="Work-space.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Turnkey-projects/Compressed/T21.webp')" alt="Service Image" />
                            <h3>Complete Turnkey Projects</h3>
                            <p>End-to-end execution with quality and efficiency at every step.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>End-to-End Execution</li>
                                <li><i class="fas fa-angle-double-right"></i>Single Point of Contact</li>
                                <li><i class="fas fa-angle-double-right"></i>On-Time Delivery</li>
                                <li><i class="fas fa-angle-double-right"></i>Quality Assurance</li>
                                <li><i class="fas fa-angle-double-right"></i>Hassle-Free Coordination</li>
                                <li><i class="fas fa-angle-double-right"></i>Design to Handover</li>
                            </ul>
                            <a href="Turnkey-Projects.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Flooring/Compressed/F17.webp')" alt="Service Image" />
                            <h3>Flooring Solutions</h3>
                            <p>Durable, precision-installed flooring that combines style and strength.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Wide Material Options</li>
                                <li><i class="fas fa-angle-double-right"></i>Precision Installation</li>
                                <li><i class="fas fa-angle-double-right"></i>Seamless Finishing</li>
                                <li><i class="fas fa-angle-double-right"></i>Water & Slip Resistant</li>
                                <li><i class="fas fa-angle-double-right"></i>Durable & Low Maintenance</li>
                                <li><i class="fas fa-angle-double-right"></i>Enhances Aesthetic Appeal</li>
                            </ul>
                            <a href="Flooring-Solutions.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/False-ceiling/Compressed/F5.webp')" alt="Service Image" />
                            <h3>False Ceiling</h3>
                            <p>Stylish false ceilings that enhance lighting, acoustics, and overall ambiance.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>POP & Gypsum Designs</li>
                                <li><i class="fas fa-angle-double-right"></i>Wooden Panel Options</li>
                                <li><i class="fas fa-angle-double-right"></i>Integrated Ambient Lighting</li>
                                <li><i class="fas fa-angle-double-right"></i>Enhanced Acoustics</li>
                                <li><i class="fas fa-angle-double-right"></i>Illusion of Spaciousness</li>
                                <li><i class="fas fa-angle-double-right"></i>Concealed Wiring & Fixtures</li>
                            </ul>
                            <a href="False-Ceiling.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

                <div class="flip-card-wrapper">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="@assetPath('assets/img/Freepik-images/Upvc/Compressed/u8.webp')" alt="Service Image" />
                            <h3>UPVC & Aluminium - Doors & Windows</h3>
                            <p>Sleek, durable doors and windows built to last.</p>
                        </div>
                        <div class="flip-card-back">
                            <h4>Key Highlights</h4>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i>Weather Resistant</li>
                                <li><i class="fas fa-angle-double-right"></i>Sound Insulation</li>
                                <li><i class="fas fa-angle-double-right"></i>Custom Fit Designs</li>
                                <li><i class="fas fa-angle-double-right"></i>Thermal Efficiency</li>
                                <li><i class="fas fa-angle-double-right"></i>Low Maintenance</li>
                                <li><i class="fas fa-angle-double-right"></i>Sleek Modern Finish</li>
                            </ul>
                            <a href="upvc.html" target="_blank" class="btn-learn-more">View More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    {{-- Experience Center Section --}}
    <section class="krish-experience-modern" >
        <div class="krish-experience-wrapper">
            <div class="krish-experience-left">
                <div class="experience-image" style="background-image: url(@assetPath('assets/img/Freepik-images/About/Experience-center/Experience-center2.jpeg');"></div>
            </div>
            <div class="krish-experience-right">
                <h2 class="site-section-heading mb-4">
                    Immerse Yourself in Design : Visit <span>  Our Experience Centre </span>
                </h2>
                <p style="font-size: 14px;">As Bangalore’s Leading Interior Design Firm, we have a strong market presence, serving clients across the city and beyond.
                    Come visit our state-of-the-art Experience Centre at Thanisandra, Bangalore, to envision your future space.</p>
                <ul class="experience-features">
                    <li><i class="fas fa-columns"></i> Design Galleries</li>
                    <li><i class="fas fa-cubes"></i> Material Library</li>
                    <li><i class="fas fa-vr-cardboard"></i> Virtual Reality Experiences</li>
                </ul>
                <div class="experience-cta">
                    <button class="krish-btn secondary" data-bs-toggle="modal" data-bs-target="#siteVisitModal">Schedule a Visit</button>
                </div>
            </div>
        </div>
    </section>



    {{-- CTA Section --}}
    <div class="padding first-page">
        <section class="krish-v-cta-section mb-20" >
            <div class="container">
                <div class="krish-v-cta-content">
                    <div class="krish-v-cta-image">
                        <img src="@assetPath('assets/img/team/graphical-image/Living-room.png')" alt="Transform" />
                    </div>
                    <div class="krish-v-cta-text">
                        <h2>READY TO TRANSFORM YOUR SPACE?</h2>
                        <a href="#" class="krish-v-cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>



    {{-- Before and After Section --}}
    <div class="space-bottom content-wrapper" style="text-align: center;">
        <section class="about section-padding">
            <div class="container">
                <h2 class="site-section-heading mb-5">
                    The Krish‑V <span> Transformation Story </span>
                </h2>
                <div class="row align-items-center krishv-before-after-row mb-5">
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="krishv-before-after-wrapper" data-start="50" aria-label="Before After Slider">
                            <img src="@assetPath('assets/img/Freepik-images/Renovation/after01.png')"
                                alt="After Image" class="krishv-after-img" />

                            <div class="krishv-before-img-wrapper">
                                <img src="@assetPath('assets/img/Freepik-images/Renovation/before01.png')"
                                    alt="Before Image" class="krishv-before-img" />
                            </div>

                            <div class="krishv-slider-line-wrapper" aria-hidden="true">
                                <div class="krishv-slider-line"></div>
                            </div>

                            <button class="krishv-slider-handle" type="button" role="slider"
                                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"
                                    aria-label="Comparison position">
                                <span class="krishv-slider-icon">&#8596;</span>
                            </button>

                            <div class="krishv-label krishv-before-label">Before</div>
                            <div class="krishv-label krishv-after-label">After</div>
                            </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center order-1 order-md-2">
                        <div class="renovation-text-box text-center text-white w-100">
                            <p class="renovation-description">
                                This living room was reimagined with precise spatial planning, layered lighting, and upgraded materials that blend function with aesthetic. The transformation enhances flow, elevates comfort, and reflects a design identity tailored to the client’s lifestyle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    {{-- Virtual Tour Section --}}
    <section class="interior-parallax-tour" style="background-image: url(@assetPath('assets/img/bg/image-11.WEBP');">
        <div class="tour-overlay"></div>
        <div class="container">
            <div class="tour-content text-center">
                <h2 class="tour-title wow fadeInUp" data-wow-delay="0.2s"> Explore Our Interiors
                    <span class="text-theme highlighted-text">Virtual Tour !</span>
                </h2>
                <a href="https://onetobeam.com/otb-vt/public/DSMax/QnXe06Gbxr/VT" class="tour-btn fill-hover wow fadeInUp" target="_blank">
                    <i class="fas fa-globe"></i> Virtual Tour
                </a>
            </div>
        </div>
    </section>



    {{-- Partner Section --}}
    <div class="partner-logos-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <h5 class="mb-0  fw-bold ">Our Trusted <span class="text-highlight ">Partners</span></h5>
                </div>
                <div class="col-lg-9">
                    <div class="logo-marquee-wrapper">
                        <div class="logo-track" id="logoTrack">
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/Airolam_Limited 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/artisan_final_logo.webp')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/ebco-removebg-preview.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/faber-removebg-preview.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/fevicol 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/finetouch 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/greenply 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/Hafele 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/hettich 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/marshalls 01.png')" alt="Logo">
                            </div>
                            <div class="logo-item">
                                <img src="@assetPath('assets/img/brand/partners/Olive 01.png')" alt="Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Testimonial section --}}
    <section class="testimonial-section" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading mb-4">
                Voices of Delight from <span> Krish-V Customers </span>
            </h2>
            <div class="testimonial-slider">
                <div class="testimonial-box">
                    <p class="testimonial-text">Krish-V Global Interiors has an exceptional talent for flawlessly fusing beauty and practicality. They transformed my living area into a stylish and comfortable retreat. I’m really happy right now.</p>
                    <h3 class="testimonial-name">Rajeshwari S</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">Krish-V Global Interiors not only grasped my concept for my home, but they also improved it beyond my wildest dreams. Their attention to detail and dedication to excellence are admirable.</p>
                    <h3 class="testimonial-name">Divya K</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">I am thankful to Krish-V Global Interiors for their designs and execution to my new house in DS MAX SKYCITY. I am thankful to the team for their tireless support and patience hearing.</p>
                    <h3 class="testimonial-name">Muralidhar D</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">Krish-V Global Interiors have done great job for our Interiors and executed on time. Staff listens to you very patiently and are supportive. I like to thank the entire team for their effort.</p>
                    <h3 class="testimonial-name">Shrikant P</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">Thank you Krish-V Global and Senior Designers for giving a quality interior on right time, Good design, Good communication, Good patients What we are expecting, that what they given 100% Happy with Krish-V team.</p>
                    <h3 class="testimonial-name">Nismi</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">I am happy with the work done by Krishv interiors and I should thank Mr. Ramesh sir who guided me so well and made the work completed within the given time. The work is neat and clean and any additional attachment to your interiors you can approach them.</p>
                    <h3 class="testimonial-name">Jerin J</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">I have used the services of Krish-V Interiors for doing my flat interior work in DS-MAX SAGE project. They have done wonderful job and I am very happy with thier work. Thank you to the team for their responsiveness and getting the work done as promised.</p>
                    <h3 class="testimonial-name">Venugopal V</h3>
                    <div class="testimonial-box_icon">
                        <img src="@assetPath('assets/img/testimonial/transparent.svg')" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- CTA Section --}}
    <section class="krish-v-cta-section Reverse mb-20" >
        <div class="container">
            <div class="krish-v-cta-content">
                <div class="krish-v-cta-text">
                    <h2>READY TO TRANSFORM YOUR SPACE?</h2>
                    <a href="#" class="krish-v-cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us Now <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="krish-v-cta-image">
                    <img src="@assetPath('assets/img/team/graphical-image/Dining.png')" alt="transform" />
                </div>
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')
    @include('content.forms.exp_center')
    @include('content.forms.scripts.exp_script')

    @section('vendor-js')
    <!---------- For Position Stiky--------->
    <script>
        window.addEventListener("scroll", function () {
            const header = document.querySelector(".header-layout2");
                if (window.scrollY > 50) {
            header.classList.add("sticky");
                } else {
            header.classList.remove("sticky");
            }
        });
    </script>


    {{-- For Service Card Section --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".service-card");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    } else {
                        entry.target.classList.remove("active");
                    }
                });
            }, {
                threshold: 1.0
            });

            cards.forEach(card => observer.observe(card));
        });
        </script>


    <!-- Form Popup -->
    <script>
        let scrollCount = 0;
        let modalTriggered = false;
        let scrollCooldown = false;

        window.addEventListener('wheel', () => {
            if (modalTriggered || scrollCooldown) return;

            scrollCount++;

            if (scrollCount >= 6) {
            modalTriggered = true;
            const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
            contactModal.show();
            }


            scrollCooldown = true;
            setTimeout(() => {
            scrollCooldown = false;
            }, 300);
        }, { passive: true });
    </script>


    <!-- For Service Section -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                479: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                }
            },
            watchOverflow: true,
        });

        window.onload = () => {
            const paths = document.querySelectorAll('.svg-img path');
            paths.forEach(path => {
                path.classList.add('animated');
            });
        };
    </script>

    <!-- Before And After Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const clamp = (n,min,max)=>Math.max(min,Math.min(max,n));

        document.querySelectorAll('.krishv-before-after-wrapper').forEach(wrapper => {
            const handle = wrapper.querySelector('.krishv-slider-handle');
            const beforeWrap = wrapper.querySelector('.krishv-before-img-wrapper');

            // ---- HARD RESET for old inline styles / listeners ----
            if (beforeWrap) {
            beforeWrap.style.width = '100%';
            beforeWrap.style.overflow = 'visible';
            }
            // Remove any old width setter you might still have:
            wrapper.querySelectorAll('*').forEach(el => {
            if (el._kvOldHandlers) { el._kvOldHandlers.forEach(fn => el.removeEventListener(...fn)); }
            });

            function setPercent(p){
            p = clamp(p, 0, 100);
            wrapper.style.setProperty('--pos', p + '%');
            if (handle) handle.setAttribute('aria-valuenow', String(Math.round(p)));
            toggleLabels(p);
            }

            function percentFromClientX(x){
            const r = wrapper.getBoundingClientRect();
            return clamp(((x - r.left) / r.width) * 100, 0, 100);
            }

            function toggleLabels(p){
            const beforeLabel = wrapper.querySelector('.krishv-before-label');
            const afterLabel  = wrapper.querySelector('.krishv-after-label');
            if (!beforeLabel || !afterLabel) return;
            if (p >= 75) { beforeLabel.style.opacity = '1'; afterLabel.style.opacity = '0'; }
            else if (p <= 25) { beforeLabel.style.opacity = '0'; afterLabel.style.opacity = '1'; }
            else { beforeLabel.style.opacity = '1'; afterLabel.style.opacity = '1'; }
            }

            // Pointer interactions (click/drag anywhere)
            let dragging = false;
            const down = e => { dragging = true; setPercent(percentFromClientX(e.clientX)); };
            const move = e => { if (dragging) { setPercent(percentFromClientX(e.clientX)); e.preventDefault(); } };
            const up   = () => { dragging = false; };

            wrapper.addEventListener('pointerdown', down);
            window.addEventListener('pointermove', move);
            window.addEventListener('pointerup', up);

            // Keyboard on the handle
            handle?.addEventListener('keydown', (e) => {
            const step = e.shiftKey ? 5 : 1;
            const now = Number(handle.getAttribute('aria-valuenow') || 50);
            if (e.key === 'ArrowLeft')  { setPercent(now - step); e.preventDefault(); }
            if (e.key === 'ArrowRight') { setPercent(now + step); e.preventDefault(); }
            if (e.key === 'Home')       { setPercent(0);         e.preventDefault(); }
            if (e.key === 'End')        { setPercent(100);       e.preventDefault(); }
            });

            // Init (you can change to any default)
            setPercent(50);
        });
        });
        </script>

    @endsection

    @include('layouts.footer')





