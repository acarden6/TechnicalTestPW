@extends('layouts.master')

@section('content')

<head>
    <link href="{{ asset('/css/styleRegister.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js%22%3E"></script>
</head>

<div class="navigation">
    <ol class="breadcrumb">
        <li><a href="{{ route('home.index') }}">Administración</a></li>
        <li class="active">Aprobación de Empresas</li>
    </ol>
</div>

<div class="container">
    <div class="card col-md-12 col-lg-10">
        <div class="row">
            <img src="{{ asset('/img/portfolio/blackLogo.png') }}" class="box mx-auto" />
            <div class="buttons col-3 offset-1 mt-3 d-none d-sm-block">
                <div class="item">
                    <button class="btn btn-light shadow" data-toggle="button" aria-pressed="false"><img
                            src="{{ asset('/img/portfolio/check.png') }}"> Aprobar
                        Empresa</button>
                </div>
                <div class="item">
                    <button class="btn btn-light shadow" data-toggle="button" aria-pressed="false"><img
                            src="{{ asset('/img/portfolio/times.png') }}"> Rechazar
                        Empresa</button>
                </div>
            </div>
        </div>
        <div class="form-container">
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-text">Nombre de la empresa</label>
                        <input type="text" class="input-text" value="PREVALENTWARE">
                    </div>
                    <div class="col-md-6">
                        <label class="label-text">Razón social</label>
                        <input type="text" class="input-text" value="PREVALENTWARE S.A.S">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="label-text">Tipo de identificación</label>
                        <input type="text" class="input-text" value="NIT">
                    </div>
                    <div class="col-md-6">
                        <label class="label-text">Identificación</label>
                        <input type="text" class="input-text" value="901375150-4">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="label-text"># de empleados</label>
                        <input type="text" class="input-text" value="1 - 10">
                    </div>
                    <div class="col-md-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light shadow" data-toggle="modal" data-target="#myModal">
                            <img src="{{ asset('/img/portfolio/clip.png') }}">
                            Ver archivos adjuntos
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-container mx-auto">
        <div class="col-md-12 col-lg-10">
            <img src="{{ asset('/img/portfolio/prev.png') }}">
            Empresa 1 de 2 pendiente por aprobación
            <img src="{{ asset('/img/portfolio/next.png') }}">
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Documentos Cargados</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="files">
                    <div class="row">
                        <span class="col-8">Acta de Constitución PrevalentWare</span>
                        <a href="{{ route('file.download', 'Acta_de_constitucion_PrevalentWare') }}" class="col-4">
                            <img src="{{ asset('/img/portfolio/pdf.png') }}" class="img-file">
                        </a>
                    </div>
                </div>
                <div class="files">
                    <div class="row">
                        <span class="col-8">Camara de Comercio PrevalentWare</span>
                        <a href="{{ route('file.download', 'Camara_de_comercio_PrevalentWare') }}" class="col-4">
                            <img src="{{ asset('/img/portfolio/pdf.png') }}" class="img-file col-6">
                        </a>
                    </div>
                </div>
                <div class="files">
                    <div class="row">
                        <span class="col-8">Logo PrevalentWare</span>
                        <a href="{{ route('file.download', 'Logo_PrevalentWare') }}" class="col-4">
                            <img src="{{ asset('/img/portfolio/pdf.png') }}" class="img-file col-6">
                        </a>
                    </div>
                </div>
                <div class="files">
                    <div class="row">
                        <span class="col-8">Otro Documento PrevalentWare</span>
                        <a href="{{ route('file.download', 'Otro_documento_PrevalentWare') }}" class="col-4">
                            <img src="{{ asset('/img/portfolio/pdf.png') }}" class="img-file col-6">
                        </a>
                    </div>
                </div>
                <div class="files">
                    <div class="row">
                        <span class="col-8">RUT PrevalentWare</span>
                        <a href="{{ route('file.download', 'RUT_PrevalentWare') }}" class="col-4">
                            <img src="{{ asset('/img/portfolio/pdf.png') }}" class="img-file col-6">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
