<?php
/**
 * Created by PhpStorm.
 * User: lobo
 * Date: 01/08/15
 * Time: 12:10 PM
 * lobo eliana
 */
session_start();//para manejo de sessiones
$conectar = mysql_connect("localhost","root","123");//conectar a mysql
$base = mysql_select_db("sistema",$conectar);//conectar a base de datos
/*if($base)echo "entro<br>";
else echo "no entro".mysql_error()."<br>";*/
$resulado = mysql_query("SET NAMES 'utf8'", $conectar);//query para que acepte caracteres especiales
?>