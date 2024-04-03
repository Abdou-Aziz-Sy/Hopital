@extends('layouts.adminlayout')

@section('content')
    @include('partials.admin.createElement');
    <h2>Liste des Docteur</h2>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Adresse</th>
                <th>Ajouté(e) le :</th>
            </tr>
        </thead>
        <tbody>
                    @foreach ($Medecins as $Medecin)

                    <tr>
                        <td>{{ $Medecin->Matricule }}</td>
                        <td>{{ $Medecin->Nom }}</td>
                        <td>{{ $Medecin->Prenom }}</td>
                        <td>{{ $Medecin->Mail }}</td>
                        <td>{{ $Medecin->Adresse }}</td>
                        <td>{{ $Medecin->created_at }}</td>
                        
                    </tr>
                    @endforeach
        <tfoot>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Adresse</th>
                <th>Ajouté(e) le :</th>
            </tr>
        </tfoot>
    </table>
@endsection
