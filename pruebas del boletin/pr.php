<?php
require_once("usuario.php");

$hjk=$objUsuario->getUsuarios();



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
    <input type="text" name="numbe" value="<?=$hjk['0'] ?>"><br><br>

    <label for="">nombre</label><br>
    <input type="number" name="numbe"><br><br>

    <button type="submit">clip</button>

</form>

    
</body>
</html>