<?php
include("datos/conectar.php");

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$query = "select admin,docente.id_carrera as carr,correo,clave_usuario,guia,coordinador,
          concat(nombre,' ',apellido)as nombre,nombre_carrera as carrera
          from docente
           join carrera on carrera.id_carrera = docente.id_carrera
          where correo='".$correo."' and clave_usuario='".md5($clave)."'";
$consulta = mysql_query($query);

if (mysql_num_rows($consulta) > 0) {
    while ($fila = mysql_fetch_assoc($consulta)) {
        $_SESSION['usuario']=$fila['correo'];
        $_SESSION['nombre']=$fila['nombre'];
        $_SESSION['carrera']=$fila['carrera'];
        $_SESSION['id_carrera']=$fila['carr'];
        $_SESSION['guia'] = $fila['guia'];
        $_SESSION['admin'] = $fila['admin'];
        $_SESSION['coordinador'] = $fila['coordinador'];
    }
    echo "si";
}else{
    echo "No se Encuentra Registrado";
}
?>