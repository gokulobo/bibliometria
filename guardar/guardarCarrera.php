<?php
require("datos/conectar.php");
$inserta = "INSERT into carrera(nombre_carrera,numero_carrera,id_sede) values('".$_POST['nombre_carrera']."',
".$_POST['numero_carrera'].",".$_POST['id_sede'].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>