@extends('layouts.main')
@section('title', 'Home & Office Renovation Services in Bangalore - Krish-V Global Interiors')
@section('description', 'Reimagine your interiors with expert renovation by Krish-V Global Interiors. From concept to execution, we revitalize homes and offices in Bangalore.')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner background" style="background-image: url(@assetPath('assets/img/Images/Renovation/Compressed/Banner-renovation.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Renovation</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Transforming Spaces <span>Seamlessly</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- Before-After section --}}
    <div class="content-wrapper" style="text-align: center;">
        <section class="">
            <div class="container">
                <h2 class="site-section-heading mb-4">
                    Krish‑V: Renovation Driven by <span> Detail and Discipline</span>
                </h2>
                <p class="mb-4">
                    Krish‑V Global Interiors delivers renovations through a structured process, technical precision, and a focus on spatial efficiency. Every transformation balances function, material quality, and design integrity—executed on time and to specification.
                </p>

                <div class="row align-items-center krishv-before-after-row mb-5">
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="krishv-before-after-wrapper">
                            <img src="@assetPath('assets/img/Images/Renovation/after02.png')" alt="After Image" class="krishv-after-img" />
                            <div class="krishv-before-img-wrapper">
                                <img src="@assetPath('assets/img/Images/Renovation/before02.png')" alt="Before Image"
                                class="krishv-before-img" />
                            </div>
                            <div class="krishv-slider-line-wrapper">
                                <div class="krishv-slider-line"></div>
                                <div class="krishv-slider-handle">
                                    <span class="krishv-slider-icon">&#8596;</span>
                                </div>
                            </div>
                            <div class="krishv-label krishv-before-label">Before</div>
                            <div class="krishv-label krishv-after-label">After</div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center order-1 order-md-2">
                        <div class="renovation-text-box text-center text-white w-100">
                            {{-- <h2 class="renovation-heading">Bedroom</h2> --}}
                            <h2 class="sub-title gradient-text renovation">Bedroom</h2>
                            <p class="renovation-description">
                                This bedroom renovation focuses on spatial clarity, material comfort, and ambient control. The layout is optimized for usability, while finishes and lighting are selected to support rest, privacy, and understated elegance.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center krishv-before-after-row mb-5">
                    <div class="col-md-5 d-flex align-items-center order-1">
                        <div class="renovation-text-box text-center text-white w-100">
                            {{-- <h2 class="renovation-heading">Kitchen</h2> --}}
                            <h2 class="sub-title gradient-text renovation">Kitchen</h2>
                            <p class="renovation-description">
                                This kitchen upgrade prioritizes workflow, storage efficiency, and durable finishes. Functional zones are clearly defined, with materials and lighting tailored to enhance both daily use and long-term maintenance.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-7 order-2">
                        <div class="krishv-before-after-wrapper">
                            <img src="@assetPath('assets/img/Images/Renovation/Compressed/After04.webp')" alt="After Image" class="krishv-after-img" />
                            <div class="krishv-before-img-wrapper">
                                <img src="@assetPath('assets/img/Images/Renovation/Compressed/before04.webp')" alt="Before Image" />
                            </div>
                            <div class="krishv-slider-line-wrapper">
                                <div class="krishv-slider-line"></div>
                                <div class="krishv-slider-handle">
                                    <span class="krishv-slider-icon">&#8596;</span>
                                </div>
                            </div>
                            <div class="krishv-label krishv-before-label">Before</div>
                            <div class="krishv-label krishv-after-label">After</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

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
        <!-- Before And After Slider -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
            const clamp = (n,min,max)=>Math.max(min,Math.min(max,n));

            document.querySelectorAll('.krishv-before-after-wrapper').forEach(wrapper => {
                const handle = wrapper.querySelector('.krishv-slider-handle');
                const beforeWrap = wrapper.querySelector('.krishv-before-img-wrapper');

                if (beforeWrap) {
                beforeWrap.style.width = '100%';
                beforeWrap.style.overflow = 'visible';
                }
                wrapper.querySelectorAll('*').forEach(el => {
                if (el._kvOldHandlers) { el._kvOldHandlers.forEach(fn => el.removeEventListener(...fn)); }
                });

                function setPercent(p){
                p = clamp(p, 0, 100);
                wrapper.style.setProperty('--pos', p + '%');
                if (handle) handle.setAttribute('aria-valuenow', String(Math.round(p)));
                toggleLabels(p);
                }

                function percentFromClientX(x){
                const r = wrapper.getBoundingClientRect();
                return clamp(((x - r.left) / r.width) * 100, 0, 100);
                }

                function toggleLabels(p){
                const beforeLabel = wrapper.querySelector('.krishv-before-label');
                const afterLabel  = wrapper.querySelector('.krishv-after-label');
                if (!beforeLabel || !afterLabel) return;
                if (p >= 75) { beforeLabel.style.opacity = '1'; afterLabel.style.opacity = '0'; }
                else if (p <= 25) { beforeLabel.style.opacity = '0'; afterLabel.style.opacity = '1'; }
                else { beforeLabel.style.opacity = '1'; afterLabel.style.opacity = '1'; }
                }

                // Pointer interactions (click/drag anywhere)
                let dragging = false;
                const down = e => { dragging = true; setPercent(percentFromClientX(e.clientX)); };
                const move = e => { if (dragging) { setPercent(percentFromClientX(e.clientX)); e.preventDefault(); } };
                const up   = () => { dragging = false; };

                wrapper.addEventListener('pointerdown', down);
                window.addEventListener('pointermove', move);
                window.addEventListener('pointerup', up);

                // Keyboard on the handle
                handle?.addEventListener('keydown', (e) => {
                const step = e.shiftKey ? 5 : 1;
                const now = Number(handle.getAttribute('aria-valuenow') || 50);
                if (e.key === 'ArrowLeft')  { setPercent(now - step); e.preventDefault(); }
                if (e.key === 'ArrowRight') { setPercent(now + step); e.preventDefault(); }
                if (e.key === 'Home')       { setPercent(0);         e.preventDefault(); }
                if (e.key === 'End')        { setPercent(100);       e.preventDefault(); }
                });

                setPercent(50);
            });
            });
        </script>
    @endsection
@endsection
