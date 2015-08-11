<?php
require("../datos/conectar.php");
$inserta = "INSERT into estado(nombre_estado) values('".$_POST['nombre_estado']."')";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>