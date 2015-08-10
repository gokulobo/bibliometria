<?php
require("../datos/conectar.php");

$inserta = "INSERT into representante(nombre,apellido,nacionalidad,cedula,cargo_rol,correo,direccion,telefono_hab,
telefono_cel,id_comunidad) values('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['nacionalidad']."',
".$_POST['cedula'].",'".$_POST['cargo_rol']."','".$_POST['correo']."','".$_POST['direccion']."',
'".$_POST['telefono_hab']."','".$_POST['telefono_cel']."',".$_POST['id_comunidad'].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>