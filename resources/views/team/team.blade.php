@extends('layouts.app')

@section('content')

<!-- Team -->
<section class="team-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="team_content text-center" data-aos="fade-up">
                    <h6>Experienced Team</h6>
                    <h2>Our Travel Experts</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mx-auto">
                <div class="team-box">
                    <figure class="team-image">
                        <img src="./assets/images/team1.jpg" alt="image" class="img-fluid">
                    </figure>
                    <div class="content">
                        <h4>Marvin Joner</h4>
                        <span class="text-size-16">Tour Guide</span>
                        <ul class="list-unstyled mb-0">
                            <li class="icons"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>   
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mx-auto">
                <div class="team-box">
                    <figure class="team-image">
                        <img src="./assets/images/team2.jpg" alt="image" class="img-fluid">
                    </figure>
                    <div class="content">
                        <h4>Patricia Woodrum</h4>
                        <span class="text-size-16">Tour Guide</span>
                        <ul class="list-unstyled mb-0">
                            <li class="icons"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>   
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mx-auto">
                <div class="team-box">
                    <figure class="team-image">
                        <img src="./assets/images/team3.jpg" alt="image" class="img-fluid">
                    </figure>
                    <div class="content">
                        <h4>Hannaz Stone</h4>
                        <span class="text-size-16">Tour Guide</span>
                        <ul class="list-unstyled mb-0">
                            <li class="icons"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
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
                    <a href="./contact.html" class="text-decoration-none all_button">Book Now<i class="fa-solid fa-arrow-right"></i></a>
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