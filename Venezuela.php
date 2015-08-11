<?php
include"plantilla/menu.php"
?>
<script type="text/javascript" src="js/Venezuala.js"></script>
<div class="container">
    <div class="row">

                    <div class="row">
                        <div class="col s12 card-panel">
                            <h5 class="header center">Registro</h5>
                        </div>
                    </div>

                    <form name="form" method="POST" action="#" onsubmit="return guardar();" id="form">

                            <div class="input-field col s6">
                                <input id="nombre_estado" name="nombre_estado" type="text"  class="validate" required="required">
                                <label for="nombre_estado">Estado</label>
                            </div>
                    </form>
                    <form name="form" method="POST" action="#" onsubmit="return guardar();" id="form1">
                        <div class="input-field col s6">
                            <input id="nombre_municipio" name="nombre_municipio" type="text"  class="validate" required="required">
                            <label for="nombre_municipio">Municipio</label>
                        </div>
                    </form>

                    <form name="form" method="POST" action="#" onsubmit="return guardar();" id="form2">
                        <div class="input-field col s6">
                            <input id="nombre_parroquia" name="nombre_parroquia" type="text"  class="validate" required="required">
                            <label for="nombre_parroquia">Parroquia</label>
                        </div>
                    </form>


        <center>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                <i class="material-icons">ENVIAR</i>
            </button>
        </center>
    </div>
</div>

<?php
include"plantilla/pie.php"
?>>
