@extends('layouts.dashboard')
<style>
    body{margin-top:20px;
background: #f5f5f5;
}
.theme-bg-white {
    background-color: #fff !important;
}
.ui-w-100 {
    width: 100px !important;
    height: auto;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}
.row-bordered>.col::before, .row-bordered>[class^="col-"]::before, .row-bordered>[class*=" col-"]::before, .row-bordered>[class^="col "]::before, .row-bordered>[class*=" col "]::before, .row-bordered>[class$=" col"]::before, .row-bordered>[class="col"]::before {
    content: "";
    position: absolute;
    right: 0;
    bottom: -1px;
    left: 0;
    display: block;
    height: 0;
    border-top: 1px solid rgba(24,28,33,0.06);
}
.row-bordered>.col::after, .row-bordered>[class^="col-"]::after, .row-bordered>[class*=" col-"]::after, .row-bordered>[class^="col "]::after, .row-bordered>[class*=" col "]::after, .row-bordered>[class$=" col"]::after, .row-bordered>[class="col"]::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: -1px;
    display: block;
    width: 0;
    border-left: 1px solid rgba(24,28,33,0.06);
}

.ui-bg-cover {
    background-color: rgba(0,0,0,0);
    background-position: center center;
    background-size: cover;
}

.ui-square {
    padding-top: 100% !important;
}
.ui-square, .ui-rect, .ui-rect-30, .ui-rect-60, .ui-rect-67, .ui-rect-75 {
    position: relative !important;
    display: block !important;
    padding-top: 100% !important;
    width: 100% !important;
}
</style>
@section('content')
<div class="layout-content">
@include('partials.Rdv.createElement')
@include('partials.Rdv.Element')


  <table id="example" class="display" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Date</th>
                        <th>Motif</th>
                        <th>Signes Cliniques</th>
                        <th>Signes Pédagogiques</th>
                        <th>Evaluation</th>
                        <th>Fiches</th>
                        <th>Fichiers</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($patients as $patient)

<tr>
    <td><a href="">{{ $patient->Nom }}</a></td>
    <td>{{ $patient->Prenom }}</td>
    <td>{{ $patient->created_at }}</td>
    <td>{{ $patient->updated_at }}</td>
    
    <td>Editer  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-pencil" viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>
        </button></td>
    <td>Editer <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addModals">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-pencil" viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>
        </button></td>
    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $patient->id }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-trash" viewBox="0 0 16 16">
                <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                <path
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
            </svg>
        </button></td>
</tr>
@endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Date</th>
                        <th>Motif</th>
                        <th>Signes Cliniques</th>
                        <th>Signes Pédagogiques</th>
                        <th>Evaluation</th>
                        <th>Fiches</th>
                        <th>Fichiers</th>
                    </tr>
                </tfoot>
            </table>

</div>
@endsection

