<?php
require("../datos/conectar.php");
if($_POST['id_proyecto']==0){
    $inserta = "INSERT into proyecto(titulo_proyecto,area_investigacion,
                tipo_proyecto,apoyo,tipo_apoyo,resumen_proyecto,
                id_carrera,id_comunidad,id_docente,observaciones)
                values('".$_POST['titulo_proyecto']."','".$_POST['area_investigacion']."',
                '".$_POST['tipo_proyecto']."','".$_POST['apoyo']."',
                '".$_POST['tipo_apoyo']."','".$_POST['resumen_proyecto']."',
                ".$_POST['id_carrera'].",".$_POST['id_comunidad'].",".$_POST['id_docente'].",
                '".$_POST['observaciones']."')";
    $rs = mysql_query($inserta);
    if (!$rs) {
        echo "No se pudo Insertar".$inserta;
    }else{
        echo "Se registro Con exito".$inserta;
    }
}else{
    $actualiza = "UPDATE proyecto SET titulo_proyecto='".$_POST['titulo_proyecto']."',
    area_investigacion='".$_POST['area_investigacion']."',
    tipo_proyecto='".$_POST['tipo_proyecto']."',
    apoyo='".$_POST['apoyo']."',tipo_apoyo='".$_POST['tipo_apoyo']."',
    resumen_proyecto='".$_POST['resumen_proyecto']."', id_carrera=".$_POST['id_carrera'].",
    id_comunidad=".$_POST['id_comunidad'].",
    id_docente=".$_POST['id_docente'].",observaciones='".$_POST['observaciones']."'  where id_proyecto=".$_POST['id_proyecto'];
    $rs = mysql_query($actualiza);
    if (!$rs) {
        echo "No se pudo Actualizar".$actualiza;
    }else{
        echo "Se actualizo Con exito";
    }
}
?>