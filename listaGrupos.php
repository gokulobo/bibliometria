<?php
include "plantilla/menu.php";
?>
<style>
    @media print {
        #f1,#f2,nav{
            display: none;
        }
    }
</style>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="js/reporteGrupo.js"></script>
    <div class="container">
        <div class="row">
            <div class="row" id="f1">
                <div class="col s12 card-panel">
                    <h5 class="header center">Lista De Grupos Por Cohorte</h5>
                </div>
            </div>
            <div class="row" id="f2">

                <div class="col s12 card-panel">
                    <div class="row">
                        <div class="input-field col s3 ">
                            <select name="id_carrera" id="id_carrera" class="browser-default"></select>
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
                        <div class="input-field col s2 ">
                            <button class="btn waves-effect waves-light" onclick="buscar();">
                            <i class="material-icons">Buscar</i>
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