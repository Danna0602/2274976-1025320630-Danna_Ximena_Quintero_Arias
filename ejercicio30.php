<?php
session_start();

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logueado";

echo "Sesion iniciada".":<br/>";

echo "usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];


?>