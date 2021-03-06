<?php
include "plantilla/menu.php";
?>
    <script type="text/javascript" src="js/asignarTrayecto.js"></script>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Asignar Trayecto</h5>
                </div>
            </div>
            <div class="row">

                <div class="col s12 card-panel">
                    <div class="row">
                        <div class="input-field col s3">
                            <select name="id_carrera" id="id_carrera" class="browser-default" required="required"></select>
                        </div>
                        <div class="input-field col s3 ">
                            <select name="cohorte" id="cohorte" class="browser-default" required="required"></select>
                        </div>
                        <div class="input-field col s3">
                            <select name="trayecto" id="trayecto" class="browser-default" required="required">
                                <option value="0" disabled selected>Seleccione Trayecto</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                            </select>
                        </div>

                        <div class="input-field col s3">
                            <select name="trimestre" id="trimestre" class="browser-default" required="required">
                                <option value="0" disabled selected>Seleccione Trimestre</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3 ">
                            <button class="btn waves-effect waves-light" onclick="modificar();">
                                <i class="material-icons">Modificar</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="reporte" class="col s12">

                </div>
            </div>
        </div>
    </div>
<?php
include "plantilla/pie.php";
?>