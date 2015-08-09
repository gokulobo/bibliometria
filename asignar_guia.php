<?php
include "plantilla/menu.php";
?>
    <div class="container">
        <div class="row">

            <script type="text/javascript" src="js/asignarEstudios.js"></script>
            <form name="form" method="POST" action="#" onSubmit="return guardar();">
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
                        <input id="nombre" type="text" name="nombre" class="validate" disabled="disabled">
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s3">
                        <input id="apellido" type="text" name="apellido" class="validate" disabled="disabled">
                        <label for="apellido">Apellidos</label>
                    </div>

                    <div class="input-field col s3">
                        <i class="mdi-action-perm-identity prefix"></i>
                        <input id="cedula" type="text" name="cedula" class="validate" disabled="disabled">
                        <label for="cedula">Cedula</label>
                    </div>
                </div>

                <div class="row">
                            <div class="input-field col s3">
                                <select name="cohorte" id="cohorte"></select>
                                <option value="" disabled selected>Seleccione Cohorte</option>
                            </div>

                            <div class="input-field col s3">
                                <select name="trayecto" id="trayecto">
                                    <option value="" disabled selected>Seleccione Trayecto</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>

                            <div class="input-field col s3">
                                <select name="trimestre" id="trimestre">
                                    <option value="" disabled selected>Seleccione Modalidad</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                </select>
                            </div>
                </div>
            </form>
        </div>
    </div>

<?php
include "plantilla/pie.php";
?>