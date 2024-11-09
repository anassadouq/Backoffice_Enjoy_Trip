<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
        .my-form {
            width: 100%;
            max-width: 700px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 30px;
            background-color: white;
        }
        label{
            font-weight: bold;
        }

        input[type="text"]{
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <form action="{{ route('trip.update', $trip) }}" class="my-form container" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="num" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Name :</label>
                <input type="text" value="{{ $trip->name }}" name="name" class="form-control">
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="nom" class="form-label">Rating :</label>
                    <input type="text" value="{{ $trip->rating }}" name="rating" class="form-control">
                </div>
                    <div class="col mb-3">
                        <label for="nom" class="form-label">Places :</label>
                        <input type="text" value="{{ $trip->places }}" name="places" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nom" class="form-label">Nombre Person :</label>
                        <input type="text" value="{{ $trip->nombrepersonne }}" name="nombrepersonne" class="form-control">
                    </div>
                    <div class="col mb-3">
                        <label for="lieu" class="form-label">Price :</label>
                        <input type="text" value="{{ $trip->price }}" name="price" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="eppMat" class="form-label">Date Début</label>
                        <input type="date" name="dateD" value="{{ $trip->dateD }}" class="form-control">
                    </div>
                    <div class="col mb-3">
                        <label for="eppMat" class="form-label">Date Fin</label>
                        <input type="date" name="dateF" value="{{ $trip->dateF }}" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="eppDer" class="form-label">Description :</label>
                    <input type="text" value="{{ $trip->description }}" name="description" class="form-control">
                </div>
                <button type="submit" class="form-control btn btn-secondary">
                    <span class="material-symbols-outlined">edit</span> 
                Modifier</button>    
        </form>
</body>
</html>