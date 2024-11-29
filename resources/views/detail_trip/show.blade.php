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
        <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

        <!-- JS Links -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </head>

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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Voyages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="/national">National</a>
                                    <a class="dropdown-item" href="/international">International</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/service">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link book_now" href="/contact">Contact Us<i class="fa-solid fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

    <center><h1>{{ $admin->name }}</h1></center>

    <div class="mx-3">
        @auth
            <a href="{{ route('detail_trip.create', ['adminId' => $admin->id]) }}" class="btn mx-3 text-light" style="background-color:#C19A6B;">
                Ajouter
            </a>
            <br><br>
        @endauth

        @foreach ($detail_trips as $detail_trip)
            @auth
                <form action="{{ route('detail_trip.destroy', $detail_trip['id']) }}" method="POST" id="deleteForm{{ $detail_trip['id'] }}">
                    @csrf
                    @method('DELETE')  
                    <a href="{{ route('detail_trip.edit', $detail_trip->id) }}" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        &nbsp;Editer
                    </a>
                    <button type="button" onclick="confirmDelete('{{ $detail_trip->id }}')" class="btn btn-danger mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.354 8l3.823-3.823a.5.5 0 0 0-.708-.708L9.646 7.293 5.823 3.469a.5.5 0 0 0-.708.708L8.293 8l-3.82 3.823a.5.5 0 1 0 .708.708L9.647 8.707l3.824 3.824a.5.5 0 0 0 .708-.708L10.354 8z"/>
                        </svg>
                        &nbsp;Supprimer
                    </button>
                </form>
            @endauth

            <h1>PROGRAMMES : </h1>
            <p>{!! $detail_trip['programme'] !!}</p>

            <h1>Tarifs par Personne : </h1>
            <center><img src="/images/{{ $detail_trip['tarif'] }}" width="50%"></center>

            <h1>Services Compris : </h1>
            <p>{!! $detail_trip['servis_inclus'] !!}</p>
            
        @endforeach
    </div>
    
    <script>
        function confirmDelete(detail_tripId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer?')) {
                document.getElementById('deleteForm' + detail_tripId).submit();
            }
        }
    </script>