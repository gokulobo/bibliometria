<?php
include "plantilla/menu.php"
?>

<script type="text/javascript" src="js/sede.js"></script>

    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de Sede</h5>
                </div>
            </div>

            <form action="#" method="post" onsubmit="return guardar();" id="form">
                <div class="row">
                    <div class="input-field col s4">
                        <i class="mdi-social-person prefix"></i>
                        <input id="codigo" name="codigo" type="text" class="validate" required="required"
                               onkeypress="ValidaSoloNumeros();">
                        <label for="codigo">Codigo de Sede</label>



                    </div>
                    <div class="input-field col s4">
                        <i class="mdi-social-person prefix"></i>
                        <input id="nombre_sede" name="nombre_sede" type="text" class="validate" required="required">
                        <label for="nombre_sede">Sede</label>
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
include "plantilla/pie.php"
?>
