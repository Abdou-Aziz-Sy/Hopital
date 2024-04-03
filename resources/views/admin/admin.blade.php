@extends('layouts.adminlayout')

@section('content')

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
                        {{ $med }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Medecins</div>
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

@endsection