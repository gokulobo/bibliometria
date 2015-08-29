<?php

require("../datos/conectar.php");
//print_R($_POST);
$id_carrera = $_POST['id_carrera'];
$id_cohorte = $_POST['id_cohorte'];
$tcohorte = explode('|',$_POST['tcohorte']);
$tri = $_POST['tri'];
$tra = $_POST['tra'];
$based = "select titulo_proyecto,id_proyecto,
id_cohorte as id_cohorte,proyecto.id_carrera,nombre,apellido
from proyecto
join docente on docente.id_docente = proyecto.id_docente
where proyecto.id_cohorte=" . $id_cohorte . " and proyecto.id_carrera=" . $id_carrera;
$rs = mysql_query($based);
$resultado = "
<img src='img/uptm.png' style='width: 100%;'/>
<div class='row'>
    <div class='col s12'>
        <div class='row'>
            <div class='input-field col s3'><b>Cohorte:".$tcohorte[0].substr($tcohorte[1],-1)."</b></div>
            <div class='input-field col s3'><b>".$tcohorte[2]."</b></div>
            <div class='input-field col s3'><b>Trayecto:".$tra."</b></div>
            <div class='input-field col s3'><b>Trimestre:".$tri."</b></div>
        </div>
    </div>
</div>
";

if (mysql_num_rows($rs) > 0) {
    $i=1;
    while ($fila = mysql_fetch_assoc($rs)) {
        $resultado .= "<table style='width:100%;' class='bordered striped'><thead><tr><th colspan='3' class='blue lighten-3'>Grupo ".$i."</th></tr></thead>
        <tbody><tr><td colspan='3'><b>Nombre Del Proyecto:</b>".$fila['titulo_proyecto']."</td></tr>
        <tr><td colspan='3'><b>Tutor:</b>".$fila['nombre']." ".$fila['apellido']."</td></tr>
        ";
        $i++;
        $consulta = "select id_proyecto,nombre ,apellido,correo,telefono_cel
from grupo_proyecto
join alumnos on alumnos.id_alumno = grupo_proyecto.id_alumno
where id_proyecto = ".$fila['id_proyecto']." and trayecto='".$tra."' and trimestre='".$tri."'";
        $rs2 = mysql_query($consulta);
        if (mysql_num_rows($rs2) > 0) {
            $resultado .= "<tr><td><b>Nombre Y Apellido</b></td><td><b>Correo</b></td><td><b>Telefono</b></td></tr>";
            while ($alum = mysql_fetch_assoc($rs2)) {
                $resultado .= "<tr><td>".$alum['nombre']." ".$alum['apellido']."</td><td>".$alum['correo']."</td><td>".$alum['telefono_cel']."</td></tr>
                ";
            }
            $resultado .="<tr><td colspan='3'></td></tr>";
        }else{
            $resultado .= "<tr><td colspan='3'>No posee alumnos Registrados</td></tr>";
        }
        $resultado .= "</tbody></table>";

    }
}else{
    $resultado .= "<br><br>No Se encontraron proyectos....";
}
echo $resultado;
?>