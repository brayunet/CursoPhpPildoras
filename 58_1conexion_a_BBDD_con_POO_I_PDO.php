<?php

class Conexion{

    protected $conexion_bd;

    public function __construct(){

        try{//aqui en el try como siempre se hace todo el codigo de conexion para pdo

            $this->conexion_bd = new PDO('mysql:host=localhost; dbname=pruebas','root','19926290727');

            $this->conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->conexion_bd->exec("SET CHARACTER SET utf8");

            return $this->conexion_bd;

        }catch(Exception $e){
        
            echo "la linea del error es" . $e->getLine();
        
        }
        
    }
    
}


?>