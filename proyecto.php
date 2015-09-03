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
                    <h5 class="header center">Registro de Proyectos</h5>
                </div>
            </div>
            <div class="row">
                <form class="col s12" method="post" action="#" onsubmit=" return guardar();">
                    <div class="col s12 card-panel blue lighten-4" id="basico">
                        <div class="row">
                            <div class="input-field col s6 ">
                                <input type="hidden" id="id_proyecto" name="id_proyecto" value="0">
                                <input type="text" id="buscarProyecto" name="buscarProyecto" onblur="buscar();">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="titulo_proyecto" type="text" name="titulo_proyecto" class="validate"
                                       required="required">
                                <label for="titulo_proyecto">Título del Proyecto</label>
                            </div>


                            <div class="input-field col s6">
                                <input id="area_investigacion" type="text" name="area_investigacion" class="validate"
                                       required="required">
                                <label for="area_investigacion">Area Investigación</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <select name="tipo_proyecto" id="tipo_proyecto" class="browser-default" onchange="verificarTipo();">
                                    <option value="" disabled selected>Seleccione Tipo de Proyecto</option>
                                    <option value="Socio Integrador">Socio Integrador</option>
                                    <option value="Socio Productivo">Socio Productivo</option>
                                    <option value="Socio Tecnologico">Socio Tecnológico</option>
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
                                <input id="tipo_apoyo" type="text" name="tipo_apoyo" class="validate">
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
                                <select name="id_carrera" id="id_carrera" class="browser-default"
                                        onchange="listarDocenteCarrera();"></select>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_docente" id="id_docente" class="browser-default"></select>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_comunidad" id="id_comunidad" class="browser-default"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 card-panel blue lighten-4">
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="cohorte" id="cohorte" class="browser-default" onchange="listarAlumnosCohorte();"
                                        required="required"></select>
                            </div>
                            <div class="input-field col s6">
                                <select name="estatus" id="estatus" class="browser-default">
                                    <option value="" disabled selected>Seleccione Estatus</option>
                                    <option value="0">Pendiente</option>
                                    <option value="1">Terminado</option>
                                </select>
                            </div>
                        </div>
                        <div id="ocultar">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="observaciones" name="observaciones" type="text" class="validate">
                                    <label form="observaciones">Carreras asociadas 1</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="carrera2" name="carrera2" type="text" class="validate">
                                    <label form="carrera2">Carreras asociadas 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <select name="alum" id="alum" class="browser-default"></select>
                            </div>
                            <div class="input-field col s2">
                                <input type="button" onclick="agregar();" value="Agregar>>"/>
                                <input type="button" onclick="quitar();" value="<<Quitar"/>
                            </div>
                            <div class="input-field col s6">
                                <select name="alumnos" id="alumnos" class="browser-default" multiple style="height: 150px;"></select>
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
    </div>

<?php
include "plantilla/pie.php";
?>