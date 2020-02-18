<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio | Guláns Fútbol Sala</title>
        <link rel="icon" type="image/vnd.microsoft.icon" href="/img/logo.ico">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.min.css" rel="stylesheet">
        <style type="text/css">
            html,
            body,
            header,
            .carousel {
                height: 60vh;
            }

            @media (max-width: 740px) {

                html,
                body,
                header,
                .carousel {
                    height: 100vh;
                }
            }
            @media (min-width: 800px) and (max-width: 850px) {

                html,
                body,
                header,
                .carousel {
                    height: 100vh;
                }
            }
            @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #929FBA !important;
                }
            }
        </style>
    </head>
    <body>
    <header>
        <!-- Barra de Navegación INICIO-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.html" target="_blank">
            <img src="img/images/logo.png" height="50">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Barra Izquierda -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Inicio
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Club</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Datos do Club</a>
                    <a class="dropdown-item" href="#">Contacto</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Primer Equipo</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Plantilla</a>
                    <a class="dropdown-item" href="#">Estadísticas</a>
                    <a class="dropdown-item" href="#">Liga Metropolitana</a>
                    <a class="dropdown-item" href="#">Agenda</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="" target="_blank">Tenda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="" target="_blank">Patrocinadores</a>
                </li>
            </ul>

            <!-- Barra Derecha -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                <a href="https://www.facebook.com/gulansfs" class="nav-link" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="nav-item">
                <a href="https://twitter.com/gulansfs" class="nav-link" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li class="nav-item">
                <a href="https://www.instagram.com/gulansfs" class="nav-link" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <!-- Barra de Navegación FIN -->
    </body>
</html>
