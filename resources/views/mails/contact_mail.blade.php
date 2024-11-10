<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Mail</title>
    </head>
    <body>
        <p>Nom: {{ $data['nom'] }}</p>
        <p>Prenom: {{ $data['prenom'] }}</p>
        <p>CIN: {{ $data['cin'] }}</p>
        <p>Telephone: {{ $data['tel'] }}</p>
        <p>Nom voyage: {{ $data['trip_name'] }}</p>
        <p>Date de départ : {{ $data['dateDep'] }}</p>
        <p>Ville de depart: {{ $data['villeDep'] }}</p>
        <p>Email: {{ $data['email'] }}</p>
    </body>
</html>