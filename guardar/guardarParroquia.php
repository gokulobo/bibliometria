<?php
require("../datos/conectar.php");
$inserta = "INSERT into parroquia(nombre_parroquia,id_estado,id_municipio) values('".$_POST['nombre_parroquia']."',".$_POST["estadoP"].",".$_POST["municipio"].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>