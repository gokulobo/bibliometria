<?php
include("datos/conectar.php");

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$query = "select correo,clave_usuario,guia,coordinador from docente where correo='".$correo."' and clave_usuario='".md5($clave)."'";
$consulta = mysql_query($query);

if (mysql_num_rows($consulta) > 0) {
    while ($fila = mysql_fetch_assoc($consulta)) {
        $_SESSION['usuario']=$fila['correo'];
        $_SESSION['guia'] = $fila['guia'];
        $_SESSION['coordinador'] = $fila['coordinador'];
    }
    echo "si";
}else{
    echo "No se Encuentra Registrado";
}
?>