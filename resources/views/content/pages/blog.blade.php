@extends('layouts.main')
@section('title', 'Interior Design Blog Bangalore - Krish-V Global Interiors')
@section('description', 'Discover expert tips, industry trends, and design insights from Krish-V Global Interiors. Your go-to interior blog for inspiration in Bangalore.')

@section('main-container')
    {{-- Banner Section --}}
    <section class="gallery-banner" style="background-image: url(@assetPath('assets/img/Images/Blog/Compressed/Banner-blog.webp'));">
        <div class="gallery-banner-overlay">
            <div class="gallery-banner-content">
                <div class="breadcrumb-nav">
                    <a href="{{ route('home') }}">Home</a>
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
@php
    // $list comes from BlogController@index (built from config('blogs.posts'))
    $chunks = array_chunk($list, 3); // 3 cards per section (same as your layout)
    $counter = 1;                    // for 01, 02, 03...
@endphp

@foreach($chunks as $sectionIndex => $chunk)
<section class="blog position-relative">
    <div class="container">
        <div class="blog-card-wrap">
            @foreach($chunk as $item)
                @php
                    $count = sprintf('%02d', $counter++);
                    $date  = !empty($item['date']) ? \Carbon\Carbon::parse($item['date'])->format('F j, Y') : null;
                    $img   = $item['image'] ?? null;
                    $title = $item['title'] ?? $item['slug'];
                    $intro = \Illuminate\Support\Str::limit(strip_tags($item['intro'] ?? ''), 140);
                @endphp

                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        @if($img)
                            {{-- Use your helper if it supports variables; else fallback to asset() --}}
                            <img src="@assetPath($img)" alt="blog image" />
                            {{-- or: <img src="@assetPath($img)" alt="blog image" /> --}}
                        @endif
                    </div>

                    <span class="blog-count h2">{{ $count }}</span>

                    <div class="blog-meta style2">
                        <a href="{{ route('blogs.show', $item['slug']) }}" target="_blank" class="mb-3">
                            {{ $title }}
                        </a>
                        @if($date)
                            <a href="javascript:void(0)" style="color: #fecc52;">{{ $date }}</a>
                        @endif
                    </div>

                    @if($intro)
                        <p class="blog-text">{{ $intro }}</p>
                    @endif

                    <a href="{{ route('blogs.show', $item['slug']) }}" target="_blank" class="link-btn">Know More</a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Keep the decorative shape exactly like your middle section (second block) --}}
    @if($sectionIndex === 1)
        <div class="body-shape1">
            <img src="@assetPath('assets/img/shape/shape_1.png')" alt="shape" />
        </div>
    @endif
</section>
@endforeach


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
