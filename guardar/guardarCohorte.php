<?php
require("../datos/conectar.php");
$inserta = "INSERT into cohorte(numero_cohorte,tipo_cohorte,seccion) values('".$_POST['numero_cohorte']."','".$_POST['tipo_cohorte']."','".$_POST['seccion']."')";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>