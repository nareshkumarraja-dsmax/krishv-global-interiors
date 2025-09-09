@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/False-ceiling/Compressed/Banner-ceiling.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">False Ceiling</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Elevated Ceiling <span>Designs</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <div class="space" id="about-sec">
        <div class="rooms container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/About.webp')" alt="About" />
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 about-sec align-self-center wow fadeInRight"  data-wow-delay="0.2s">
                    <p class="room sub-title">Overhead Artistry : <span class="text-transparent">False Ceiling Designs</span></p>
                    <p class="mb-10 para" >
                        Krish-V Global Interiors elevates your home's aesthetics with innovative false ceiling designs. Our creative and functional solutions go beyond just aesthetics, integrating sophisticated lighting fixtures, optimizing acoustics, and concealing wiring for a clean, polished look.
                    </p>
                    <p class="para">
                        We design and install bespoke false ceilings that add architectural interest and a touch of modern luxury, transforming the entire atmosphere of any room.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Gallery Section --}}
    <section class="custom-gallery-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="site-section-heading mb-3">
                        DESIGNS BEYOND IMAGINATION : EXPLORE <span>OUR GALLERY</span>
                    </h2>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end nav-buttons-container">
                    <div class="gallery-nav-buttons d-flex gap-2">
                        <div class="gallery-button-prev"><i class="fas fa-arrow-left"></i></div>
                        <div class="gallery-button-next"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper gallery-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F7.webp')" alt="Gallery Image 1" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F8.webp')" alt="Gallery Image 2" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F9.webp')" alt="Gallery Image 3" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F10.webp')" alt="Gallery Image 4" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F11.webp')" alt="Gallery Image 5" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F12.webp')" alt="Gallery Image 6" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images//False-ceiling/Compressed/F13.webp')" alt="Gallery Image 7" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F5.webp')" alt="Gallery Image 8" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F19.webp')" alt="Gallery Image 9" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/F16.webp')" alt="Gallery Image 10" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling1.webp')" alt="Gallery Image 11" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling2.webp')" alt="Gallery Image 12" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling4.webp')" alt="Gallery Image 13" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling5.webp')" alt="Gallery Image 14" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling6.webp')" alt="Gallery Image 15" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling7.webp')" alt="Gallery Image 16" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/False-ceiling/Compressed/False-ceiling8.webp')" alt="Gallery Image 17" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section class="testimonial-section" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading mb-5">
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
    <section class="krish-v-cta-section mb-20" >
        <div class="container">
            <div class="krish-v-cta-content">
                <div class="krish-v-cta-image">
                    <img src="@assetPath('assets/img/team/graphical-image/false-ceiling.png')" alt="Transform" />
                </div>
                <div class="krish-v-cta-text">
                    <h2>READY TO TRANSFORM YOUR SPACE?</h2>
                    <a href="javascript:void(0)" class="krish-v-cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

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
