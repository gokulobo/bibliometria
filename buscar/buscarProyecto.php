<?php
require("../datos/conectar.php");
$id = $_POST['id_proyecto'];
$titulo = $_POST['titulo'];
$based = ("SELECT * FROM proyecto where id_proyecto=".$id. " and titulo_proyecto='".$titulo."'");
$rs = mysql_query($based);
$datos=array();

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        foreach ($fila as $clave => $valor) {
            $datos[$clave] = $valor;
        }
    }
    $datos['respuesta'] = 'si';
}else{
    $datos = array("respuesta"=>"no");
}

echo json_encode($datos);
//echo $based;
?>
