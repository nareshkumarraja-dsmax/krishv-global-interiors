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
                    @if(!empty($post['social']['facebook']))
                        <a href="{{ $post['social']['facebook'] }}" class="social-icon" target="_blank" rel="noopener">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                    @if(!empty($post['social']['instagram']))
                        <a href="{{ $post['social']['instagram'] }}" class="social-icon" target="_blank" rel="noopener">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if(!empty($post['social']['linkedin']))
                        <a href="{{ $post['social']['linkedin'] }}" class="social-icon" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    @endif
                    @if(!empty($post['social']['youtube']))
                        <a href="{{ $post['social']['youtube'] }}" class="social-icon" target="_blank" rel="noopener">
                            <i class="fas fa-share-alt me-1"></i>
                        </a>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 text-end">
                @if(!empty($post['image']))
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] ?? '' }}" class="img-fluid rounded-4 shadow" />
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

        {{-- Optional: related posts --}}
        @if(!empty($posts) && count($posts) > 1)
            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="mb-3">Related Posts</h5>
                </div>
                @foreach(collect($posts)->except($slug)->take(3) as $rSlug => $r)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('blogs.show', $rSlug) }}" class="text-decoration-none">
                            <div class="card h-100 shadow-sm">
                                @if(!empty($r['image']))
                                    <img src="{{ asset($r['image']) }}" class="card-img-top" alt="{{ $r['title'] ?? $rSlug }}">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title">{{ $r['title'] ?? $rSlug }}</h6>
                                    @if(!empty($r['date']))
                                        <div class="text-muted small">
                                            {{ \Carbon\Carbon::parse($r['date'])->format('M j, Y') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
