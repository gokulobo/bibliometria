<?php
include "plantilla/menu.php";
?>
    <script type="text/javascript" src="js/comunidad.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de Comunidad</h5>
                </div>
            </div>

            <form name="form" method="POST" action="#" onsubmit="return guardar();" id="form">

                <div class="row">
                    <div class="input-field col s2">
                        <input id="fecha" type="text" value="<?php echo date("d/m/Y") ?>" disabled="disabled">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="hidden" id="id_comunidad" name="id_comunidad" value="0">
                        <input id="rif" name="rif" type="text" class="validate"  onblur="buscar();">
                        <label for="rif">RIF</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix red-text"></i>
                        <input id="nombre" type="text" name="nombre" class="validate" required="required">
                        <label for="nombre">Nombre</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="correo" type="text" name="correo" class="validate">
                        <label for="correo">Correo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <select name="estado" id="estado" class="browser-default" onchange="buscaMunicipio();"></select>
                    </div>


                    <div class="input-field col s4">
                        <select name="municipio" id="municipio" class="browser-default" onchange="buscaParroquia();">

                        </select>
                    </div>

                    <div class="input-field col s4">
                        <select name="parroquia" id="parroquia" class="browser-default">

                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-settings-phone prefix"></i>
                        <input id="telefono_hab" type="text" name="telefono_hab" class="validate">
                        <label for="telefono_hab">Teléfono del Lugar</label>
                    </div>


                    <div class="input-field col s6">
                        <i class="mdi-hardware-phone-android prefix"></i>
                        <input id="telefono_cel" type="text" name="telefono_cel" class="validate">
                        <label for="telefono_cel">Teléfono Celular</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-home prefix"></i>
                        <input id="direccion" type="text" name="direccion" class="validate" required="required">
                        <label for="direccion">Dirección</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <select name="convenio" id="convenio" class="browser-default">
                            <option value="" disabled selected>Convenio</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>


                    <div class="input-field col s6">
                        <input id="tipo_convenio" type="text" name="tipo_convenio" class="validate">
                        <label for="tipo_convenio">Tipo de Convenio</label>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s12">
                        <input id="observaciones" type="tel" name="observaciones" class="validate">
                        <label for="observaciones">Observaciones</label>
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