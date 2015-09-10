<?php

require("../datos/conectar.php");

$based = ("select proyecto.id_proyecto,titulo_proyecto as titulo,
resumen_proyecto as resumen,
area_investigacion as area,
concat(docente.nombre,' ',docente.apellido)as nombre,
concat(numero_cohorte,tipo_cohorte)as cohorte,seccion,
tesis,proyecto.id_carrera,trayecto,trimestre,
if (estatus = 1,'Terminado','Pendiente')as estatus
from proyecto
join docente on docente.id_docente = proyecto.id_docente
join cohorte on cohorte.id_cohorte = proyecto.id_cohorte
join (
	select id_proyecto,id_alumno
	from grupo_proyecto
	group by id_proyecto)as a on a.id_proyecto = proyecto.id_proyecto
join alumnos on alumnos.id_alumno = a.id_alumno
where proyecto.id_carrera = ".$_SESSION['id_carrera']."
");
$rs = mysql_query($based);
$datos="<h4>Datos Proyecto</h4><br><table class='table' align='center'>
<thead><tr><th style='width: 50px;'>Titulo</th><th style='width: 50px;'>Resumen</th><th style='width: 50px;'>Area</th>
<th>Tutor</th><th>Integrantes</th><th>Cohorte</th><th>Sección</th><th>%Realizado</th><th>Estatus</th><th>Tesis</th></tr>
</thead>";
//$datos="<table class='striped responsive-table'>";
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos .= "<tr><td>".$fila['titulo']."</td><td>".$fila['resumen']."<td>".$fila['area']."</td>
        <td>".$fila['nombre']."</td><td>";
        $consulta = "select concat(nombre,' ',apellido)as nombre
from grupo_proyecto
join alumnos on alumnos.id_alumno = grupo_proyecto.id_alumno
where id_proyecto=".$fila["id_proyecto"];
        $rs2 = mysql_query($consulta);
        if (mysql_num_rows($rs2) > 0) {
            while ($fila2 = mysql_fetch_assoc($rs2)) {
                $datos .= "<hr>".$fila2['nombre']."<br>";
            }
        }else{
            $datos .= "No posee integrantes";
        }
        switch($fila['trimestre']){
            case 'I':$porcen = 20;break;
            case 'II':$porcen = 40;break;
            case 'III':$porcen = 60;break;
            case 'IV':$porcen = 80;break;
            case 'V':$porcen = 100;break;
        }
        $datos .= "</td><td>".$fila['cohorte']."</td><td>".$fila['seccion']."</td><td>
        <div class='progress'>
            <div class='determinate' style='width:".$porcen."%'></div>
        </div><div>".$porcen."%</div>
        </td><td>".$fila['estatus']."</td>
        <td>";

        if($fila['tesis'] != '')$datos .="<a href='tesis/".$fila['tesis']."' target='blank'>Descargar</a>";

        $datos .= "</td></tr>";
        /*$datos .= "<tbody><tr><th>Nombre</th><td>".$fila['nombre']."</td><th>Apellido</th><td>".$fila['apellido']."</td></tr>
        <tr><th class='blue'>F.Nacimiento</th><td>".$fila['fecha_nac']."</td><th>L.Nacimiento</th><td>".$fila['lugar_nac']."</td></tr>
        ";*/
    }
}

$datos .= "</table>";

echo $datos;
?>