@extends('layouts.main')
@section('title', 'Refer &amp; Partner - Krish-V Global Interiors Bangalore')
@section('description', 'Join hands with Krish-V Global Interiors. Become a referral partner or channel associate and grow with Bangalore’s leading interiors brand.')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/Channel-partner/Compressed/banner-more.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">More</span>
                </div>
                <h2 class="banner-text animate-fade">"Collaborate. Grow <span>Together</span>".</h2>
            </div>
        </div>
    </section>

    {{-- Refer And Earn Section --}}
    <section class="space why-choose-centered-section">
        <div class="container position-relative">
            <div class="why-choose-inner d-flex align-items-center justify-content-center">
                <div class="why-choose-content text-center">
                    <div class="section-header text-center">
                        <h2 class="site-section-heading mb-3">
                            Refer and  <span> Earn </span>
                        </h2>
                        <p class="sub-title gradient-text">“Ready to bring the allure of Krish-V Global Interiors to your circle? Let’s make interior dreams come true, together!”</p>
                    </div>
                    <ul class="why-choose-list ">
                        <li>
                            <div class="icon1">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="text1">
                                <h5>Spread The Word</h5>
                                <p>Let your friends, family, and peers know about Krish-V Global Interiors.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon1">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="text1">
                                <h5>Refer Friends / Family</h5>
                                <p>It's time to introduce them to the Krish-V Global Interiors magic!</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text1">
                                <h5>Referral Confirms</h5>
                                <p>You unlock the door to surprises when your reference confirms with Krish-V Global Interiors.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon1">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="text1">
                                <h5>Get Rewarded</h5>
                                <p>Exciting rewards await once your referral turns into a successful client!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Refer A Friend Form Section --}}
    <section class="">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 mb-lg-0 wow fadeInLeft">
                    <div class="refer-image">
                        <img src="@assetPath('assets/img/more/4-removebg-preview.png')" alt="Referral" class="img-fluid reduced-img">
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="p-4 rounded-4 border border-light bg-form-dark">
                        <form id="referralForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <input type="text" id="yourName" name="yourName" class="form-control dark-input no-radius" placeholder="Your Name *" required>
                                <div class="text-danger small mt-1" id="errorYourName"></div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <input type="tel" id="yourPhone" name="yourPhone" class="form-control dark-input no-radius" placeholder="Phone Number *" required>
                                    <div class="text-danger small mt-1" id="errorYourPhone"></div>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="yourEmail" name="yourEmail" class="form-control dark-input no-radius" placeholder="Email Address">
                                    <div class="text-danger small mt-1" id="errorYourEmail"></div>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="friendName" name="friendName" class="form-control dark-input no-radius" placeholder="Friend's / Relative's Name *" required>
                                    <div class="text-danger small mt-1" id="errorFriendName"></div>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" id="friendPhone" name="friendPhone" class="form-control dark-input no-radius" placeholder="Friend's / Relative's Number *" required>
                                    <div class="text-danger small mt-1" id="errorFriendPhone"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 mt-2" type="submit">Submit Form</button>
                            </div>
                            <div id="referralSuccess" class="mt-2 small"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Channel Partner Section --}}
    <section class="channel-partner-section" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading mb-3">
                CHANNEL  <span> PARTNER </span>
            </h2>
            <p class="sub-title gradient-text">Krish-V Global Interiors Channel Partner : Your Reliable Partner and Path to Unlocking Ultimate Success.</p>
            <div class="row align-items-center justify-content-between custom-gap channel-row">
                <div class="col-xl-6 mb-xl-0 wow fadeInLeft channel-img-wrapper">
                    <div class="channel-img refer-image">
                        <img src="@assetPath('assets/img/more/partner1-Photoroom.png')" alt="channel partner image">
                    </div>
                </div>
                <div class="col-xl-6  mb-xl-0 wow fadeInRight channel-text-wrapper">
                    <div class="channel-text">
                        <p class="channel-subtitle">Why Choose Krish-V Global Interiors?</p>
                        <ul class="channel-list">
                            <li><strong>Brand Value : </strong> We’re a global brand with a state-of-the-art factory, present in 6+ countries and trusted by 14,000+ customers.</li>
                            <li><strong>Comprehensive Team : </strong> Experience the expertise of our diverse team of skilled managers and designers, ready to take on any project.</li>
                            <li><strong>Collaborative Vision : </strong> Let’s work together to build captivating experiences that deeply connect with yesterday, today and tomorrow.</li>
                            <li><strong>Perfect Platform : </strong> Our resources help you stay ahead of market trends and connect with potential clients, resulting in increased business profitability.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="elegant-process-section wow fadeInUp">
        <div class="container">
            <div class="elegant-process-wrapper">
                <div class="elegant-step wow fadeInUp">
                    <div class="elegant-icon-line">
                        <div class="flow-icon-glow"><i class="fas fa-handshake"></i></div>
                        <span class="elegant-line"></span>
                    </div>
                    <h5 class="step-label">REACH OUT</h5>
                    <p>Express interest through our website.</p>
                </div>

                <div class="elegant-step wow fadeInUp">
                    <div class="elegant-icon-line">
                        <div class="flow-icon-glow"><i class="fas fa-comments"></i></div>
                        <span class="elegant-line"></span>
                    </div>
                    <h5 class="step-label">ENGAGE</h5>
                    <p>Let's discuss mutual benefits and alignment.</p>
                </div>

                <div class="elegant-step wow fadeInUp">
                    <div class="elegant-icon-line">
                        <div class="flow-icon-glow"><i class="fas fa-file-signature"></i></div>
                        <span class="elegant-line"></span>
                    </div>
                    <h5 class="step-label">FORMALIZE</h5>
                    <p>Craft an agreement outlining terms & expectations.</p>
                </div>

                <div class="elegant-step wow fadeInUp">
                    <div class="elegant-icon-line">
                        <div class="flow-icon-glow"><i class="fas fa-bolt"></i></div>
                    </div>
                    <h5 class="step-label">EMPOWER</h5>
                    <p>Access training, resources, and marketing materials.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Channel Partner Form Section --}}
    <section class="channel-partner-form">
        <div class="container">
            <div class="row channel-partner-reverse justify-content-between align-items-center">
                <div class="col-lg-6 mb-xl-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <form id="channelPartnerForm" class="contact-form">
                        <div class="row">
                            <div class="form-group col-12 mb-3">
                                <input type="text" id="cpName" name="cpName" class="form-control" placeholder="Your Name *" required>
                                <div class="text-danger small mt-1" id="errorCPName"></div>
                            </div>

                            <div class="form-group col-md-6 col-12 mb-3">
                                <input type="tel" id="cpPhone" name="cpPhone" class="form-control" placeholder="Phone Number *" required>
                                <div class="text-danger small mt-1" id="errorCPPhone"></div>
                            </div>

                            <div class="form-group col-md-6 col-12 mb-3">
                                <input type="email" id="cpEmail" name="cpEmail" class="form-control" placeholder="Your Email *" required>
                                <div class="text-danger small mt-1" id="errorCPEmail"></div>
                            </div>

                            <div class="form-group col-12 mb-3">
                                <input type="text" id="cpCompany" name="cpCompany" class="form-control" placeholder="Company / Individual Name *" required>
                                <div class="text-danger small mt-1" id="errorCPCompany"></div>
                            </div>

                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn w-100">Submit Form</button>
                            </div>
                        </div>

                        <div id="channelPartnerSuccess" class="mt-2 small"></div>
                    </form>
                </div>
                <div class="col-lg-6 mb-xl-0 wow fadeInRight order-1 order-lg-2">
                    <div class="refer-image">
                        <img src="@assetPath('assets/img/more/5-removebg-preview.png')">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
        <!-- For Accordion -->
        <script>
            document.querySelectorAll('.step-accordion').forEach(accordion => {
            accordion.querySelector('.step-header').addEventListener('click', () =>{
                accordion.classList.toggle('active');
            });
        });
        </script>

        {{-- Validation Script --}}
        <script>
            (() => {
                'use strict';
                const forms = document.querySelectorAll('.needs-validation');
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', e => {
                    if (!form.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                });
            })();
        </script>
    @endsection

@endsection
