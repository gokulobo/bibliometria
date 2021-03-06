<?php
include"plantilla/menu.php";
?>
    <script type="text/javascript" src="js/asignarEstudios.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de Estudios</h5>
                </div>
            </div>

            <form name="form" method="post" action="#" onsubmit="return guardar();" id="form">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="cedula">Buscar Docente Por C.I</label>
                        <input id="cedula" name="cedula" type="text" class="validate" required="required"
                               onkeypress="ValidaSoloNumeros()" onblur="buscar();">

                        <input class="btn waves-effect waves-light" type="button" name="button" id="button" value="Buscar" onclick="buscar();" />
                        <input type="hidden" id="id_docente" name="id_docente" />
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s4">
                        <i class="mdi-social-person prefix"></i>
                        <input id="nombre" type="text" name="nombre" class="validate" readonly>
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s4">
                        <input id="apellido" type="text" name="apellido" class="validate" readonly>
                        <label for="apellido">Apellidos</label>
                    </div>

                    <div class="input-field col s4">
                        <i class="mdi-action-perm-identity prefix"></i>
                        <input id="ced" type="text" name="ced" class="validate" readonly>
                        <label for="cedula">Cédula</label>
                    </div>
                </div>

                <div class="row">
                        <div class="input-field col s3">
                        <select name="tipo" id="tipo" class="browser-default" required="required">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Pregrado">Pregrado</option>
                            <option value="Postgrado">Postgrado</option>
                            <option value="Doctorado">Doctorado</option>
                            <option value="Maestria">Maestria</option>
                            <option value="Magister">Magister</option>
                        </select>
                    </div>

                    <div class="input-field col s3">
                        <input id="nombre" type="text" name="nombre" class="validate" required="required">
                        <label for="nombre">Nombre de Estudio</label>
                    </div>

                    <div class="input-field col s3">
                        <input id="lugar" type="text" name="lugar" class="validate" required="required">
                        <label for="lugar">Lugar de Estudio</label>
                    </div>
                </div>

                <center>
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        <i class="material-icons">Guardar</i>
                    </button>
                </center>
            </form>
        </div>
    </div>
<?php
include"plantilla/pie.php";
?>