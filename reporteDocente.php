<?php
include "plantilla/menu.php";
?>
<link type="text/css" rel="stylesheet" href="css/tabla.css" media="print"/>
<script type="text/javascript" src="js/reportes.js"></script>
<style>
        @media print {
            #f1,#f2,nav,#phpgrid{
                display: none;
            }
        }
        </style>
<div class="container">
    <div class="row">

        <div class="row" id="f2">
            <div class="col s12 card-panel">
                <h5 class="header center">Listado De Docentes</h5>
            </div>
        </div>

        <div class="row" id="f1">
            <div class="col s12" >
                <div class="input-field col s4">
                    <input id="cedula" type="text" name="cedula" class="validate"
                           required="required" placeholder="Cedula a Buscar" onblur="buscar();">

                </div>
            </div>
        </div>
            <div class="col s12" id="resultado">

            </div>
        </div>
    </div>
</div>
<div class="row">
            <div class="col s12 card-panel" id="phpgrid">

            </div>
        </div>
<?php
include "plantilla/pie.php";
?>