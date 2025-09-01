@extends('layouts.main')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Freepik-images/About/Compressed/Banner-gallery.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-divider">/</span>
                    <span class="current-page">Gallery</span>
                </div>
                <h2 class="banner-text animate-fade">
                    "Visual Design <span>Collection</span>".
                </h2>
            </div>
        </div>
    </section>

    {{-- Gallery Section --}}
    <section class="gallery-section" style="text-align: center;">
        <div class="container">
            <h2 class="site-section-heading mb-4">
                Designs Come Alive : Dive into <span> Our Gallery </span>
            </h2>
            <div class="tabs">
                <button class="tab active" data-category="kitchen">Kitchen</button>
                <button class="tab" data-category="bedroom">Bedroom</button>
                <button class="tab" data-category="living">Living Room</button>
                <button class="tab" data-category="kids">Kids Room</button>
                <button class="tab" data-category="dining">Dining</button>
                <button class="tab" data-category="workspace">Workspace</button>
            </div>
            <div class="gallery-grid" id="gallery"></div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-image" id="lightbox-img" src="" alt="">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>


    {{-- CTA Section --}}
    <section class="krish-v-cta-section Reverse mb-20" >
        <div class="container">
            <div class="krish-v-cta-content">
                <div class="krish-v-cta-text">
                    <h2>READY TO TRANSFORM YOUR SPACE?</h2>
                    <a href="#" class="krish-v-cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us Now <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="krish-v-cta-image upvc">
                    <img src="@assetPath('assets/img/team/graphical-image/Dining.png')" alt="Transform" />
                </div>
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')

    @section('vendor-js')
    {{-- Script gallery Section --}}
    <script>
        const images = {
        kitchen: [
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen1.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen2.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen3.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen4.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen5.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen6.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen7.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen13.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen8.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen9.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen10.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen11.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen12.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen14.webp')",
            "@assetPath('assets/img/Freepik-images/kitchen/Images/Kitchen16.webp')"
        ],
        bedroom: [
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom1.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom10.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom11.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom12.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom13.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom3.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom15.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom16.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom17.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom18.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom19.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom20.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom21.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom22.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom23.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom24.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom2.webp')",
            "@assetPath('assets/img/Freepik-images/Bed-room/Images/Bedroom5.webp')"

        ],
        living: [
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom1.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom6.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom3.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom4.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom7.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom8.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom9.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom10.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom11.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom12.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom13.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom14.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom5.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom16.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom17.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom18.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom20.webp')",
            "@assetPath('assets/img/Freepik-images/living-room/Images/Livingroom19.webp')"
        ],
        kids: [
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom1.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom2.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom3.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom4.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom5.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom6.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom7.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom8.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom9.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom10.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom11.webp')",
            "@assetPath('assets/img/Freepik-images/kids-room/Images/Kidsroom12.webp')"
        ],
        dining: [
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining1.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining2.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining3.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining4.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining5.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining6.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining7.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining8.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining9.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining10.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining11.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining12.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining13.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining14.webp')",
            "@assetPath('assets/img/Freepik-images/Dining/Images/Dining15.webp')"
        ],
        workspace: [
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace1.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace2.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace3.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace4.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace5.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace6.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace7.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace8.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace9.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace10.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace11.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace12.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace13.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace14.webp')",
            "@assetPath('assets/img/Freepik-images/Work-space/Images/Workspace15.webp')"
        ]
    };

        const gallery = document.getElementById("gallery");
        const tabs = document.querySelectorAll(".tab");

        let currentCategory = "kitchen";
        let currentIndex = 0;

        function loadGallery(category) {
            gallery.innerHTML = "";
            images[category].forEach((src, index) => {
                const img = document.createElement("img");
                img.src = src; // High resolution
                img.alt = category + " " + (index + 1);
                img.addEventListener("click", () => openLightbox(index));
                gallery.appendChild(img);
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabs.forEach(btn => btn.classList.remove("active"));
                tab.classList.add("active");
                currentCategory = tab.getAttribute("data-category");
                loadGallery(currentCategory);
            });
        });

        // Lightbox
        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");
        const closeBtn = document.querySelector(".lightbox .close");
        const prevBtn = document.querySelector(".lightbox .prev");
        const nextBtn = document.querySelector(".lightbox .next");

        function openLightbox(index) {
            currentIndex = index;
            lightbox.style.display = "flex";
            updateLightboxImage();
        }

        function updateLightboxImage() {
            lightboxImg.src = images[currentCategory][currentIndex];
        }

        closeBtn.addEventListener("click", () => lightbox.style.display = "none");

        prevBtn.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + images[currentCategory].length) % images[currentCategory].length;
            updateLightboxImage();
        });

        nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % images[currentCategory].length;
            updateLightboxImage();
        });

        // Initial load
        loadGallery(currentCategory);
    </script>
    @endsection


@endsection