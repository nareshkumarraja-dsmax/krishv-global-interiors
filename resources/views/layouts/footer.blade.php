<footer class="krish-footer">
    <div class="krish-footer-top">
        <div class="container">
            <div class="krish-footer-grid">
                <div class="krish-footer-col krish-footer-logo-text">
                    <div class="logo-text-wrapper">
                        <img src="@assetPath('assets/img/krish-v-logo-Global.png')" alt="Krish-V Logo" class="footer-logo" />
                        <div class="footer-animated-text">
                            <span class="footer-line line1">Forever Designing - </span>
                            <span class="footer-line line2">Beautiful Stories & </span>
                            <span class="footer-line line3"> Beautiful Homes</span>
                        </div>
                    </div>
                    <h6>Social Network :</h6>
                    <div class="social-icons gradient-icon">
                        <a href="https://www.facebook.com/krishvglobalinteriors" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/krishvglobalinteriors/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@krishvglobalinteriors" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/krishvglobalinteriors" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="krish-footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a class="{{ request()->routeIs('carrer')? 'active': ''}}" href="{{route('carrer')}}"><i class="fas fa-check-circle"></i><span>Careers</span></a></li>
                        <li><a class="{{ request()->routeIs('blog')? 'active': ''}}" href="{{route('blog')}}"><i class="fas fa-check-circle"></i><span>Blog</span></a></li>
                        <li><a class="{{ request()->routeIs('privacy_policy')? 'active': ''}}" href="{{route('privacy_policy')}}"><i class="fas fa-check-circle"></i><span>Privacy Policy</span></a></li>
                        <li><a class="{{ request()->routeIs('termsandconditions')? 'active': ''}}" href="{{route('termsandconditions')}}"><i class="fas fa-check-circle"></i><span>Terms & Conditions</span></a></li>
                        <li><a class="{{ request()->routeIs('faq')? 'active': ''}}" href="{{route('faq')}}"><i class="fas fa-check-circle"></i><span>FAQ</span></a></li>
                    </ul>
                </div>

                <div class="krish-footer-col">
                    <h4>Contact Us</h4>
                    <p class="footer-contact">
                        <span class="footer-icon"><i class="fas fa-phone"></i></span>
                        <a href="tel:+918880225544" class="footer-text">+91 8880225544</a>
                    </p>
                    <p class="footer-contact">
                        <span class="footer-icon"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:interior@krishvglobal.com" class="footer-text">interior@krishvglobal.com</a>
                    </p>
                    <p class="footer-contact">
                        <span class="footer-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <a href="https://maps.app.goo.gl/vjs9jnQBVXpjUKtx8" target="_blank" class="footer-text">
                            #1797, 14th Main Rd, Brindavan Nagar, HBR Layout, Bengaluru, Karnataka 560043
                        </a>
                    </p>
                </div>

                <div class="krish-footer-col">
                    <h4>Grievances Department</h4>
                    <p class="footer-contact">
                        <span class="footer-icon"><i class="fas fa-phone"></i></span>
                        <a href="tel:+917406711079" class="footer-text">+91 7406 711 079</a>
                    </p>
                    <p class="footer-contact">
                        <span class="footer-icon"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:grievances@krishvglobal.com" class="footer-text">grievances@krishvglobal.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="krish-footer-disclaimer">
        <div class="container">
            <p>
                <strong>Disclaimer:</strong> The information provided on the Krish-V Global Interiors website is for general informational purposes only.
                The images, timelines, prices, and materials shown on the Krish-V Global Interiors website are for illustrative purposes only. Actual project outcomes, including final designs, costs, schedules, and material availability, will vary based on specific client needs, market conditions,  material availability, and final execution.
                Krish-V Global Interiors reserves the right to modify or change any information without prior notice. The use of this website and its content is at your own risk.
            </p>
        </div>
    </div>

    <div class="krish-footer-bottom">
        <div class="container">
            <p class="text-center" data-year="2025">
                Copyright © <span id="year"></span>. <a href="{{route('home')}}">Krish-V Global Enterprises Pvt. Ltd</a>. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>



<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>



<div class="enquire-strip-wrapper">
    <a href="#" class="enquire-now-btn btn btn-warning" data-bs-toggle="modal" data-bs-target="#contactModal">ENQUIRE NOW</a>
</div>


<!-- Swiper JS -->
<script src="@assetPath('assets/js/vendor/jquery-3.6.0.min.js')"></script>
<script src="@assetPath('assets/js/app.min.js')"></script>
<script src="@assetPath('assets/js/main.js')"></script>
<script src="@assetPath('assets/js/data.js')"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@yield(
    'vendor-js'
)


<script>
    document.getElementById("year").textContent = new Date().getFullYear();
    document.querySelector('.krish-footer-bottom p.text-center')
        .setAttribute("data-year", new Date().getFullYear());
</script>



<!-------------- For pausing the logo --------------->
<script>
    window.addEventListener("DOMContentLoaded", () => {
        const track = document.getElementById("logoTrack");
        track.innerHTML += track.innerHTML;
    });
</script>



<script>
    $('.th-carousel').each(function(){
    var $this = $(this);
    $this.slick({
        slidesToShow: $this.data('slide-show') || 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        responsive: [
        {
            breakpoint: 992,
            settings: {
            slidesToShow: $this.data('md-slide-show') || 1
            }
        }
        ]
    });
});
</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.testimonial-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
            }
        ]
        });
    });
</script>

</body>
