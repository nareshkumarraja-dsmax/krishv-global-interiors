@extends('layouts.main')
@section('title', 'Careers at Krish-V Global Interiors Bangalore')
@section('description', 'Join Our Creative Team.')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/Career/Compressed/Banner-career.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Career</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Build Your <span>Future</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- Career Card Section --}}
    <section class="career-card-section-v2 space">
        <div class="container">
            <h2 class="site-section-heading mb-5">
                Crafting Careers, Crafting Spaces : Join <span> Krish-V Global Interiors </span>
            </h2>
            <div class="row g-4 justify-content-center no-equal">
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Interior Head</h4>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Experience :</strong> 3 - 5 years
                        </p>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>
                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Experience in handling entire interior production and execution operations, including planning, budgeting, designing and execution of interior designs for commercial and residential fit-out projects.</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Planning and ensuring production schedules as per the deadline or committed line production schedules.</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>
                        <div class="apply-now-wrapper">
                            <button type="button" class=" apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Senior Interior Designer</h4>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Experience :</strong> 8 - 15 years
                        </p>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>
                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Undertake design project from concept to completion</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Provide space planning, design conceptualization, materials and colour scheme specification based on client needs</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Ability to finish projects on time and meet given deadline</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class="apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Production-Cutting List</h4>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Experience :</strong> 5+ Years
                        </p>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>

                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Interior fit-out production experience in an interior factory.</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Sound Knowledge materials and machines of each production line.</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Manpower management – should be able to bring in the skilled and unskilled manpower required at the factory.</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class=" apply-now-btn " data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Manager Sales-Interior Fitout</h4>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Experience :</strong> 5 - 10 Years
                        </p>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>

                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Experience in B2C & B2B with good communication and presentation skills</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Ability to multitask and manage various internal and external stakeholders</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Managing both our existing sales pipeline and developing new business opportunities</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class="apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Sales Executive</h4>
                        <p>
                            <span class="custom-career-icon"><i class="fas fa-hand-point-right"></i></span>
                            <strong>Experience :</strong> 1 - 3 years
                        </p>
                        <p>
                            <span class="custom-career-icon"><i class="fas fa-hand-point-right"></i></span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>
                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Strong communication & people skills</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Prior interior/home sales experience preferred</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Basic understanding of design is a plus</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Fluent in English, Hindi, Tamil & Kannada</li>
                                <li><i class="fas fa-circle bullet-icon"></i>CRM knowledge & follow-up discipline</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class="apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Presales Executive</h4>
                        <p>
                            <span class="custom-career-icon"><i class="fas fa-hand-point-right"></i></span>
                            <strong>Experience :</strong> 1 - 3 years
                        </p>
                        <p>
                            <span class="custom-career-icon"><i class="fas fa-hand-point-right"></i></span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>
                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Strong communication & people skills</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Prior interior/home sales experience preferred</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Basic understanding of design is a plus</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Fluent in English, Hindi, Tamil & Kannada</li>
                                <li><i class="fas fa-circle bullet-icon"></i>CRM knowledge & follow-up discipline</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class="apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Manager Sales-Interior Fitout</h4>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Experience :</strong> 0 - 3 years
                        </p>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>
                        <div class="custom-requirement-toggle">
                            <p>
                            <span class="custom-career-icon"><i class="fas fa-hand-point-right"></i></span>
                            <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Demonstrated passion for interior design through projects or coursework</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Familiarity with design software and tools</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Strong organizational skills and the ability to manage multiple tasks</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Effective communication skills and a willingness to learn from experienced designers</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class="apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-career-card">
                        <h4 class="custom-career-title">Production-Cutting List</h4>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Experience :</strong> 2 - 5+ Years
                        </p>
                        <p>
                            <span class="custom-career-icon">
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                            <strong>Qualification :</strong> Any Graduate / Post Graduate
                        </p>
                        <div class="custom-requirement-toggle">
                            <p>
                                <span class="custom-career-icon">
                                    <i class="fas fa-hand-point-right"></i>
                                </span>
                                <strong>Requirements :</strong>
                            </p>
                            <ul class="custom-diamond-list">
                                <li><i class="fas fa-circle bullet-icon"></i>Relevant experience in Interior Fitout Sales in residential and commercial establishments</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Possessing excellent communication skills and high sales acumen</li>
                                <li><i class="fas fa-circle bullet-icon"></i>Experience in B2B OR B2C Store sales</li>
                            </ul>
                        </div>
                        <div class="card-actions">
                            <button type="button" class="custom-know-more-btn mt-2">
                                <span class="btn-text">Know More</span>
                                <i class="fa fa-chevron-down ms-2"></i>
                            </button>
                        </div>

                        <div class="apply-now-wrapper">
                            <button type="button" class="apply-now-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')
    @include('content.forms.apply_now')
    @include('content.forms.scripts.apply_mow_script')

    @section('vendor-js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const customButtons = document.querySelectorAll(".custom-know-more-btn");

                customButtons.forEach(function (button) {
                    button.addEventListener("click", function () {
                    const card = button.closest(".custom-career-card");
                    const toggleContent = card.querySelector(".custom-requirement-toggle");
                    const btnText = button.querySelector(".btn-text");
                    const icon = button.querySelector("i");

                    const isActive = toggleContent.classList.contains("show");

                    toggleContent.classList.toggle("show", !isActive);

                    button.classList.toggle("active", !isActive);

                    btnText.textContent = isActive ? "Know More" : "Show Less";
                    icon.classList.toggle("fa-chevron-down", isActive);
                    icon.classList.toggle("fa-chevron-up", !isActive);
                    });
                });
            });
        </script>
    @endsection
@endsection
