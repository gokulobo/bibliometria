<?php
include "plantilla/menu.php";
?>
    <script type="text/javascript" src="js/cohorte.js"></script>

    <div class="container">
        <div class="row">
            <form class="col s12">

                <div class="input-field col s3">
                    <i class="mdi-social-person prefix red-text"></i>
                    <input id="numero_cohorte" type="text" class="validate hide-on-small-only">
                    <label for="numero_cohorte">Año de Cohorte</label>
                </div>

                <div class="input-field col s3">
                    <select name="tipo_cohorte" id="tipo_cohorte">
                        <option value="" disabled selected>Cohorte</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>

                <div class="input-field col s3">
                    <select name="seccion" id="Seccion">
                        <option value="" disabled selected>Sección</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
        </div>

        </form>
    </div>

<?php
include "plantilla/pie.php";
?>