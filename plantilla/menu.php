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
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown({hover: true, constrain_width: false});
            $('.slider').slider({full_width: true});
            $('ul.tabs').tabs();


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
        <li><a href="comunidad.php">Comunidad</a></li>
        <li><a href="representante.php">Representante</a></li>
        <li><a href="proyecto.php">Proyecto</a></li>
        <li><a href="#">Grupo</a></li>
    </ul>

    <ul id="panel" class="dropdown-content">
        <li><a href="sede.php">Sede</a></li>
        <li><a href="carrera.php">Carrera</a></li>
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
        <li><a href="comunidad.php">Comunidad</a></li>
        <li><a href="representante.php">Representante</a></li>
        <li><a href="proyecto.php">Proyecto</a></li>
        <li><a href="#"></a>Grupo</li>
    </ul>

    <ul id="panel1" class="dropdown-content">
        <li><a href="sede.php">Sede</a></li>
        <li><a href="carrera.php">Carrera</a></li>
    </ul>
<nav>
    <div class="nav-wrapper indigo accent-3">
        <a href="#!" class="brand-logo"><img src="login/imagenes/logo1.jpg" style="width: 60%"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i
                class="mdi-action-toc"></i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="inicio.php"><i class="mdi-action-home"></i>Inicio</a></li>
            <li><a href="panel" data-activates="panel" class="dropdown-button">Panel</a></li>
            <li><a href="menudocente" data-activates="menudocente" class="dropdown-button">Docente</a></li>
            <li><a href="menuproyecto" data-activates="menuproyecto" class="dropdown-button">Proyecto</a></li>
            <li><a href="#" data-activates="menucr" class="dropdown-button">Consulta y Reportes</a></li>
            <li><a href="salir.php"><i class="mdi-action-exit-to-app"></i>Salir</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="inicio.php"><i class="mdi-action-home"></i>Inicio</a></li>
            <li><a href="panel1" data-activates="panel1" class="dropdown-button">Panel</a></li>
            <li><a href="menudocente1" data-activates="menudocente1" class="dropdown-button">Docente</a></li>
            <li><a href="menuproyecto1" data-activates="menuproyecto1" class="dropdown-button">Proyecto</a></li>
            <li><a href="#" data-activates="menucr" class="dropdown-button">Consulta y Reportes</a></li>
            <li><a href="salir.php"><i class="mdi-action-exit-to-app">Salir</i></a></li>
        </ul>
    </div>
</nav>