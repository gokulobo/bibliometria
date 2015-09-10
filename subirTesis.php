<?php
include "plantilla/menu.php";
?>

    <link href="jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>

    <script type="text/javascript" src="js/subir.js"></script>
    <div class="container">
        <div class="row">
            <div class="row" id="f1">
                <div class="col s12 card-panel">
                    <h5 class="header center">Subir Tesis a Proyecto</h5>
                </div>
            </div>
            <div class="row" id="venezuela">
                <form action="#" enctype =" multipart form-data /" method = " post ">
                    <div class="col s12 card-panel" id="mensaje"></div>
                <div class="col s12 card-panel">
                    <div class="row">
                        <div class="col s4 center-align">
                            <select name="id_proyecto" id="id_proyecto" class="browser-default"
                                    onchange="listarAlumnosCohorte();"
                                    required="required"></select>
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
                        <div class="col s4 center-align">
                            <button class="btn waves-effect waves-light">
                                <i class="material-icons" onclick="subir()">Subir</i>
                            </button>
                        </div>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </div>


<?php
//include "plantilla/pie.php";
?>