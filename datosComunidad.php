<?php
include "plantilla/menu.php";
?>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="js/datosComunidad.js"></script>
    <style>
        @media print {
            #f1,#f2,nav{
                display: none;
            }
        }
        </style>
    <div class="container">
        <div class="row">
            <div class="row" id="f1">
                <div class="col s12 card-panel">
                    <h5 class="header center">Datos Comunidad Por Proyecto</h5>
                </div>
            </div>
            <div class="row" id="f2">
                <div class="col s12 card-panel blue lighten-4">
                    <div class="row">
                        <div class="input-field col s6 ">
                            <input type="hidden" id="id_proyecto" name="id_proyecto" value="0">
                            <input type="text" id="proyecto" name="proyecto">
                        </div>
                        <div class="input-field col s6 ">
                            <button class="btn waves-effect waves-light" onclick="buscar();">
                                <i class="material-icons">Buscar</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="reporte" class="row"></div>
        </div>
    </div>
<?php
include "plantilla/pie.php";
?>