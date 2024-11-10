    <html>
        <head>
            <title>admins</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
              <!-- /SEO Ultimate -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
            <meta charset="utf-8">

            <!-- Favicon Links -->
            <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}">
            <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}">
            <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}">
            <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}">
            <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}">
            <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}">
            <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}">
            <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}">
            <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
            <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/ms-icon-144x144.png') }}">
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

        <style>
            @media only screen and (max-width: 768px) {
                .row {
                    flex-direction: column;
                }

                .col-2 {
                    width: 100%;
                }

                .col-10 {
                    width: 100%;
                }
            }
        </style>

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="/">
                        <figure class="logo mb-0"><img src="assets/images/logo.png" alt="image" class="img-fluid"></figure>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link " href="/admin">Trips </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/reservation">Reservation</a>
                            </li>                        
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <h5> 
                                    <span class="material-symbols-outlined">logout</span>
                                    Logout
                                </h5>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
            <div class="mx-2">
                <a href="{{route('admin.create')}}" >
                    <button class="btn my-3 text-light" style="width:85px; background-color:#C19A6B;">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </a>
                <table class="text-center" id="myTable">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Places</th>
                            <th>Nombre person</th>
                            <th>Price</th>
                            <th>Date Debut</th>
                            <th>Date Fin</th>
                            <th>Description</th>
                            <th width="10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td><img src="/images/{{$admin['image']}}" width="100px"></td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->rating }}</td>
                            <td>{{ $admin->places }}</td>
                            <td>{{ $admin->nombrepersonne }}</td>
                            <td>{{ $admin->price }} DH</td>
                            <td>{{ $admin->dateD }}</td>
                            <td>{{ $admin->dateF }} </td>
                            <td>{{ $admin->description }} </td>
                            <td>
                                <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" id="deleteForm{{ $admin->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <ul class="navbar-nav ms-auto">
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a href="{{ route('admin.edit', $admin->id) }}" class="btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                        &nbsp;Editer
                                                    </a>

                                                    <button type="button" onclick="confirmDelete('{{ $admin->id }}')" class="btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M10.354 8l3.823-3.823a.5.5 0 0 0-.708-.708L9.646 7.293 5.823 3.469a.5.5 0 0 0-.708.708L8.293 8l-3.82 3.823a.5.5 0 1 0 .708.708L9.647 8.707l3.824 3.824a.5.5 0 0 0 .708-.708L10.354 8z"/>
                                                        </svg>
                                                        &nbsp;Supprimer
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>    
            </div>
            
            <script>
                function confirmDelete(adminId) {
                    if (confirm('Êtes-vous sûr de vouloir supprimer ce admin ?')) {
                        document.getElementById('deleteForm' + adminId).submit();
                    }
                }
            </script>

            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable( {
                        dom: 'Blfrtip',
                        lengthChange: false, // disable length change dropdown
                        paging: false, // disable pagination
                        buttons: [{
                            extend: 'collection',
                            text: 'Export',
                            buttons: [{
                                extend: 'excelHtml5',
                                exportOptions: {
                                    columns: [ 0,1,2,3,4,5,6,7,8,9 ]
                                }
                            },
                            {
                                extend: 'pdfHtml5',
                                exportOptions: {
                                    columns: [ 1,2,3,4,5,6,7,8 ]
                                }
                            },
                            {
                                extend: 'csvHtml5',
                                exportOptions: {
                                    columns: [ 1,2,3,4,5,6,7,8 ]
                                },
                            },
                            {
                                extend: 'print',
                                exportOptions: {
                                    columns: [ 1,2,3,4,5,6,7,8 ]
                                }
                            }],
                        }]
                    });
                });
            </script>
        </body>
    </html>