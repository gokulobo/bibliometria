<?php

require("../datos/conectar.php");
$based = ("SELECT * FROM proyecto where titulo_proyecto like '%".$_GET['term']."%'");
$rs = mysql_query($based);
$datos = array();
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos[]=array("value"=>$fila['titulo_proyecto'],'label'=>$fila['titulo_proyecto'],'id'=>$fila['id_proyecto']);
    }
}
echo json_encode($datos);

?>