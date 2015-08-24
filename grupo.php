<?php
include "plantilla/menu.php";
?>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet"  type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="js/grupo.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Asignar Grupo De Proyecto</h5>
                </div>
            </div>

            <form class="col s12" method="post" action="#" onsubmit=" return guardar();">

                <div class="row">
                    <div class="input-field col s6 ">
                        <input type="hidden" id="id_proyecto" name="id_alu" value="0">
                        <input type="text" id="buscarAlumno" name="buscarAlumno" onblur="buscar();">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="nombre" type="text" name="nombre" class="validate"
                               required="required">
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s6">
                        <input id="area_investigacion" type="text" name="area_investigacion" class="validate"
                               required="required">
                        <label for="area_investigacion">Area Investigacion</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <select name="tipo_proyecto" id="tipo_proyecto" class="browser-default">
                            <option value="" disabled selected>Seleccione Tipo de Proyecto</option>
                            <option value="Socio Integrador">Socio Integrador</option>
                            <option value="Socio Productivo">Socio Productivo</option>
                            <option value="Socio Tecnologico">Socio Tecnologico</option>
                        </select>
                    </div>

                    <div class="input-field col s6">
                        <select name="apoyo" id="apoyo" class="browser-default">
                            <option value="" disabled selected>Seleccione Apoyo de la Institución</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s12">
                        <input id="tipo_apoyo" type="text" name="tipo_apoyo" class="validate" required="required">
                        <label for="tipo_apoyo">Clase de Apoyo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="resumen_proyecto" name="resumen_proyecto" type="text" class="validate">
                        <label form="resumen_proyecto">Resumen del Proyecto</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        <select name="id_carrera" id="id_carrera" class="browser-default"></select>
                    </div>
                    <div class="input-field col s4">
                        <select name="id_docente" id="id_docente" class="browser-default"></select>
                    </div>
                    <div class="input-field col s4">
                        <select name="id_comunidad" id="id_comunidad" class="browser-default"></select>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="observaciones" name="observaciones" type="text" class="validate">
                            <label form="observaciones">Observaciones</label>
                        </div>
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