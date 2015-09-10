<?php
include "plantilla/menu.php"
?>
<script type="text/javascript" src="js/Venezuela.js"></script>
<div class="container">
    <div class="row">
        <div class="col s12 card-panel">
            <h5 class="header center">Registro De Municipios y Parroquias</h5>
        </div>
    </div>
    <div class="row">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons"></i>Municipio</div>
                <div class="collapsible-body">
                    <form name="form1" method="POST" action="#" onsubmit="return guardarMunicipio();" id="form1">
                        <div class="row">
                        <div class="input-field col s5">
                            <select name="estado" id="estado" class="browser-default"></select>
                        </div>
                        <div class="input-field col s4">
                            <input id="nombre_municipio" name="nombre_municipio" type="text" class="validate"
                                   required="required">
                            <label for="nombre_municipio">Municipio</label>
                        </div>
                        <div class="input-field col s3">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                <i class="material-icons">ENVIAR</i>
                            </button>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons"></i>Parroquia</div>
                <div class="collapsible-body">
                    <div class="row">
                    <form name="form2" method="POST" action="#" onsubmit="return guardarParroquia();" id="form2">
                        <div class="input-field col s3">
                            <select name="estadoP" id="estadoP" class="browser-default" onchange="buscaMunicipio();"></select>
                        </div>
                        <div class="input-field col s3">
                            <select name="municipio" id="municipio" class="browser-default"></select>
                        </div>
                        <div class="input-field col s3">
                            <input id="nombre_parroquia" name="nombre_parroquia" type="text" class="validate"
                                   required="required">
                            <label for="nombre_parroquia">Parroquia</label>
                        </div>
                        <div class="input-field col s2">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                <i class="material-icons">ENVIAR</i>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </li>
        </ul>
    </div>
</div>

<?php
include "plantilla/pie.php"
?>>
