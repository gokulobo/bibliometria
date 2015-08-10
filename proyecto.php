<?php
include "plantilla/menu.php";
?>
<script type="text/javascript" src="js/proyecto.js"></script>
    <script type="text/javascript" src="js/alumno.js"></script>

    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de Proyectos</h5>
                </div>
            </div>

            <form class="col s12">

                <div class="row">
                    <div class="input-field col s2">
                        <input id="fecha" type="text" value="<?php echo date("d/m/Y") ?>" disabled="disabled">

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="titulo_proyecto" type="text" name="titulo_proyecto" class="validate" required="required">
                        <label for="titulo_proyecto">Titulo del Proyecto</label>
                    </div>


                    <div class="input-field col s6">
                        <input id="area_investigacion" type="text" name="area_investigacion" class="validate" required="required">
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
                    <div class="input-field col s6">
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