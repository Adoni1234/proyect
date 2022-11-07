<?php
require_once("Autoload.php");

$objUsuario = new Usuario();

$inse=$objUsuario->insertUsuario();
echo $inse;


?>