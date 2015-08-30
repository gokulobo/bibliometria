<?php

require("../datos/conectar.php");

$based = "select ifnull(cant,0)as cant,nombre_carrera,carrera.id_carrera from carrera
left join(select count(*)as cant,id_carrera
from proyecto group by id_carrera)as a on a.id_carrera=carrera.id_carrera
group by id_carrera order by cant desc";
$rs = mysql_query($based);
$datos = array();
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos[] = array("label"=>$fila['nombre_carrera'],"value"=>$fila['cant']);
    }
}else{

}
echo json_encode($datos)
?>