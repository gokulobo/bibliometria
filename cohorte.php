<?php
include "plantilla/menu.php";
?>
    <script type="text/javascript" src="js/cohorte.js"></script>

    <div class="container">
        <div class="row">
                    <form name="form" method="POST" action="#" onsubmit="return guardar();" id="form">

                        <div class="row col s12">
                                    <div class="input-field col s3">
                                        <i class="mdi-social-person prefix red-text"></i>
                                        <input id="numero_cohorte" type="text" name="numero_cohorte" class="validate hide-on-small-only" required="required">
                                        <label for="numero_cohorte">Año de Cohorte</label>
                                    </div>

                                    <div class="input-field col s3">
                                        <select name="tipo_cohorte" id="tipo_cohorte" required="required">
                                            <option value="" disabled selected>Cohorte</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s3">
                                        <select name="seccion" id="Seccion" required="required">
                                            <option value="" disabled selected>Sección</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
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

<?php
include "plantilla/pie.php";
?>