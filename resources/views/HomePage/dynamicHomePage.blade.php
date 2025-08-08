@extends('layouts.webSite')
@section('title', 'RN Communication ')
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
<section class="our-service pt-5 pb-5">
    <div class="custom-container">
        <div class="section-heading mb-4">
            <h2 class="text-center">Why choose us</h2>
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
</section>
<!-- Why Choose Us Section Ends -->


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
            font-weight: 600;
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
            font-size: 2.5rem;
            color: #007bff;
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

    <section class="newsletter-section py-5">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>

        <div class="container newsletter-content">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="newsletter-icon fade-in-up">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3 class="newsletter-title mb-3 fade-in-up">Subscribe to Our Newsletter</h3>
                    <p class="newsletter-subtitle mb-4 text-muted fade-in-up">Stay updated with our latest news and updates.</p>

                    <form class="newsletter-form row g-3 justify-content-center fade-in-up" id="newsletterForm">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Enter your email" required id="emailInput">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-subscribe w-100">
                                <i class="fas fa-paper-plane me-2"></i>Subscribe
                            </button>
                        </div>
                    </form>

                    <!-- Captcha Section -->
                    <div class="captcha-section mt-4 fade-in-up" style="animation-delay: 1s;">
                        <div class="row g-2 justify-content-center align-items-end">
                            <div class="col-md-4">
                                <label for="captcha" class="form-label text-start d-block">Enter Captcha</label>
                                <input type="text" class="form-control" id="captcha" name="captcha"
                                       placeholder="Enter captcha code" required>
                            </div>
                            <div class="col-md-3">
                                <div class="captcha-display bg-light  p-1 text-center">
                                    <span id="captcha-code" class="fw-bold fs-4 text-primary font-monospace">A3B7K</span>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-primary captcha-refresh-btn" onclick="refreshCaptcha()" title="Refresh Captcha">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

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

