@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/interior-designs/compressed/Banner-interiorDesigns.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Customized Interior Designs</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Custom-Crafted <span>Environments</span>".
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
                            <img src="@assetPath('assets/img/Images/interior-designs/compressed/About.webp')" alt="About" />
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 about-sec align-self-center wow fadeInRight"  data-wow-delay="0.2s">
                    <p class="room sub-title">Tailored to You : <span class="text-transparent">Customized Interior Designs</span></p>
                    <p class="mb-10 para" >
                        Krish-V Global Interiors specializes in creating bespoke interior designs that are a perfect reflection of your personality and lifestyle. We move beyond generic templates to craft unique spaces that tell your story.
                    </p>
                    <p class="para">
                        Our personalized approach involves a deep understanding of your needs and preferences, ensuring every detail—from the layout to the final finishes—is meticulously chosen to create a home that is exclusively and authentically yours.
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
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/living1.webp')" alt="Gallery Image 1" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/Bed-room1.webp')" alt="Gallery Image 2" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/living2.webp')" alt="Gallery Image 3" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/kitchen1.webp')" alt="Gallery Image 4" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/living3.webp')" alt="Gallery Image 5" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/Bedroom2.webp')" alt="Gallery Image 6" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/False-ceiling1.webp')" alt="Gallery Image 7" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/Kids-room1.webp')" alt="Gallery Image 8" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/false-ceiling2.webp')" alt="Gallery Image 9" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/Dining2.webp')" alt="Gallery Image 10" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/interior4.webp')" alt="Gallery Image 11" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/interior2.webp')" alt="Gallery Image 12" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/interior3.webp')" alt="Gallery Image 13" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/interior1.webp')" alt="Gallery Image 14" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/interior-designs/compressed/interior5.webp')" alt="Gallery Image 15" />
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
    <section class="krish-v-cta-section Reverse mb-20" >
        <div class="container">
            <div class="krish-v-cta-content">
                <div class="krish-v-cta-text">
                    <h2>READY TO TRANSFORM YOUR SPACE?</h2>
                    <a href="javascript:void(0)" class="krish-v-cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us Now <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="krish-v-cta-image">
                    <img src="@assetPath('assets/img/team/graphical-image/Kitchen.png')" alt="Transform" />
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
