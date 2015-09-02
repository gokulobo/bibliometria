
<?php
include_once("phpgrid/config.php");

// set up DB
mysql_connect(PHPGRID_DBHOST, PHPGRID_DBUSER, PHPGRID_DBPASS);
mysql_select_db(PHPGRID_DBNAME);

// include and create object
include(PHPGRID_LIBPATH."inc/jqgrid_dist.php");
$g = new jqgrid();



// pass the cooked columns to grid


// set few params
$grid["caption"] = "Proyectos";
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
$g->select_command = "select id_proyecto,titulo_proyecto as titulo,
resumen_proyecto as resumen,
area_investigacion as area,concat(nombre,' ',apellido)as nombre,
concat(numero_cohorte,tipo_cohorte)as cohorte,seccion,tesis,proyecto.id_carrera
from proyecto
join docente on docente.id_docente = proyecto.id_docente
join cohorte on cohorte.id_cohorte = proyecto.id_cohorte
where proyecto.id_carrera = ".$_SESSION['id_carrera']."
";
//set database table for CRUD operations
$g->table = "proyecto";
$g->set_columns($cols,true);
// render grid
$out = $g->render("list1");

?>

<link rel="stylesheet" type="text/css" media="screen" href="phpgrid/lib/js/themes/redmond/jquery-ui.custom.css"></link>
<link rel="stylesheet" type="text/css" media="screen" href="phpgrid/lib/js/jqgrid/css/ui.jqgrid.css"></link>

<!--<script src="../phpgrid/lib/js/jquery.min.js" type="text/javascript"></script>!-->
<script src="phpgrid/lib/js/jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
<script src="phpgrid/lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="phpgrid/lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
<fieldset>
    <?php echo $out?>
</fieldset>
