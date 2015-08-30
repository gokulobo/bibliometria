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
                                                  href="#merida" onclick="$('#merida').show();estEstado();">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row card-panel center-align" id="merida">
                <div class="col s16 ">
                    <img src="img/merida.jpg" class="responsive-img"  usemap="#Map1"/>
                    <map name="Map1">
                        <area shape="circle" coords="131,314,4" href="Alberto_Adriani.php">
                        <area shape="circle" coords="130,320,27" href="Alberto_Adriani.php">
                        <area shape="circle" coords="145,393,17" href="Antonio_Pinto_ Salinas.php">
                        <area shape="circle" coords="106,415,15" href="tovar.php">
                        <area shape="circle" coords="87,390,10" href="zea.php">
                        <area shape="circle" coords="60,452,16" href="rivas_davila.php">
                        <area shape="circle" coords="109,479,31" href="guaraque.php">
                        <area shape="circle" coords="205,297,20" href="andres_bello.php">
                        <area shape="circle" coords="300,454,35" href="aricagua.php">
                        <area shape="circle" coords="208,490,54" href="arzobispo_chacon.php">
                        <area shape="rect" coords="246,311,272,403" href="campo_elias.php">
                        <area shape="circle" coords="251,225,25" href="caracciolo_parra.php">
                        <area shape="circle" coords="267,265,1" href="#">
                        <area shape="circle" coords="477,243,15" href="cardenal_quintero.php">
                        <area shape="circle" coords="452,231,11" href="pueblo_llano.php">
                        <area shape="circle" coords="376,281,29" href="rangel.php">
                        <area shape="circle" coords="351,200,19" href="justo_briceño.php">
                        <area shape="circle" coords="362,125,16" href="julio_cesar.php">
                        <area shape="circle" coords="311,360,28" href="libertador.php">
                        <area shape="circle" coords="190,259,19" href="obispo_ramos.php">
                        <area shape="circle" coords="197,608,49" href="padre_noguera.php">
                        <area shape="circle" coords="417,204,24" href="miranda.php">
                        <area shape="poly" coords="355,319,380,341" href="#">
                        <area shape="poly" coords="352,324" href="santos_marquina.php">
                        <area shape="poly" coords="352,323,354,331" href="#">
                        <area shape="circle" coords="365,334,18" href="santos _marquina.php">
                        <area shape="circle" coords="200,377,33" href="sucre.php">
                        <area shape="circle" coords="297,174,28" href="tulio_febres .php">
                    </map>
                </div>
                <!--<div class="col s16 ">
                    <div id="estadistica1"></div>

                </div>!-->
            </div>
        </div>
    </div>


<?php
//include "plantilla/pie.php";
?>