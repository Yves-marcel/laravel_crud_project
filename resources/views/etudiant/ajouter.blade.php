<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des Etudiant</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <h1>AJOUTER UN ETUDIANT</h1>
            <hr>
            <!-- Affichage de message avec blade -->
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif

            <ul>
                @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
                @endforeach

            </ul>
            <form action="/ajouter/traitement" method="POST" class="form-group">
                @csrf
                <div class="">
                    <label for="Nom">Nom</label>
                    <input type="text" name="nom" id="Nom" class="form-control" aria-describedby="Nom" placeholder="Nom de Famille">
                </div>
                <div class="">
                    <label for="Prenoms">Prenoms</label>
                    <input type="text" name="prenoms" id="Prenoms"class="form-control" aria-describedby="Votre prenoms" placeholder="Votre Prenoms">

                </div>
                <div class="">
                    <label for="Classe" >Classe</label>
                    <input type="text" name="classe" id="Classe" class="form-control" aria-describedby="Classe" placeholder="Votre Classe">

                </div>
                <br>
               <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
               <a href="/etudiant" class="btn btn-success">Revenir à la liste des étudiants</a>
            </form>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
</body>
</html>