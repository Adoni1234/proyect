<?php

class conexion(){

private $local = "localhost";
private $user ="root";
private $pasw="";
private $db ="politecnico1";

function __construct(){


$conexion= mysqli_connect($local,$user,$pasw,$db);

if($conexion){
    echo "conexion existosa";
}else{
    echo "no se ha conectado";
}
}

}





?>