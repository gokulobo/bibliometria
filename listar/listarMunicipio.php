<?php

require("../datos/conectar.php");
$estado = $_POST['estado'];
$based = ("SELECT * FROM municipio where id_estado=".$estado);
$rs = mysql_query($based);
$opciones = "<option value='seleccione municipio'>Seleccione Municipio</option>";

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $opciones .= "<option value='". $fila["id_municipio"]."'>". $fila["nombre_municipio"]."</option>";
    }
}
echo $opciones;
?>