@extends('layouts.webSite')
@section('title', 'About Us')
@section('content')

<div class="information-page-slider">
    <div class="information-content">
        <h1><a href="{{ url('/') }}">Home</a><span>About Us</span></h1>
    </div>
</div>
<div id="about">
    <div class="default-content pt-5 pb-3">
        <div class="custom-container">
            <div class=" pb-3">
                <h1 class="text-center" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">About <span style="color:green">Us</span> </h1>
            </div>
            <div class="midd-content">
                <p class="text-justify" data-aos="fade-up">
                    {!! $about_us_page_text ?? 'At Adiyogi Global, we are committed to delivering healthy, high-quality products to people around the
                    world. For over 12 years, we have built a reputation as a trusted provider by sourcing only the finest
                    goods directly from the best farmers and manufacturers in India. Our dedication to quality is reflected in
                    every product we offer, from fresh produce to a wide range of specialty items.
                    Our journey is rooted in a deep belief that everyone deserves access to products crafted with care and
                    responsibility. By working closely with our suppliers, we ensure that every product meets the highest
                    standards of purity and freshness. We take pride in bringing India’s rich agricultural heritage and
                    manufacturing expertise to the global market, offering products that consistently exceed expectations.
                    Customer trust is the foundation of Adiyogi Global. We are committed to earning and maintaining this
                    trust through transparency, integrity, and exceptional service. From your first interaction with us, we
                    aim to provide a seamless and satisfying experience.
                    As we continue to grow, our focus remains on quality, trust, and customer care. We are proud of our
                    journey and excited about the future, always striving to bring the best of India to the world. Thank you
                    for choosing Adiyogi Global.' !!}
                </p>
            </div>
        </div>
    </div>

    <div id="philosophy" class="container" style="margin-top: 50px;">
  <div class="custom-container">
 <div class="site-title pb-5">
      <h1 class="text-center" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">Our <span style="color:green">Foundation</span></h1>
    </div>
</div>
  

<div class="card-container">
    <div class="card ">
      <img src="{{ $phylosophy_image1 ?? 'https://dparch.co.in/website/uploads/WesiteElements/file_1753796204VALUE.jpg'}}" alt="Nature">
      <div class="card-body">
        <p class="card-text">{!! $phylosophy_content1 ?? "This is a longer card with supporting text below as a natural lead-in to additional content.This is a longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a natural lead-in to additional content."!!}</p>
      </div>
    </div>

    <div class="card">
      <img src="{{ $phylosophy_image2 ?? 'https://dparch.co.in/website/uploads/WesiteElements/file_1753795861VISION.jpg'}}" alt="Technology">
      <div class="card-body">
        <p class="card-text">{!! $phylosophy_content2 ?? "This card has supporting text below as a natural lead-in to additional content." !!}</p>
      </div>
    </div>

    <div class="card">
      <img src="{{ $phylosophy_image3 ?? 'https://dparch.co.in/website/uploads/WesiteElements/file_1753796170MISSION.jpg'}}" alt="Adventure">
      <div class="card-body">
        <p class="card-text">{!! $phylosophy_content3 ?? "This is a wider card with supporting text below as a natural lead-in to additional content."!!}</p>
      </div>
    </div>
</div>
</div>
<style>
  /* --- Card Container Styling (for layout and responsiveness) --- */
.card-container {
    display: grid; /* Use CSS Grid for responsive layout */
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Cards will adapt to screen size, min 280px wide */
    gap: 30px; /* Space between cards */
    padding: 20px; /* Padding around the entire card section */
    max-width: 1200px; /* Max width for the container */
    margin: 0 auto; /* Center the container on the page */
}
@media (max-width: 639px) {
  .card img {
    padding: 10px;
  }
}
/* --- Base Card Styling --- */
.card {
    background-color: #fff;
    border-radius: 12px; /* Soft rounded corners for the card */
    overflow: hidden; /* Crucial for clipping the image when it scales */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle initial shadow */
    display: flex; /* Use flexbox to organize image and body vertically */
    flex-direction: column;
    height: 100%; /* Ensures cards in a grid/flex layout maintain consistent height */
    cursor: pointer; /* Indicates it's interactive */

    /* For 3D effect: Sets up a 3D rendering context */
    transform-style: preserve-3d;
    transform: perspective(1000px); /* Gives a sense of depth */

    /* Smooth transitions for all hover effects */
    transition: transform 0.4s ease-out, box-shadow 0.4s ease-out;
}

/* --- Card Image Styling --- */
.card img {
    width: 100%;
    height: 200px; /* Fixed height for consistent image size, adjust as needed */
    object-fit: cover; /* Ensures images cover the area without distortion */
    object-position: center;
    display: block;
    border-top-left-radius: 12px; /* Match card's top border-radius */
    border-top-right-radius: 12px; /* Match card's top border-radius */

    /* Smooth transition for the image zoom effect */
    transition: transform 0.4s ease-out;
}

/* --- Card Body Styling --- */
.card .card-body {
    padding: 20px;
    flex-grow: 1; /* Allows the body to take up available space, pushing content nicely */
    display: flex;
    flex-direction: column;
}

.card .card-text {
    color: #555;
    line-height: 1.6;
    font-size: 0.95rem;
    /* You can add text overflow ellipsis here if text content is very long */
}

/* --- 3D Hover Effect for the Card --- */
.card:hover {
    /* Lift the card up and slightly forward */
    transform: translateY(-12px) rotateX(2deg) scale(1.02);
    /* Make the shadow larger and more diffused for a "lifted" 3D look */
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    z-index: 1; /* Bring the hovered card slightly to the front if cards are close */
}

/* --- Optional: Subtle Image Zoom within the Hovered Card --- */
.card:hover img {
    transform: scale(1.05); /* The image zooms slightly more than the card itself */
}

/* --- Responsive Adjustments (for smaller screens) --- */
@media (max-width: 768px) {
    .card-container {
        grid-template-columns: 1fr; /* Stack cards vertically on small screens */
        
    }
}
</style>

</div>
@endsection
