@extends('layouts.adminlayout')

@section('content')
@include('partials.admin.assistant.createElement')

<h2>Liste des Docteur</h2>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Ajouté(e) le :</th>
            </tr>
        </thead>
        <tbody>
                    @foreach ($assistants as $Assistant)

                    <tr>
                        <td>{{ $Assistant->Matricule }}</td>
                        <td>{{ $Assistant->Nom }}</td>
                        <td>{{ $Assistant->Prenom }}</td>
                        <td>{{ $Assistant->Email }}</td>
                        <td>{{ $Assistant->created_at }}</td>
                        
                    </tr>
                    @endforeach
        <tfoot>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Ajouté(e) le :</th>
            </tr>
        </tfoot>
    </table>
            @endsection

