<html>
  <head>
      <title>MRC TRIPS</title>
      <!-- /SEO Ultimate -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta charset="utf-8">

      <!-- Favicon Links -->
      <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/Mascotte.png') }}">
      <link rel="manifest" href="{{ asset('assets/images/Mascotte.png') }}">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="{{ asset('assets/images/Mascotte.png') }}">
      <meta name="theme-color" content="#ffffff">

      <!-- CSS Links -->
      <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

      <!-- JS Links -->
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </head>

  <body>

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="/">
                    <figure class="logo mb-0"><img src="assets/images/mrc_logo.png" alt="image" class="img-fluid"></figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link " href="/"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/destination">Destinations</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#"
                                id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Pages </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="/review">Review</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="/faq">Faq</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="/team">Team</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="/service">Service</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="/service-detail">Service Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/blog"> Blog </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="/blog">Blog</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link book_now" href="/contact">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')
    @include('layouts.footer')
  </body>
</html>