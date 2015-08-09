<?php
include "plantilla/menu.php";
?>
<script type="text/javascript" src="js/articulo.js"></script>
<div class="container" col s12>
    <div class="row" >
        <form name="form" method="POST" action="#" onSubmit="return guardar();">
            <div class="row  cyan lighten-4 card-panel">
                <div class="input-field col s6">
                    <label for="cedula">Buscar Docente Por C.I</label>
                    <input name="cedula" type="text" id="cedula">

                    <input type="button" name="button" id="button" value="Buscar" onclick="buscar();"/>
                    <input type="hidden" id="id_docente" name="id_docente"/>
                </div>
            </div>


            <div class="row">
                    <div class="input-field col s3">
                        <i class="mdi-social-person prefix"></i>
                        <input id="nombre" type="text" name="nombre" class="validate" disabled="disabled">
                        <label for="nombre">Nombre</label>
                    </div>


                    <div class="input-field col s3">
                        <input id="apellido" type="text" name="apellido" class="validate" disabled="disabled">
                        <label for="apellido">Apellidos</label>
                    </div>

                    <div class="input-field col s3">
                        <i class="mdi-action-perm-identity prefix"></i>
                        <input id="cedula" type="text" name="cedula" class="validate" disabled="disabled">
                        <label for="cedula">Cedula</label>
                    </div>
            </div>

            <div class="row">
                    <div class="input-field col s6">
                        <input id="titulo" type="text" name="titulo" class="validate">
                        <label for="titulo">Titulo</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="fecha_publicacion" type="text" name="fecha_publicacion" class="validate">
                        <label for="fecha_publicacion">Fecha de Publicacion</label>
                    </div>
            </div>

            <div>
                    <div class="input-field col s6">
                        <input id="volumen" type="text" name="volumen" class="validate">
                        <label for="Volumen">Volumen</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="numeracion" type="text" name="numeracion" class="validate">
                        <label for="numeracion">Numeracion</label>
                    </div>
            </div>

            <div>
                    <div class="input-field col s6">
                        <input id="issn" type="tel" name="issn" class="validate">
                        <label for="issn">ISSN</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="pagina_colacion" type="text" name="pagina_colacion" class="validate">
                        <label for="pagina_colacion">Pagina de Colacion</label>
                    </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="observaciones" name="observaciones" class="observaciones"></textarea>
                    <label for="observaciones">Observaciones</label>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include "plantilla/pie.php";
?>
