<?php

require("../datos/conectar.php");
//print_R($_POST);
$id_proyecto = $_POST['id_proyecto'];

$based = "select *,comunidad.direccion as dir1,representante.direccion as dir2,
representante.telefono_cel as tel2,representante.nombre as nombR,representante.apellido as apeR,
docente.telefono_cel as tel1
from proyecto
join comunidad on comunidad.id_comunidad=proyecto.id_comunidad
LEFT join representante on representante.id_comunidad = comunidad.id_comunidad
join cohorte on cohorte.id_cohorte = proyecto.id_cohorte
join carrera on carrera.id_carrera = proyecto.id_carrera
join estados on estados.id_estado = comunidad.estado
join municipio on municipio.id_municipio = comunidad.municipio
join parroquia on parroquia.id_parroquia = comunidad.parroquia
join docente on docente.id_docente = proyecto.id_docente
where id_proyecto=".$id_proyecto;
$rs = mysql_query($based);
$resultado = "
<img src='img/uptm.png' style='width: 100%;'/>
";

if (mysql_num_rows($rs) > 0) {
    $i=1;
    while ($fila = mysql_fetch_assoc($rs)) {
        $resultado .= "
        <div class='row'>
            <div class='col s12'>
                <div class='row'>
                    <div class='input-field col s12 grey lighten-3 center-align ' ><b>DATOS DEL ANTEPROYECTO<br> CARRERA "
                            .strtoupper($fila['nombre_carrera'])."|COHORTE ".$fila['numero_cohorte'].$fila['tipo_cohorte']
                            ."|SECCION ".$fila['seccion']. " </br>
                     </div>
                     <div class='row' >
                     <b>1.NOMBRE DE LA COMUNIDAD:</b><br><hr>".$fila['nombre_comunidad']."<hr>
                     </div>
                     <div class='row' >
                     <b>2.LOCALIZACIÓN:</b><br><hr>Estado ".$fila['nombre_estado']."
                     Municipio ".$fila['nombre_municipio']." Parroquia ".$fila['nombre_parroquia']." ,".$fila['dir1']."<hr>
                     </div>
                     <div class='row' >
                     <b>3.REPRESENTATE DE LA COMUNIDAD:</b><br><hr>".$fila['nombR']." ".$fila['apeR']."
                      DIRECCIÓN DE UBICACIÓN ".$fila['dir2']." TELÉFONO ".$fila['tel2']."<hr>
                     </div>
                     <div class='row' >
                     <b>4.TUTOR ASIGANADO:</b><br><hr>".$fila['nombre']." ".$fila['apellido']."
                      Correo ".$fila['correo']." TELÉFONO ".$fila['tel1']."<hr>
                     </div>

        ";
        $consulta = "select id_proyecto,nombre ,apellido,correo,telefono_cel,cedula
from grupo_proyecto
join alumnos on alumnos.id_alumno = grupo_proyecto.id_alumno
where id_proyecto = ".$id_proyecto;

        $i++;
        $rs2 = mysql_query($consulta);
        $resultado .= "
            <div class='row' ><b>5.INTEGRANTES:</b><br>
            <table><thead><tr><td>Nombre Y Apellido</td><td>Cedula</td><td>Correo</td><td>Telefono</td></tr></thead>";
        if (mysql_num_rows($rs2) > 0) {
            $resultado .= "<tbody>";
            while ($alum = mysql_fetch_assoc($rs2)) {
                $resultado .= "<tr><td>".$alum['nombre']." ".$alum['apellido']."</td><td>".$alum['cedula']."</td><td>".$alum['correo']."</td><td>".$alum['telefono_cel']."</td></tr>
                ";
            }
            $resultado .= "</tbody>";

        }else{
            $resultado .= "<tr><td colspan='4'>No posee alumnos Registrados</td></tr>";
        }
        $resultado .= "</div></table></div></div></div>";

    }
}else{
    $resultado .= "<br><br>No Se encontraron proyectos....";
}
echo $resultado;
?>