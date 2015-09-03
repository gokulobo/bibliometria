<?php
include "plantilla/menu.php";
?>
    <script type="text/javascript" src="js/representante.js"></script>
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de los Representantes de la Comunidad</h5>
                </div>
            </div>

            <form name="form" method="post" action="#" onsubmit="return guardar();" id="form">

                <div class="row">

                    <div class="input-field col s6">
                        <select name="nacionalidad" id="nacionalidad" class="browser-default">
                            <option value="" disabled selected>Nacionalidad</option>
                            <option value="V">Venezolano(a)</option>
                            <option value="E">Extranjero(a)</option>
                        </select>
                    </div>

                    <div class="input-field col s6">
                        <input type="hidden" id="id_representante" name="id_representante" value="0">
                        <input id="cedula" type="text" name="cedula" class="validate" required="required" onblur="buscar();">
                        <label for="cedula">Cédula</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix red-text"></i>
                        <input id="nombre" type="text" name="nombre" class="validate hide-on-small-only"
                               required="required">
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s6">
                        <input id="apellido" type="text" name="apellido" class="validate" required="required">
                        <label for="apellido">Apellidos</label>
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
                        <label for="direccion">Dirección</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-settings-phone prefix"></i>
                        <input id="telefono_hab" type="text" name="telefono_hab" class="validate">
                        <label for="telefono_hab">Teléfono de Casa</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="mdi-hardware-phone-android prefix"></i>
                        <input id="telefono_cel" type="text" name="telefono_cel" class="validate">
                        <label for="telefono_cel">Teléfono Celular</label>
                    </div>
                </div>

                <div class="input-field col s3">
                    <select name="id_comunidad" id="id_comunidad" class="browser-default" ></select>
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