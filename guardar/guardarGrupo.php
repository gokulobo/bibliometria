<?php
require("../datos/conectar.php");
$inserta = "INSERT into grupo_proyecto(id_alumno,id_proyecto) values(".$_POST['id_alumno'].",".$_POST['proyecto'].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
    $update = "update proyecto set cupo=(cupo+1) where id_proyecto=".$_POST['proyecto'];
    $rs = mysql_query($update);
}

?>