<?php
require("../datos/conectar.php");
//print("<pre>");
//print_R($_POST);
if($_POST['id_proyecto']==0){
    $inserta = "INSERT into proyecto(titulo_proyecto,area_investigacion,
                tipo_proyecto,apoyo,tipo_apoyo,resumen_proyecto,
                id_carrera,id_comunidad,id_docente,observaciones,id_cohorte)
                values('".$_POST['titulo_proyecto']."','".$_POST['area_investigacion']."',
                '".$_POST['tipo_proyecto']."','".$_POST['apoyo']."',
                '".$_POST['tipo_apoyo']."','".$_POST['resumen_proyecto']."',
                ".$_POST['id_carrera'].",".$_POST['id_comunidad'].",".$_POST['id_docente'].",
                '".$_POST['observaciones']."',".$_POST['cohorte'].")";
    $rs = mysql_query($inserta);
    if (!$rs) {
        echo "No se pudo Insertar".$inserta;
    }else{
        $id = mysql_insert_id();
        $listaAlumnos = explode(",",$_POST['arreglo']);
        foreach($listaAlumnos as $alum){
            $inserta2 = "INSERT into grupo_proyecto(id_alumno,id_proyecto) values(".$alum.",".$id.")";
            $rs = mysql_query($inserta2);
            $update2 = "update proyecto set cupo=(cupo+1) where id_proyecto=".$id;
            $rs = mysql_query($update2);
        }

        echo "Se registro Con exito".$inserta;
    }
}else{
    $actualiza = "UPDATE proyecto SET titulo_proyecto='".$_POST['titulo_proyecto']."',
    area_investigacion='".$_POST['area_investigacion']."',
    tipo_proyecto='".$_POST['tipo_proyecto']."',
    apoyo='".$_POST['apoyo']."',tipo_apoyo='".$_POST['tipo_apoyo']."',
    resumen_proyecto='".$_POST['resumen_proyecto']."', id_carrera=".$_POST['id_carrera'].",
    id_comunidad=".$_POST['id_comunidad'].",
    id_docente=".$_POST['id_docente'].",observaciones='".$_POST['observaciones']."',
    id_cohorte= ".$_POST['cohorte']." where id_proyecto=".$_POST['id_proyecto'];
    $rs = mysql_query($actualiza);
    if (!$rs) {
        echo "No se pudo Actualizar".$actualiza;
    }else{
        echo "Se actualizo Con exito";
    }
}
?>