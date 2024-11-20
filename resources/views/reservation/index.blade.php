<html>
    <head>
        <title>Admin</title>
            
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta charset="utf-8">

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
        
        <!-- Custom CSS Links -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

        
        <!-- JS Links -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
        <!-- JS Links -->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

    </head>

    <body>
        <style>
            @media only screen and (max-width: 768px) {
                .row {
                    flex-direction: column;
                }
                .col-2, .col-10 {
                    width: 100%;
                }
            }
        </style>

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
                            <li class="nav-item">
                                <a class="nav-link " href="/admin">Admin </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/reservation">Reservation</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link book_now" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="mx-2">
            <table id="myTable" class="table text-center" width="100%">
                <thead>
                    <tr>
                        <th>Trip</th>
                        <th>Nom</th>
                        <th>CIN</th>
                        <th>Telephone</th>
                        <th>Date de départ</th>
                        <th>Ville de départ</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td><img src="/images/{{$reservation->admin->image}}" alt="" width="100"></td>
                            <td>{{ $reservation->prenom }} {{ $reservation->nom }}</td>
                            <td>{{ $reservation->cin }}</td>
                            <td>{{ $reservation->tel }}</td>
                            <td>{{ $reservation->dateDep }}</td>
                            <td>{{ $reservation->villeDep }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>
                                <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" id="deleteForm{{ $reservation->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $reservation->id }}')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <script>
            function confirmDelete(reservationId) {
                if (confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')) {
                    document.getElementById('deleteForm' + reservationId).submit();
                }
            }

            $(document).ready(function() {
                $('#myTable').DataTable({
                    dom: 'Blfrtip',
                    lengthChange: false,
                    paging: false,
                    buttons: [{
                        extend: 'collection',
                        text: 'Export',
                        buttons: [{
                            extend: 'excelHtml5',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        }, {
                            extend: 'pdfHtml5',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        }, {
                            extend: 'csvHtml5',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        }, {
                            extend: 'print',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        }]
                    }]
                });
            });
        </script>

<script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/carousel.js"></script>
        <script src="assets/js/animation.js"></script>
        <script src="assets/js/back-to-top-button.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/counter.js"></script>
    </body>
</html>