<?php
include "plantilla/menu.php";
?>
<link rel="stylesheet" href="grid/jqwidgets/styles/jqx.base.css" type="text/css"/>
<script type="text/javascript" src="grid/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxgrid.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxgrid.selection.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxgrid.filter.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxdropdownlist.js"></script>

<script type="text/javascript" src="grid/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxgrid.pager.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxnumberinput.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxwindow.js"></script>
<script type="text/javascript" src="grid/jqwidgets/jqxinput.js"></script>

<script type="text/javascript" src="grid/jqwidgets/jqxgrid.sort.js"></script>
<!--<script type="text/javascript" src="grid/jqwidgets/jqxgrid.edit.js"></script>!-->
<script type="text/javascript" src="grid/localization.js"></script>

<script type="text/javascript" src="grid/scripts/demos.js"></script>
<script type="text/javascript" src="js/reportes.js"></script>

<div class="container">
    <div class="row">

        <div class="row">
            <div class="col s12 card-panel">
                <h5 class="header center">Listado De Docentes</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12" id="phpgrid">

            </div>
        </div>
        <div class="row">
            <div class="col s12" >
                <div class="input-field col s4">
                    <input id="cedula" type="text" name="cedula" class="validate"
                           required="required" placeholder="Cedula a Buscar" onblur="buscar();">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12" id="resultado">

            </div>
        </div>
    </div>
</div>
<?php
include "plantilla/pie.php";
?>