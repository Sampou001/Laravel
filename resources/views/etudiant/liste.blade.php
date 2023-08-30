
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">

        <div class="row">

            <div class="col s12">
                <h1>CRUD IN LARAVEL 10</h1>
                <hr>
                    <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
                <hr>

                @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                    <ul>
                        @foreach($errors -> all() as $error)
                            <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $id =1;
                        @endphp

                        @foreach($etudiants as  $etudiant)
                        <tr>
                            <td>{{ $id }}</td>
                            <td>{{ $etudiant -> nom }}</td>
                            <td>J{{$etudiant -> prenom }}</td>
                            <td>{{ $etudiant -> classe }}</td>
                            <td>
                                <a href="/update-etudiant/{{ $etudiant -> id }}" class="btn btn-info">Update</a>
                                <a href="/delete-etudiant/{{ $etudiant -> id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        @php
                            $id += 1;
                        @endphp

                        @endforeach
                    </tbody>
                </table>
                {{ $etudiants->links() }} <!--/* utilisé pour la pagination */-->
             </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
