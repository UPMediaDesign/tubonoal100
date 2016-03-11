<?php 

// Parametros a configurar para la conexion de la base de datos 

//desarrollo
//$hotsdb = "localhost";    // sera el valor de nuestra BD 

//Productivo
$hotsdb = "upmedia.crcq0jopmo84.us-west-2.rds.amazonaws.com:3306";
$basededatos = "tubonoal100";    // sera el valor de nuestra BD 

$usuariodb = "upmedia";    // sera el valor de nuestra BD 
$clavedb = "upmedia8039876.,";    // sera el valor de nuestra BD 

$tabla = "regimena";    // sera el valor de una tabla 
//$tabla_db2 = "otratabla";    // sera el valor de otra tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 
