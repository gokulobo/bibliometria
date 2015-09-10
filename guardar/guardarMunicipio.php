<?php
require("../datos/conectar.php");
$inserta = "INSERT into municipio(nombre_municipio,id_estado) values('".$_POST['nombre_municipio']."',".$_POST["estado"].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>