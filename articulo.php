<?php
include "plantilla/menu.php";
?>

    <script type="text/javascript" src="js/articulo.js"></script>
    <div class="container">
        <div class="row" >

            <div class="row">
                <div class="col s12 card-panel">
                    <h5 class="header center">Registro de Artículos</h5>
                </div>
            </div>

            <form name="form" method="POST" action="#" onsubmit="return guardar();" id="form">
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="cedula">Buscar Docente Por C.I</label>
                            <input id="cedula" name="cedula" type="text" class="validate" required="required"
                            onkeypress="ValidaSoloNumeros()" onblur="buscar();">

                            <input class="btn waves-effect waves-light" type="button" name="button" id="button" value="Buscar" onclick="buscar();" />
                            <input type="hidden" id="id_docente" name="id_docente" />
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s4">
                            <i class="mdi-social-person prefix"></i>
                            <input id="nombre" type="text" name="nombre" class="validate" readonly>
                            <label for="nombre">Nombre</label>
                        </div>


                        <div class="input-field col s4">
                            <input id="apellido" type="text" name="apellido" class="validate" readonly>
                            <label for="apellido">Apellidos</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input id="ced" type="text" name="ced" class="validate" readonly>
                            <label for="cedula">Cédula</label>
                        </div>
                    </div>

                    <div class="row">
                            <div class="input-field col s6">
                                <input id="titulo" type="text" name="titulo" class="validate" required="required">
                                <label for="titulo">Título</label>
                            </div>


                            <div class="input-field col s6">
                                <i class="mdi-action-today prefix"></i>
                                <label for="">Fecha de Publicación</label>
                                <input id="fecha_publicacion" name="fecha_publicacion" type="date"  class="datepicker" required="required">
                            </div>
                    </div>

                    <div>
                            <div class="input-field col s6">
                                <input id="volumen" type="text" name="volumen" class="validate" required="required">
                                <label for="Volumen">Volumen</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="numeracion" type="text" name="numeracion" class="validate" required="required">
                                <label for="numeracion">Numeración</label>
                            </div>
                    </div>

                    <div>
                            <div class="input-field col s6">
                                <input id="issn" type="tel" name="issn" class="validate" required="required">
                                <label for="issn">ISSN</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="pagina_colacion" type="text" name="pagina_colacion" class="validate" required="required">
                                <label for="pagina_colacion">Páginas de Colacion</label>
                            </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s8">
                            <input id="observaciones" name="observaciones" type="text" class="validate">
                            <label form="observaciones">Observaciones</label>
                        </div>
                        <div class="col s4 center-align">
                            <div class="file-field input-field">
                                <input class="file-path validate" type="text" placeholder="CLIC AQUI Para Cargar Archivo"/>
                                <div class="btn">
                                    <span>Tesis alumnos(as)</span>
                                    <input type="file" id="archivo" name="archivo" />
                                </div>

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
