<?php

require("../datos/conectar.php");

$based = "select id_municipio,nombre_municipio,ifnull(cant,0)as cant,idc from municipio
left join(select count(*)as cant,municipio,id_carrera as idc from proyecto
join comunidad on comunidad.id_comunidad = proyecto.id_comunidad";
if(isset($_POST['id_carrera'])) $based .= " WHERE id_carrera=".$_POST['id_carrera'];
$based .=" group by municipio)as a on a.municipio=municipio.id_municipio
 order by cant desc";
$rs = mysql_query($based);
$datos = array();
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos[] = array("label"=>$fila['nombre_municipio'],"value"=>$fila['cant']);
    }
}else{

}
echo json_encode($datos)
?>