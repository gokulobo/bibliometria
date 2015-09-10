<?php
require("../datos/conectar.php");
$inserta = "INSERT into articulo(titulo,fecha_publicacion,volumen,numeracion,issn,pagina_colacion,observaciones,id_docente)
values('".$_POST['titulo']."','".$_POST['fecha_publicacion']."','".$_POST['volumen']."','".$_POST['numeracion']."',
'".$_POST['issn']."','".$_POST['pagina_colacion']."','".$_POST['observaciones']."',".$_POST['id_docente'].")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar".$inserta;
}else{
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $file = $_FILES['archivo']['name'];
        if(!is_dir("../articulos/"))
            mkdir("../articulos/", 0777);
        if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"../articulos/".$file))
        {
            $id = mysql_insert_id();
            $query = "UPDATE articulo set archivo='".$file."' where id_articulo=".$id;
            echo "Se Subio Con exito<br>";

            $rs =mysql_query($query);

        }else{
            echo $_FILES['archivo']['error'];
        }
    }else{
        echo "No se subio archivo Relacionado al Articulo.<br>";
    }
    echo "Se registro Con exito";
}

?>