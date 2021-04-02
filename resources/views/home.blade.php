@extends('layouts.master')

@section('content')
<head>
    <link href="{{ asset('/css/styleHome.css') }}" rel="stylesheet" />
</head>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <a href="{{ route('home.register') }}">
                <div class="card mb-5 shadow bg-white" id="card-1">
                    <div class="card-block">
                        <div class="box"><img src="{{ asset('/img/portfolio/company.png') }}" class="card-img"/></div>
                        <h4 class="card-title">Solicitudes de creación de empresas</h4>
                    </div>
                    <div class="card-footer text-muted">
                        <img src="{{ asset('/img/portfolio/time.png') }}"/>
                        <p>2 solicitudes sin tratar</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-6">
            <div class="card mb-5 shadow bg-white">
                <div class="card-block">
                    <div class="box"><img src="{{ asset('/img/portfolio/graph.png') }}" class="card-img"/></div>
                    <h4 class="card-title">Indicadores</h4>
                </div>
                <div class="card-footer text-muted">
                    <img src="{{ asset('/img/portfolio/time.png') }}"/>
                    <p>2 solicitudes sin tratar</p>
                  </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card mb-5 shadow bg-white">
                <div class="card-block">
                    <div class="box"><img src="{{ asset('/img/portfolio/staff.png') }}" class="card-img"/></div>
                    <h4 class="card-title">Inscripción de empleados en empresas</h4>
                </div>
                <div class="card-footer text-muted">
                    <img src="{{ asset('/img/portfolio/time.png') }}"/>
                    <p>2 solicitudes sin tratar</p>
                  </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card mb-5 shadow bg-white">
                <div class="card-block">
                    <div class="box"><img src="{{ asset('/img/portfolio/users.png') }}" class="card-img"/></div>
                    <h4 class="card-title">Gestión de usuarios</h4>
                </div>
                <div class="card-footer text-muted">
                    <img src="{{ asset('/img/portfolio/time.png') }}"/>
                    <p>2 solicitudes sin tratar</p>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection
