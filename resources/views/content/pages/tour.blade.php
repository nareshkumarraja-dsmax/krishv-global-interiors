@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Freepik-images/Virtual-tour/Compressed/Banner-Tour.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Virtual Tour</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Immersive Virtual <span>Experience</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- Virtual Tour 1 --}}
    <div class="space" style="text-align: center;">
        <div class="container">
            <section class="virtual-tour-section dark-theme">
                <div class="auto-container">
                    <div class="experties">
                        <div class="sec-title-four">
                            <h2 class="site-section-heading mb-5">
                                Step Inside Elegance: Virtual Tour of <span> RR Signature Interiors </span>
                            </h2>
                            <div class="section-text padd-top-20">
                                Experience the refined artistry and thoughtful design that define RR Signature from the comfort of your home. This immersive virtual tour showcases our bespoke interior solutions, crafted to reflect your aspirations and elevate everyday living. From layout to lighting, every detail is designed by our expert team to blend functionality with elegance—ensuring each space tells a story that’s uniquely yours.
                            </div>
                        </div>
                        <div class="tour-frame" style="margin-top: 30px;">
                            <iframe src="https://onetobeam.com/otb-vt/public/DSMax/mxkazG7bJ0/VT" height="500" width="100%" style="border: none; max-width: 100%;" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- Virtual tour 2 --}}
    <div class="" style="text-align: center;">
        <div class="container">
            <section class="virtual-tour-section dark-theme">
                <div class="auto-container">
                    <div class="experties">
                        <div class="sec-title-four">
                            <h2 class="site-section-heading mb-5">
                                Virtual Interior Walkthrough – <span> DS-MAX Skycity </span>
                            </h2>
                            <div class="section-text padd-top-20">
                                Take a structured look into the interior design approach at DS-MAX Skycity through our virtual walkthrough. This presentation highlights our execution capabilities, material choices, space planning, and attention to functional detailing. Our team delivers interiors that align with the project’s architecture while meeting the practical and aesthetic expectations of modern homeowners.
                            </div>
                        </div>

                        <div class="tour-frame" style="margin-top: 30px;">
                            <iframe src="https://onetobeam.com/otb-vt/public/DSMax/QnXe06Gbxr/VT" height="500" width="100%" style="border: none; max-width: 100%;"allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- CTA Section --}}
    <section class="krish-v-cta-section Reverse mb-20 mt-5" >
        <div class="container">
            <div class="krish-v-cta-content">
                <div class="krish-v-cta-text">
                    <h2>READY TO TRANSFORM YOUR SPACE?</h2>
                    <a href="#" class="krish-v-cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us Now <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="krish-v-cta-image">
                    <img src="@assetPath('assets/img/team/graphical-image/Living-room.png')" alt="Transform" />
                </div>
            </div>
        </div>
    </section>

    {{-- Virtual tour 3 --}}
    <div class="space" style="text-align: center;">
        <div class="container">
            <section class="virtual-tour-section dark-theme">
                <div class="auto-container">
                    <div class="experties">
                        <div class="sec-title-four">
                            <h2 class="site-section-heading mb-5">
                                Virtual Interior Tour – <span> DS-MAX Skycity </span>
                            </h2>
                            <div class="section-text padd-top-20">
                                Explore the interior planning and execution standards at DS-MAX Skycity through our detailed virtual tour. This walkthrough presents our design methodology, material integration, and spatial organization, demonstrating how we deliver interiors that are practical, durable, and aligned with client objectives. Each space reflects thoughtful coordination between design intent and on-ground implementation.
                            </div>
                        </div>

                        <div class="tour-frame" style="margin-top: 30px;">
                        <iframe  src="https://onetobeam.com/otb-vt/public/DSMax/JX7axDnayv/VT"  height="500"  width="100%"  style="border: none; max-width: 100%;"  allowfullscreen>
                        </iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- Virtual Tour 4 --}}
    <div class="" style="text-align: center;">
        <div class="container">
            <section class="virtual-tour-section dark-theme">
                <div class="auto-container">
                    <div class="experties">
                        <div class="sec-title-four">
                            <h2 class="site-section-heading mb-5">
                                Virtual Interior Walkthrough – <span> DS-MAX Sangam Grand </span>
                            </h2>
                            <div class="section-text padd-top-20">
                                Take a closer look at the interior design standards delivered at DS-MAX Sangam Grand through our virtual walkthrough. This presentation showcases our approach to space planning, material selection, and execution quality. Designed to meet functional needs while maintaining aesthetic clarity, each interior reflects our commitment to precision, coordination, and client-centric delivery.
                            </div>
                        </div>
                        <div class="tour-frame" style="margin-top: 30px;">
                            <iframe src="https://onetobeam.com/otb-vt/public/fr1/QJ0dNqKbLO/VT" height="500" width="100%"style="border: none; max-width: 100%;" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
    {{-- Gallery Section --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".gallery-swiper", {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".gallery-button-next",
            prevEl: ".gallery-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
                centeredSlides: true,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: true,
            },
        },
    });
    </script>
    @endsection
@endsection