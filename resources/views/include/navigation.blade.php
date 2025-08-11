<div class="sticky-navigation">
    <div class="custom-container">
    <ul class="sticky-content p-0 m-0">
            <li><a href="mailto:{!! $email_2??"support@communicationrn.com" !!}"><i class="fa fa-envelope"></i>&nbsp;<span>{!! $email_2??"info@3dprecission.com" !!}</span></a></li>
            <li><a href="tel:+91{!! isset($contact_us_contact_number)?str_replace(" ","",$contact_us_contact_number):"+919266747031" !!}"><i class="fa fa-phone"></i>&nbsp;<span>{!! $contact_us_contact_number??"+91 926 674 7031" !!}</span></a></li>
        </ul>
        <div class="gtranslate_wrapper"></div>
    </div>
</div> 
<!-- Header section Start -->
<header class="main-header">
    <div class="header-contaner">
        <div class="logo-section">
            <div class="mobile-bars" hidden></div>
            <a href="{{ url('/') }}" aria-level="Main logo"><img src="{{ asset($Logo??"./assets/img/logo.png") }}" class="img-fluid" width="120" height="90" alt="Home Styler"></a>
        </div>
        <div class="slide-navigation">
            <div class="navbar-wrapper">
             <ul class="navbar-block">
    <li>
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
    </li>
    <li>
        <a href="{{ route('aboutUs') }}" class="{{ request()->is('about-us') ? 'active' : '' }}">About Us</a>
    </li>
    <li>
        <a href="{{ route('productPage') }}" class="{{ request()->is('services') ? 'active' : '' }}">Our Services</a>
    </li>
    <li>
        <a href="{{ route('contactUs') }}" class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a>
    </li>
    <li>
        <a href="{{ route('galleryPages') }}" class="{{ request()->is('event') ? 'active' : '' }}">Gallery</a>
    </li>
</ul>
</div>
            <ul class="social-media">
                <li><a href="{!! $facebook_link ?? 'https://www.facebook.com/3dprecission' !!}" aria-label="Read more about 3dprecission  facebook"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="{!! $linkedin_link ?? '/' !!}" aria-label="Read more about 3dprecission  Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="{!! $instagram_link ?? 'https://www.instagram.com/adiyogi_global/' !!}" aria-label="Read more about 3dprecission  Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="{!! $youtube_link ?? 'https://www.youtube.com/@3dprecission' !!}" aria-label="Read more about 3dprecission  Youtube"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</header>
<Style>
    /* Navbar container */


/* Remove default UL styles */
.navbar-block {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  gap: 20px;
}

/* Link styles */
.navbar-block li a {
  position: relative;
  color: #000;
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;
  transition: color 0.3s ease;
  padding: 5px 0;
}

/* Orange text on hover */
.navbar-block li a:hover {
  color: orange;
}

/* Orange underline animation */


.navbar-block li a:hover::after {
  width: 100%;
}

/* Active link stays orange */
.navbar-block li a.active {
  color: orange;
}

.navbar-block li a.active::after {
  width: 100%;
}

</style>