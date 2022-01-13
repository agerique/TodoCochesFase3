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

        </div>

        <!--Comprobamos si el status esta a true y existe más de un lenguaje-->
        @if (config('locale.status') && count(config('locale.languages')) > 1)
        <div class="top-right links" data-confirm="{!! App::getLocale() !!}">
            @foreach (array_keys(config('locale.languages')) as $lang)
            @if ($lang != App::getLocale())
            <a href="{!! route('lang.swap', $lang) !!}" style="text-transform: uppercase;">
                {!! $lang !!}
                <!-- <small style="text-transform: lowercase;">{!! $lang !!}</small> -->
            </a>
            @endif
            @endforeach
        </div>
        @endif

    </nav>
    <!-- Masthead-->
    <div class="container p-3 mt-5">
        <div class="col-12 bg-success">
            <h1>{!! trans('messages.iniciocorrecto') !!}</h1>
            <p>{!! trans('messages.welcome') !!} {{ $nombre}}!</p>
            <p>{{$usuario_email}}</p>
        </div>

    </div>
    <div class="container d-flex justify-content-center">
        <a href="../"><i class="bi bi-house"></i></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>