
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
$col["name"] = "id_proyecto"; // grid column name, same as db field or alias from sql
$col["hidden"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Titulo"; // caption of column, can use HTML tags too
$col["name"] = "titulo"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$cols[] = $col;

$col = array();
$col["title"] = "Resumen de Proyecto"; // caption of column, can use HTML tags too
$col["name"] = "resumen"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Area de Investigación"; // caption of column, can use HTML tags too
$col["name"] = "area"; // grid column name, same as db field or alias from sql
$col["width"] = "40"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Tutor"; // caption of column, can use HTML tags too
$col["name"] = "nombre"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$cols[] = $col;

$col = array();
$col["title"] = "Estatus"; // caption of column, can use HTML tags too
$col["name"] = "estatus"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$cols[] = $col;

$col = array();
$col["title"] = "Cohorte"; // caption of column, can use HTML tags too
$col["name"] = "cohorte"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Sección"; // caption of column, can use HTML tags too
$col["name"] = "seccion"; // grid column name, same as db field or alias from sql
$col["width"] = "20"; // width on grid
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "Tesis"; // caption of column, can use HTML tags too
$col["name"] = "tesis"; // grid column name, same as db field or alias from sql
$col["width"] = "60"; // width on grid
$col["editable"] = false;
$cols[] = $col;



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
concat(numero_cohorte,tipo_cohorte)as cohorte,seccion,tesis,proyecto.id_carrera,
if (estatus = 1,'Terminado','Pendiente')as estatus
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
