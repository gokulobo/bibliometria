<?php
require("../datos/conectar.php");
$inserta = "INSERT into estado(nombre_estado) values('".$_POST['nombre_estado']."')";
$inserta = "INSERT into municipio(nombre_comunidad) values('".$_POST['nombre_comunidad']."')";
$inserta = "INSERT into parroquia(nombre_parroquia) values('".$_POST['nombre_parroquia']."')";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>