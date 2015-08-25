<?php

require("../datos/conectar.php");
$based = ("SELECT id_docente,nombre,apellido,cedula FROM docente");
$rs = mysql_query($based);
$resultado = array();
//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $resultado[] =array("id_docente"=>$fila["id_docente"],"nombre"=>$fila["nombre"],"apellido"=>$fila["apellido"],"cedula"=>$fila["cedula"]);
    }
}
echo json_encode($resultado);
?>