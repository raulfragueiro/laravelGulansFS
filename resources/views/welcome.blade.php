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

        <!--Carrusel-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicadores-->
        <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicadores-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

        <!--Primer slide-->
        <div class="carousel-item active">
            <div class="view " style="background-image: url('img/images/foto4.jpeg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mascara-->
            <div class="mask rgba-black-light">

            </div>
            <!-- Mascara-->

            </div>
        </div>
        <!--/Primer slide-->

        <!--Segundo slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/images/foto2.jpeg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mascara-->
            <div class="mask rgba-black-light">

            </div>
            <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Segundo slide-->

        <!--Tercer slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/images/foto5.jpeg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mascara-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            </div>
            <!-- Mascara-->

            </div>
        </div>
        <!--/Tercer slide-->

        </div>
        <!--/.Slides-->

        <!--Controles-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        <!--/.controles-->

        </div>
        <!--/.Carrusel-->

        </header>

        <!--Main layout-->
        <main>
            <div class="container">

            <!--Section: Proximo Partido-->
            <section class="mt-5 wow fadeIn">

                <!--Grid fila-->
                <div class="row">

                <!--Grid columna-->
                <div class="col-md-6 mb-4">

                    <img src="img/images/JOR17vsMargolariPArtido.png" class="img-fluid z-depth-1-half"
                    alt="">

                </div>
                <!--Grid columna-->

                <!--Grid columna-->
                <div class="col-md-6 mb-4">

                    <!-- Main -->
                    <h3 class="h3 mb-3">Próximo Partido</h3>
                    
                    <p>Xornada: 17</p>
                    <p>Rival: Margolari F.S. (1º)</p>
                    <p>Fecha: 15/02/2020</p>
                    <p>Hora: 17:30</p>
                    <p>Lugar: Pabellón de Mondariz</p>
                    <!-- CTA -->
                    <a target="_blank" href="/img/images/JOR17vsMargolari.png" class="btn btn-grey btn-md">Convocados
                    </a>
                    <a target="_blank" href="https://goo.gl/maps/Mc7KBJpQh5DBaHii6" class="btn btn-grey btn-md">Ruta al Campo
                    </a>

                </div>
                <!--Grid columna-->

                </div>
                <!--Grid fila-->

            </section>
            <!--Section: Proximo Partido-->

            <!--Section: Resultados-->
            <section class="mt-5 wow fadeIn">

                <div class="container">
                <div class="row">
                    <div class="col-sm">
                    <img src="img/images/JOR16.png" class="img-fluid z-depth-1-half">
                    </div>
                    <div class="col-sm">
                    <img src="img/images/JOR15.png" class="img-fluid z-depth-1-half">     
                    </div>
                    <div class="col-sm">
                    <img src="img/images/JOR14.png" class="img-fluid z-depth-1-half">     
                    </div>
                </div>
                </div>

            </section>
            <!--Section: Resultados-->

            <hr class="my-5">

            <!--Section: Products v.3-->
            <section class="text-center mb-4">

                <!--Grid row-->
                <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/images/CAMISETA_CALENTAR_GULANS_DEL.png" class="card-img-top"
                        alt="">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <h6>
                        <strong>
                            <a href="" class="dark-grey-text">Camiseta Calentamiento 2019/2020</a>
                        </strong>
                        </h6>

                        <h4 class="font-weight-bold blue-text">
                        <strong>25,99€</strong>
                        </h4>

                    </div>
                    <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/images/CAMISETA_GULANSFS_DEL.jpg" class="card-img-top" alt="">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <h5>
                        <strong>
                            <a href="" class="dark-grey-text">Camiseta Principal 2019/2020</a>
                        </strong>
                        </h5>

                        <h4 class="font-weight-bold blue-text">
                        <strong>34,99€</strong>
                        </h4>

                    </div>
                    <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/images/SUDADERA.jpg" class="card-img-top"
                        alt="">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <h5>
                        <strong>
                            <a href="" class="dark-grey-text">Sudadera Calentamiento
                            </a>
                        </strong>
                        </h5>

                        <h4 class="font-weight-bold blue-text">
                        <strong>49,99€</strong>
                        </h4>

                    </div>
                    <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Fourth column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/images/POLO_GULANSFS.png" class="card-img-top"
                        alt="">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <h5>
                        <strong>
                            <a href="" class="dark-grey-text">Polo Oficial</a>
                        </strong>
                        </h5>

                        <h4 class="font-weight-bold blue-text">
                        <strong>39,99$</strong>
                        </h4>

                    </div>
                    <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Fourth column-->

                </div>
                <!--Grid row-->


            </section>
            <!--Section: Products v.3-->
            <hr class="my-5">
            <!--Section: Stats & Clasificacion-->
            <section>

                <!--Grid fila-->
                <div class="row wow fadeIn">

                <!--Grid columna-->
                <div class="col-lg-6 col-md-12 px-4">

                    <!--Primera fila-->
                    <div class="row text-center">
                    <div class="col-10">
                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="green">
                            <tr>
                            <th class="th-sm">Part.
                            </th>
                            <th class="th-sm">Vic.
                            </th>
                            <th class="th-sm">Emp.
                            </th>
                            <th class="th-sm">Der.
                            </th>
                            <th class="th-sm">Goles
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>15</td>
                            <td>5</td>
                            <td>2</td>
                            <td>8</td>
                            <td>40</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                    <!--/Primera fila-->


                    <!--Segunda fila-->
                    <div class="row">
                    <div class="col-10">
                        <h5 class="feature-title text-center">Goleadores</h5>
                        <table id="dtBasicExample" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                        <thead class="green">
                            <tr>
                            <th class="th-sm">
                            </th>
                            <th class="th-sm">Nombre
                            </th>
                            <th class="th-sm">Goles.
                            </th>
                            <th class="th-sm">Partidos
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><img src="/img/images/jugador.png" height="20"></td>
                            <td>David Fernandez</td>
                            <td>8</td>
                            <td>8</td>
                            </tr>
                            <tr>
                            <td><img src="/img/images/jugador.png" height="20"></td>
                            <td>David Fernandez</td>
                            <td>8</td>
                            <td>8</td>
                            </tr>
                            <tr>
                            <td><img src="/img/images/jugador.png" height="20"></td>
                            <td>David Fernandez</td>
                            <td>8</td>
                            <td>8</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                    <!--/Segunda fila-->

                    <div style="height:30px"></div>
                </div>
                <!--/Grid columna-->

                <!--Grid columna-->
                <div class="col-lg-6 col-md-12">
                    <div style="font-size: 1em;line-height: 1em;background: #000;color: #fff;margin: 0 auto;padding: 0.3em 0;width:90%; text-align:center">
                    <a target="_blank" style="color:#FFF;text-decoration:none" 
                    href="https://www.siguetuliga.com/liga/galicia-ligas-locales-pontevedra-liga-metropolitana-fs-condado-honor/clasificacion?utm_source=widget2&utm_medium=webs%2Bo%2Bblogs&utm_campaign=Widgets%2Bresultados">
                    Clasificacion Liga Metropolitana FS Condado Honor</a>
                </div>
                <script type="text/javascript">widthIcon = "14";heightIcon = "14";</script>
                <script language="javascript" src="https://www.siguetuliga.com/widget/clasificacion2.php?id=3899" charset="iso-8859-1"></script>
                </div>
                <!--/Grid columna-->

                </div>
                <!--/Grid fila-->

            </section>
            <!--Section: Stats & Clasificacion-->

            </div>
        </main>
        <!--Main layout-->

        <!--Footer-->
        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark pt-4">
        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
            <h5 class="mb-1">Rexistrate</h5>
            </li>
            <li class="list-inline-item">
            <a href="#!" class="btn btn-danger btn-rounded">Iniciar Sesión</a>
            </li>
        </ul>
        <!-- Call to action -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
            </a>
            </li>
            <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
            </li>
            <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
            </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="index.html"> Gulans F.S.</a>
        </div>
        <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Initializations -->
        <script type="text/javascript">
            // Animations initialization
            new WOW().init();

        </script>
    </body>
</html>
