<?php
include "plantilla/menu.php";
?>
<script src="js/docente.js" type="text/javascript"></script>
<div class="container">

    <div class="row">
        <div class="col s12 card-panel">
            <h3 class="header center">Registro Docente</h3>
        </div>
    </div>

    <div class="row">

        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6 "><a href="#basico" class="black-text">Datos Básicos</a></li>
                <li class="tab col s6 "><a href="#laboral" class="black-text">Datos Laborales</a></li>
            </ul>
        </div>

        <form action="#" method="post" onsubmit="return guardar();" id="frmDocente">
            <div id="basico" class="col s12 card-panel ">

                <div class="row">
                    <div class="input-field col s2">
                        <i class="mdi-action-today prefix"></i>
                        <input id="fecha" name="fecha" type="text" value="<?php echo date("d/m/Y") ?>"
                               disabled="disabled">
                    </div>
                </div>

                <div class="row">


                    <div class="input-field col s6">
                        <i class="mdi-action-picture-in-picture prefix"></i>
                        <input type="hidden" id="id_docente" name="id_docente" value="0">
                        <input id="cedula" name="cedula" type="text" class="validate" required="required"
                               onkeypress="ValidaSoloNumeros()" onblur="buscar();">
                        <label for="cedula">Cedula</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="nacionalidad" id="nacionalidad" class="browser-default green">
                            <option value="V">Venezolano(a)</option>
                            <option value="E">Extranjero(a)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix"></i>
                        <input id="nombre" name="nombre" type="text" class="validate" required="required">
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix"></i>
                        <input id="apellido" name="apellido" type="text" class="validate" required="required">
                        <label for="apellido">Apellidos</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-today prefix"></i>
                        <input id="fecha_nac" type="date" name="fecha_nac" class="datepicker" value="" required="required">
                        <label for="">Fecha de Nacimiento</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="lugar_nac" name="lugar_nac" type="text" class="validate" required="required">
                        <label for="lugar_nac">Lugar de Nacimiento</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="correo" name="correo" type="email" class="validate" required="required">
                        <label for="correo" data-error="Correo Invalido">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-settings-phone prefix"></i>
                        <input id="telefono_hab" name="telefono_hab" type="text" class="validate" required="required">
                        <label for="telefono_hab">Telefono Fijo</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="mdi-hardware-phone-android prefix"></i>
                        <input id="telefono_cel" name="telefono_cel" type="text" class="validate" required="required">
                        <label for="telefono_cel">Telefono Movil</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-home prefix"></i>
                        <input id="direccion" name="direccion" type="text" class="validate" required="required">
                        <label for="direccion">Dirección</label>
                    </div>
                </div>
            </div>


            <div id="laboral" class="col s12 card-panel blue lighten-4">

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-work prefix"></i>
                        <input id="profesion" name="profesion" type="text" class="validate" required="required">
                        <label for="profesion">Profesión</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="cargo" name="cargo" type="text" class="validate" required="required">
                        <label for="cargo">Cargo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <select name="categoria" id="categoria" class="browser-default" required="required">
                            <option value="" disabled selected>Categoria</option>
                            <option value="Asistente(a)">Asistente</option>
                            <option value="Asociado(a)">Asociado(a)</option>
                            <option value="Agregado(a)">Agregado(a)</option>
                            <option value="Intructor(a)">Intructor(a)</option>
                            <option value="Titular">Titular</option>
                        </select>
                    </div>

                    <div class="input-field col s6">
                        <select name="modalidad" id="modalidad" class="browser-default" required="required">
                            <option value="" disabled selected>Modalidad</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Semi-presencial">Semi-presencial</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <select name="dedicacion" id="dedicacion" class="browser-default" required="required">
                            <option value="" disabled selected>Dedicacion</option>
                            <option value="Exclusivo(a)">Exclusivo(a)</option>
                            <option value="Medio Tiempo">Medio Tiempo</option>
                            <option value="Tiempo Completo">Tiempo Completo</option>
                            <option value="Tiempo Convencional">Tiempo Convencional</option>
                        </select>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="ascenso" id="ascenso">
                        <label value="ascenso">Ultimo año Ascenso</label>
                        </input>
                    </div>
                </div>

                <div class="row">

                    <div class="input-field col s6">
                        <i class="mdi-action-today prefix"></i>
                        <label for="fecha_ingreso">Fecha de Ingreso</label>
                        <input id="fecha_ingreso" name="fecha_ingreso" type="date" class="datepicker" required="required">
                    </div>


                    <div class="input-field col s6">
                        <input id="investigacion" name="investigacion" type="text" class="validate" required="required">
                        <label for="investigacion">Linea de Investigacion</label>
                    </div>
                </div>

                <div class="row">
                    <div class="switch col s4">
                        <label form="coordinador">Coordinador(a)</label>
                        <label>
                            No
                            <input id="coordinador" name="coordinador" type="checkbox">
                            <span class="lever"></span>
                            Si
                        </label>
                    </div>

                    <div class="row col s4">
                        <div class="switch">
                            <label form="guia">Guía
                                No
                                <input id="guia" name="guia" type="checkbox">
                                <span class="lever"></span>
                                Si
                            </label>
                        </div>
                    </div>
                    <?php if($_SESSION['admin']==1){?>
                    <div class="row col s4">
                        <div class="switch">
                            <label form="admin">Admin
                                No
                                <input id="admin" name="admin" type="checkbox">
                                <span class="lever"></span>
                                Si
                            </label>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="row">
                    <div class="input-field col s4" id="clave">
                        <input id="clave_usuario" name="clave_usuario" type="password" class="validate">
                        <label for="clave_usuario">Clave</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="observaciones" name="observaciones" type="text" class="validate">
                        <label form="observaciones">Observaciones</label>
                    </div>
                    <div class="input-field col s4">

                        <select name="id_carrera" id="id_carrera" class="browser-default" required="required"></select>
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

<script type="text/javascript" src="js/docente.js"></script>
<?php
include "plantilla/pie.php";
?>
