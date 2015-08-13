<?php
require("../datos/conectar.php");
if ($_POST['id_representante'] == 0) {
    $inserta = "INSERT into representante(nombre,apellido,nacionalidad,cedula,cargo_rol,correo,direccion,telefono_hab,
telefono_cel,id_comunidad) values('" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $_POST['nacionalidad'] . "',
" . $_POST['cedula'] . ",'" . $_POST['cargo_rol'] . "','" . $_POST['correo'] . "','" . $_POST['direccion'] . "',
'" . $_POST['telefono_hab'] . "','" . $_POST['telefono_cel'] . "'," . $_POST['id_comunidad'] . ")";
    $rs = mysql_query($inserta);
    if (!$rs) {
        echo "No se pudo Insertar";
    } else {
        echo "Se registro Con exito";
    }
} else {

    $actualiza = "UPDATE representante  SET nombre='" . $_POST['nombre'] . "',apellido='" . $_POST['apellido'] . "',nacionalidad='" . $_POST['nacionalidad'] . "',
cedula=" . $_POST['cedula'] . ",cargo_rol='" . $_POST['cargo_rol'] . "',correo='" . $_POST['correo'] . "',direccion='" . $_POST['direccion'] . "',
telefono_hab='" . $_POST['telefono_hab'] . "',telefono_cel='" . $_POST['telefono_cel'] . "',id_comunidad=" . $_POST['id_comunidad'] . " where id_representante=" . $_POST['id_representante'];
    $rs = mysql_query($actualiza);
    if (!$rs) {
        echo "No se pudo Actualizar" . $actualiza;
    } else {
        echo "Se actualizo Con exito";
    }
}
?>


