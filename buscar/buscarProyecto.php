<?php
require("datos/conectar.php");
$id = $_POST['id_proyecto'];
$based = ("SELECT * FROM proyecto where id_proyecto=".$id);
$rs = mysql_query($based);
$datos=array();

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos = array("titulo_proyecto"=>$fila['titulo_proyecto'],"area_investigacion"=>$fila['area_investigacion'],"tipo_proyecto"=>$fila['tipo_proyecto'],
            "apoyo"=>$fila['apoyo'],"tipo_apoyo"=>$fila['tipo_apoyo'],"resumen_proyecto"=>$fila['resumen_proyecto'],
            "id_carrera"=>$fila['id_carrera'],"id_comunidad"=>$fila['id_comunidad'],"id_docente"=>$fila['id_docente'],"respuesta"=>"si"
        );
    }
}else{
    $datos = array("respuesta"=>"no");
}

echo json_encode($datos);
//echo $based;
?>
