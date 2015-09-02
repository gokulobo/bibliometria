<?php
include "plantilla/menu.php";
?>
    <link type="text/css" rel="stylesheet" href="css/tabla.css" media="print"/>
    <script type="text/javascript" src="js/reportesGridAlumnos.js"></script>
    <style>
        @media print {
            #f1,nav,#phpgrid{
                display: none;
            }
            #resultado{
                display: block;
            }
        }
    </style>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel" id="f1">
                    <h5 class="header center">Listado de Alumnos</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12 card-panel" id="phpgrid">

                </div>
            </div>
        </div>
    </div>
    <div class="col s12" id="resultado" >

    </div>
<?php
include "plantilla/pie.php";
?>