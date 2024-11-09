<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        label {
            font-weight: bold;
        }

        input {
            width: 350px;
        }
        
        .my-form {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @php
                    $id_trip = request()->input('id_trip');
                @endphp

                <form method="post" action="{{ route('reservation.store') }}" class="my-form">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="id_trip" value="{{ $id_trip }}">
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                        </div>
                        <div class="col mb-3">
                            <label for="prenom" class="form-label">Prenom :</label>
                            <input type="text" name="prenom" placeholder="Prenom" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cin" class="form-label">CIN :</label>
                        <input type="text" name="cin" placeholder="CIN" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Telephone :</label>
                        <input type="text" name="tel" placeholder="Telephone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date debut :</label>
                        <input type="date" name="dateDep" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ville_depart" class="form-label">Ville de départ :</label>
                        <input type="text" name="villeDep" placeholder="Ville de départ" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" required>
                    </div>
                    <button type="submit" class="my-1 form-control btn btn-dark text-light">Reserver</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>