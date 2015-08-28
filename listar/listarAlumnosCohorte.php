<?php

require("../datos/conectar.php");

$based = ("SELECT alumnos.id_alumno as id,nombre,apellido,id_carrera,id_proyecto,cedula
FROM alumnos
left join grupo_proyecto on grupo_proyecto.id_alumno = alumnos.id_alumno
      where id_proyecto  is null and id_carrera=".$_POST['id_carrera']."  and id_cohorte=".$_POST['id_cohorte']);
$rs = mysql_query($based);
$opciones = "<option value='0'>Seleccione Alumnos</option>";

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $opciones .= "<option value='". $fila["id_alumno"]."'>". $fila["cedula"]."|".$fila["nombre"]." ".$fila["apellido"]."</option>";
    }
}else{
    $opciones = "<option value='0'>No Hay Alumnos Disponibles</option>";
}
echo $opciones;
?>