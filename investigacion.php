<?php
include "plantilla/menu.php";
?>
<script type="text/javascript" src="js/investigacion.js"></script>
<div class="container">
    <div class="row">
        <script type="text/javascript" src="js/asignarEstudios.js"></script>
        <form name="form" method="POST" action="#" onSubmit="return guardar();">
            <div class="row">
                <div class="input-field col s6">
                    <label for="cedula">Buscar Docente Por C.I</label>
                    <input name="cedula" type="text" id="cedula">

                    <input type="button" name="button" id="button" value="Buscar" onclick="buscar();"/>
                    <input type="hidden" id="id_docente" name="id_docente"/>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s3">
                    <i class="mdi-social-person prefix"></i>
                    <input id="nombre1" type="text" name="nombre" class="validate" disabled="disabled">
                    <label for="nombre1">Nombre</label>
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

            <div class="input-field col s6">
                <select name="peii" id="peii">
                    <option value="" disabled selected>PEII</option>
                    <option value="Si">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>

            <div class="input-field col s6">
                <input id="nivel_peii" type="text" name="peii" class="validate">
                <label for="nivel_peii">Nivel de PEII</label>
            </div>


            <div class="input-field col s6">
                <input id="ano_aplicacion_peii" type="text" name="ano_aplicacion_peii" class="validate">
                <label for="ano_aplicacion_peii">Año de Aplicacion del PEII</label>
            </div>

            <div class="input-field col s6">
                <select name="forma_grupo_investigacion" id="forma_grupo_investigacion">
                    <option value="" disabled selected>Forma Grupo de Investigacion</option>
                    <option value="Si">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>

            <div class="input-field col s6">
                <input id="nombre_grupo" type="text" name="nombre_grupo" class="validate">
                <label for="nombre_grupo">Nombre Grupo</label>
            </div>

            <div class="input-field col s6">
                <input id="area_investigacion" type="text" name="area_investigacion" class="validate">
                <label for="area_investigacion">Area de Investigacion</label>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="observaciones" name="observaciones" class="observaciones"></textarea>
                    <label for="observaciones">Observaciones</label>
                </div>
            </div>

        </form>

    </div>


    <?php
    include "plantilla/pie.php";
    ?>
