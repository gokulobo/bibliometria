<?php
include "plantilla/menu.php";
?>
    <!--<link type="text/css" rel="stylesheet" href="css/tabla.css" media="print"/>!-->
    <link type="text/css" rel="stylesheet" href="css/Table2.css" media="all"/>
    <script type="text/javascript" src="js/reporteProyecto.js"></script>
    <style>
        @media print {
            #f1, nav,#phpGrid {
                display: none;
            }

            #resultado {
                display: block;
            }
        }
    </style>

    <div class="row">
        <div class="row">
            <div class="col s12 card-panel" id="f1">
                <h5 class="header center">Listado de Proyectos</h5>
            </div>
        </div>
    </div>
    <div class="col s12" id="phpGrid">

    </div>

    <div class="col s12" id="resultado">

    </div>
<?php
include "plantilla/pie.php";
?>