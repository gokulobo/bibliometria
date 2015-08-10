<?php
include "plantilla/menu.php";
?>
<script type="text/javascript" src="js/representante.js"></script>
    <div class="container">
        <div class="row">
            <div class="col s12"></div>
            <form name="form" method="post" action="#"  onsubmit="return guardar();" id="form">

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix red-text"></i>
                                <input id="nombre" type="text" name="nombre" class="validate hide-on-small-only" required="required">
                                <label for="nombre">Nombre</label>
                            </div>


                            <div class="input-field col s6">
                                <input id="apellido" type="text" name="apellido" class="validate" required="required">
                                <label for="apellido">Apellidos</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-field col s6">
                                <select name="nacionalidad" id="nacionalidad" class="browser-default">
                                    <option value="" disabled selected>Nacionalidad</option>
                                    <option value="Venezolano(a)">Venezolano(a)</option>
                                    <option value="Extranjero(a)">Extranjero(a)</option>
                                </select>
                            </div>

                            <div class="input-field col s6">
                                <input id="cedula" type="text" name="cedula" class="validate" required="required">
                                <label for="cedula">Cedula</label>
                            </div>
                        </div>

                        <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-supervisor-account prefix"></i>
                                    <input id="cargo_rol" type="text" name="cargo_rol" class="validate" required="required">
                                    <label for="cargo_rol">Cargo o Rol</label>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="mdi-communication-email prefix"></i>
                                        <input id="correo" type="email" name="correo" class="validate">
                                        <label for="correo">Email</label>
                                    </div>
                                </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-action-home prefix"></i>
                                <input id="direccion" type="text" name="direccion" class="validate" required="required">
                                <label for="direccion">Direccion</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="mdi-action-settings-phone prefix"></i>
                                <input id="telefono_hab" type="text" name="telefono_hab" class="validate">
                                <label for="telefono_hab">Telefono de Casa</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-hardware-phone-android prefix"></i>
                                <input id="telefono_cel" type="text" name="telefono_cel" class="validate">
                                <label for="telefono_cel">Telefono Celular</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class=" prefix"></i>
                                <input id="id_comunidad" type="text" class="validate">
                                <label for="id_comunidad">Comunidad</label>
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