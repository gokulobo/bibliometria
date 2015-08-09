<?php
require("datos/conectar.php");
$inserta = "INSERT into asignacion_guia(id_docente,id_cohorte,trayecto,trimestre,activo) values(".$_POST['id_docente']."
,".$_POST['cohorte'].",'".$_POST['trayecto']."','".$_POST['trimestre']."','".$_POST['activo']."')";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>