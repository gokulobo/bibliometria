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
$col["name"] = "id_comunidad"; // grid column name, same as db field or alias from sql
$col["hidden"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "rif"; // caption of column, can use HTML tags too
$col["name"] = "rif"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$cols[] = $col;

$col = array();
$col["title"] = "Nombre Comunidad"; // caption of column, can use HTML tags too
$col["name"] = "nombre_comunidad"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Correo"; // caption of column, can use HTML tags too
$col["name"] = "correo"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Dirección"; // caption of column, can use HTML tags too
$col["name"] = "direccion"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$cols[] = $col;

$col = array();
$col["title"] = "telefono"; // caption of column, can use HTML tags too
$col["name"] = "telefono_hab"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Estado"; // caption of column, can use HTML tags too
$col["name"] = "est"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "Municipio"; // caption of column, can use HTML tags too
$col["name"] = "muni"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "Parroquia"; // caption of column, can use HTML tags too
$col["name"] = "parro"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$cols[] = $col;

// pass the cooked columns to grid


// set few params
$grid["caption"] = "Comunidad";
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
$g->select_command = "select comunidad.id_comunidad,nombre_comunidad,rif,correo,direccion,convenio,tipo_convenio,
telefono_hab,telefono_cel,comunidad.observaciones,
nombre_estado as est,nombre_municipio as muni,
nombre_parroquia as parro
from comunidad
join estados on estados.id_estado = comunidad.estado
join municipio on municipio.id_municipio = comunidad.municipio
join parroquia on parroquia.id_parroquia = comunidad.parroquia
join proyecto on proyecto.id_comunidad = comunidad.id_comunidad
where proyecto.id_carrera =".$_SESSION['id_carrera']."

";
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