<?php

class conexion{
    private $host= "localhost";
    private $user = "root";
    private $password= "";
    private $db="politecnico1";
    private $conect;

    public function __construct(){ 
        $connectionString= "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            $this->conect = new PDO($connectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "CONEXION EXITOSA";
        } catch (Exception $e) {
            $this->conect='ERROR DE CONEXION';
            echo "ERROR:". $e->getMessage();
        }
    }
    public function connect(){
        return $this->conect;
    }

}