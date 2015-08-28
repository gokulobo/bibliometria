<?php
include "plantilla/menu.php";
?>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet"  type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="js/grupo.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Asignar Grupo De Proyecto</h5>
                </div>
            </div>

            <form class="col s12" method="post" action="#" onsubmit=" return guardar();">

                <div class="row">
                    <div class="input-field col s6 ">
                        <input type="hidden" id="id_alumno" name="id_alumno" value="0">
                        <input type="text" id="buscarAlumno" name="buscarAlumno" onblur="buscar();">
                    </div>
                    <div class="input-field col s6">
                        <select name="proyecto" id="proyecto" class="browser-default">
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        <input id="nombre" type="text" name="nombre" class="validate"
                               required="required" disabled="disabled" placeholder="Nombre">

                    </div>


                    <div class="input-field col s4">
                        <input id="apellido" type="text" name="apellido" class="validate"
                               required="required" disabled="disabled" placeholder="Apellido">
                    </div>

                    <div class="input-field col s4">
                        <select name="carrera" id="carrera" class="browser-default" disabled="disabled"></select>
                    </div>
                </div>

                <div class="row hide">
                    <div class="input-field col s12 card-panel">
                        algo
                    </div>
                </div>
                <center>
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        <i class="material-icons">ENVIAR</i>
                    </button>
                </center>
            </form>
        </div>
    </div>

<?php
include "plantilla/pie.php";
?>