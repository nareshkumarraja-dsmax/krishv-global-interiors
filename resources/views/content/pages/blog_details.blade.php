@extends('layouts.main')

@section('main-container')
<section class="blog-details-section">
    <div class="container">
        <div class="row align-items-center top-block">
            <div class="col-lg-6">
                <h2 class="sec-title mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    {{ $post['title'] ?? 'Blog' }}
                </h2>

                @if(!empty($post['date']))
                    <div class="blog-date">
                        <i class="fa fa-calendar me-2"></i>
                        {{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}
                    </div>
                @endif

                <div class="blog-social-icons mt-3">
                        <a href="https://www.facebook.com/krishvglobalinteriors" class="social-icon" target="_blank" rel="noopener">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/krishvglobalinteriors/" class="social-icon" target="_blank" rel="noopener">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/krishvglobalinteriors" class="social-icon" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.youtube.com/@krishvglobalinteriors" class="social-icon" target="_blank" rel="noopener">
                            <i class="fas fa-share-alt me-1"></i>
                        </a>
                </div>
            </div>

            <div class="col-lg-6 text-end">
                @if(!empty($post['image']))
                    <img src="@assetPath($post['image'])" alt="{{ $post['title'] ?? '' }})" class="img-fluid rounded-4 shadow" />
                @endif
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                @if(!empty($post['intro']))
                    <p class="policy-top">{{ $post['intro'] }}</p>
                @endif

                <div class="policy-content">
                    @foreach(($post['sections'] ?? []) as $section)
                        <div class="sec-policy">
                            <h6 class="policy-title">{{ $section['heading'] ?? '' }}</h6>
                            {!! $section['html'] ?? '' !!}
                        </div>
                    @endforeach

                    @if(!empty($post['footer']))
                        <p class="blog-footer">{{ $post['footer'] }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
