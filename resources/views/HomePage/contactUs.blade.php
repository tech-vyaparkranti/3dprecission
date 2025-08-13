@extends('layouts.webSite')
@section('title', 'Contact Us')
@section('content')
<div class="information-page-slider">
    <div class="information-content">
        <h1><a href="{{ url('/') }}">Home</a><span>Contact Us</span></h1>
    </div>
</div>
<div id="about">
    <div class="default-content pt-4 pb-5">
        <div class="custom-container">
            <div class="pb-4">
                <h1 class="text-center" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">
                    Contact <span style="color:green">Us</span>
                </h1>
            </div>

            <div class="row d-flex align-items-stretch" style="background:#f2f2f2; border-radius: 10px; padding: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                <!-- Contact Form -->
                <div class="col-md-6 col-sm-12 pt-5 d-flex flex-column">
                    <div class="contact-form-area mb-2 flex-grow-1">
                        <div class="midd-content section-title mb-3">
                            <h3>Get in touch</h3>
                        </div>
                        <form enctype="multipart/form-data" method="POST" id="contactUsForm" action="javascript:">
                            @csrf
                            <input type="hidden" name="country_code" value="" id="country_code_id">

                            <div class="row">
                                <!-- First Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="color:#ff6b35"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="color:#ff6b35"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="color:#ff6b35;"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" required>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 mb-3">
                                    <label for="phone_numbers">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="color:#ff6b35"><i class="fas fa-phone"></i></span>
                                        <input type="tel" pattern="^[1-9][0-9]*$" class="form-control" id="phone_numbers" name="phone_number" placeholder="Phone number" required>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-md-12 mb-3">
                                    <label for="message">Message</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="color:#ff6b35"><i class="fas fa-comment"></i></span>
                                        <textarea class="form-control" id="message" name="message" maxlength="1000" minlength="30" rows="3" placeholder="Your message" required></textarea>
                                    </div>
                                </div>

                                <!-- Captcha -->
                                <div class="col-md-12 mb-3">
                                    <label for="captcha">Captcha</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="color:#ff6b35"><i class="fas fa-shield-alt"></i></span>
                                        <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter captcha" required>
                                    </div>
                                </div>

                                <!-- Captcha Image & Refresh -->
                                <div class="col-md-8 col-sm-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6 pt-4">
                                            <img src="{{ captcha_src() }}" class="img-thumbnail h-100" id="captcha_img_id">
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <button type="button" class="btn default-btn btn-block font-weight-bold" style="background: #ff6b35; border:1px solid white;color:white" onclick="refreshCapthca('captcha_img_id','captcha')">
                                                <i class="fas fa-sync-alt"></i> Refresh
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Terms -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="tnc" required>
                                        <label class="form-check-label" for="tnc">Agree to terms and conditions</label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-md-12">
                                    <button class="default-btn" id="submitButton" type="submit" style="background: #ff6b35; border:1px solid white;padding:8px 30px;border-radius:5px;color:white;">
                                          <i class="fas fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map (Unchanged) -->
                <div class="col-md-6 col-sm-6 col-xs-12 pt-5 d-flex flex-column">
                    <div class="map-area flex-grow-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d224161.5644147442!2d76.85465537192303!3d28.61404008328529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s6%2F13%20%2C%20Pocket%201A%2C%20Sector%201A%2C%20Narela%20-110040!5e0!3m2!1sen!2sin!4v1749790146939!5m2!1sen!2sin"
                            style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.contact-form-area, .map-area {
    height: 100%;
}
.input-group-text {
    background: #f8f9fa;
}
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
