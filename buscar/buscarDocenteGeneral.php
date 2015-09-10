<?php

require("../datos/conectar.php");
$cedula = $_POST['cedula'];
$based = ("SELECT * FROM docente where cedula='".$cedula."'");
$rs = mysql_query($based);

/*$datos="<h4>Datos Basicos</h4><br><table class='striped responsive-table'><thead><tr><th>Nombre Y Apellido</th><th>Fecha Nac</th><th>Lugar Nac</th>
<th>Profesion</th><th>Cargo</th><th>Correo</th><th>Telefono Hab</th><th>Telefon Cel</th><th>Direccion Hab</th>
<th>Categoria</th><th>Modalidad</th><th>Dedicacion</th><th>Ascenso</th><th>Fecha Ing</th><th>Lin Investigacion</th>
<th>Observaciones</th></tr>
</thead>";*/
$datos="<table class='table'>";
if (mysql_num_rows($rs) > 0) {
    while ($fila = mysql_fetch_assoc($rs)) {
        /*$datos .= "<tr><td>".$fila['nombre']." ".$fila['apellido']."</td><td>".$fila['fecha_nac']."</td>
        <td>".$fila['lugar_nac']."</td><td>".$fila['profesion']."</td><td>".$fila['cargo']."</td><td>".$fila['correo']."</td>
        <td>".$fila['telefono_hab']."</td><td>".$fila['telefono_cel']."</td><td>".$fila['direccion_hab']."</td>
        <td>".$fila['categoria']."</td><td>".$fila['modalidad']."</td><td>".$fila['dedicacion']."</td><td>".$fila['ascenso']."</td>
        <td>".$fila['fecha_ingreso']."</td><td>".$fila['investigacion']."</td><td>".$fila['observaciones']."</td>
        </tr>";*/
        $datos .= "<h4>Datos Basicos</h4><br><tbody><tr><th>Nombre</th><td>".$fila['nombre']."</td><th>Apellido</th><td>".$fila['apellido']."</td></tr>
        <tr><th class=''>F.Nacimiento</th><td>".$fila['fecha_nac']."</td><th>L.Nacimiento</th><td>".$fila['lugar_nac']."</td></tr>
        <tr><th>Profesión</th><td>".$fila['profesion']."</td><th>cargo</th><td>".$fila['cargo']."</td></tr>
        <tr><th>Correo</th><td>".$fila['correo']."</td><th>Teléfono Habitación</th><td>".$fila['telefono_hab']."</td></tr>
        <tr><th>Teléfono Celular</th><td>".$fila['telefono_cel']."</td><th>Dirección</th><td>".$fila['direccion_hab']."</td></tr>
        <tr><th>Categoría</th><td>".$fila['categoria']."</td><th>Modalidad</th><td>".$fila['modalidad']."</td></tr>
        <tr><th>dedicación</th><td>".$fila['dedicacion']."</td><th>Ascenso</th><td>".$fila['ascenso']."</td></tr>
        <tr><th>Fecha Ingreso</th><td>".$fila['fecha_ingreso']."</td><th>Investigación</th><td>".$fila['investigacion']."</td></tr>
        <tr><th>Observaciones</th><td>".$fila['observaciones']."</td></tr></tbody></thead>";


    }

    $datos .= "</table>";
}


/*
 * Datos Estudio
sele */
$based = ("select tipo,estudios.nombre,lugar from docente join estudios on estudios.id_docente = docente.id_docente where cedula='".$cedula."'");
$rs = mysql_query($based);

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    $datos .= "<br><br><h4>Estudios Realizados</h4><br><table class='table'><thead><th>Tipo</th><th>Nombre</th><th>Lugar</th>
</thead>";
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos .= "<tr><td>".$fila['tipo']."</td>
        <td>".$fila['nombre']."</td><td>".$fila['lugar']."</td>
</tr>";
    }
    $datos .= "</table>";
}


/*
 * Datos Articulo
 */
$based = ("select titulo,fecha_publicacion,volumen,numeracion,issn,pagina_colacion,articulo.observaciones,archivo from docente
join articulo on articulo.id_docente = docente.id_docente where cedula='".$cedula."'");
$rs = mysql_query($based);

//---desiciones: si el numero de coincidencias es igual a 1 entonces... ejecutar la funcion sesion_cliente dentro del script sesion_cliente.php, que guarda los datos de usuario y contraseña en variables de sesion. Y luego redirecciona a la pagina de inicio.php .....de lo contrario si no existen coincidencias, entonces devolver a cero las variables de sesion (por seguridad) y luego devuelve al usuario a la pagina INDEX donde debe ingresar el usuario y contraseña correctos.
if (mysql_num_rows($rs) > 0) {
    $datos .= "<br><br><h4>Articulos</h4><br><table class='table'><thead><th>Titulo</th><th>Fecha Pub.</th><th>Volumen</th>
<th>Numeracion</th><th>ISSN</th><th>Pag. Colacion</th><th>Observacion</th><th>Documento</th>
</thead>";
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos .= "<tr><td>".$fila['titulo']."</td>
        <td>".$fila['fecha_publicacion']."</td><td>".$fila['volumen']."</td><td>".$fila['numeracion']."</td><td>".$fila['issn']."</td>
        <td>".$fila['pagina_colacion']."</td><td>".$fila['observaciones']."</td><td>";
        if($fila['archivo'] != '')$datos .="<a href='articulos/".$fila['archivo']."' target='blank'>Descargar</a>";
        $datos .="</tr>";
    }
    $datos .= "</table>";
}
/*
 * investigacion
 * select peii,nivel_peii,ano_aplicacion_peii,forma_grupo_investigacion,nombre_investigacion,area_investigacion,investigacion.observaciones from docente join investigacion on investigacion.id_docente = docente.id_docente
 */
$based = ("select peii,nivel_peii,ano_aplicacion_peii,forma_grupo_investigacion,nombre_investigacion,area_investigacion,investigacion.observaciones
from docente join investigacion on investigacion.id_docente = docente.id_docente where cedula='".$cedula."'");
$rs = mysql_query($based);

if (mysql_num_rows($rs) > 0) {
    $datos .= "<br><br><h4>Investigacion</h4><br><table class='table'><thead><th>PEII</th><th>Nivel</th>
<th>Ano aplicacion</th><th>Forma Grupo</th><th>Nombre Investigacion</th><th>Area Investigacion</th>
<th>Investigacion</th><th>Observaciones</th>
</thead>";
    while ($fila = mysql_fetch_assoc($rs)) {
        $datos .= "<tr><td>".$fila['peii']."</td>
        <td>".$fila['nivel_peii']."</td><td>".$fila['ano_aplicacion_peii']."</td><td>".$fila['forma_grupo_investigacion']."</td><td>".$fila['nombre_investigacion']."</td>
        <td>".$fila['area_investigacion']."</td><td>".$fila['investigacion']."</td><td>".$fila['observaciones']."</td>
</tr>";
    }
    $datos .= "</table>";
}

echo $datos;
?>