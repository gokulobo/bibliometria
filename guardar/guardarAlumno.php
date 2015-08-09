<?php
require("datos/conectar.php");
if($_POST['id_alumno']==0){
    $inserta = "INSERT into alumnos(nombre,apellido,nacionalidad,cedula,carnet,grado_instruccion,correo,direccion_hab,
            telefono_hab,telefono_cel,id_cohorte,id_carrera,trayecto,trimestre) values('".$_POST['nombre']."',
            '".$_POST['apellido']."','".$_POST['nacionalidad']."',".$_POST['cedula'].",'".$_POST['carnet']."','".$_POST['grado_instruccion']."',
            '".$_POST['correo']."','".$_POST['direccion_hab']."','".$_POST['telefono_hab']."','".$_POST['telefono_cel']."',
            ".$_POST['cohorte'].",".$_POST['carrera'].",'".$_POST['trayecto']."','".$_POST['trimestre']."')";
    $rs = mysql_query($inserta);
    if (!$rs) {
        echo "No se pudo Insertar".$inserta;
    }else{
         echo "Se registro Con exito".$inserta;
    }
}else{
    $actualiza = "UPDATE alumnos SET nombre='".$_POST['nombre']."', apellido='".$_POST['apellido']."', nacionalidad='".$_POST['nacionalidad']."',
     cedula=".$_POST['cedula'].",carnet='".$_POST['carnet']."', grado_instruccion='".$_POST['grado_instruccion']."', correo='".$_POST['correo']."',
    direccion_hab='".$_POST['direccion_hab']."', telefono_hab='".$_POST['telefono_hab']."', telefono_cel='".$_POST['telefono_cel']."',
    id_cohorte=".$_POST['cohorte'].", id_carrera=".$_POST['carrera'].",trayecto='".$_POST['trayecto']."',trimestre='".$_POST['trimestre']."' where id_alumno=".$_POST['id_alumno'];
    $rs = mysql_query($actualiza);
    if (!$rs) {
        echo "No se pudo Actualizar".$actualiza;
    }else{
        echo "Se actualizo Con exito";
    }
}
?>