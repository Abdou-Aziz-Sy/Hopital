@extends('layouts.adminlayout')

@section('content')

<!-- create_hopital.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouvel hôpital</title>
    
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Créer un nouvel hôpital</div>

            <div class="card-body">
                <form method="POST" action="{{ route('hopital.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse :</label>
                        <input type="text" name="adresse" id="adresse" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="services">Localité :</label>
                        <input type="text" name="services" id="services" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<table id="example" class="display" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Localité</th>
                        <th>Localité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Hopitals as $Hopital)

                    <tr>
                        <td><a href="">{{ $Hopital->Nom }}</a></td>
                        <td>{{ $Hopital->Adresse }}</td>
                        <td>{{ $Hopital->Services }}</td>
                        <td>{{ $Hopital->created_at }}</td>
                        
                    </tr>
                    @endforeach

                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Localité</th>
                        <th>Localité</th>
                    </tr>
                </tfoot>
            </table>
@endsection