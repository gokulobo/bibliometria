<?php
session_start();
if (!isset($_SESSION['usuario'])) header("Location:index.html");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    <script>
        $(function () {
            $('ul.tabs').tabs();
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown({hover: true, constrain_width: false});
            $('.slider').slider({full_width: true});



        });

    </script>
</head>
<body>
<ul id="menudocente" class="dropdown-content">
    <li><a href="registrardocente.php">Datos del Docente</a></li>
    <li><a href="estudio.php">Estudios Realizados</a></li>
    <li><a href="investigacion.php">PEII</a></li>
    <li><a href="articulo.php">Articulos</a></li>
    <li><a href="cohorte.php">Registrar Cohorte</a></li>
    <li><a href="asignar_guia.php">Asignar Docente</a></li>
</ul>

<ul id="menuproyecto" class="dropdown-content">
    <li><a href="alumno.php">Alumno</a></li>
    <li><a href="asignartrayecto.php">Asignar Trayecto</a></li>
    <li><a href="comunidad.php">Comunidad</a></li>
    <li><a href="representante.php">Representante</a></li>
    <li><a href="proyecto.php">Proyecto</a></li>
    <li><a href="grupo.php">Asignar Grupo</a></li>
</ul>
<ul id="panel" class="dropdown-content">
    <li><a href="sede.php">Sede</a></li>
    <li><a href="carrera.php">Carrera</a></li>
    <li><a href="subirTesis.php">Subir Tesis</a></li>
    <li><a href="Venezuela.php">Registro de Ubicacion</a></li>
</ul>

<ul id="listaReportes" class="dropdown-content">
    <li><a href="reporteDocente.php">Reporte Docentes</a></li>
    <li><a href="reporteAlumnos.php">Reporte Alumnos</a></li>
    <li><a href="listaGrupos.php">Reporte Grupos</a></li>
    <li><a href="datosComunidad.php">Comunidad</a></li>
    <li><a href="bibliometria.php">Bibliometria</a></li>

</ul>

<ul id="menudocente1" class="dropdown-content">
    <li><a href="registrardocente.php">Datos del Docente</a></li>
    <li><a href="estudio.php">Estudios Realizados</a></li>
    <li><a href="investigacion.php">PEII</a></li>
    <li><a href="articulo.php">Articulos</a></li>
    <li><a href="cohorte.php">Registrar Cohorte</a></li>
    <li><a href="asignar_guia.php">Asignar Docente</a></li>
</ul>

<ul id="menuproyecto1" class="dropdown-content">
    <li><a href="alumno.php">Alumno</a></li>
    <li><a href="asignartrayecto.php">Asignar Trayecto</a></li>
    <li><a href="comunidad.php">Comunidad</a></li>
    <li><a href="representante.php">Representante</a></li>
    <li><a href="proyecto.php">Proyecto</a></li>
    <li><a href="grupo.php">Asignar Grupo</a></li>
</ul>

<ul id="panel1" class="dropdown-content">
    <li><a href="sede.php">Sede</a></li>
    <li><a href="carrera.php">Carrera</a></li>
    <li><a href="subirTesis.php">Subir Tesis</a></li>
    <li><a href="Venezuela.php">Registro de Ubicacion</a></li>
</ul>

<ul id="listaReportes1" class="dropdown-content">
    <li><a href="reporteDocente.php">Reporte Docentes</a></li>
    <li><a href="reporteAlumnos.php">Reporte Alumnos</a></li>
    <li><a href="listaGrupos.php">Reporte Grupos</a></li>
    <li><a href="datosComunidad.php">Comunidad</a></li>
    <li><a href="bibliometria.php">Bibliometria</a></li>

</ul>

<nav>
    <div class="nav-wrapper indigo accent-3">
        <a href="#!" class="brand-logo"><img src="login/imagenes/logo1.jpg" style="width: 60%"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i
                class="mdi-action-toc"></i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="inicio.php"><i class="mdi-action-home"></i></a></li>
            <?php if($_SESSION['coordinador'] == 1){?>
            <li><a href="#!" data-activates="panel" class="dropdown-button">Panel</a></li>
            <li><a href="#!" data-activates="menudocente" class="dropdown-button">Docente</a></li>
            <?php }?>
            <li><a href="#!" data-activates="menuproyecto" class="dropdown-button">Proyecto</a></li>
            <li><a href="#!" data-activates="listaReportes" class="dropdown-button">Consulta y Reportes</a></li>

            <li><a href="salir.php"><i class="mdi-action-exit-to-app"></i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#!"><i class="mdi-action-home"></i></a></li>
            <?php if($_SESSION['coordinador'] == 1){?>
            <li><a href="#!" data-activates="panel1" class="dropdown-button">Panel</a></li>
            <li><a href="#!" data-activates="menudocente1" class="dropdown-button">Docente</a></li>
            <?php }?>
            <li><a href="#!" data-activates="menuproyecto1" class="dropdown-button">Proyecto</a></li>
            <li><a href="#!" data-activates="listaReportes1" class="dropdown-button">Consulta y Reportes</a></li>

            <li><a href="salir.php"><i class="mdi-action-exit-to-app"></i></a></li>
        </ul>
    </div>
</nav>