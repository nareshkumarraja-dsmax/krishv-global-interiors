@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/Turnkey-projects/Compressed/Banner-turnkeyprojects.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Complete Turnkey Projects</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "End-to-End <span>Execution</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- About section --}}
    <div class="space" id="about-sec">
        <div class="rooms container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/About.webp')" alt="About-turnkey-image" />
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 about-sec align-self-center wow fadeInRight"  data-wow-delay="0.2s">
                    <p class="room sub-title">Seamless Execution : <span class="text-transparent">Complete Turnkey Projects</span></p>
                    <p class="mb-10 para" >
                        Krish-V Global Interiors offers end-to-end turnkey solutions, providing a single point of contact for the entire interior design process.
                    </p>
                    <p class="para">
                        We manage every aspect of your project, from initial concept and design to material sourcing, execution, and final handover. Our comprehensive approach ensures a seamless and stress-free experience, delivering your project on time and within budget, with the promise of a flawless finish and a home that is ready to be lived in.
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
            <div class="swiper gallery-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T34.webp')" alt="Gallery Turnkey Image 1" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T6.webp')" alt="Gallery Turnkey Image 2" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T11.webp')" alt="Gallery Turnkey Image 3" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T31.webp')" alt="Gallery Turnkey Image 4" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T15.webp')" alt="Gallery Turnkey Image 5" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T33.webp')" alt="Gallery Turnkey Image 6" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T18.webp')" alt="Gallery Turnkey Image 7" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T21.webp')" alt="Gallery Turnkey Image 8" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T22.webp')" alt="Gallery Turnkey Image 9" />
                    </div>

                    <div class="swiper-slide">
                        <img src="@assetPath('assets/img/Images/Turnkey-projects/Compressed/T19.webp')" alt="Gallery Turnkey Image 10" />
                    </div>
                </div>
            </div>
            <div class="custom-pagination"></div>
        </div>
    </section>

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
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">Krish-V Global Interiors not only grasped my concept for my home, but they also improved it beyond my wildest dreams. Their attention to detail and dedication to excellence are admirable.</p>
                    <h3 class="testimonial-name">Divya K</h3>
                    <div class="testimonial-box_icon">
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">I am thankful to Krish-V Global Interiors for their designs and execution to my new house in DS MAX SKYCITY. I am thankful to the team for their tireless support and patience hearing.</p>
                    <h3 class="testimonial-name">Muralidhar D</h3>
                    <div class="testimonial-box_icon">
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">Krish-V Global Interiors have done great job for our Interiors and executed on time. Staff listens to you very patiently and are supportive. I like to thank the entire team for their effort.</p>
                    <h3 class="testimonial-name">Shrikant P</h3>
                    <div class="testimonial-box_icon">
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">Thank you Krish-V Global and Senior Designers for giving a quality interior on right time, Good design, Good communication, Good patients What we are expecting, that what they given 100% Happy with Krish-V team.</p>
                    <h3 class="testimonial-name">Nismi</h3>
                    <div class="testimonial-box_icon">
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">I am happy with the work done by Krishv interiors and I should thank Mr. Ramesh sir who guided me so well and made the work completed within the given time. The work is neat and clean and any additional attachment to your interiors you can approach them.</p>
                    <h3 class="testimonial-name">Jerin J</h3>
                    <div class="testimonial-box_icon">
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
                <div class="testimonial-box">
                    <p class="testimonial-text">I have used the services of Krish-V Interiors for doing my flat interior work in DS-MAX SAGE project. They have done wonderful job and I am very happy with thier work. Thank you to the team for their responsiveness and getting the work done as promised.</p>
                    <h3 class="testimonial-name">Venugopal V</h3>
                    <div class="testimonial-box_icon">
                        <img src="assets/img/testimonial/transparent.svg" alt="icon" class="testimonial-quote-icon"/>
                    </div>
                </div>
            </div>
            <div class="custom-dots-container"></div>
        </div>
    </section>


    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
        {{-- Gallery Section --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const gallerySwiper = new Swiper(".gallery-swiper", {
                    loop: true,
                    autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 10,
                    centeredSlides: true,

                    breakpoints: {
                    0: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                        centeredSlides: false,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        centeredSlides: true,
                    },
                    },
                on: {
                    init: function () {
                        renderCustomDots(this);
                    },
                    slideChange: function () {
                        updateActiveDot();
                    },
                },
            });
            function renderCustomDots(swiper) {
                const pagination = document.querySelector(".custom-pagination");
                pagination.innerHTML = "";
                ["prev", "current", "next"].forEach((type) => {
                    const dot = document.createElement("span");
                    dot.classList.add("custom-dot");
                    if (type === "current") dot.classList.add("active");
                    dot.addEventListener("click", () => {
                        if (type === "prev") swiper.slidePrev();
                        if (type === "next") swiper.slideNext();
                    });
                    pagination.appendChild(dot);
                });
            }
            function updateActiveDot() {
                const dots = document.querySelectorAll(".custom-dot");
                dots.forEach((dot) => dot.classList.remove("active"));
                if (dots[1]) dots[1].classList.add("active");
                }
            });
        </script>
    @endsection
@endsection
