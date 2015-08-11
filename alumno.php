<?php
include "plantilla/menu.php"
?>
    <script type="text/javascript" src="js/alumno.js"></script>

<div class="container">
    <div class="row">

        <div class="row">
            <div class="col s12 card-panel">
                <h5 class="header center">Registro de Alumnos</h5>
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
                            <select name="nacionalidad" id="nacionalidad" class="browser-default" required="required">
                                <option value="" disabled selected>Nacionalidad</option>
                                <option value="Venezolano(a)">Venezolano(a)</option>
                                <option value="Extranjero(a)">Extranjero(a)</option>
                            </select>
                        </div>

                        <div class="input-field col s6">
                            <input type="hidden" id="id_alumno" name="id_alumno" value="0">
                            <input id="cedula" name="cedula" type="text" class="validate" required="required"
                                   onkeypress="ValidaSoloNumeros()" onblur="buscar();">
                            <label for="cedula">Cedula</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input id="nombre" type="text" name="nombre" class="validate" required="required">
                            <label for="nombre">Nombre</label>
                        </div>


                        <div class="input-field col s6">
                            <input id="apellido" type="text" name="apellido" class="validate" required="required">
                            <label for="apellido">Apellidos</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-today prefix"></i>
                            <input id="fecha_nac" type="date" name="fecha_nac" class="datepicker" required="required">
                            <label for="fecha_nac">Fecha de Nacimiento</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="lugar_nac" type="text" name="lugar_nac" class="validate" required="required">
                            <label for="lugar_nac">Lugar de Nacimiento</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                            <input id="carnet" type="text" name="carnet" class="validate" required="required">
                            <label for="carnet">Carnet</label>
                        </div>

                        <div class="input-field col s6">
                            <select name="grado_instruccion" id="grado_instruccion" class="browser-default" required="required">
                                <option value="Bachiller">Bachiller</option>
                                <option value="TSU">TSU</option>
                                <option value="Universitario(a)">Universitario(a)</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-communication-email prefix"></i>
                            <input id="correo" type="email" name="correo" class="validate" required="required">
                            <label for="correo">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-settings-phone prefix"></i>
                            <input id="telefono_hab" type="text" name="telefono_hab" class="validate" >
                            <label for="telefono_hab">Telefono Fijo</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-hardware-phone-android prefix"></i>
                            <input id="telefono_cel" type="tel" name="telefono_cel" class="validate" required="required">
                            <label for="telefono_cel">Telefono Movil</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-home prefix"></i>
                            <input id="direccion" type="text" class="validate" required="required">
                            <label for="direccion">Dirección</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">

                            <label for="carrera">Carrera</label>
                            <select name="carrera" id="carrera" class="browser-default" required="required"></select>
                        </div>

                        <div class="input-field col s6">
                            <select name="cohorte" id="cohorte" class="browser-default" required="required"></select>
                            <option value="" disabled selected></option>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <select name="trayecto" id="trayecto" class="browser-default" required="required">
                                <option value="" disabled selected>Seleccione Trayecto</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                            </select>
                        </div>

                        <div class="input-field col s6">
                            <select name="trimestre" id="trimestre" class="browser-default" required="required">
                                <option value="" disabled selected>Seleccione Trimestre</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                            </select>
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

<script src="js/alumno.js" type="text/javascript"></script>
<?php
include"plantilla/pie.php"

?>