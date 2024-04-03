@extends('layouts.dashboard')
@vite(['resources/css/responsive.css', 'resources/js/welcome.js'])

@section('content')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            {{ $count }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Patients</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-bed" style="font-size:48px;color:red"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        {{ $dispo }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">indisponibilité</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-plane" aria-hidden="true" style="font-size:48px;color:green"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">{{ $assist }}
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Assistants</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-user-md" style="font-size:72px;color:blue"></i>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        {{ $plan }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rendez-Vous</div>
                    </div>
                    <div class="col-auto">

                        <i class="fa fa-handshake-o" aria-hidden="true" style="font-size:48px;color:teal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Premier tableau -->
        <div class="col-md-6 mb-4">
            <h1>Mes Rendez-vous</h1>
            <table id="example2" class="display" style="width:100%">


                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Statut</th>

                        </tr>
                    </thead>
                    @foreach ($plannings as $planning)
                        
                    <tbody>
                        <tr class="bg-info">
                            <td>{{ $planning->created_at }}</td>
                            <td>Abdou Aziz</td>
                            <td>Sy</td>
                            <td>ultérieur</td>

                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </table>
        </div>

        <!-- Deuxième tableau -->
        <div class="col-md-6 mb-4">
            <h1>Indisponibilité</h1>
            <table id="example2" class="display" style="width:100%">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-info">
                            <td>22-03-2024</td>
                            <td>Ousseynou</td>
                            <td>Seck</td>
                            <td>Consultation</td>
                        </tr>

                    </tbody>
                </table>
            </table>
        </div>
    </div>
    @endsection