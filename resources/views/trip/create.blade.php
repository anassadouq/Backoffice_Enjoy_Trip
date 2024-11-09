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

        input[type="radio"] {
            width: 15px;
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
                <form method="post" action="{{ route('trip.store') }}" enctype="multipart/form-data" class="my-form">
                    @csrf
                    <div class="mb-3">
                        <label for="num" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Name :</label>
                        <input type="text" placeholder="Trip name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Ou :</label>
                        <input type="radio" name="where" value="Maroc"> Maroc
                        <input type="radio" name="where" value="Hors"> Hors
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nom" class="form-label">Rating :</label>
                            <input type="text" placeholder="Trip Rat" name="rating" class="form-control" required>
                        </div>
                        <div class="col mb-3">
                            <label for="nom" class="form-label">Places :</label>
                            <input type="text" placeholder="Trip Places" name="places" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nom" class="form-label">Nombre Person :</label>
                            <input type="text" placeholder="Trip persons" name="nombrepersonne" class="form-control" required>
                        </div>
                        <div class="col mb-3">
                            <label for="lieu" class="form-label">Price :</label>
                            <input type="text" placeholder="Trip price" name="price" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="eppMat" class="form-label">Date Début</label>
                            <input type="date" name="dateD" class="form-control" required>
                        </div>
                        <div class="col mb-3">
                            <label for="eppMat" class="form-label">Date Fin</label>
                            <input type="date" name="dateF" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eppDer" class="form-label">Description :</label>
                        <input type="text" placeholder="Trip description" name="description" class="form-control" required>
                    </div>
                    <button type="submit" class="form-control btn text-light" style="background-color:#C19A6B">Create</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>