<?php

require("../datos/conectar.php");

$based = ("select id_alumno ,nombre,apellido,cedula,carnet,fecha_nac,lugar_nac,
correo,nombre_carrera,trayecto,trimestre,concat(numero_cohorte,tipo_cohorte)as cohorte,
seccion
from alumnos
join carrera on carrera.id_carrera = alumnos.id_carrera
join cohorte on cohorte.id_cohorte = alumnos.id_cohorte
where alumnos.id_carrera=".$_SESSION['id_carrera']."
");
$rs = mysql_query($based);
$datos="<h4>Datos Basicos</h4><br><table class='striped responsive-table'>
<thead><tr><th>Cedula</th><th>Nombre Y Apellido</th><th>Carnet</th>
<th>Fecha Nac</th><th>Lugar Nac</th>
<th>Correo</th><th>Carrera</th><th>Cohorte</th><th>Seccion</th>
<th>Trayecto</th><th>Trimestre</th></tr>
</thead>";
//$datos="<table class='striped responsive-table'>";
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos .= "<tr><td>".$fila['cedula']."</td><td>".$fila['nombre']." ".$fila['apellido']."</td>
        <td>".$fila['carnet']."</td><td>".$fila['fecha_nac']."</td>
        <td>".$fila['lugar_nac']."</td><td>".$fila['correo']."</td>
        <td>".$fila['nombre_carrera']."</td><td>".$fila['cohorte']."</td><td>".$fila['seccion']."</td>
        <td>".$fila['trayecto']."</td><td>".$fila['trimestre']."</td></tr>";
        /*$datos .= "<tbody><tr><th>Nombre</th><td>".$fila['nombre']."</td><th>Apellido</th><td>".$fila['apellido']."</td></tr>
        <tr><th class='blue'>F.Nacimiento</th><td>".$fila['fecha_nac']."</td><th>L.Nacimiento</th><td>".$fila['lugar_nac']."</td></tr>
        ";*/
    }
}

$datos .= "</table>";

echo $datos;
?>