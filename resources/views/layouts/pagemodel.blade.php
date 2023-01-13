<!DOCTYPE html>
<html lang= "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite(["resources/js/app.js"])  

        <link rel="shorcut icon" href="/img/favicon.png" type = "image/x-icon">

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <title>@yield('title', 'Dextor')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand">
                <img src="/img/dextor-logo.png" alt="Dextor logo" width = "80px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Eventos</a>
                    <a class="nav-item nav-link" href="/events/create_event">Criar Evento</a>
                </div>
            </div>
        </nav>
        @if(session('msg'))
            <p class="msg"><ion-icon name="information-circle-outline" class="information-icon"></ion-icon>{{ session('msg') }}</p>
        @endif
        @yield('content')
    </body>
</html>