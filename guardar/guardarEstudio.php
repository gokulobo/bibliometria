<?php
require("../datos/conectar.php");
$inserta = "INSERT into estudios(tipo,nombre,lugar,id_docente) values('" . $_POST['tipo'] . "','" . $_POST['nombre'] . "','" . $_POST['lugar'] . "'," . $_POST['id_docente'] . ")";
$rs = mysql_query($inserta);
if (!$rs) {
    echo "No se pudo Insertar";
} else {
    echo "Se registro Con exito";
}

?>