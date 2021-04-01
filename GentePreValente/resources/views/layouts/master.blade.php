<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Gente PreValente</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <!-- Custom styles for this template -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css"/>

    <link href="album.css" rel="stylesheet">

  </head>
  <body style="background-color: #e5e7eb">
    <header>
        <div class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('/img/portfolio/logo.png') }}" alt="logo" />
                <strong>Gente PreValente</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">

                <div class="d-flex justify-content-between">

                    <div class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('/img/portfolio/lupa.png') }}" alt="lupa" />
                        <input type="text" name="search" Placeholder="Buscar..." class ="search-txt">
                    </div>

                    <div class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('/img/portfolio/admin.png') }}" />
                        <p class="text-header">Administración</p><span class="num">2</span>
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
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card mb-5 shadow bg-white">
                        <div class="box"><img src="{{ asset('/img/portfolio/company.png') }}" class="card-img"/></div>
                        <div class="card-block">
                            <h4 class="card-title">Mirion Jones</h4>
                        </div>
                        <div class="card-footer text-muted">
                            <img src="{{ asset('/img/portfolio/time.png') }}" class="footer-card-img"/>
                            2 days ago
                          </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card mb-5 shadow bg-white">
                        <div class="box"><img src="{{ asset('/img/portfolio/graph.png') }}" class="card-img"/></div>
                        <div class="card-block">
                            <h4 class="card-title">Mirion Jones</h4>
                        </div>
                        <div class="card-footer text-muted">
                            <img src="{{ asset('/img/portfolio/time.png') }}" class="footer-card-img"/>
                            2 days ago
                          </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card mb-5 shadow bg-white">
                        <div class="box"><img src="{{ asset('/img/portfolio/staff.png') }}" class="card-img"/></div>
                        <div class="card-block">
                            <h4 class="card-title">Mirion Jones</h4>
                        </div>
                        <div class="card-footer text-muted">
                            <img src="{{ asset('/img/portfolio/time.png') }}" class="footer-card-img"/>
                            2 days ago
                          </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card mb-5 shadow bg-white">
                        <div class="box"><img src="{{ asset('/img/portfolio/users.png') }}" class="card-img"/></div>
                        <div class="card-block">
                            <h4 class="card-title">Mirion Jones</h4>
                        </div>
                        <div class="card-footer text-muted">
                            <img src="{{ asset('/img/portfolio/time.png') }}" class="footer-card-img"/>
                            2 days ago
                          </div>
                    </div>
                </div>
            </div>
        </div>



{{-- <footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer> --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>
