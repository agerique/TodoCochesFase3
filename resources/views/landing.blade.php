<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>

<body id="page-top">
    <!-- Barra de navegación-->
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5 gap-2">
            <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo3.PNG"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle=modal data-bs-target="#modal2"><i class="bi bi-person-circle"></i>{!! trans('messages.login') !!}</a>
                    </li>
                </ul>
            </div>

            <!--Comprobamos si el status esta a true y existe más de un lenguaje-->
            @if (config('locale.status') && count(config('locale.languages')) > 1)
            <div class="top-right links" data-confirm="{!! App::getLocale() !!}">
                @foreach (array_keys(config('locale.languages')) as $lang)
                @if ($lang != App::getLocale())
                <a href="{!! route('lang.swap', $lang) !!}" style="text-transform: uppercase;">
                {!! $lang !!} <!-- <small style="text-transform: lowercase;">{!! $lang !!}</small> -->
                </a>
                @endif
                @endforeach
            </div>
            @endif

        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white">{!! trans('messages.tit') !!}</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white mb-5">{!! trans('messages.subTit') !!}</p>
                    <div class="row input-group-newsletter">
                        <div class="d-flex justify-content-center gap-1">
                            <div class="col-8 form-floating">
                                <input class="form-control" id="emailInfo" type="email" placeholder="email" data-sb-validations="required,email" />
                                <label for="email">{!! trans('messages.email') !!}</label>
                            </div>
                            <button id="submitInfo" type="button" class="btn btn-warning" data-bs-toggle=modal data-bs-target="#modal3">{!! trans('messages.submit') !!}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" style="width: 100%;" src="assets/img/logo.png" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4><a id="enlace_nosotros" href="#nosotros"></a>{!! trans('messages.aboutUs') !!}</h4>
                        <p class="text-black-50 mb-0">{!! trans('messages.subAboutUs') !!}<a id="enlace_nosotros" href="#nosotros">{!! trans('messages.linkAboutUs') !!}</a></p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/icono_buscar.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">{!! trans('messages.buscador') !!}</h4>
                                <p class="mb-0 text-white-50">{!! trans('messages.subBuscador') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/caracteristicas_4.jpg" width="100%" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">{!! trans('messages.caracteristicas') !!}</h4>
                                <p class="mb-0 text-white-50">{!! trans('messages.subCaracteristicas') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/roles.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">{!! trans('messages.roles') !!}</h4>
                                <p class="mb-0 text-white-50">{!! trans('messages.subRoles1') !!} <a href="#roles">{!! trans('messages.subRolesLink') !!}</a>{!! trans('messages.subRoles2') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section bg-black">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div id="nosotros" class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{!! trans('messages.direccion') !!}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Donosti</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">hola@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{!! trans('messages.telefono') !!}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">123456789</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>

    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div>
    </footer>
    <div class="modal fade" id="modal2">
        <div class="modal-dialog text-center">
            <div class="modal-content" style="border-radius: 5%; background-color: #f8efcf;">
                <div class="col-12 user-img">
                    <img src="assets/img/usuario2.png" style="width: 60%; height: 300px;" />
                </div>
                <div class="row d-flex justify-content-center">
                    <form class="col-8" id="formulario1" method="post" action="{{route('iniciosesion')}}">
                        @csrf
                        <div class="form-group d-flex align-items-center mb-3">
                            <i class="bi bi-people"></i><input type="email" id="email1" class="form-control campos-group" placeholder="{!! trans('messages.correo') !!}" name="username" />
                        </div>
                        <div id="email1Div"></div>
                        <div class="form-group d-flex align-items-center">
                            <i class="bi bi-globe"></i><input type="password" id="password1" class="form-control campos-group" placeholder="{!! trans('messages.contrasena') !!}" name="password" />
                        </div>
                        <div id="password1Div"></div>
                        <button type="submit" class="btn btn-primary mt-4 mb-4"><i class="fas fa-sign-in-alt"></i> {!! trans('messages.ingresar') !!} </button>
                    </form>
                    <div class="col-12 mb-2">
                        <a href="#">{!! trans('messages.olvidado') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal3">
        <div class="modal-dialog text-center">
            <div class="modal-content" style="border-radius: 5%; background-color: #f8efcf;">
                <div class="col-12 user-img p-2">
                    <img src="assets/img/registro.png" style="width: 60%; height: 280px;" />
                </div>
                <div class="row d-flex justify-content-center">
                    <form class="col-8" action="{{route('ruta_usuario_anadir')}}" id="formulario2" method="post">
                        @csrf
                        <div class="form-group d-flex align-items-center">
                            <i class="bi bi-person-plus-fill"></i></i><input type="text" id="nombre2" class="form-control campos-group" placeholder="{!! trans('messages.nombre') !!}" name="nombre">
                        </div>
                        <div id="nombreDiv"></div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <i class="bi bi-globe"></i><input type="text" id="apellidos" class="form-control campos-group" placeholder="{!! trans('messages.apellidos') !!}" name="apellidos" />
                        </div>
                        <div id="apellidosDiv"></div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <i class="bi bi-envelope"></i><input type="email" id="email2" class="form-control campos-group" placeholder="{!! trans('messages.correo') !!}" name="email" />
                        </div>
                        <div id="emailDiv"></div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <i class="bi bi-globe"></i><input type="password" id="pass1" class="form-control campos-group" placeholder="{!! trans('messages.contrasena') !!}" name="password" />
                        </div>
                        <div id="pass1Div"></div>
                        <div class="ms-3">
                            <div id="progress-bar" class="" style="height:5px;width:25%"></div>
                        </div>
                        <span id="passstrength"></span>
                        <div class="form-group d-flex align-items-center mt-3">
                            <i class="bi bi-globe"></i><input type="password" id="pass2" class="form-control campos-group" placeholder="{!! trans('messages.contrasena2') !!}" name="password2" />
                        </div>
                        <div id="pass2Div"></div>
                        <button type="submit" class="btn btn-primary mt-4 mb-4"><i class="fas fa-sign-in-alt"></i> {!! trans('messages.ingresar') !!} </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/validaciones.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>