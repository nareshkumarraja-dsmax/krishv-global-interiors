<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="asset-path" content="@assetPath('')">
    <title>About Krish-v Global Interiors - Shaping Bangalore Modern Interiors</title>
    <meta name="author" content="Themeholy" />
    <meta name="description" content="Artraz - Architecture HTML Template" />
    <meta name="keywords" content="Artraz - Architecture HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="icon" sizes="57x57" href="@assetPath('assets/img/1.png')">
    <meta name="msapplication-TileImage" content="@assetPath('assets/img/favicons/ms-icon-144x144.png')" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

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
                    <li><a class="{{ request()->routeIs('home')? 'active': ''}}" href="{{route('home')}}">Home</a></li>
                    <li><a class="{{ request()->routeIs('about')? 'active': ''}}" href="{{route('about')}}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a class="{{ request()->routeIs('complete_home_interiors')
                            || request()->routeIs('renovation')
                            || request()->routeIs('homeautomation')
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
                            <li><a class="{{ request()->routeIs('complete_home_interiors')? 'active': ''}}" href="{{route('complete_home_interiors')}}">Complete Home Interiors</a></li>
                            <li><a class="{{ request()->routeIs('renovation')? 'active': ''}}" href="{{route('renovation')}}">Renovation</a></li>
                            <li><a class="{{ request()->routeIs('home_automation')? 'active': ''}}" href="{{route('home_automation')}}">Home Automation</a></li>
                            <li><a class="{{ request()->routeIs('upvc')? 'active': ''}}" href="{{route('upvc')}}">UPVC & Aluminium - Doors & Windows</a></li>
                            <li><a class="{{ request()->routeIs('customized_interior_designs')? 'active': ''}}" href="{{route('customized_interior_designs')}}">Customized Interior Designs</a></li>
                            <li><a class="{{ request()->routeIs('flooring')? 'active': ''}}" href="{{route('flooring')}}">Flooring Solutions</a></li>
                            <li><a class="{{ request()->routeIs('false_ceiling')? 'active': ''}}" href="{{route('false_ceiling')}}">False Ceiling</a></li>
                            <li><a class="{{ request()->routeIs('commercial_interiors')? 'active': ''}}" href="{{route('commercial_interiors')}}">Commercial Interiors</a></li>
                            <li><a class="{{ request()->routeIs('turnkey_projects')? 'active': ''}}" href="{{route('turnkey_projects')}}">Complete Turnkey Projects</a></li>
                        </ul>
                    </li>
                    <li><a class="{{ request()->routeIs('tour')? 'active': ''}}" href="{{route('tour')}}">Virtual Tour</a></li>
                    <li><a class="{{ request()->routeIs('gallery')? 'active': ''}}" href="{{route('gallery')}}">Gallery</a></li>
                    <li class="menu-item-has-children">
                        <a class="{{ request()->routeIs('carrer')
                            || request()->routeIs('blog')
                            || request()->routeIs('contact')
                            || request()->routeIs('do_more')
                            ? 'active' : '' }}" href="#">
                            More
                        </a>
                        <ul class="sub-menu">
                            <li><a class="{{ request()->routeIs('carrer')? 'active': ''}}" href="{{route('carrer')}}">Careers</a></li>
                            <li><a class="{{ request()->routeIs('blog')? 'active': ''}}" href="{{route('blog')}}">Blog</a></li>
                            <li><a class="{{ request()->routeIs('contact')? 'active': ''}}" href="{{route('contact')}}">Contact</a></li>
                            <li><a class="{{ request()->routeIs('do_more')? 'active': ''}}" href="{{route('do_more')}}">Do More</a></li>
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




    <header class="th-header header-layout1 header-colored">
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="th-container container">
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img src="@assetPath('assets/img/krish1-removebg-preview.png')" alt="krish v"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="about main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li><a class="{{ request()->routeIs('home')? 'active': ''}}" href="{{route('home')}}">Home</a></li>
                                        <li><a class="{{ request()->routeIs('about')? 'active': ''}}" href="{{route('about')}}">About Us</a></li>
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
                                                <li><a class="{{ request()->routeIs('complete_home_interiors')? 'active': ''}}" href="{{route('complete_home_interiors')}}">Complete Home Interiors</a></li>
                                                <li><a class="{{ request()->routeIs('renovation')? 'active': ''}}" href="{{route('renovation')}}">Renovation</a></li>
                                                <li><a class="{{ request()->routeIs('home_automation')? 'active': ''}}" href="{{route('home_automation')}}">Home Automation</a></li>
                                                <li><a class="{{ request()->routeIs('upvc')? 'active': ''}}" href="{{route('upvc')}}">UPVC & Aluminium - Doors & Windows</a></li>
                                                <li><a class="{{ request()->routeIs('customized_interior_designs')? 'active': ''}}" href="{{route('customized_interior_designs')}}">Customized Interior Designs</a></li>
                                                <li><a class="{{ request()->routeIs('flooring')? 'active': ''}}" href="{{route('flooring')}}">Flooring Solutions</a></li>
                                                <li><a class="{{ request()->routeIs('false_ceiling')? 'active': ''}}" href="{{route('false_ceiling')}}">False Ceiling</a></li>
                                                <li><a class="{{ request()->routeIs('commercial_interiors')? 'active': ''}}" href="{{route('commercial_interiors')}}">Commercial Interiors</a></li>
                                                <li><a class="{{ request()->routeIs('turnkey_projects')? 'active': ''}}" href="{{route('turnkey_projects')}}">Complete Turnkey Projects</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="{{ request()->routeIs('tour')? 'active': ''}}" href="{{route('tour')}}">Virtual Tour</a></li>
                                        <li><a class="{{ request()->routeIs('gallery')? 'active': ''}}" href="{{route('gallery')}}">Gallery</a></li>
                                        <li class="menu-item-has-children">
                                            <a class="{{ request()->routeIs('carrer')
                                                || request()->routeIs('blog')
                                                || request()->routeIs('contact')
                                                || request()->routeIs('do_more')
                                                ? 'active' : '' }}" href="#">
                                                More
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a class="{{ request()->routeIs('carrer')? 'active': ''}}" href="{{route('carrer')}}">Careers</a></li>
                                                <li><a class="{{ request()->routeIs('blog')? 'active': ''}}" href="{{route('blog')}}">Blog</a></li>
                                                <li><a class="{{ request()->routeIs('contact')? 'active': ''}}" href="{{route('contact')}}">Contact</a></li>
                                                <li><a class="{{ request()->routeIs('do_more')? 'active': ''}}" href="{{route('do_more')}}">Do More</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <a href="tel:+918880225544" class="btn btn-phone">
                                    <i class="fas fa-phone"></i> +91 888 022 5544
                                </a>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>