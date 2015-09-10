<?php
include "plantilla/menu.php";
?>

    <link href="jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>

    <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
    <script type="text/javascript" src="fusion/js/themes/fusioncharts.theme.carbon.js"></script>
    <script type="text/javascript" src="fusion/js/fusioncharts-jquery-plugin.js"></script>
    <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
    <script type="text/javascript" src="js/bibliometria.js"></script>
    <div class="container">
        <div class="row">
            <div class="row" id="f1">
                <div class="col s12 card-panel">
                    <h5 class="header center">Bibliometria</h5>
                </div>
            </div>
            <div class="row" id="venezuela">

                <div class="col s12 card-panel">
                    <div class="row">
                        <div class="col s12 center-align">
                            <img src="img/Mapa-de-Venezuela.jpg" class="responsive-img" alt=""  usemap="#Map"/>
                            <map name="Map"><area alt="Pulsar para ver" shape="circle" coords="82,149,20"
                                                  href="merida.php">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
//include "plantilla/pie.php";
?>