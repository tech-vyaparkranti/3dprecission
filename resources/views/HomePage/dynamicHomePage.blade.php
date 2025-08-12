@extends('layouts.webSite')
@section('title', '3dprecission ')
@section('content')
    {{-- @include('include.navigation') --}}
    @include('include.slider')

    <!-- aboutus Section -->
    <div class="destinations pt-5 pb-2">
    <div class="custom-container">
        <div class="col-12 mb-4 offerings-container">
            <div class="">
                <h1 class="text-start" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">About <span style="color:green">Us</span></h1>
            </div>

            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-7 col-md-12 mb-3 mb-lg-0">
                    <div class="offerings-content">
                        <p class="text-justify">
                            {!! $home_about_content ?? 
                            'Adiyogi Global is dedicated to providing healthy, high-quality products to customers worldwide. With
                            over 12 years of experience, we source the finest goods directly from top farmers and manufacturers
                            across India. Our commitment to quality and transparency ensures that every product meets the highest
                            standards of purity and freshness. We take pride in earning the trust of our customers through
                            exceptional service and a deep dedication to their well-being. At Adiyogi Global, we bring the best of
                            India to the world, always prioritizing quality and care. Customer trust is the foundation of Adiyogi
                            Global. We are committed to earning and maintaining this trust through transparency, integrity, and
                            exceptional service. From your first interaction with us, we aim to provide a seamless and satisfying
                            experience.' 
                            !!}
                        </p>
                        <button style="background:linear-gradient(135deg, #ff6b35, #f7931e);padding:10px 25px;color:black;border:1px solid white;">Read More</button>
                    </div>
                </div>

                <!-- Image -->
<div class="col-lg-5 col-md-12 text-center" data-aos="fade-right">
    <div class="offerings-figure pro-3d-effect" style="">
        <img src="{{ asset($home_about_image ?? './assets/img/Random Pics.jpeg') }}" 
             class="img-fluid rounded shadow" 
             alt="Bikaner">
    </div>
</div>

            </div>
        </div>
    </div>
</div>

   <style>
    /* Container styling */
.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 20px;
  max-width: 1250px;
  margin: 0 auto;
  box-sizing: border-box;

}

/* Card setup */
.card {
  width: 100%;
  aspect-ratio: 4 / 4;
  perspective: 1000px; /* Required for 3D effect */
}

/* Inner wrapper that rotates */
.card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s ease-in-out;
  transform-style: preserve-3d;
}

/* Rotate the whole inner on hover */
.card:hover .card-inner,
.card:focus-within .card-inner {
  transform: rotateY(180deg);
  cursor: pointer;
}

/* Front & back */
.card-front,
.card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 15px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  text-align: center;
  box-sizing: border-box;
}

/* Front side */
.card-front {
  background: white;
  color: #333;
}

/* Back side */
.card-back {
  background: #ff6b35;
  color: white;
  transform: rotateY(180deg);
}

/* Responsive tweaks */

/* Medium devices (tablets, small laptops) */
@media (max-width: 1024px) {
  .card-container {
    padding: 30px 20px;
    gap: 18px;
  }
}

/* Small devices (phones in landscape) */
@media (max-width: 768px) {
  .card-container {
    padding: 20px 15px;
    gap: 15px;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  }
  .card {
    aspect-ratio: 3 / 4;
  }
}

/* Extra small devices (phones portrait) */
@media (max-width: 480px) {
  .card-container {
    padding: 15px 10px;
    gap: 12px;
    grid-template-columns: 1fr;
    width: 100%;
    max-width: 100%;
  }
  .card {
    aspect-ratio: auto; /* let height adjust based on content */
    min-height: 320px;  /* minimum height for usability */
  }
  .card-front img,
  .card-back img {
    width: 50px !important;
    margin-bottom: 12px !important;
  }
  .card-front h3,
  .card-back h3 {
    font-size: 1.1rem;
  }
  .card-front p,
  .card-back p {
    font-size: 0.9rem;
    padding: 0 5px;
  }
}

/* Accessibility: focus state for keyboard users */
.card:focus-within {
  outline: 2px solid #4cafef;
  outline-offset: 4px;
}

</style>

<div class="card-container" >
  <!-- Card 1 -->
  <div class="card">
    <div class="card-inner">
      <div class="card-front">
     <i class="fa-solid fa-people-group" style="font-size:70px;color:#ff6b35"></i>  
      <h3 style="font-size:17px;font-weight:bold">Seamlessly integrated feature</h3>
        <p>Supports the team members and focuses on giving quality services...</p>
      </div>
      <div class="card-back">
        <p>This feature ensures teamwork efficiency, streamlined communication, and productivity.</p>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card">
    <div class="card-inner">
      <div class="card-front">
       <i class="fa-solid fa-people-group" style="font-size:70px;color:#ff6b35"></i>
      <h3 style="font-size:17px;font-weight:bold">Advanced Analytics</h3>
        <p>Provides in-depth reports to track performance and growth...</p>
      </div>
      <div class="card-back">
        <p>Analyze trends, measure KPIs, and optimize your strategy for success.</p>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card">
    <div class="card-inner">
      <div class="card-front">
     <i class="fa-solid fa-people-group" style="font-size:70px;color:#ff6b35"></i>
             <h3 style="font-size:17px;font-weight:bold">Cloud Integration</h3>
        <p>Access your data securely from anywhere in the world...</p>
      </div>
      <div class="card-back">
        <p>Seamless cloud sync keeps your projects and team updated in real-time.</p>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="card">
    <div class="card-inner">
      <div class="card-front">
   <i class="fa-solid fa-people-group" style="font-size:70px;color:#ff6b35"></i>
        <h3 style="font-size:17px;font-weight:bold">Customer Support</h3>
        <p>Round-the-clock assistance for all your needs...</p>
      </div>
      <div class="card-back">
        <p>Our 24/7 support ensures your business runs without interruption.</p>
      </div>
    </div>
  </div>
</div>

   <!-- Destinations Section -->
<style>
/* Swiper slide base */
.swiper-slide .hover-overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0;
  background: #ff6b35; /* orange */
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;
  font-weight: 600;
  font-size: 1.1rem;
  white-space: nowrap;
  overflow: hidden;
  border-radius: 8px;
  
  opacity: 0;
  pointer-events: none;

  transition:
    width 0.4s ease,
    opacity 0.4s ease;
  z-index: 10;
}

.swiper-slide:hover .hover-overlay {
  width: 100%;
  opacity: 1;
  pointer-events: auto;
}

</style>

<div class="destinations pt-5 pb-4" data-aos="fade-up">
  <div class="custom-container">
    <div class="pb-4">
      <h1 class="text-center" style="font-family:'Playfair Display', serif; font-weight:500; color:#ff6b35;">
        Our <span style="color:green">Services</span>
      </h1>
    </div>

    <div class="swiper we-offer">
      <div class="swiper-wrapper">

        @if ($home_products->count())
          @foreach ($home_products as $item)
            <div class="swiper-slide">
              <div class="destinations-block">
                <div class="destinations-figure">
                  <img src="{{ asset($item->image) }}" class="img-fluid" alt="Destinations" />
                </div>
                <span class="destinations-title mh-auto text-center" style="background:#ff6b35 ; margin:0px;padding:20px;color:white">{{ $item->heading_top }}</span>

                <!-- Hover overlay content -->
                <div class="hover-overlay">
                  More details about <br> {{ $item->heading_top }}
                </div>
              </div>
            </div>
          @endforeach
        @else
          <!-- Example fallback slides with hover overlay -->
          <div class="swiper-slide">
            <div class="destinations-block">
              <div class="destinations-figure">
                <img src="./assets/img/Basmati rice.jpeg" style="" class="img-fluid" alt="Destinations" />
              </div>
              <span class="destinations-title mh-auto text-center" style="background:#ff6b35 ; margin:0px;padding:20px;color:white">Basmati Rice</span>
              <div class="hover-overlay">
                More details about <br> Basmati Rice
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destinations-block">
              <div class="destinations-figure">
                <img src="./assets/img/Ground Spice.jpg" class="img-fluid" alt="Destinations" />
              </div>
              <span class="destinations-title mh-auto text-center" style="background:#ff6b35 ; margin:0px;padding:20px;color:white">Ground Spices</span>
              <div class="hover-overlay">
                More details about <br> Ground Spices
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destinations-block">
              <div class="destinations-figure">
                <img src="./assets/img/Ground Spice.jpg" class="img-fluid" alt="Destinations" />
              </div>
              <span class="destinations-title mh-auto text-center" style="background:#ff6b35 ; margin:0px;padding:20px;color:white">Ground Spices</span>
              <div class="hover-overlay">
                More details about <br> Ground Spices
              </div>
            </div>
          </div>
          <!-- Add other fallback slides similarly -->
        @endif

      </div>

      <div class="swiper-pagination"></div>
    </div>

  
  </div>
</div>
<!-- Destinations Section End -->


     <!-- Destinations Section -->
      <!-- <div class="destinations pt-5 pb-2">
        <div class="custom-container">
            <div class="site-title pb-0">
                <h2 class="text-center">Glimpse of Product</h2>
                <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/chilli.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Chilli</span>
                            </div>
            <p class="text-center">Embark on unforgettable journeys to exotic destinations with our expertly crafted travel experiences.</p> --}}
            </div>
            <div class="swiper glimpse">
                <div class="swiper-wrapper">
                    @if (!empty($getAllProduts))
                        @foreach ($getAllProduts as $product)
                            <div class="swiper-slide mb-4">
                                <div class="destinations-block">
                                    <div style="width: auto;height: 150px; overflow: hidden;">
                                        <img src="{{ url($product->p_img) }}" class="img-fluid"
                                        alt="{!! $product->p_name !!}" style="width: 100%;height: 100%; object-fit: cover;">
                                    </div>
                                    <span class="destinations-title mh-auto text-center">{!! $product->p_name !!}</span>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/chilli.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Chilli</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/Wheat.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Wheat</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/tomato.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Tomato</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/main-peas.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Peas</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/Paddy.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Paddy</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/Vermicompost.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Vermicompost</span>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div> --> 
    <!-- Destinations Section End -->

    <!-- {{-- Testimonial Section  --}}
    <section class="testimonial pt-5 pb-4">
        <div class="custom-container">
            <div class="site-title pb-3">
                <h2 class="text-center">Testimonial</h2>
                <p class="text-center text-white">Include quotes or stories from farmers who have benefited from <b>KRISHIDHA FPO's</b> services.</p>
            </div>
            <div class="swiper testimonials mb-5">
                <div class="swiper-wrapper" id="testimonialsData">

   @if(isset($testimonial))
   @foreach ($testimonial as $testimonialValue)

   <div class="swiper-slide">
    <div class="testimonials-block text-center">
        <div class="testimonials-title"><?=$testimonialValue->client_name?><span> </span></div>
        <p class="text-justify"><?=$testimonialValue->review_text?></p>
    </div>
</div>
@endforeach
@endif
</div>
</div>
 Why Choose Us Section Starts -->
<section class="industries">
  <!-- Black overlay -->
  <div class="bg-overlay"></div>

  <h2 class="section-title">Industries We <span style="color:green">Serve</span></h2>
  
  <div class="industries-grid">
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/telecommunicationss.png"/>
      <p>Telecom</p>
    </div>
    <div class="industry-item">
       <img class="icon-bounce" src="./assets/img/airplane.png"/>
     <p>Aerospace</p>
    </div>
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/factory.png"/>
      <p>Automobile</p>
    </div>
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/worker (1).png"/>
      <p>Construction</p>
    </div>
    <div class="industry-item">
       <img class="icon-bounce" src="./assets/img/electric-factory.png"/>
     <p>Manufacturing</p>
    </div>
    <div class="industry-item">
     <img class="icon-bounce" src="./assets/img/oil-pump.png"/>
       <p>Oil and Gas</p>
    </div>
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/truck.png"/>
      <p>Logistics</p>
    </div>
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/telecommunicationss.png"/>
      <p>Print</p>
    </div>
    <div class="industry-item">
     <img class="icon-bounce" src="./assets/img/electric-vehicle.png"/>
       <p>Power</p>
    </div>
    <div class="industry-item">
     <img class="icon-bounce" src="./assets/img/cruise-ship.png"/>
       <p>Marine</p>
    </div>
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/telecommunicationss.png"/>
      <p>Steel</p>
    </div>
    <div class="industry-item">
      <img class="icon-bounce" src="./assets/img/laboratory.png"/>
      <p>Chemical</p>
    </div>
  </div>
</section>

<style>
.industries {
  position: relative;
  text-align: center;
  padding: 50px 20px;
  background: url('https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg') no-repeat center center;
  background-size: cover;
  background-attachment: fixed;
  z-index: 1;
}

.bg-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* Black opacity */
  z-index: -1;
}

.section-title {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 40px;
  color: #fff;
  position: relative;
}

.industries-grid {
  max-width: 1250px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 30px;
  background: rgba(255, 255, 255, 0.9);
  padding: 30px;
  border-radius: 10px;
  position: relative;
  z-index: 1;
}

.industry-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  background: #fff;
  border-radius: 8px;
  transition: all 0.3s ease;
  border: 1px solid #eee;
}

.industry-item p {
  margin: 0;
  font-size: 1rem;
  color: #333;
}

.industry-item:hover {
  transform: translateY(-5px);
  border-color: #4a3aff;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

@keyframes upDown {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

.icon-bounce {
  display: inline-block;
  animation: upDown 1s infinite ease-in-out;
}

@media (max-width: 768px) {
  .industries-grid {
    gap: 20px;
    padding: 20px;
  }
}

@media (max-width: 480px) {
  .section-title {
    font-size: 1.5rem;
  }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- 
<section class="our-service pt-5 pb-5">
    <div class="custom-container">
        <div class="section-heading mb-4">
            <h1 class="text-center" style="color:#ff6b35;font-family:'Playfair Display', serif">Why Choose <span style="color:green"> Us ?</span></h1>
        </div>
        <div class="row" id="ourServices">
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-sliders"></i></div>
                    <div class="our-content">
                        <p class="mb-0 text-center">Audio-Video Support</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-award"></i></div>
                    <div class="our-content">

                        <p class="mb-0 text-center">Live Streaming</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-regular fa-star"></i></div>
                    <div class="our-content">

                        <p class="mb-0 text-center">Event Management - Townhall</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-headphones"></i></div>
                    <div class="our-content">

                        <p class="mb-0 text-center">Audio-Video Rentals</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-fire"></i></div>
                    <div class="our-content">

                        <p class="mb-0 text-center">Onsite Support</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-wallet"></i></div>
                    <div class="our-content">

                        <p class="mb-0 text-center">Specialized AV Solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Why Choose Us Section Ends -->

<section class="why-choose-us py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="font-family: 'Playfair Display', serif;color:#ff6b35">
        Why <span style="color:green">Choose Us</span>
      </h2>
      <p class="text-muted">We combine innovation, quality, and dedication to deliver exceptional results.</p>
    </div>

    <!-- 4 Cards in One Row -->
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4">
          <i class="bi bi-award-fill text-primary"></i>
          <h5 class="mt-3">Experienced Team</h5>
          <p class="text-muted">Our experts bring years of industry knowledge to deliver excellence.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4">
          <i class="bi bi-graph-up-arrow text-success"></i>
          <h5 class="mt-3">Proven Results</h5>
          <p class="text-muted">A track record of measurable growth and success for our clients.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4">
          <i class="bi bi-lightbulb-fill text-warning"></i>
          <h5 class="mt-3">Innovative Solutions</h5>
          <p class="text-muted">Creative and tech-driven approaches to complex challenges.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4">
          <i class="bi bi-people-fill text-danger"></i>
          <h5 class="mt-3">Customer Focused</h5>
          <p class="text-muted">Your satisfaction is our priority, and we go the extra mile to achieve it.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* 3D Animation Setup */
.why-choose-us {
  background: #f9f9f9;
  perspective: 1000px;
}

.feature-card {
  background: #fff;
  border-radius: 15px;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  transform-style: preserve-3d;
  cursor: pointer;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.feature-card i {
  font-size: 3rem;
  display: inline-block;
  transition: transform 0.4s ease;
}

/* Hover Card 3D Effect */
.feature-card:hover {
  transform: rotateY(10deg) rotateX(5deg) scale(1.05);
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

/* Infinite Up-Down Icon Animation ONLY on Hover */
@keyframes iconUpDown {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.feature-card:hover i {
  animation: iconUpDown 0.8s infinite ease-in-out;
  color: #ff6b35 !important;
}

.feature-card h5 {
  font-weight: bold;
}
.feature-card p {
  font-size: 0.95rem;
  color: #555;
}
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">



<!-- Testimonial Section -->
<section class="testimonial-section ">
  <div class="container text-center">
    <h2 class="fw-bold" style="font-family: 'Playfair Display', serif; margin-bottom: 40px; color: #fff !important;">
      What People <span>Say About Us?</span>
    </h2>

    <!-- Swiper Container -->
    <div class="swiper testimonial-slider">
      <div class="swiper-wrapper">
        <!-- Testimonial 1 -->
        <div class="swiper-slide" style="display: flex; justify-content: center; align-items: center;">
          <p class="testimonial-text">
            “I got an exact solution for my CMM inspection report from here. I got an exact solution for my CMM inspection report from here. T I got an exact solution for my CMM inspection report from here. T I got an exact solution for my CMM inspection report from here. TThe employees are very good and supportive. They completed my work on time. Scanotech Informatics is the best scanning company I have ever seen.”
          </p>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide" style="  display: flex !important;
  justify-content: center !important;
  align-items: center !important;">
          <p class="testimonial-text">
            “Exceptional service and attention to detail. They really care about delivering top-quality results.”
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div class="swiper-slide" style="  display: flex !important;
  justify-content: center !important;
  align-items: center !important;">
          <p class="testimonial-text">
            “Professional team and quick turnaround. I recommend them without hesitation.”
          </p>
        </div>
      </div>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- Swiper CSS -->

<style>
/* Section Background */
.testimonial-section {
  display: flex !important;
  flex-direction: column !important; /* stack title + slider vertically */
  align-items: center !important;
  min-height: 300px !important; /* increased height */
  padding: 40px 20px !important; /* more padding */
  background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)),
    url('https://cdn.pixabay.com/photo/2023/08/07/10/45/bird-8172910_1280.jpg') center/cover no-repeat !important;
  box-sizing: border-box !important;
}

/* Swiper Slide Centering */


/* Testimonial Text */
.testimonial-text {
  max-width: 900px !important;
  color: #fff !important;
  font-size: 15px !important;
  line-height: 1.6 !important;
  padding: 0 15px 30px 15px !important; /* bottom padding creates space before pagination */
}

/* Pagination Dots */
.swiper-pagination {
  margin-top: 15px !important; /* extra space from text */
  display: flex !important;
    justify-content: center !important;
}

.swiper-pagination-bullet {
  width: 12px !important;
  height: 12px !important;
  background: orange !important;
  border: 2px solid white !important;
  border-radius: 50% !important;
  opacity: 1 !important;
}

.swiper-pagination-bullet-active {
  background: white !important;
  border: 2px solid orange !important;
}

</style>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.testimonial-slider', {
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
</script>




<!-- Swiper CSS -->
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
/* ========================
   "Our Clients" Section Only
======================== */
.clients-section {
  padding: 20px 0; /* reduced padding */
  text-align: center;
height:300px;
}

.clients-section .section-title {
  font-size: 2rem;
  font-weight: bold;
}

.clients-section .green-text {
  color: green;
}

.clients-section .blue-text {
  color: #1e2a8a;
}

/* Container fixed width */
.clients-section .clients-container {
  max-width: 1250px;
  margin: 0 auto;
}

/* Swiper slide style */
.clients-section .clients-slider .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
   
    box-sizing: border-box; /* ensures padding doesn't affect width */
    height: 100px; /* full height of the section */
  
}

/* Logo style */
.clients-section .clients-slider .swiper-slide img {
  width: 250px;
  height: 120px;
  border: 1px solid #ddd;
  background: white;

  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  display: block; /* removes default image inline gap */
}

</style>

<section class="clients-section">
  <div class="clients-container">
    <h1 class="" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500;margin-bottom: 50px;">
      Our <span style="color:green">Client</span>
    </h1>

    <!-- Swiper -->
    <div class="swiper clients-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="data:image/png;base64,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" alt="Motherson" />
        </div>
        <div class="swiper-slide">
          <img src="data:image/png;base64,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" alt="Honda" />
        </div>
        <div class="swiper-slide">
          <img src="data:image/png;base64,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" alt="JBM Group" />
        </div>
        <div class="swiper-slide">
          <img src="data:image/png;base64,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" alt="BHEL" />
        </div>
        <div class="swiper-slide">
          <img src="data:image/png;base64,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" alt="Extra Client" />
        </div>
      </div>

      <!-- Navigation buttons -->
    
    </div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.clients-slider', {
  loop: true,
  slidesPerView: 5, // adjust for desktop
  spaceBetween: 5, // your required gap
  autoplay: {
    delay: 2000, // time between slides in ms
    disableOnInteraction: false, // keep autoplay after manual interaction
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1, // small screens
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});
</script>



{{-- new letter --}}
 {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Newsletter Section</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> --}}
    <style>
        .newsletter-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            overflow: hidden;
        }

        .newsletter-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0,123,255,0.05) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .newsletter-content {
            position: relative;
            z-index: 2;
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .newsletter-title {
            font-weight: 500;
            color: #2c3e50;
            animation-delay: 0.2s;
        }

        .newsletter-subtitle {
            animation-delay: 0.4s;
        }

        .newsletter-form {
            animation-delay: 0.6s;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 16px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 4px 12px rgba(0,123,255,0.15);
            transform: translateY(-2px);
        }

        .btn-subscribe {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,123,255,0.3);
        }

        .btn-subscribe:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,123,255,0.4);
            background: linear-gradient(45deg, #0056b3, #004085);
        }

        .newsletter-icon {
            font-size: 1.6rem;
            color: #ff6b35;
            margin-bottom: 1rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .privacy-text {
            animation-delay: 0.8s;
            transition: color 0.3s ease;
        }

        .privacy-text:hover {
            color: #007bff !important;
        }

        .floating-shape {
            position: absolute;
            background: rgba(0,123,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 60px;
            height: 60px;
            top: 20%;
            right: 10%;
            animation-delay: -2s;
        }

        .shape-2 {
            width: 40px;
            height: 40px;
            bottom: 30%;
            left: 15%;
            animation-delay: -4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>

    <section class="newsletter-section py-2">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>

        <div class="container newsletter-content">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="newsletter-icon fade-in-up">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h5 class="newsletter-title  fade-in-up">Subscribe to Our Newsletter</h5>
                    <p class="newsletter-subtitle mb-4 text-muted fade-in-up">Stay updated with our latest news and updates.</p>

                     <form class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-2" id="simpleNewsletterForm" autocomplete="off">
  <input type="email" class="form-control form-control-sm w-100 w-md-auto" placeholder="Your email" id="simpleEmail" required style="max-width:250px;border: 1px solid black;">

  <!-- CAPTCHA canvas -->
  <canvas id="simpleCaptcha" width="100" height="34" style="border-radius:5px; background:#f8f9fa;"></canvas>

  <!-- Refresh button -->
  <button type="button" class="btn btn-outline-secondary btn-sm px-2" style="border: 1px solid black;" onclick="drawSimpleCaptcha()" title="Refresh Captcha">
    <i class="fas fa-sync-alt"></i>
  </button>

  <!-- CAPTCHA input -->
  <input type="text" class="form-control form-control-sm" placeholder="Enter code" id="simpleCaptchaInput" required style="max-width:120px;border: 1px solid black;">
  
  <!-- Subscribe -->
<button class="btn btn-sm subscribe-btn" style="background-color: #ff6b35; color: white; padding:10px 0px; font-size:15px;border-radius:5px;text-align:justify;width:113px" type="submit">
    <i class="fas fa-paper-plane me-1"></i>Subscribe
</button></form>
                    <small class="privacy-text text-muted mt-3 d-block fade-in-up">
                        <i class="fas fa-shield-alt me-1"></i>
                        We respect your privacy. Unsubscribe at any time.
                    </small>
                </div>
            </div>
        </div>
    </section>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        // Captcha functionality
        function refreshCaptcha() {
            const captchaCode = document.getElementById('captcha-code');
           const refreshBtn = document.querySelector('.captcha-refresh-btn');

            // Add spinning animation
            refreshBtn.innerHTML = '<i class="fas fa-sync-alt fa-spin"></i>';

            setTimeout(() => {
                // Generate new captcha code
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                let newCode = '';
                for (let i = 0; i < 5; i++) {
                    newCode += characters.charAt(Math.floor(Math.random() * characters.length));
                }
                captchaCode.textContent = newCode;

                // Clear captcha input
                document.getElementById('captcha').value = '';

                // Reset button
                refreshBtn.innerHTML = '<i class="fas fa-sync-alt"></i>';

                // Add flash effect
                captchaCode.parentElement.style.background = '#e3f2fd';
                setTimeout(() => {
                    captchaCode.parentElement.style.background = '#f8f9fa';
                }, 300);
            }, 500);
        }

        // Form submission animation
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('emailInput').value;
            const captcha = document.getElementById('captcha').value;
            const expectedCaptcha = document.getElementById('captcha-code').textContent;
            const button = this.querySelector('.btn-subscribe');
            const originalText = button.innerHTML;

            // Validate captcha
            if (captcha.toUpperCase() !== expectedCaptcha) {
                // Captcha error animation
                const captchaInput = document.getElementById('captcha');
                captchaInput.style.borderColor = '#dc3545';
                captchaInput.style.boxShadow = '0 0 10px rgba(220,53,69,0.3)';
                captchaInput.focus();

                setTimeout(() => {
                    captchaInput.style.borderColor = '#e9ecef';
                    captchaInput.style.boxShadow = '0 2px 4px rgba(0,0,0,0.05)';
                }, 2000);

                return;
            }

            // Loading animation
            button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Subscribing...';
            button.disabled = true;

            setTimeout(() => {
                // Success animation
                button.innerHTML = '<i class="fas fa-check me-2"></i>Subscribed!';
                button.classList.add('btn-success');
                button.classList.remove('btn-subscribe');

                // Add success shake animation
                button.style.animation = 'pulse 0.5s ease-in-out';

                // Reset form
                document.getElementById('emailInput').value = '';
                document.getElementById('captcha').value = '';
                refreshCaptcha();

                // Reset button after 3 seconds
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                    button.classList.remove('btn-success');
                    button.classList.add('btn-subscribe');
                    button.style.animation = '';
                }, 3000);

            }, 1500);
        });

        // Add intersection observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in-up').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });

        // Add pulse animation keyframe
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);
    </script>

{{-- new letter --}}

        <!-- </div>
    </section> -->
    <!-- <section class="our_partner pt-5 pb-2">
        <div class="custom-container">
            <div class="site-title pb-3">
                <h2 class="text-center">Our Partner</h2>
            </div>
            <div class="row">
                @if(!empty($partnersImages))
                @foreach ($partnersImages as $PartnerRow)
                <div class="col-4">
                    <div style="width:auto;height:150px;overflow:hidden;">
                        <img src="{{ url($PartnerRow->image) }}" alt="deHaat"  class="img-fluid" />
                    </div>
                </div>
                @endforeach
                 @else
                 <div class="col-4">
                    <img src="assets/img/deHaat-logo.png" alt="deHaat" width="200" height="" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="assets/img/amrit.jpg" alt="deHaat" width="200" height="" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="assets/img/guiding.jpg" alt="deHaat" width="200" height="" class="img-fluid" />
                </div>
                 @endif

            </div>
        </div>
    </section> -->
    <!-- {{-- Testimonial Section End  --}} -->
@endsection
<style>
    .about-image{
        display:flex;
    }
    .about-text{
        display:end;
    }

.our_services-title + p {font: 400 14px/normal var(--font-josefin);color: rgb(var(--black-color));}
.our_services-title + p{margin-bottom: 10px; display: -webkit-box;max-width: 100%;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;}

.custom-container, .header-contaner{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}
#ourServices {
    justify-content: center;
}
 .our-block {

    padding: 1rem;
    transition: var(--transition);
    cursor: pointer;
    background-color: #fff;
    position: relative;
    z-index: 0;
    min-height: 100px;
}
.our-block::before {
    transition: var(--transition);
    content: '';
    position: absolute;
    top: 0rem;
    right: 0rem;
    bottom: 0rem;
    left: 0rem;
    background-color: #fff;
    box-shadow: 0px 0px 15px -5px rgb(0 0 0 / 30%);
    z-index: -1;
}
.our-block:hover:before {
    top: -0.4rem;
    right: -0.4rem;
    bottom: -0.4rem;
    left: -0.4rem;
}
.our-block-figure > svg {
    font-size: 30px;
    color: var(--primary-bg);
    transition: var(--transition);
    position: relative;
    left: 0;
    top: 0;
}
.our-block-figure {
    float: left;
    position: relative;
    transition: var(--transition);
}
.our-block-figure::after {
    content: '';
    position: absolute;
    left: -1rem;
    top: -1rem;
    width: calc(100% + 2rem);
    height: calc(100% + 2rem);
    background-color: rgba(1,0,102,255);
    border: 5px solid rgba(1,0,102,255);
    border-bottom-right-radius: 100%;
    transform: scale(0) translate(-100%, -100%);
    transition: var(--transition);
    z-index: -1;
}
.our-block:hover > .our-content h4.our-title{color: rgba(1,0,102,255);font-weight: 700;}
.our-block:hover .our-block-figure > svg {
    color: #fff;
    top: -5px;
    left: -5px;
}
.our-block:hover .our-block-figure::after {
    transform: scale(1) translate(0%, 0%);
}
.our-block:hover {
    border-color:rgba(1,0,102,255) ;
}
 .our-block:hover:before {
    background-color: #fff;
    top: 0rem;
    bottom: 0rem;
    right: 0rem;
    left: 0rem;
}
.our-block > .our-content {
    margin-left: 50px;
    text-align: left;
    margin-top:14px;
}
.our-block > .our-content h4.our-title {
    font: 500 16px/normal var(--lato-font);
    margin-bottom: 10px;
    color: var(--primary-bg);
    transition: var(--transition);
}
.our-content p {
    font-size: 15px;
    line-height: 20px;
}
    </style>

    
@section('script')
    <script>
        let site_url = '{{ url('/') }}';
    </script>
    {{-- <script src="js/homePage.js?v=2"></script> --}}
@endsection

