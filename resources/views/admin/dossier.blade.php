@extends('layouts.adminlayout')

@section('content')
@include('partials.admin.dossier.createElement')
<h2>Postes</h2>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Auteur</th>
            <th scope="col">Titre</th>
            <th scope="col">Créer le</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    
    <tfoot>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Auteur</th>
            <th scope="col">Titre</th>
            <th scope="col">Créer le</th>
            <th scope="col">Actions</th>
        </tr>
    </tfoot>
</table>
@endsection