<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvelle soumission de formulaire</title>
</head>
<body>
    <div>
        <h1>Nouvelle soumission de formulaire</h1>
        <p>Les données du formulaires sont les suivantes: </p>
    </div>
    <div>
        <ul>
            <li><strong>Noms complet : </strong>{{$data["full_name"]}}</li>
            <li><strong>Email : </strong>{{$data["email"]}}</li>
            <li><strong>Objet : </strong>{{$data["object"]}}</li>
            <li><strong>Message : </strong>{{$data["message"]}}</li>
        </ul>
    </div>
</body>
</html>