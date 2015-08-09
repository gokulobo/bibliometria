<?php
require("../datos/conectar.php");
if($_POST['id_docente']==0){
    $inserta = "INSERT into docente(nombre,apellido,nacionalidad,cedula,fecha_nac,lugar_nac,profesion,cargo,correo,clave_usuario,
            telefono_hab,telefono_cel,direccion_hab,categoria,modalidad,dedicacion,ascenso,fecha_ingreso,investigacion,observaciones";
    if(isset($_POST['guia'])) $inserta .=",guia";
    if(isset($_POST['coordinador'])) $inserta .=",coordinador";
    $inserta .=") values('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['nacionalidad']."',
            ".$_POST['cedula'].",'".$_POST['fecha_nac']."','".$_POST['lugar_nac']."','".$_POST['profesion']."','".$_POST['cargo']."',
            '".$_POST['correo']."',md5('".$_POST['clave_usuario']."'),'".$_POST['telefono_hab']."','".$_POST['telefono_cel']."',
            '".$_POST['direccion']."','".$_POST['categoria']."','".$_POST['modalidad']."','".$_POST['dedicacion']."',
            '".$_POST['ascenso']."','".$_POST['fecha_ingreso']."','".$_POST['investigacion']."','".$_POST['observaciones']."'";
    if(isset($_POST['guia'])) $inserta .=",1";
    if(isset($_POST['coordinador'])) $inserta .=",1";
    $inserta.=")";
    $rs = mysql_query($inserta);
    if (!$rs) {
        echo "No se pudo Insertar".$inserta;
    }else{
        echo "Se registro Con exito".$inserta;
    }
}else{
    $actualiza = "UPDATE docente SET nombre='".$_POST['nombre']."',apellido='".$_POST['apellido']."',nacionalidad='".$_POST['nacionalidad']."',
    cedula=".$_POST['cedula'].",fecha_nac='".$_POST['fecha_nac']."',lugar_nac='".$_POST['lugar_nac']."',profesion='".$_POST['profesion']."',
    cargo='".$_POST['cargo']."',correo='".$_POST['correo']."',clave_usuario='".$_POST['clave_usuario']."',telefono_hab='".$_POST['telefono_hab']."',
    telefono_cel='".$_POST['telefono_cel']."',direccion_hab='".$_POST['direccion']."',categoria='".$_POST['categoria']."',modalidad='".$_POST['modalidad']."',
    dedicacion='".$_POST['dedicacion']."',ascenso='".$_POST['ascenso']."',fecha_ingreso='".$_POST['fecha_ingreso']."',investigacion='".$_POST['investigacion']."',observaciones='".$_POST['observaciones']."'";
    if(isset($_POST['guia'])) $actualiza .=",guia=1";
    if(isset($_POST['coordinador'])) $inserta .=",coordinador=1";
    $actualiza.=" WHERE id_docente=".$_POST['id_docente']."
    ";
    $rs = mysql_query($actualiza);
    if (!$rs) {
        echo "No se pudo Actualizar".$actualiza;
    }else{
        echo "Se actualizo Con exito";
    }
}


?>