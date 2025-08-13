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
<style>
/* Gallery container */
.gallery-container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Gallery item */
.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
}

.gallery-item img {
  display: block;
  width: 100%;
  transition: transform 0.3s ease;
}

.gallery-item:hover img {
  transform: scale(1.05);
}

/* Overlay on hover */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  opacity: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.3s ease;
  color:white;
}

.gallery-item:hover .overlay {
  opacity: 1;
}

/* Search icon */
.overlay i {
  color: #ccc; /* default color */
  font-size: 2rem;
  cursor: pointer;
  position: relative;
}

.overlay i:hover {
  color: white;
}

/* Popup overlay */
.image-popup {
  display: none;
  position: fixed;
  z-index: 9999;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.8);
  justify-content: center;
  color: white;
  align-items: center;
}

/* Popup content */
.popup-content {
  position: relative;
  background: white;
  padding: 10px;
  border-radius: 8px;
  width: 90%;
  height: 90%;
}

.popup-content img {
  width: 100%;
  height: 100%;
}
@media (max-width: 576px) {
  .popup-content img{
    max-width:100%;
    max-height:auto;
  }
  .popup-content {
    width: 100%;
    height: auto;
  }
}

/* Close button */
.close-btn {
  position: absolute;
  top: -15px;
  right: -15px;
  background: red;
  color: white;
  border: none;
  border-radius: 50%;
  width: 35px;
  height: 35px;
  font-size: 20px;
  cursor: pointer;
}

</style>


<div class="container py-5 gallery-container">
  <div class="row">
    <div class="col-6 col-md-3 gallery">
      <div class="gallery-item">
        <img src="https://damassets.autodesk.net/content/dam/autodesk/draftr/28447/3d-modelling-works-thumb-1172x660.jpg" alt="">
        <div class="overlay" onclick="showPopup(this.previousElementSibling.src)">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-3 gallery">
      <div class="gallery-item">
        <img src="https://damassets.autodesk.net/content/dam/autodesk/images/solutions/3d-design-software/3d-cad-software-thumb-600x300.png" alt="">
        <div class="overlay" onclick="showPopup(this.previousElementSibling.src)">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-3 gallery">
      <div class="gallery-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTDWWQ_7p6TUW983Jp3-C-WS39NzUqa9aoFQ&s" alt="">
        <div class="overlay" onclick="showPopup(this.previousElementSibling.src)">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-3 gallery">
      <div class="gallery-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTG6rjSwa1LWuvRX_tEhjMIqncTX0Z-MvSZQ&s" alt="">
        <div class="overlay" onclick="showPopup(this.previousElementSibling.src)">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup -->
<div class="image-popup" id="imagePopup">
  <div class="popup-content">
    <button class="close-btn" onclick="closePopup()">×</button>
    <img id="popupImage" src="" alt="Full Image">
  </div>
</div>

<script>
function showPopup(imageSrc) {
  document.getElementById('popupImage').src = imageSrc;
  document.getElementById('imagePopup').style.display = 'flex';
  history.pushState(null, '', '/services');
}

function closePopup() {
  document.getElementById('imagePopup').style.display = 'none';
  history.pushState(null, '', '/services');
}
</script>

<style>

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
