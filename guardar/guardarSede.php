<?php
require("datos/conectar.php");
$inserta = "INSERT into sede(nombre_sede,codigo) values('".$_POST['nombre_sede']."','".$_POST['codigo']."')";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>