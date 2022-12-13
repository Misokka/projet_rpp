<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('eleve.store') }}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="nom" placeholder="Nom de l'élève">
        <input type="text" name="prenom" placeholder="Prénom de l'élève">
        <div>
            <select name="classe_id">
                <option value="">Classe</option>

            @foreach ($valeurs as $v)
                <option value="{{$v->id}}">
                    {{ $v->section }}
                </option>

            @endforeach
            </select>
        </div>

        <input type="submit" name="valider" value="Valider">
</body>
</html>
