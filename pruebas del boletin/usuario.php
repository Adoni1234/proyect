<?php

require_once("conexion.php");
class Usuario extends Conexion{
    private $id;
    private $nombre;
    #update
    private $id2;
    private $nombre2;
    private $conexion;


    

   
    

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();

    }

    public function insertUsuario(int $ID,string $NOMBRE ){

        $this->id=$ID;
        $this->nombre=$NOMBRE;

        $sql = "INSERT INTO lugar(ID,NOMBRE)VALUES(?,?)";
        $insert= $this->conexion->prepare($sql);
        $arrData= array($this->id,$this->nombre);
        $resInsert= $insert->execute($arrData);
        #$idInsert= $this->conexion->lastInsertId();
        #return $idInsert;

    }

    public function getUsuario(){
        $sql= "SELECT * FROM lugar";
        $execute = $this->conexion->query($sql);
        $request=$execute->fetchAll(PDO::FETCH_ASSOC);
        
        return $request;            

    }

    public function getUsuarios(){
        $sql= "SELECT NOMBRE ,ID FROM lugar WHERE ID=3 ";
        $execute = $this->conexion->query($sql);

        $datos=$execute->fetchAll();
        return $datos[0] ;
       
   
    }

    public function getModificarUser(int $ID2,string $NOMBRE2){
        $this->id2=$ID2;
        $this->nombre2=$NOMBRE2;

        $sql = "UPDATE lugar SET ID=? , NOMBRE=? WHERE ID= $ID2";
        $insert= $this->conexion->prepare($sql);
        $arrData= array($this->id2,$this->nombre2);
        $resInsert= $insert->execute($arrData);


    }




}


$objUsuario = new Usuario();

#$klk = $_REQUEST['id'];
#$klk2 = $_REQUEST['nom'];
#$inse=$objUsuario->insertUsuario($klk,$klk2);

$userts=$objUsuario->getUsuario();

print_r("<pre>");
print_r($userts[0]);
print_r("</pre>");



$hjk=$objUsuario->getUsuarios();

echo $hjk['0'],"   ", $hjk[1] ;

$id23 = $_POST['numbe'];
$nombre45=$_POST['a'];
$UPDA=$objUsuario->getModificarUser($id23,$nombre45);






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for="">nombre</label><br>
    <input type="text" name="numbe" value="<?=$hjk['1'] ?>"><br><br>

    <label for="">nombre</label><br>
    <input type="text" name="a" value="<?=$hjk['0'] ?>"><br><br>

    <button type="submit">clip</button>

</form>

    
</body>
</html>

