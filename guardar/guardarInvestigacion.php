<?php
require("datos/conectar.php");
$inserta = "INSERT into investigacion(peii,nivel_peii,ano_aplicacion_peii,forma_grupo_investigacion,
nombre_investigacion,area_investigacion,observaciones,id_docente) values('".$_POST['peii']."','".$_POST['nivel_peii']."',
'".$_POST['ano_aplicacion_peii']."','".$_POST['forma_grupo_investigacion']."','".$_POST['nombre_investigacion']."',
'".$_POST['area_investigacion']."','".$_POST['observaciones']."',".$_POST['id_docente'].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
}else{
    echo "Se registro Con exito";
}

?>