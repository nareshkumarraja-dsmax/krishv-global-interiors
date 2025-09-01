@extends('layouts.main')
@section('title', 'UPVC Doors  Windows Solutions in Bangalore - Krish-V Global Interiors')
@section('description', 'Choose Krish-V Global Interiors for premium UPVC doors and windows in Bangalore. Durable, stylish, and energy-efficient upgrades for your space.')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Freepik-images/About/Compressed/7.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">About Us</span>
                </div>
                <h2 class="banner-text animate-fade">"Crafting Distinctive <span>Interiors"</span></h2>
            </div>
        </div>
    </section>


    {{-- About Section --}}
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="krish-video-box">
                        <div class="video-inner">
                            <img src="@assetPath('assets/img/Freepik-images/About/Compressed/home-2.webp')" alt="About" />
                            <a href="https://www.youtube.com/embed/EtKZvoZKklE" class="video-play-btn glightbox-video"
                            target="_blank" rel="noopener" aria-label="Play Video">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 align-self-center video-text-section wow fadeInRight"  data-wow-delay="0.2s">
                    <h2 class="sec-title mb-40 video-quote service-card_text sub-title gradient-text ">
                    “We understand your desire to experience the love we create in your home.”
                    </h2>
                    <p class="mb-4">
                        <b style="color: #fecc52;">Krish-V Global Interiors</b> is a leading interior design and turnkey solutions provider in Bangalore, India. As part of the prestigious <b style="color: #fecc52;">Krish-V Global Enterprises,</b> we bring a legacy of excellence, innovation, and trust built across real estate, construction, and facility management.

                    </p>
                    <p class="">
                        We specialize in creating <b style="color: #fecc52;">elegant, functional, and personalized spaces</b> for homes, offices, retail, and hospitality. With one of Bengaluru’s largest interior manufacturing facilities, a state-of-the-art VR Experience Center, and a team of skilled professionals, we deliver <b style="color: #fecc52;">high-quality, on-time, and hassle-free interiors,</b> from concept to completion.
                    </p>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump" data-top="-15%" data-right="0">
            <img src="@assetPath('assets/img/shape/shape_3.png')" alt="shape" />
        </div>
    </div>


    {{-- Usp Section --}}
    <section class="krishv-usp-section" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading">
                Experience the <span> Krish-V Difference</span>
            </h2>
            <p class="service-card_text text-center sub-title gradient-text mb-5">Choosing Krish-V means choosing peace of mind and unparalleled quality.</p>
            <div class="usp-grid">
                <div class="usp-item">
                    <i class="fas fa-handshake"></i>
                    <h4>Free Consultation :</h4>
                    <p>Start your journey with expert advice through our free initial consultations to understand your needs better.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-cogs"></i>
                    <h4>German Technology :</h4>
                    <p>Our factory uses the latest technology to ensure high quality, with all products made in-house.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-vr-cardboard"></i>
                    <h4>VR Experience :</h4>
                    <p>Discover the future of design at our Meet & Greet Experience Centre with an immersive demonstration through Virtual Reality (VR).</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-paint-brush"></i>
                    <h4>Unlimited Designs :</h4>
                    <p>Choose from a variety of styles: Traditional, Modern, Minimalistic, Rustic, Contemporary, Mediterranean, or Krish-V Signature Style.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-gem"></i>
                    <h4>Quality (Premium Materials) :</h4>
                    <p>We confidently use only the finest materials to deliver unparalleled durability and exceptional elegance.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-stopwatch"></i>
                    <h4>Transparent & Timely :</h4>
                    <p> A complete hassle-free experience with our transparent process, no hidden costs, and guaranteed timely project completion.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-indian-rupee-sign"></i>
                    <h4>Tailored Price Packages :</h4>
                    <p>Luxurious interiors with flexible packages tailored to fit any budget for 2BHK, 3BHK, Villa, or Ultra-Luxury property.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-user-tie"></i>
                    <h4>In-House Reliable Team :</h4>
                    <p>Our experienced team of professionals and artisans ensures seamless project execution with deep industry expertise.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-award"></i>
                    <h4>Lifetime Assurance :</h4>
                    <p>We stand by the uncompromised quality of our work and products with a lifetime of assurance and support.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>The Interiors App :</h4>
                    <p>Stay informed with our App about project tracking, stages of completion, payment details, and real-time updates.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-ruler-combined"></i>
                    <h4>Bespoke Interiors :</h4>
                    <p>We offer customized designs tailored to your tastes and lifestyle. Your space will truly be a reflection of you.</p>
                </div>
                <div class="usp-item">
                    <i class="fas fa-file-contract"></i>
                    <h4>Comprehensive Warranties :</h4>
                    <p>5-year warranty on all woodwork. 10-year service warranty on hardware and alignments.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- Choose Feature Desktop --}}
    <div class="space-bottom stages-desktop d-none d-lg-block">
        <div class="container">
            <div class="choose-feature-area" data-bg-src="@assetPath('assets/img/bg/choose_bg_embedded.svg')">
                <div class="row align-items-center">
                    <div class="col-lg-auto">
                        <div class="title-circle" data-wow-delay="0.2s">
                            <h2 class="stages sec-title">Stages of <span class="text-theme">Interiors</span></h2>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="choose-feature-wrap">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">01</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/Stages/talk.svg')"alt="icon" style="width: 40px;"/>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Consultation</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">02</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_2.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Interior Design</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">03</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_3.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Production</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">04</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_4.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Execution & Quality Check</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">05</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_5.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Handover & After-Sales</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Choose Feature Mobile --}}
    <div class="space-bottom stages-mobile d-block d-lg-none">
        <div class="container">
            <div class="choose-feature-area" data-bg-src="@assetPath('assets/img/bg/choose_bg.png')">
                <div class="row align-items-center">
                    <div class="col-lg-auto">
                        <div class="title-circle" data-wow-delay="0.2s">
                            <h2 class="stages sec-title">Stages of <span class="text-theme">Interiors</span></h2>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="choose-feature-wrap">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">01</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/Stages/talk.svg')"alt="icon" style="width: 40px;"/>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Consultation</h3>
                                    </div>
                                </div>
                            </div>
                            <span class="down-arrow"><i class="fas fa-arrow-down"></i></span>

                            <div class="wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">02</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_2.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Interior Design</h3>
                                    </div>
                                </div>
                            </div>
                            <span class="down-arrow"><i class="fas fa-arrow-down"></i></span>

                            <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">03</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_3.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Production</h3>
                                    </div>
                                </div>
                            </div>
                            <span class="down-arrow"><i class="fas fa-arrow-down"></i></span>

                            <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">04</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_4.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Execution & <br class="mobile-only"> Quality Check</h3>
                                    </div>
                                </div>
                            </div>
                            <span class="down-arrow"><i class="fas fa-arrow-down"></i></span>

                            <div class="wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="choose-feature reveal">
                                    <div class="box-number">05</div>
                                    <div class="box-icon">
                                        <img src="@assetPath('assets/img/icon/choose_feature_5.svg')" alt="icon" />
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Handover & <br class="mobile-only"> After-Sales</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Counter Section --}}
    <section class="">
        <div class="container">
            <section class="counter-section" id="counter-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-box">
                                <div class="counter-iconbox">
                                    <i class="fas fa-house-user"></i>
                                </div>
                                <h5 class="counter-value" data-target="30000">0</h5>
                                <p class="counter-label">Happy Customers</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="counter-box">
                                <div class="counter-iconbox">
                                    <i class="fas fa-circle-check"></i>
                                </div>
                                <h5 class="counter-value" data-target="140">0</h5>
                                <p class="counter-label">On Going Projects</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="counter-box">
                                <div class="counter-iconbox">
                                    <i class="fas fa-user-group"></i>
                                </div>
                                <h5 class="counter-value" data-target="50">0</h5>
                                <p class="counter-label">Expert Designers</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="counter-box">
                                <div class="counter-iconbox">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <h5 class="counter-value" data-target="250">0</h5>
                                <p class="counter-label">Skilled Workforce</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>



    {{-- Experience Center Section --}}
    <section class="krish-experience-centre">
        <div class="krish-container">
            <h2 class="site-section-heading mb-4">
                Immerse Yourself in Design : Visit Our <span> Experience Centre</span>
            </h2>
            <p class="krish-experience-description">
                As Bangalore’s Leading Interior Design Firm, we have a strong market presence, serving clients across the city and beyond.
                Come visit our state-of-the-art Experience Centre at Thanisandra, Bangalore, to envision your future space.
            </p>

            <ul class="krish-feature-list">
                <li><i class="fas fa-columns"></i> Design Galleries</li>
                <li><i class="fas fa-cubes"></i> Material Library</li>
                <li><i class="fas fa-vr-cardboard"></i> Virtual Reality Experiences</li>
            </ul>

            <div class="mb-5">
                <picture>
                    <source media="(max-width: 767px)" srcset="@assetPath('assets/img/Freepik-images/About/Experience-center/Experience-center2.jpeg')">
                    <img src="@assetPath('assets/img/Freepik-images/About/Experience-center/Experience-center1.jpeg')" alt="Experience Centre">
                </picture>
            </div>


            <div class="krish-experience-buttons">
                <button class="krish-btn secondary" data-bs-toggle="modal" data-bs-target="#siteVisitModal">Schedule a Visit</button>
            </div>
        </div>
    </section>



    {{-- Testimonial Section --}}
    <section class="space testimonial-section">
        <div class="container">
            <div class="row testimonial-header-row  justify-content-lg-between align-items-end">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-area">
                        <h2 class="sec-title video-testimoni">
                            What Client <span class="text-theme">Say?</span>
                        </h2>
                        <div class="title-line"></div>
                    </div>
                </div>
                <div class="col-auto wow fadeInUp">
                    <div class="sec-btn">
                        <div class="icon-box style2">
                            <button data-slick-prev="#testimonialSlide1" class="slick-arrow default">
                                <i class="fat fa-long-arrow-left"></i>
                            </button>
                            <button data-slick-next="#testimonialSlide1" class="slick-arrow default">
                                <i class="fat fa-long-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row th-carousel" id="testimonialSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/1.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 1" />
                            <a href="https://www.youtube.com/watch?v=m6qkkalb4MI" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Sourav Sharma & Mrs.Radha Sharma</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/2.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 2" />
                            <a href="https://www.youtube.com/watch?v=rfun3jia5xA" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Rajeev & Mrs.Radha</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/3.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 3" />
                            <a href="https://www.youtube.com/watch?v=4Wc4SNNG-1k" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Jayaprakash & Family</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/4.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 1" />
                            <a href="https://youtu.be/lFZ2AV2b1KE" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Madhu Sudhan & Mrs.Pavithra</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/5.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 2" />
                            <a href="https://youtu.be/1VLaaxEF2WI" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Partha Das & Mrs.Anupriya Raidas</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/6.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 3" />
                            <a href="https://youtu.be/vjqvYglo3gc" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Praneeth & Mrs.Divya</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-box">
                        <div class="team-img position-relative">
                            <img src="@assetPath('assets/img/Testimonials/Compressed/7.webp')" class="img-fluid rounded" alt="Customer Testimonial Video 3" />
                            <a href="https://www.youtube.com/embed/9ywm6zT0gDU?autoplay=1" class="glightbox video-link position-absolute top-50 start-50 translate-middle">
                                <span class="icon">
                                    <img src="@assetPath('assets/img/testimonial/play-button.svg')" alt="Play Icon" style="width: 60px;" />
                                </span>
                            </a>
                        </div>
                        <div class="testimonial-name-strip-below">
                            <span>Mr.Riyaz Ahmed & Mrs.Shamshad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')
    @include('content.forms.exp_center')
    @include('content.forms.scripts.exp_script')

    @section('vendor-js')
        <!-- GLightbox JS -->
        <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
        <script>
            const lightbox = GLightbox({
                selector: '.glightbox-video'
            });
        </script>


        <!-- ----------------script for Choose feature section---------- -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

        <script>
            gsap.registerPlugin(ScrollTrigger);

            function highlightArrow(stage) {
                for (let i = 1; i <= 5; i++) {
                    const strokeColor = i === stage ? "#ffc857" : "#444";
                    gsap.to(`#arrow-${i} path`, { stroke: strokeColor, duration: 0.3 });
                    gsap.to(`#arrow-${i} polygon`, { fill: strokeColor, duration: 0.3 });
                }
            }

            gsap.utils.toArray(".choose-feature").forEach((feature, index) => {
                gsap.fromTo(feature,
                    { opacity: 0, y: 40 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.6,
                        ease: "power2.out",
                        scrollTrigger: {
                        trigger: feature,
                        start: "top 85%",
                        end: "bottom 20%",
                        toggleActions: "play reverse play reverse",
                        onEnter: () => highlightArrow(index + 1),
                        onEnterBack: () => highlightArrow(index + 1),
                        }
                    }
                );
            });
        </script>


        {{-- Script for Counter up section --}}
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let hasCounted = false;

                const counters = document.querySelectorAll(".counter-value");

                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !hasCounted) {
                            startCounters();
                            hasCounted = true;
                        }
                    });
                }, { threshold: 0.5 });

                observer.observe(document.querySelector("#counter-section"));

                function startCounters() {
                    const duration = 2000;
                    const stepTime = 20;

                    counters.forEach(counter => {
                        const target = +counter.getAttribute("data-target");
                        const steps = Math.ceil(duration / stepTime);
                        let count = 0;
                        const increment = target / steps;

                        const interval = setInterval(() => {
                            count += increment;
                            if (count >= target) {
                                counter.textContent = target.toLocaleString() + " +";
                                clearInterval(interval);
                            } else {
                                counter.textContent = Math.floor(count).toLocaleString() + " +";
                            }
                        }, stepTime);
                    });
                }
            });
        </script>


        {{-- Video Testimonial Section --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
        <script>
            const krishVideoSwiper = new Swiper('.krish-video-swiper', {
                slidesPerView: 3,
                centeredSlides: true,
                loop: true,
                spaceBetween: 30,
                speed: 600,
                navigation: {
                    nextEl: '.krish-video-next',
                    prevEl: '.krish-video-prev',
                },
                pagination: {
                    el: '.krish-video-pagination',
                    clickable: true,
                },
                breakpoints: {
                    0: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    992: { slidesPerView: 3 },
                },
                });

            const krishLightbox = GLightbox({
                selector: '.glightbox',
                type: 'video',
            });
        </script>
    @endsection

@endsection
