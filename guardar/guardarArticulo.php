<?php
require("datos/conectar.php");
$inserta = "INSERT into articulo(titulo,fecha_publicacion,volumen,numeracion,issn,pagina_colacion,observaciones,id_docente)
values('".$_POST['titulo']."','".$_POST['fecha_publicacion']."','".$_POST['volumen']."','".$_POST['numeracion']."',
'".$_POST['issn']."','".$_POST['pagina_colacion']."','".$_POST['observaciones']."',".$_POST['id_docente'].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar".$inserta;
}else{
    echo "Se registro Con exito".$inserta;
}

?>