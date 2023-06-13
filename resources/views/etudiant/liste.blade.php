<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiant</title>
    <!-- Insertion du fichier laravel -->
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="cols s12 md-3"></div>
            <h1> Liste des étudiants</h1>
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
            <a href="/ajouter" class="btn btn-primary"> Ajouter</a>
           <br>
           <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénoms</th>
                        <th>Classe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $ide=1;
                    @endphp
                    @foreach($etudiants as $etd)
                       <tr>
                        <td>AET{{$ide}}</td>
                          <td>{{ $etd->nom }}</td>
                          <td>{{ $etd->prenoms }}</td>
                          <td>{{ $etd->classe }}</td>
                          <td><a href="/update/{{$etd->id}}" class="btn btn-info"> Update</a> <a href="/supprimer/{{$etd->id}}" class="btn btn-danger"> Delete</a></td>
                       </tr>
                       @php
                       $ide += 1;
                       @endphp
                    @endforeach
                </tbody>
            </table>
            {{$etudiants->links()}}
            
        </div>
    </div>
</body>
</html>