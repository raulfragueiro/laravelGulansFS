@extends('layouts.main')
@section('content')
@include('layouts.partido')
@include('layouts.resultados')
@include('layouts.productos')

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
@endsection