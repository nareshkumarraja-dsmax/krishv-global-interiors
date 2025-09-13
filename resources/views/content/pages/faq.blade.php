@extends('layouts.main')
@section('title', 'FAQs - Interior Design by Krish-V Global Interiors Bangalore')
@section('description', 'Have questions? Find answers to common queries about our services, timelines, pricing, and more at Krish-V Global Interiors, Bangalore.')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/faq/Compressed/Banner-faq.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Faq</span>
                </div>
                <h2 class="banner-text animate-fade">"Quick Help <span>Guide</span>".</h2>
            </div>
        </div>
    </section>

    {{-- Faq Section --}}
    <div class="space" style="text-align: center;">
        <div class="section-wrapper">
            <h2 class="site-section-heading mb-3">
                Frequently asked <span> questions </span>
            </h2>
            <p class="sub-title gradient-text faq">Learn about our services, design approach, and how you can collaborate with us — all in one place.</p>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">1.</div>
                        <div class="step-title">What makes Krish-V Global Interiors a unique interior design company?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>At Krish-V Global Interiors, our uniqueness lies in our ability to blend innovative design concepts with personalized client collaboration, resulting in spaces that are as distinct as our clients themselves.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">2.</div>
                        <div class="step-title"> How do I initiate the design process with Krish-V Global Interiors?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>To kickstart your project with us, you can either fill out our online contact form or call our dedicated line at+91 8880225544. We’ll promptly reach out to schedule an initial consultation.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">3.</div>
                        <div class="step-title">Can Krish-V Global Interiors help me find my ideal design style?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Absolutely! Our skilled design team will guide you through the process of discovering your ideal design style during our consultation. We’ll explore various options to ensure your space reflects your personality.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">4.</div>
                        <div class="step-title"> What range of interior design services does Krish-V Global Interiors offer? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Krish-V Interiors offers a comprehensive range of services, including space planning, furniture selection, color schemes, lighting design, and more. We’re equipped to handle projects of all sizes and complexities.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">5.</div>
                        <div class="step-title"> Can I view a portfolio of Krish-V Global Interior's completed projects? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Certainly! Our Gallery & Virtual Tour showcases a diverse collection of our previous projects, ranging from residential homes to commercial spaces. Visit our website to explore and gather inspiration for your own project.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">6.</div>
                        <div class="step-title"> How long does a typical interior design project take with Krish-V Global Interiors? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Project timelines can vary based on the project’s scope and complexity. We’ll provide you with a tailored timeline after our initial consultation, ensuring you’re well-informed throughout the process.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">7.</div>
                        <div class="step-title"> How is the pricing determined for Krish-V Global Interior's services?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Our pricing is influenced by factors such as the size of the space, the services required, and the chosen materials. During the consultation, we’ll provide you with a transparent estimate tailored to your budget.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">8.</div>
                        <div class="step-title"> Can I actively participate in the design decisions for my project?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Absolutely! Your input is invaluable to us. We encourage collaboration to ensure that your personal preferences are reflected in the final design.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">9.</div>
                        <div class="step-title">  Does Krish-V Global Interiors incorporate sustainable design practices? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Yes, sustainability is an integral part of our design philosophy. We’re committed to utilizing eco-friendly materials and practices whenever possible to create spaces that are both beautiful and environmentally conscious.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">10.</div>
                        <div class="step-title">  How can I schedule a consultation with Krish-V Global Interiors? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Scheduling a consultation is quick and easy. You can fill out our contact form on the website or give us a call at [phone number]. We’ll arrange a meeting at your convenience.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">11.</div>
                        <div class="step-title"> Does Krish-V Global Interiors work with clients on a limited budget? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Absolutely! We believe everyone deserves a beautifully designed space. During our consultation, we’ll discuss budget constraints and provide creative solutions that align with your financial plan.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">12.</div>
                        <div class="step-title"> Can Krish-V Global Interiors assist with both residential and commercial projects? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Yes, we have experience with both residential and commercial projects. Whether you’re looking to enhance your home or revamp your workspace, we’re here to bring your vision to life.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">13.</div>
                        <div class="step-title"> How do I know if Krish-V Global Interiors is the right fit for my project?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>We encourage you to explore our portfolio and read testimonials from previous clients. During our consultation, we’ll also discuss your project in detail to ensure we’re the perfect match for your needs.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">14.</div>
                        <div class="step-title"> Can Krish-V Global Interiors provide 3D renderings of design concepts? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Yes, we offer detailed 3D renderings that allow you to visualize your design concepts before they become a reality. This provides a clear understanding of how your space will look and feel.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">15.</div>
                        <div class="step-title"> What's the role of colour consultation in Krish-V Global Interior's design process? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Colour consultation is a crucial aspect of our design process. We’ll guide you in selecting a colour palette that complements your space, enhances its ambience, and reflects your desired mood.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">16.</div>
                        <div class="step-title"> Does Krish-V Global Interiors offer post-design services such as installation?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Yes, we provide end-to-end services, including coordinating installations and overseeing the transformation of your space. Our team ensures that the design is seamlessly brought to life.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">17.</div>
                        <div class="step-title"> How often will I be updated about the progress of my project?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Communication is key to us. Throughout the project, we’ll provide regular updates to keep you informed about milestones, decisions, and any developments.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">18.</div>
                        <div class="step-title"> Can Krish-V Global Interiors work with existing furniture and decor items? </div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Absolutely! We’re skilled at integrating existing pieces into new designs. We’ll help you strike a balance between incorporating your cherished items and introducing fresh elements.</p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">19.</div>
                        <div class="step-title"> Is Krish-V Global Interiors available for consultations outside of regular business hours?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p> We understand busy schedules, and we’re happy to accommodate consultations outside of regular hours. Feel free to let us know your preferred time, and we’ll do our best to accommodate. </p>
                </div>
            </div>

            <div class="step-accordion faq">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number">20.</div>
                        <div class="step-title"> How does Krish-V Global Interiors ensure client satisfaction?</div>
                    </div>
                    <div class="step-toggle"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="step-body">
                    <p>Client satisfaction is at the heart of our business. We ensure open communication, personalized design solutions, and a commitment to excellence, resulting in spaces that exceed expectations.</p>
                </div>
            </div>

        </div>
    </div>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
        {{-- Script For Accordion --}}
        <script>
            document.querySelectorAll('.step-accordion .step-header').forEach(header => {
                header.addEventListener('click', () => {
                    const currentAccordion = header.parentElement;

                    // Close all other accordions
                    document.querySelectorAll('.step-accordion').forEach(accordion => {
                        if (accordion !== currentAccordion) {
                            accordion.classList.remove('active');
                        }
                    });

                    // Toggle the clicked accordion
                    currentAccordion.classList.toggle('active');
                });
            });
        </script>
    @endsection
@endsection
