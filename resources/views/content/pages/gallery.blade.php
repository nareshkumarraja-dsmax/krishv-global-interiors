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
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kit1.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/Kit2.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/Kit3.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/Kit4.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch19.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch10.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kit21.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kit10.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kit11.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/Kitch2.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch3.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch4.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch5.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch9.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch22.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch21.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch24.webp')",
                "@assetPath('assets/img/Freepik-images/kitchen/Compressed/kitch25.webp')",
            ],
            bedroom: [
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br1.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br21.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br11.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br4.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br5.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br19.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br7.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br10.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/br20.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed1.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed15.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed3.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed4.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed5.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed6.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed7.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed8.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed9.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed10.webp')",
                // "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed11.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed12.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed13.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed14.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed2.webp')",
                "@assetPath('assets/img/Freepik-images/Bed-room/Compressed/bed16.webp')"
            ],
            living: [
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l1.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l23.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l3.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l4.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l5.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l6.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l18.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l17.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living12.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living15.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/l19.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living1.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living2.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living3.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living4.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living5.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living6.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living7.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living8.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living10.webp')",
                // "@assetPath('assets/img/Freepik-images/living-room/Compressed/living14.webp')",
                "@assetPath('assets/img/Freepik-images/living-room/Compressed/living16.webp')"
            ],
            kids: [
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k1.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k3.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k4.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k13.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k17.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k12.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k26.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k20.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/k15.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/kid1.webp')",
                "@assetPath('assets/img/Freepik-images/kids-room/Compressed/kid2.webp')"
            ],
            dining: [
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D1.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D13.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D10.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D4.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D5.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D11.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D17.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D20.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/D12.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining1.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining9.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining2.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining3.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining6.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining5.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining7.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining8.webp')",
                "@assetPath('assets/img/Freepik-images/Dining/Compressed/dining10.webp')"
            ],
            workspace: [
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/ws5.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w13.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/ws7.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w5.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w14.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w11.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w15.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w7.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/w12.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/ws3.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/ws4.webp')",
                "@assetPath('assets/img/Freepik-images/Work-space/Compressed/ws6.webp')",
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