@extends('layouts.webSite')
@section('title', 'Services')
@section('content')
<div class="information-page-slider">
    <div class="information-content">
        <h1><a href="{{ url('/') }}">Home</a><span>Services</span></h1>
    </div>
</div>
<div id="about">
    <div class="default-content products-page pt-5 pb-3">
        <div class="custom-container">
            <div class=" pb-3">
                <h1 class="text-center" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">Our <span style="color:green">Services</span></h1>
                {{-- <p class="text-center pb-3">From basic treks to high-altitude mountaineering expeditions, we cater to adventurers of all levels.</p> --}}
            </div>
    <div class="container">
        <div class="main-content">
            <div class="content-left">
                <img src=">
                <h1 style="color:#ff6b35">2D Drawing Generation</h1>
                <p style="color:black">Scanotech Informatics gives the best 2D drawing generation. We use an advanced feature to make a 2D drawing for our clients. We always want to satisfy the customers need. We are a trustworthy scanning company in the industry area; our experts will make a creative 2D design for our clients. We give a good quality 2D drawing to our clients. By using an advanced and new feature, we make an improvised way of making 2D drawings. We use the best equipment which will give the customer a unique experience. We provide the exact shape and size of the 2D drawing which the client will expect. We never use any other thing that will decrease our work quality to build good trust among the people. The process we are used to making an excellent 2D drawing is unique and new so that it will give you the result of what you want from your 2D drawing.</p>
            </div>
            <div class="sidebar-right">
                <nav class="side-nav">
                    <ul>
                        <li><a href="#">3D Scanning</a></li>
                        <li><a href="#">Reverse Engineering</a></li>
                        <li class="active"><a href="#">2D Drawing Generation</a></li>
                        <li><a href="#">3D Printing/Rapid Prototyping</a></li>
                        <li><a href="#">CMM Inspection</a></li>
                        <li><a href="#">Laser Scanning</a></li>
                        <li><a href="#">Surface Deviation Analysis</a></li>
                        <li><a href="#">Spare Part Design Development</a></li>
                        <li><a href="#">Laser Tracker Service</a></li>
                    </ul>
                </nav>
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
        </div>
    </div>
          
        </div>
    </div>
</div>
<style>
    /* General body styling */

/* Container for the page content */
.container {
    max-width: 1300px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
}

/* Flexbox container for main content */
.main-content {
    display: flex;
    gap: 20px;
}

/* Left content area */
.content-left {
    flex: 2; /* Takes up 2/3 of the space */
}

.main-image {
    width: 100%;
    height: 400px;
    margin-bottom: 20px;
}

.content-left h1 {
    font-size: 2em;
    color: white;
}

.content-left p {
    line-height: 1.6;
    text-align: justify;
}

/* Right sidebar area */
.sidebar-right {
    flex: 1; /* Takes up 1/3 of the space */
}

/* Side navigation menu */
.side-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #ddd;
}

.side-nav li {
    border-bottom: 1px solid #ddd;
}

.side-nav li:last-child {
    border-bottom: none;
}

.side-nav a {
    display: block;
    padding: 15px 20px;
    text-decoration: none;
    color: black;
    font-size: 0.9em;
    font-weight: 500;
}

.side-nav a:hover {
    background-color: #ff6b35;
    color:white;
}

/* Active navigation item */
.side-nav li.active {
    background-color: #4CAF50; /* Green background */
}

.side-nav li.active a {
    color: white; /* White text */
}

/* Contact box styling */
.contact-box {
    background-color: #ff6b35;
    color:white;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    border: 1px solid #ddd;
}

.contact-icon-background {
    background-color: #e7f3fe;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.contact-icon {
    font-size: 24px;
    color: #3b82f6;
}

.contact-box h3 {
    margin-bottom: 15px;
}

.contact-details {
    margin-top: 20px;
    text-align: center
}

.contact-details p {
    margin: 5px 0;
}


/* Responsive Design: Stacks columns on smaller screens */
@media (max-width: 768px) {
    .main-content {
        flex-direction: column;
    }

    .sidebar-right {
        margin-top: 20px;
    }
}
</style>



<style>
     .contact-form-area button[data-bs-dismiss="modal"],
    .service-page .destinations-block a {
        position: absolute;
        bottom: 0;
        top: calc(100% - 45px);
        right: 0;
        left: calc(100% - 45px);
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        color: #fff;
        background-color: rgb(var(--red-color));
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        z-index: 1;
    }
    .offerings-content-inner a {
        padding: 8px 15px;
        border-radius: 25px;
        background-color: var(--brown-color);
        color: #fff;
    }
    .offerings-content-inner a:hover{
        color:#fff;
    }
    .contact-form-area button[data-bs-dismiss="modal"] {
        position: absolute;
        top: 10px;
        right: 10px !important;
        left: auto;
        color:red;
    }
    .contact-form-area.pt-4 {
    padding: 20px;
}
    </style>
@endsection
