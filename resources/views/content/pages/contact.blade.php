@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Freepik-images/Contact/Compressed/4.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Contact</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Let’s Connect <span>Today</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- Contact Details Section --}}
    <section class="contact-section" id="pagecontactModal" style="padding-bottom: 0;">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-lg-6 mb-30 wow fadeInLeft align-items-center" data-wow-delay="0.2s">
                    <div class="form-wrapper me-xl-5">
                        <h2 class="sec-title mb-45"> Send Us <span class="text-theme"> Message </span></h2>
                        <form id="pageContactForm" action="" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12 ">
                                <input type="text" class="form-control dark-input" name="name" id="pageName" placeholder="Full Name *" required/>
                                <i class="fal fa-user"></i>
                                <div id="errorPCName" ></div>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control dark-input" name="email" id="pageEmail" placeholder="Email Address *" required/>
                                <i class="fal fa-envelope"></i>
                                <div id="errorPCEmail" ></div>
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" class="form-control dark-input" name="number" id="pagePhone" placeholder="Phone Number *" required/>
                                <i class="fal fa-phone"></i>
                                <div id="errorPCPhone" ></div>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="pageMessage" cols="30" rows="3" class="form-control dark-input" placeholder="Message" required></textarea>
                                <i class="fal fa-pencil"></i>
                                <div id="errorPCMessage" ></div>
                            </div>
                            <div class="form-btn col-12 mt-10 mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <p id="pageContactSuccess" class="mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" style="height: 100%;">
                    <div class="contact-details">
                        <h2 class="site-section-heading">
                            Contact  <span> Details </span>
                        </h2>
                        <div class="contact-info d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <strong>Office Address :</strong><br />
                                <a>#1797, 14th Main Rd, Brindavan Nagar, HBR Layout,<br />Bengaluru, Karnataka 560043</a>
                            </div>
                        </div>

                        <div class="contact-info d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>Email Address :</strong><br />
                                <a href="mailto:interior@krishvglobal.com">interior@krishvglobal.com</a>
                            </div>
                        </div>

                        <div class="contact-info d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <strong>Phone Number :</strong><br />
                                <a href="tel:+918880225544">+91 8880225544</a>
                            </div>
                        </div>

                        <h2 class="site-section-heading">
                            Grievances <span> Department </span>
                        </h2>
                        <div class="contact-info d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>Email Address :</strong><br />
                                <a href="mailto:grievances@krishvglobal.com">grievances@krishvglobal.com</a>
                            </div>
                        </div>

                        <div class="contact-info d-flex">
                            <div class="icon-box me-3">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <strong>Phone Number :</strong><br />
                                <a href="tel:+917406711079">+91 7406 711 079</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Map --}}
    <div class="container-fluid px-1 mt-4 wow fadeInRight" data-wow-delay="0.2s">
        <div class="row gx-0">
            <div class="map-section col-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31090.301625265914!2d77.63439!3d13.080944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae179fa9588509%3A0x2a2460726b5f95b7!2sKrish-V%20Global%20Interiors!5e0!3m2!1sen!2sus!4v1745304189532!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
    {{-- Contact form --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('#pagecontactModal .dark-input');

            function toggleFilledClass(input) {
                if (input.value.trim() !== '') {
                    input.classList.add('filled');
                } else {
                    input.classList.remove('filled');
                }
            }

            inputs.forEach(input => {
                toggleFilledClass(input);
                input.addEventListener('input', () => toggleFilledClass(input));
            });
        });
    </script>
    @endsection
@endsection