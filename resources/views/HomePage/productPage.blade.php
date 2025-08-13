@extends('layouts.webSite')
@section('title', $service->heading_top ?? 'Service Details')

@section('content')
<div class="information-page-slider">
    <div class="information-content">
        <h1><a href="{{ url('/') }}">Home</a><span>Services</span></h1>
    </div>
</div>

<div id="about">
    <div class="default-content products-page pt-5 pb-3">
        <div class="custom-container">
            <div class="pb-3">
                <h1 class="text-center" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">
                    Our <span style="color:green">Services</span>
                </h1>
            </div>

            <div class="container">
                <div class="main-content">
                    {{-- LEFT SECTION --}}
                    <div class="content-left">
                        {{-- Dynamic Service Image --}}
                        @if(!empty($service->banner_image))
                        <img src="{{ asset($service->banner_image) }}" alt="{{ $service->heading_top }}" class="main-image">
                        @else
                            <img src="{{ asset('assets/images/default-service.jpg') }}" alt="Service Image" class="main-image">
                        @endif

                        {{-- Dynamic Title --}}
                        <h1 style="color:#ff6b35">{{ $service->heading_top ?? 'Untitled Service' }}</h1>

                        {{-- Dynamic Description --}}
                        <p style="color:black">{!! $service->long_description ?? 'No description available.' !!}</p>
                    </div>

                    {{-- RIGHT SIDEBAR --}}
                    <div class="sidebar-right">
                        <nav class="side-nav">
                            <ul>
                                @if(!empty($allServices) && $allServices->count())
                                    @foreach($allServices as $item)
                                        <li class="{{ $item->id == $service->id ? 'active' : '' }}">
                                            <a href="{{ route('service.details', $item->slug) }}">
                                                {{ $item->heading_top }}
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>No other services found.</li>
                                @endif
                            </ul>
                        </nav>

                        {{-- CONTACT BOX --}}
                        <div class="contact-box">
                            <div class="contact-icon-background">
                                <span class="contact-icon">📞</span>
                            </div>
                            <h3>How Can We Help You?</h3>
                            <p>We can help you providing end-to-end solution as per your requirements. Consult our experts to know more.</p>
                            <div class="contact-details">
                                <p>📞 +91-8010 28 8021</p>
                                <p>📧 info@scanotech-informatics.com</p>
                            </div>
                        </div>
                    </div>
                </div> {{-- main-content --}}
            </div> {{-- container --}}
        </div>
    </div>
</div>

{{-- ===== CSS ===== --}}
<style>
.container { max-width: 1300px; margin: 20px auto; padding: 20px; background-color: #fff; }
.main-content { display: flex; gap: 20px; }
.content-left { flex: 2; }
.main-image { width: 100%; height: 400px; margin-bottom: 20px; object-fit: cover; }
.content-left p { line-height: 1.6; text-align: justify; }
.sidebar-right { flex: 1; }
.side-nav ul { list-style: none; padding: 0; margin: 0; border: 1px solid #ddd; }
.side-nav li { border-bottom: 1px solid #ddd; }
.side-nav li:last-child { border-bottom: none; }
.side-nav a { display: block; padding: 15px 20px; text-decoration: none; color: black; font-size: 0.9em; font-weight: 500; }
.side-nav a:hover { background-color: #ff6b35; color: white; }
.side-nav li.active { background-color: #4CAF50; }
.side-nav li.active a { color: white; }
.contact-box { background-color: #ff6b35; color: white; padding: 20px; margin-top: 20px; text-align: center; border: 1px solid #ddd; }
.contact-icon-background { background-color: #e7f3fe; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; }
.contact-icon { font-size: 24px; color: #3b82f6; }
.contact-details { margin-top: 20px; }
.contact-details p { margin: 5px 0; }
@media (max-width: 768px) { .main-content { flex-direction: column; } .sidebar-right { margin-top: 20px; } }
</style>
@endsection
