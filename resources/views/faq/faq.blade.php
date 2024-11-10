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
                            <h2 class="text-black">Faq's</h2>
                            <h3 class="text-dark">Nuis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Faq -->
<section class="faq-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="faq_content text-center" data-aos="fade-up">
                    <h6>Faq's</h6>
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="faq" data-aos="fade-up">
            <div class="accordian-section-inner position-relative">
                <div class="accordian-inner">
                    <div id="faq_accordion1">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="accordion-card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <h5>What types of adventure tours do you offer?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h5>Are the tours suitable for beginners?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h5>How can I prepare physically for an adventure tour?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingFour">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <h5>What safety measures are in place?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="accordion-card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <h5>How do I book a tour?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingSix">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <h5>What should I bring on an adventure tour?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingSeven">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <h5>Are meals included in the tour packages?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingEight">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            <h5>Is travel insurance included?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faq_accordion1">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0">Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit 
                                                aut fugit, sed neatae vitae dicta ripiscing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join -->
<section class="join-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="join_content text-center" data-aos="fade-up">
                    <h6 class="text-white">Come & Join Us</h6>
                    <h2 class="text-white">Making Adventure Tours and Activities Accessible and Affordable for Everyone.</h2>
                    <a href="/faq" class="text-decoration-none all_button">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonial_wrapper position-relative" data-aos="zoom-in">
                    <img src="./assets/images/customers.png" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimonial_contentwrapper" data-aos="fade-up">
                    <div class="testimonial_content">
                        <h6>Testimonials</h6>
                        <h2>What Our Customers Have To Say</h2>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut 
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 
                                            sequi nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet, 
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="designation-outer">
                                                <span class="name">Kevin James</span>
                                                <span class="review">Happy Client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut 
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 
                                            sequi nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet, 
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="designation-outer">
                                                <span class="name">Kevin James</span>
                                                <span class="review">Happy Client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-outer">
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fa-solid fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner -->
<section class="partner-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner_content text-center" data-aos="fade-up">
                    <h6>Partners</h6>
                    <h2>Our Trusted Partners</h2>
                </div>
            </div>
            <ul class="list-unstyled mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner1.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner2.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 haus">
                        <img src="./assets/images/partner3.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner4.png" alt="image" class="img-fluid">
                    </figure>
                </li>
            </ul>
            <ul class="list-unstyled second mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner5.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner6.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img src="./assets/images/partner7.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img src="./assets/images/partner8.png" alt="image" class="img-fluid">
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</section>

@endsection