<?php
require("datos/conectar.php");
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{


    $file = $_FILES['archivo']['name'];
    //print_R($file);

    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    if(!is_dir("tesis/"))
        mkdir("tesis/", 0777);

    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"tesis/".$file))
    {
        $query = "UPDATE proyecto set tesis='".$file."' where id_proyecto=".$_POST['id_proyecto'];
        echo "Se Subio Con exito";

        $rs =mysql_query($query);

    }else{
        echo $_FILES['archivo']['error'];
    }

}else{
    echo "error al subir archivo";
}