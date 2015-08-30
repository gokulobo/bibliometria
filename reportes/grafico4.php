<?php

require("../datos/conectar.php");
$id = $_POST['id'];
$based = "select concat(nombre,' ',apellido)as nombre,ifnull(cant,0)as cant
from docente
left join(select count(*)as cant,id_docente from proyecto
join comunidad on comunidad.id_comunidad = proyecto.id_comunidad
where municipio = ".$id."
group by id_docente)as a on a.id_docente=docente.id_docente";
$rs = mysql_query($based);
$datos = array();
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos[] = array("label"=>$fila['nombre'],"value"=>$fila['cant']);
    }
}else{

}
echo json_encode($datos)
?>