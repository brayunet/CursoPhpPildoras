<?php

//conectar a una BBDD mysql utilizando poo con pdo

//a diferencia del codigo del video anterior este hara una busqueda con select pero ademas  filtrara datos osea no se mostrara toda la tabla, por lo tanto se usara el mismo codigo de 57_3paina_devuelve_resultados.php y lo modificaemos

// se utilizara como fichero para la  conexion el mismo archivo usado para este proposito en el video 57 y a su vez viene implisitos los datos de la conexion

require("58_1conexion_a_BBDD_con_POO_I_PDO.php");

class DevuelveProductos extends Conexion{

    public function __construct(){

         parent::__construct();
    
    }
        //al metodo get se le pondra un parametro que sera el que  se le introducira los valores  porteriormente cuando s mandne a llamar la funion a a traves de el objeto que se cree con este clase
    public function get_productos($dato){
       
        //modificamos la sentencia sql , hara lo mismo solo uqe haro va a filtrar datos

        $sql="select * from productos where PAISDEORIGEN='" . $dato . "'";

        $sentencia=$this->conexion_bd->prepare($sql);

        $sentencia->execute(array());

        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia->closeCursor();

        return $resultado;

        $this->conexion_bd = null;
    }
}


?>