<?php
include "plantilla/menu.php";
?>
<script type="text/javascript" src="js/investigacion.js"></script>
<div class="container">
    <div class="row">

        <div class="row">
            <div class="col s12 card-panel">
                <h5 class="header center">Registro de Investigación</h5>
            </div>
        </div>

        <form name="form" method="POST" action="#" onSubmit="return guardar();" id="form">
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
                    <input id="nombre" type="text" name="nombre" class="validate" readonly>
                    <label for="nombre">Nombre</label>
                </div>


                <div class="input-field col s3">
                    <input id="apellido" type="text" name="apellido" class="validate" readonly>
                    <label for="apellido">Apellidos</label>
                </div>

                <div class="input-field col s3">
                    <i class="mdi-action-perm-identity prefix"></i>
                    <input id="ced" type="text" name="ced" class="validate" readonly>
                    <label for="ced">Cedula</label>
                </div>
            </div>

            <div class="input-field col s6">
                <select name="peii" id="peii" required="required">
                    <option value="" disabled selected>PEII</option>
                    <option value="Si">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>

            <div class="input-field col s6">
                <input id="nivel_peii" type="text" name="nivel_peii" class="validate" required="required">
                <label for="nivel_peii">Nivel de PEII</label>
            </div>


            <div class="input-field col s6">
                <input id="ano_aplicacion_peii" type="text" name="ano_aplicacion_peii" class="validate" required="required">
                <label for="ano_aplicacion_peii">Año de Aplicacion del PEII</label>
            </div>

            <div class="input-field col s6">
                <select name="forma_grupo_investigacion" id="forma_grupo_investigacion" required="required">
                    <option value="" disabled selected>Forma Grupo de Investigacion</option>
                    <option value="Si">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>

            <div class="input-field col s6">
                <input id="nombre_investigacion" type="text" name="nombre_investigacion" class="validate" required="required">
                <label for="nombre_investigacion">Nombre Grupo</label>
            </div>

            <div class="input-field col s6">
                <input id="area_investigacion" type="text" name="area_investigacion" class="validate" required="required">
                <label for="area_investigacion">Area de Investigacion</label>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="observaciones" name="observaciones" type="text" class="validate">
                    <label form="observaciones">Observaciones</label>
                </div>
            </div>

            <center>
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons">ENVIAR</i>
                </button>
            </center>
        </form>
    </div>


    <?php
    include "plantilla/pie.php";
    ?>
