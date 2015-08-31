<?php
include_once("phpgrid/config.php");

// set up DB
mysql_connect(PHPGRID_DBHOST, PHPGRID_DBUSER, PHPGRID_DBPASS);
mysql_select_db(PHPGRID_DBNAME);

// include and create object
include(PHPGRID_LIBPATH."inc/jqgrid_dist.php");
$g = new jqgrid();

$col = array();
$col["title"] = "Id"; // caption of column, can use HTML tags too
$col["name"] = "id_alumno"; // grid column name, same as db field or alias from sql
$col["hidden"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Cedula"; // caption of column, can use HTML tags too
$col["name"] = "cedula"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$cols[] = $col;

$col = array();
$col["title"] = "Nombre"; // caption of column, can use HTML tags too
$col["name"] = "nombre"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Apellido"; // caption of column, can use HTML tags too
$col["name"] = "apellido"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "F. Nacimiento"; // caption of column, can use HTML tags too
$col["name"] = "fecha_nac"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "L.Nacimiento"; // caption of column, can use HTML tags too
$col["name"] = "lugar_nac"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Correo"; // caption of column, can use HTML tags too
$col["name"] = "correo"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Carrera"; // caption of column, can use HTML tags too
$col["name"] = "nombre_carrera"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$cols[] = $col;

// pass the cooked columns to grid


// set few params
$grid["caption"] = "Alumnos";
$grid["autowidth"] = true;
//$grid["pgbuttons"] = false;
$g->set_options($grid);
$g->set_actions(array(
        "add"=>false,
        "edit"=>true,
        "delete"=>true,
        "view"=>true,
        "autofilter" => true,
        "search" => "simple",
    )
);
$g->select_command = "select id_alumno ,nombre,apellido,cedula,fecha_nac,lugar_nac,
correo,nombre_carrera from alumnos
join carrera on carrera.id_carrera = alumnos.id_carrera";
// set database table for CRUD operations
$g->table = "alumnos";
$g->set_columns($cols,true);
// render grid
$out = $g->render("list1");

?>

<link rel="stylesheet" type="text/css" media="screen" href="phpgrid/lib/js/themes/redmond/jquery-ui.custom.css"></link>
<link rel="stylesheet" type="text/css" media="screen" href="phpgrid/lib/js/jqgrid/css/ui.jqgrid.css"></link>

<!--<script src="phpgrid/lib/js/jquery.min.js" type="text/javascript"></script>-->
<script src="phpgrid/lib/js/jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
<script src="phpgrid/lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="phpgrid/lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
<fieldset>
    <?php echo $out?>
</fieldset>
