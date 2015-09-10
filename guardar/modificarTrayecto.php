<?php
require("../datos/conectar.php");
$actualiza = "UPDATE alumnos SET trayecto='".$_POST['tra']."',trimestre='".$_POST['tri']."'
WHERE id_carrera=".$_POST['id_carrera']." and id_cohorte=".$_POST['id_cohorte'];
    $rs = mysql_query($actualiza);
    if (!$rs) {
        echo "No se pudo Actualizar".$actualiza;
    }else{
        echo "Se actualizo Con exito";
    }
?>