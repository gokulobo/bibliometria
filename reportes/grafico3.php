<?php

require("../datos/conectar.php");
$id = $_POST['id'];
$based = "select nombre_carrera,ifnull(a.cant,0)as cant from carrera
left join(select count(*)as cant,id_carrera from proyecto
join comunidad on comunidad.id_comunidad = proyecto.id_comunidad
where municipio = ".$id."
group by id_carrera)as a on a.id_carrera=carrera.id_carrera";
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