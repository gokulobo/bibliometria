<?php

require("../datos/conectar.php");
$based = ("SELECT * FROM alumnos where cedula like '%".$_GET['term']."%'");
$rs = mysql_query($based);
$datos = array();
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos[]=array("value"=>$fila['cedula'],'label'=>$fila['cedula'],'id'=>$fila['id_alumno'],'carrea'=>$fila['id_carrera'],'nombre'=>$fila['nombre'],'apellido'=>$fila['apellido']);
    }
}
echo json_encode($datos);

?>