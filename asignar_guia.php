<?php
include "plantilla/menu.php";
?>
    <script type="text/javascript" src="js/asignarGuia.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Asignación de Cohorte</h5>
                </div>
            </div>

            <form name="form" method="post" action="#" onSubmit="return guardar();" id="form">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="cedula">Buscar Docente Por C.I</label>
                        <input name="cedula" type="text" id="cedula">

                        <input class="btn waves-effect waves-light" type="button" name="button" id="button" value="Buscar" onclick="buscar();"/>
                        <input type="hidden" id="id_docente" name="id_docente"/>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s3">
                        <i class="mdi-social-person prefix"></i>
                        <input id="nombre" type="text" name="nombre" class="validate" readonly">
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s3">
                        <input id="apellido" type="text" name="apellido" class="validate" readonly">
                        <label for="apellido">Apellidos</label>
                    </div>

                    <div class="input-field col s3">
                        <i class="mdi-action-perm-identity prefix"></i>
                        <input id="ced" type="text" name="ced" class="validate" readonly">
                        <label for="cedula">Cedula</label>
                    </div>
                </div>

                <div class="row">
                            <div class="input-field col s3">
                                <select name="cohorte" id="cohorte" class="browser-default green"></select>
                                <option value="" disabled selected>Seleccione Cohorte</option>
                            </div>

                            <div class="input-field col s3">
                                <select name="trayecto" id="trayecto" class="browser-default green">
                                    <option value="" disabled selected>Seleccione Trayecto</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>

                            <div class="input-field col s3">
                                <select name="trimestre" id="trimestre" class="browser-default green">
                                    <option value="" disabled selected>Seleccione Modalidad</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                </select>
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
include "plantilla/pie.php";
?>