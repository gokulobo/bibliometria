<?php
include"plantilla/menu.php"
?>
    <script type="text/javascript" src="js/carrera.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de Carrera</h5>
                </div>
            </div>

            <form action="#" method="post" onsubmit="return guardar();" id="form">

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="mdi-social-person prefix"></i>
                            <input id="numero_carrera" name="numero_carrera" type="text" class="validate" required="required"
                                   onkeypress="ValidaSoloNumeros();">
                            <label for="numero_carrera">Código de Carrera</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="mdi-social-person prefix"></i>
                            <input id="nombre_carrera" name="nombre_carrera" type="text" class="validate" required="required">
                            <label for="nombre_carrera">Carrera</label>
                        </div>

                        <div class="input-field col s4">
                            <select name="id_sede" id="id_sede" class="browser-default" ></select>
                            <option value="" disabled selected>Seleccione Sede</option>
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
include"plantilla/pie.php"
?>
