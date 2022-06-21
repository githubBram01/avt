<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AVT B.V | Professionals in snijden en verpakken</title>
    <base href="{{ env('APP_URL') }}">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AVT B.V">
    <meta property="og:description" content="Professionals in snijden en verpakken">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="AVT B.V">
    <meta name="twitter:description" content="Professionals in snijden en verpakken">
    <meta name="description" content="Professionals in snijden en verpakken">

    <link rel="icon" href="{{ url('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="header-bkg">
    <nav class="navbar navbar-expand-lg navbar-light ml-5">
            <a href="/">
                <img src="../img/logo.png" href="/" width="50" height="100" class="d-inline-block avt-logo" alt="AVT-Logo">
            </a>
    </nav>
</div>
<div class="nav-links">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <h1 class="responsive-text">NAV-LINKS</h1>
        <div class="nav-responsive-button">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">MACHINES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">VERHUUR & REVISIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NIEUWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">VACATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<main>
    @yield('content')
</main>

<footer class="text-center text-white footer" style="background-color: #caced1;">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © <?php echo date("Y"); ?> AVT B.V - <a href="https://www.grafisch-centrum.nl/">Grafisch Centrum</a>.
        {{--                <a class="text-white" href="https://github.com/curio-studenten/c3-web-c3-21-nj-team-c2">GitHub</a>--}}
    </div>
</footer>
</body>
</html>
