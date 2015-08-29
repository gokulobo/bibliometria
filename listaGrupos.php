<?php
include "plantilla/menu.php";
?>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="js/proyecto.js"></script>
    <script type="text/javascript" src="js/configurar.js"></script>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Lista De Grupos Por Cohorte</h5>
                </div>
            </div>
            <div class="row">

                <div class="col s12 card-panel">
                    <div class="row">
                        <div class="input-field col s5 ">
                            <select name="id_carrera" id="id_carrera" class="browser-default"></select>
                        </div>
                        <div class="input-field col s5 ">
                            <select name="cohorte" id="cohorte" class="browser-default" required="required"></select>
                        </div>
                        <div class="input-field col s2 ">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                            <i class="material-icons">Buscar</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "plantilla/pie.php";
?>