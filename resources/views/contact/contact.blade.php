@extends('layouts.app')

@section('content')

    <!-- Sub banner -->
    <section class="banner-con position-relative">
        <div class="swiper-container banner-background-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/images/slide1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide4.jpg');"></div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="banner_content text-center" data-aos="fade-up">
                        <div class="banner-box text-center">
                            <h2 class="text-black">Contact Us</h2>
                            <h3 class="text-dark">Quis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Contact Info -->
<section class="contactinfo-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contactinfo_content text-center" data-aos="fade-up">
                    <h6>Contact Info</h6>
                    <h2>Our Contact Information</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box">
                    <figure class="icon icon1">
                        <img src="./assets/images/contact-icon1.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Our Location</h4>
                    <a href="https://www.google.com/maps/place/MRC+Trips/@34.0215741,-6.8463322,17z/data=!3m1!4b1!4m6!3m5!1s0xda76c71b7fca0d3:0xd292c1e19d6cc119!8m2!3d34.0215741!4d-6.8437573!16s%2Fg%2F11hb72ss1d?entry=ttu&g_ep=EgoyMDI0MTEwNi4wIKXMDSoASAFQAw%3D%3D" 
                        class="text-decoration-none text-size-16 mb-0">Apt 24, Immeuble، 35 Av. du Liban, Rabat 10000
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box">
                    <figure class="icon">
                        <img src="./assets/images/contact-icon2.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Phone Number</h4>
                    <a href="tel:+212661257456" class="mb-0 text-decoration-none text-size-16">(+212 661 257 456)</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box mb-0">
                    <figure class="icon">
                        <img src="./assets/images/contact-icon3.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Our Email</h4>
                    <a href="mailto:contact@mrctrips.com" class="mb-0 text-decoration-none text-size-16">contact@mrctrips.com</a>
                </div>
            </div>         
        </div>
    </div>
</section>
<!-- Contact Form -->
<section class="contactform-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_content" data-aos="fade-up">
                    <h6 class="text-white">Get In Touch</h6>
                    <h2 class="text-white">Send us a Message</h2>
                    <form id="contactpage" method="post" class="position-relative">
                        <div class="form-group input1 float-left">
                            <input type="text" class="form_style" placeholder="Name" name="fname" id="fname">
                        </div>
                        <div class="form-group float-left">
                            <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone">
                        </div>
                        <div class="form-group input1 float-left">
                            <input type="email" class="form_style" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="form-group float-left">
                            <input type="text" class="form_style" placeholder="Subject" name="subject" id="subject">
                        </div>
                        <div class="form-group message">
                            <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" id="submit" class="submit_now text-decoration-none">Send message<i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <figure class="contact-bottomimage mb-0">
        <img src="assets/images/contact-bottomimage.png" alt="image" class="img-fluid">
    </figure>
</section>
<!-- Map -->
<div class="map-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.8689726788584!2d-6.843757299999999!3d34.021574099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c71b7fca0d3%3A0xd292c1e19d6cc119!2sMRC%20Trips!5e0!3m2!1sen!2sma!4v1731256575533!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection