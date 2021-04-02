<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gente PreValente</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link href="{{ asset('/css/styleMaster.css') }}" rel="stylesheet" />



    <!-- Custom styles for this template -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />

</head>

<body style="background-color: #e5e7eb">
    <header>
        <div class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <a href="{{ route('home.index') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('/img/portfolio/logo.png') }}" alt="logo" />
                <strong>Gente PreValente</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">

                <div class="d-flex justify-content-between">

                    <div class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('/img/portfolio/lupa.png') }}" alt="lupa" />
                        <input type="text" name="search" Placeholder="Buscar..." class="search-txt">
                    </div>

                    <div class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('/img/portfolio/admin.png') }}" />
                        <p class="text-header">Administración</p><span class="badge badge-pill badge-danger">s2</span>
                    </div>

                    <div class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('/img/portfolio/job.png') }}" />
                        <div class="selectParent">
                            <select>
                                <option selected hidden>Empleo</option>
                                <option disabled>Opción 1</option>
                                <option disabled>Opción 2</option>
                                <option disabled>Opción 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('/img/portfolio/cv.png') }}" />
                        <p class="text-header">Mi CV</p>
                    </div>

                    <div class="navbar-brand d-flex align-items-center">
                        <i class="fa fa-circle fa-2x" aria-hidden="true"></i>
                        <div class="selectParent">
                            <select>
                                <option selected hidden>Alejandra</option>
                                <option disabled>Perfil</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
