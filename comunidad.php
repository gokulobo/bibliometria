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
                                    <i class="mdi-social-person prefix red-text"></i>
                                    <input id="nombre" type="text" name="nombre" class="validate" required="required">
                                    <label for="nombre">Nombre</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="rif" type="text" name="rif" class="validate">
                                    <label for="rif">RIF</label>
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
                                    <select name="estado" id="estado" class="browser-default">
                                        <option value="Seleccione">Estado</option>
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Anzoategui">Anzoátegui</option>
                                        <option value="Apure">Apure</option>
                                        <option value="Aragua">Aragua</option>
                                        <option value="Barinas">Barinas</option>
                                        <option value="Bolivar">Bolivar</option>
                                        <option value="Carabobo">Carabobo</option>
                                        <option value="Cojedes">Cojedes</option>
                                        <option value="Delta Amacuro">Delta Amacuro</option>
                                        <option value="Distrito Capital ">Distrito Capital</option>
                                        <option value="Falcon">Falcón</option>
                                        <option value="Guarico">Guárico</option>
                                        <option value="Lara">Lara</option>
                                        <option value="Merida">Mérida</option>
                                        <option value="Miranda">Miranda</option>
                                        <option value="Monagas">Monagas</option>
                                        <option value="Nueva Esparta">Nueva Esparta</option>
                                        <option value="Portuguesa">Portuguesa</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tachira">Tachira</option>
                                        <option value="Trujillo">Trujillo</option>
                                        <option value="Vargas">Vargas</option>
                                        <option value="Yaracuy">Yaracuy</option>
                                        <option value="Zulia">Zulia</option>
                                    </select>
                                </div>



                                <div class="input-field col s4">
                                    <select name="municipio" id="municipio" class="browser-default">
                                        <option selected value="">Municipio</option>
                                        <option value="Alberto Adriani">Alberto Adriani</option>
                                        <option value="Andres Bello">Andrés Bello</option>
                                        <option value="Antonio Pinto Salina">Antonio Pinto Salina</option>
                                        <option value="Aricagua">Aricagua</option>
                                        <option value="Arzobispo Chacon">Arzobispo Chacón</option>
                                        <option value="Campo Elias">Campo Elías</option>
                                        <option value="Caraciola Parra Olmedo">Caraciola Parra Olmedo</option>
                                        <option value="Cardenal Quintero">Cardenal Quintero</option>
                                        <option value="Guaraque">Guaraque</option>
                                        <option value="Julio Cesar Sala">Julio César Salas</option>
                                        <option value="Justo Briceño">Justo Briceño</option>
                                        <option value="Libertador">Libertador</option>
                                        <option value="Miranda">Miranda</option>
                                        <option value="Obispo Ramos de Lora">Obispo Ramos de Lora</option>
                                        <option value="Padre Noguera">Padre Noguera</option>
                                        <option value="Pueblo Llano">Pueblo Llano</option>
                                        <option value="Rangel">Rangel</option>
                                        <option value="Rivas Davila">Rivas Dávila</option>
                                        <option value="Santos Marquina">Santos Marquina</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tovar">Tovar</option>
                                        <option value="Tulio Febres Cordero">Tulio Febres Cordero</option>
                                        <option value="Zea">Zea</option>
                                    </select>
                                </div>

                                <div class="input-field col s4">
                                    <select name="parroquia" id="parroquia" class="browser-default">
                                        <option selected value="">Parroquia</option>
                                        <option value="Gabriel Picón Gonzáles">Gabriel Picón Gonzáles /El Vigía</option>
                                        <option value="Hector Amable Mora">Héctor Amable Mora /El Vigía</option>
                                        <option value="Jose Nucete Sardi">José Nucete Sardi /El Vigía</option>
                                        <option value="Presidente Betancourt">Presidente Betancourt /El Vigía</option>
                                        <option value="Presidente Paez">Presidente Páez /El Vigía</option>
                                        <option value="Presidente Romulo Gallegos">Presidente Rómulo Gallegos /El Vigía</option>
                                        <option value="Pulido Mendez">Pulido Méndez /El Vigía</option>
                                        <option value="La Azulita">La Azulita</option>
                                        <option value="Santa Cruz de Mora">Santa Cruz de Mora</option>
                                        <option value="Mesa Bolivar">Mesa Bolívar</option>
                                        <option value="Mesa de las Palmas">Mesa de las Palmas</option>
                                        <option value="Acarigua">Acarigua</option>
                                        <option value="San Antonio(Campo Elias)">San Antonio(Campo Elías)</option>
                                        <option value="Canagua">Canaguá</option>
                                        <option value="Capuri">Capurí</option>
                                        <option value="Chacanta">Chacantá</option>
                                        <option value="El Molino">El Molino</option>
                                        <option value="Guaimaral">Guaimaral</option>
                                        <option value="Mucutuy">Mucutuy</option>
                                        <option value="Mucuchachi">Mucuchachí</option>
                                        <option value="Fernandez Peña(Ejido)">Fernández Peña /Ejido</option>
                                        <option value="Matriz(Ejido)">Matriz /Ejido</option>
                                        <option value="Montalban(Ejido)">Montalbán /Ejido</option>
                                        <option value="Acequias">Acequias /Ejido</option>
                                        <option value="Acequias">Jají /Ejido</option>
                                        <option value="La Mesa">La Mesa /Ejido</option>
                                        <option value="San Jose del Sur">San José del Sur /Ejido</option>
                                        <option value="Tucani">Tucaní /Tucaní</option>
                                        <option value="Florencio Ramirez (El Pinar)">Florencio Ramírez /El Pinar</option>
                                        <option value="Santo Domingo">Santo Domingo</option>
                                        <option value="Las Piedras">Las Piedras</option>
                                        <option value="Guaraque">Guaraque</option>
                                        <option value="Mesa de Quintero">Mesa de Quintero</option>
                                        <option value="Rio Negro">Río Negro</option>
                                        <option value="Arapuey">Arapuey</option>
                                        <option value="Palmira (San Jose de Palmira)">Palmira /San José de Palmira</option>
                                        <option value="San Cristobal de Torondoy">San Cristóbal de Torodoy</option>
                                        <option value="Torondoy">Torondoy</option>
                                        <option value="Antonio Spinetti Dini (Mérida)">Antonio Spinetti Dini /Mérida</option>
                                        <option value="Arias (Merida)">Arias /Mérida</option>
                                        <option value="Caracciolo Parra Perez (Merida)">Caracciolo Parra Pérez /Mérida</option>
                                        <option value="Domingo Peña (Merida)">Domingo Peña /Mérida</option>
                                        <option value="El Llano (Merida)">El Llano /Mérida</option>
                                        <option value="Gonzalo Picon Febres (Merida)">Gonzalo Picón Febres /Mérida</option>
                                        <option value="Jacinto Plaza (Mérida)">Jacinto Plaza /Mérida)</option>
                                        <option value="Juan Rodriguez Suarez (Merida)">Juan Rodríguez Suárez /Mérida</option>
                                        <option value="Lasso de la Vega (Merida)">Lasso de la Vega /Mérida</option>
                                        <option value="Los Nevados">Los Nevados /Mérida</option>
                                        <option value="Mariano Picon Salas (Merida)">Mariano Picón Salas /Mérida</option>
                                        <option value="Milla (Merida)">Milla /Mérida</option>
                                        <option value="Osuna Rodriguez (Merida)">Osuna Rodríguez /Mérida</option>
                                        <option value="Sagrario (Merida)">Sagrario /Mérida</option>
                                        <option value="El Morro">El Morro</option>
                                        <option value="Andres Eloy Blanco">Andrés Eloy Blanco</option>
                                        <option value="La Venta ">La Venta</option>
                                        <option value="Piñango">Piñango</option>
                                        <option value="Timotes">Timotes</option>
                                        <option value="Eloy Paredes (Guayabones)">Eloy Paredes /Guayabones</option>
                                        <option value="San Rafael de Alcazar ">San Rafael de Alcázar</option>
                                        <option value="Santa Elena de Arenales">Santa Elena de Arenales</option>
                                        <option value="Santa Maria de Caparo ">Santa María de Caparo</option>
                                        <option value="Pueblo Llano">Pueblo Llano</option>
                                        <option value="Cacute">Cacute</option>
                                        <option value="La Toma ">La Toma</option>
                                        <option value="Mucuruba">Mucurubá</option>
                                        <option value="San Rafael ">San Rafael de Mucuchíes</option>
                                        <option value="Geronimo Maldonado">Gerónimo Maldonado</option>
                                        <option value="Bailadores ">Bailadores</option>
                                        <option value="Tabay">Tabay</option>
                                        <option value="Chiguara">Chiguará</option>
                                        <option value="Estanquez">Estánquez</option>
                                        <option value="Lagunillas">Lagunillas</option>
                                        <option value="La Trampa ">La Trampa</option>
                                        <option value="Pueblo Nuevo del Sur ">Pueblo Nuevo del Sur</option>
                                        <option value="San Juan">San Juan</option>
                                        <option value="El Amparo(Tovar) ">El Amparo /Tovar</option>
                                        <option value="El Llano(Tovar) ">El Llano /Tovar</option>
                                        <option value="San Francisco(Tovar)">San Francisco /Tovar</option>
                                        <option value="Tovar (Tovar)">Tovar /Tovar</option>
                                        <option value="Independencia (Palmarito)">Independencia /Palmarito</option>
                                        <option value="Maria de la Concepcion Palacios Blanco (Las Virtudes)">María de la
                                            Concepción Palacios Blanco /Las Virtudes</option>
                                        <option value="Nueva Bolivia">Nueva Bolivia</option>
                                        <option value="Santa Apolonia">Santa Apolonia</option>
                                        <option value="Caño El Tigre ">Caño El Tigre</option>
                                        <option value="Zea">Zea</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-settings-phone prefix"></i>
                                    <input id="telefono_hab" type="text" name="telefono_hab" class="validate">
                                    <label for="telefono_hab">Telefono del Lugar</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-hardware-phone-android prefix"></i>
                                    <input id="telefono_cel" type="text" name="telefono_cel" class="validate">
                                    <label for="telefono_cel">Telefono Celular</label>
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