<?php
include "plantilla/menu.php";
?>
<script type="text/javascript" src="js/reportesGridComunidad.js"></script>

<div class="container">
    <div class="row">

        <div class="row">
            <div class="col s12 card-panel">
                <h5 class="header center">Listado de Comunidad</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 card-panel" id="phpgrid">

            </div>
        </div>
        <div class="row">
            <div class="col s12" >
                <div class="input-field col s4">
                    <input id="rif" type="text" name="rif" class="validate"
                           required="required" placeholder="Rif a Buscar" onblur="buscar();">

                </div>
            </div>
        </div>
            <div class="col s12" id="resultado">

            </div>
        </div>
    </div>
</div>
<?php
include "plantilla/pie.php";
?>