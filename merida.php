<?php
include "plantilla/menu.php";
?>

    <link href="jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>

    <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
    <script type="text/javascript" src="fusion/js/themes/fusioncharts.theme.carbon.js"></script>
    <script type="text/javascript" src="fusion/js/fusioncharts-jquery-plugin.js"></script>
    <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
    <script type="text/javascript" src="js/merida.js"></script>
    <div class="container">
        <div class="row">
            <div class="row" id="f1">
                <div class="col s12 card-panel">
                    <h5 class="header center">Bibliometria Del Estado Mérida</h5>
                </div>
            </div>
            <div class="row card-panel center-align" id="">
                <div class="col s12 ">
                    <div id="estadistica1"></div>
                </div>
            </div>
            <div class="row card-panel center-align" id="">
                <div class="col s12 ">
                    <div id="estadistica2"></div>
                </div>
            </div>
            <div class="row card-panel center-align" id="merida">
                <div class="col s12 ">
                    <img src="img/merida.jpg" class="responsive-img"  usemap="#Map1"/>
                    <map name="Map1">
                        <area onclick="buscar(1);" shape="circle" coords="131,314,4" href="#respuesta">
                        <area onclick="buscar(1);" shape="circle" coords="130,320,27" href="#respuesta">
                        <area onclick="buscar(3);" shape="circle" coords="145,393,17" href="#respuesta">
                        <area onclick="buscar(21);" shape="circle" coords="106,415,15" href="#respuesta">
                        <area onclick="buscar(23);" shape="circle" coords="87,390,10" href="#respuesta">
                        <area onclick="buscar(18);" shape="circle" coords="60,452,16" href="#respuesta">
                        <area onclick="buscar(9);" shape="circle" coords="109,479,31" href="#respuesta">
                        <area onclick="buscar(2);" shape="circle" coords="205,297,20" href="#respuesta">
                        <area onclick="buscar(4);" shape="circle" coords="300,454,35" href="#respuesta">
                        <area onclick="buscar(5);" shape="circle" coords="208,490,54" href="#respuesta">
                        <area onclick="buscar(6);" shape="rect" coords="246,311,272,403" href="#respuesta">
                        <area onclick="buscar(7);" shape="circle" coords="251,225,25" href="#respuesta">
                        <area onclick="buscar(1);" shape="circle" coords="267,265,1" href="#respuesta">
                        <area onclick="buscar(8);" shape="circle" coords="477,243,15" href="#respuesta">
                        <area onclick="buscar(16);" shape="circle" coords="452,231,11" href="#respuesta">
                        <area onclick="buscar(17);" shape="circle" coords="376,281,29" href="#respuesta">
                        <area onclick="buscar(11);" shape="circle" coords="351,200,19" href="#respuesta">
                        <area onclick="buscar(10);" shape="circle" coords="362,125,16" href="#respuesta">
                        <area onclick="buscar(12);" shape="circle" coords="311,360,28" href="#respuesta">
                        <area onclick="buscar(14);" shape="circle" coords="190,259,19" href="#respuesta">
                        <area onclick="buscar(15);" shape="circle" coords="197,608,49" href="#respuesta">
                        <area onclick="buscar(13);" shape="circle" coords="417,204,24" href="#respuesta">
                        <area onclick="buscar();" shape="poly" coords="355,319,380,341" href="#respuesta">
                        <area onclick="buscar(19);" shape="poly" coords="352,324" href="#respuesta">
                        <area onclick="buscar();" shape="poly" coords="352,323,354,331" href="#respuesta">
                        <area onclick="buscar(19);" shape="circle" coords="365,334,18" href="#respuesta">
                        <area onclick="buscar(20);" shape="circle" coords="200,377,33" href="#respuesta">
                        <area onclick="buscar(22);" shape="circle" coords="297,174,28" href="#respuesta">
                    </map>
                </div>
            </div>
            <div class="row">
                <div id="respuesta" class="col s12 "></div>
                <div id="carreras" class="col s12 "></div>
                <div id="docentes" class="col s12 "></div>
            </div>
        </div>
    </div>


<?php
//include "plantilla/pie.php";
?>