<?php

require("../datos/conectar.php");
//print_R($_POST);
$id = $_POST['id'];

$based = "select titulo_proyecto,nombre_carrera,nombre_municipio,
concat(nombre,' ',apellido)as nombre,nombre_comunidad
from proyecto
join comunidad on comunidad.id_comunidad = proyecto.id_comunidad
join docente on docente.id_docente = proyecto.id_docente
join carrera on carrera.id_carrera = proyecto.id_carrera
join municipio on municipio.id_municipio = comunidad.municipio
where municipio=".$id;
$rs = mysql_query($based);
$resultado = "";
$titulo = "";

if (mysql_num_rows($rs) > 0) {
    $i=0;
    $resultado .= "
        <div class='row'>
            <div class='col s12'>
            <table class='bordered striped'><thead><tr><td>Proyecto</td><td>Carrera</td><td>Tutor</td><td>Comunidad</td></tr></thead><tbody>
            ";
    while ($fila = mysql_fetch_assoc($rs)) {
        $i++;
        $titulo = "<div class='row'><div class='col s12'><h3>".$fila['nombre_municipio']."</h3></div></div>";
        $resultado .= "<tr><td>".$fila['titulo_proyecto']."</td><td>".$fila['nombre_carrera']."</td><td>".$fila['nombre']."</td><td>".$fila['nombre_comunidad']."</td></tr>";
    }
    $resulta.="</table></div></div>";
}else{
    $resultado = 0;
}
echo $titulo.$resultado;
?>