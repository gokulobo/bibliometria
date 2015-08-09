<?php

require("../datos/conectar.php");
$cedula = $_POST['cedula'];
$based = ("SELECT * FROM docente where cedula='".$cedula."'");
$rs = mysql_query($based);
$datos=array();

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos = array("id_docente"=>$fila['id_docente'],"nombre"=>$fila['nombre'],"apellido"=>$fila['apellido'],
            "nacionalidad"=>$fila['nacionalidad'],"cedula"=>$fila['cedula'],"fecha_nac"=>$fila['fecha_nac'],
            "lugar_nac"=>$fila['lugar_nac'],"guia"=>$fila['guia'],"coordinador"=>$fila['coordinador'],
            "profesion"=>$fila['profesion'],"clave_usuario"=>$fila['clave_usuario'],
            "cargo"=>$fila['cargo'],"correo"=>$fila['correo'],"telefono_hab"=>$fila['telefono_hab'],"telefono_cel"=>$fila['telefono_cel'],"direccion_hab"=>$fila['direccion_hab'],
            "categoria"=>$fila['categoria'],"modalidad"=>$fila['modalidad'],"dedicacion"=>$fila['dedicacion'],"ascenso"=>$fila['ascenso'],"fecha_ingreso"=>$fila['fecha_ingreso'],
            "investigacion"=>$fila['investigacion'],"observaciones"=>$fila['observaciones'],"respuesta"=>"si"
            );
    }
}else{
    $datos = array("respuesta"=>"no");
}

echo json_encode($datos);
//echo $based;
?>