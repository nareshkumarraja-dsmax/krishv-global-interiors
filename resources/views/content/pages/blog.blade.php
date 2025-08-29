@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Freepik-images/Blog/Compressed/Banner-blog.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Blog</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Interiors Thought <span>Hub</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- Blog Section --}}
    <section class="blog position-relative">
        <div class="container">
            <div class="blog-card-wrap">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details1.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">01</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details1.html" target="_blank" class="mb-3">Illuminating Your Vision: Mastering Interior Lighting Design</a>
                        <a href="" style="color: #fecc52;">May 6, 2024</a>
                    </div>
                    <p class="blog-text">
                        Interior lighting design is much more than just flipping a switch. It’s the art of using light...
                    </p>
                    <a href="Blog-Details1.html" target="_blank" class="link-btn">Know More</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details2.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">02</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details2.html" target="_blank" class="mb-3">Spice Up Your Kitchen with Krish-V Interiors: Hot Trends for a Dream Cooking Space</a>
                        <a href="" style="color: #fecc52;">May 2, 2024</a>
                    </div>
                    <p class="blog-text">
                        The heart of the home, the kitchen, is where families gather, meals are prepared....
                    </p>
                    <a href="Blog-Details2.html" target="_blank" class="link-btn">Know More</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details3.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">03</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details3.html" target="_blank" class="mb-3">Enlightening Spaces: The Crucial Role of Lighting in Interior Design</a>
                        <a href="" style="color: #fecc52;">February 20, 2024</a>
                    </div>
                    <p class="blog-text">
                        In the realm of interior design, lighting serves as both a functional necessity and a powerful....
                    </p>
                    <a href="Blog-Details3.html" target="_blank" class="link-btn">Know More</a>
                </div>
            </div>
        </div>
    </section>


    <section class="blog position-relative">
        <div class="container">
            <div class="blog-card-wrap">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details4.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">04</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details4.html" target="_blank" class="mb-3">The Art of Color Psychology: Transforming Homes with Emotion-evoking Hues</a>
                        <a href="" style="color: #fecc52;">August 21, 2023</a>
                    </div>
                    <p class="blog-text">
                        When creating an inviting and harmonious living space, the role of colour psychology....
                    </p>
                    <a href="Blog-Details4.html" target="_blank" class="link-btn">Know More</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details5.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">05</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details5.html" target="_blank" class="mb-3">What to Look for in an Interior Design Company for Your 2 & 3 BHK Apartments in Bengaluru</a>
                        <a href="" style="color: #fecc52;">August 16, 2023</a>
                    </div>
                    <p class="blog-text">
                        Finding the right interior design company is crucial when designing your dream home....
                    </p>
                    <a href="Blog-Details5.html" target="_blank" class="link-btn">Know More</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details6.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">06</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details6.html" target="_blank" class="mb-3">Breathe Life into Your Space: Indoor Plant Decor for Every Room</a>
                        <a href="" style="color: #fecc52;">May 3, 2024</a>
                    </div>
                    <p class="blog-text">
                        Indoor plant decor is more than just a trend; it’s a way to transform your living space into...
                    </p>
                    <a href="Blog-Details6.html" target="_blank" class="link-btn">Know More</a>
                </div>
            </div>
        </div>
        <div class="body-shape1">
            <img src="@assetPath('assets/img/shape/shape_1.png')" alt="shape" />
        </div>
    </section>


    <section class="blog position-relative">
        <div class="container">
            <div class="blog-card-wrap">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details7.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">07</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details7.html" target="_blank" class="mb-3">Infuse Your Personality: Tips for Personalizing Your Residential Interiors</a>
                        <a href="" style="color: #fecc52;"> February 21, 2024</a>
                    </div>
                    <p class="blog-text">
                        Your home is more than just a place to live; it reflects your personality, style, and unique...
                    </p>
                    <a href="Blog-Details7.html" target="_blank" class="link-btn">Know More</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details8.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">08</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details8.html" target="_blank" class="mb-3">Enhancing Efficiency: The Influence of Office Layout on Productivity</a>
                        <a href="" style="color: #fecc52;">January 18, 2024</a>
                    </div>
                    <p class="blog-text">
                        In the fast-paced world of business, productivity is critical to success. However, many factors...
                    </p>
                    <a href="Blog-Details8.html" target="_blank" class="link-btn">Know More</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="@assetPath('assets/img/Freepik-images/Blog/Compressed/Blog-details9.webp')" alt="blog image" />
                    </div>
                    <span class="blog-count h2">09</span>
                    <div class="blog-meta style2">
                        <a href="Blog-Details9.html" target="_blank" class="mb-3">Organizing Advice for Maximum Space Utilization in Apartments: Endless Design Ideas</a>
                        <a href="" style="color: #fecc52;">August 21, 2023</a>
                    </div>
                    <p class="blog-text">
                        In the fast-paced world of urban living, the challenge of making the most out of limited...
                    </p>
                    <a href="Blog-Details9.html" target="_blank" class="link-btn">Know More</a>
                </div>
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
    {{-- Blog Script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (window.innerWidth <= 991) {
                const blogCards = document.querySelectorAll(".blog-card");

                const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                    entry.target.classList.add("show-image");
                    } else {
                    entry.target.classList.remove("show-image");
                    }
                });
                }, { threshold: 1 });

                blogCards.forEach(card => observer.observe(card));
            }
        });
    </script>

    @endsection
@endsection