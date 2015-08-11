<?php
require("../datos/conectar.php");
if ($_POST['id_comunidad'] == 0) {
    $inserta = "INSERT into comunidad(nombre_comunidad,rif,correo,estado,municipio,parroquia,direccion,convenio,tipo_convenio,telefono_hab,telefono_cel,observaciones)
 values('" . $_POST['nombre'] . "','" . $_POST['rif'] . "','" . $_POST['correo'] . "','" . $_POST['estado'] . "','" . $_POST['municipio'] . "',
 '" . $_POST['parroquia'] . "','" . $_POST['direccion'] . "','" . $_POST['convenio'] . "','" . $_POST['tipo_convenio'] . "','" . $_POST['telefono_hab'] . "',
 '" . $_POST['telefono_cel'] . "','" . $_POST['observaciones'] . "')";
    $rs = mysql_query($inserta);
    if (!$rs) {
        echo "No se pudo Insertar";
    } else {
        echo "Se registro Con exito";
    }
}else{

}
?>