<?php

require("57_2conexion_a_BBDD_con_POO_I_mysqli.php");

class DevuelveProductos extends Conexion{
//se hace el uso de la herencia para poder reutilizar el codigo de la clase conexion ubicada en el otro archivo

    public function __construct(){//asi se deben declarar los constructors, ya no con el mismo nombre de la clase ya que e considera un practica obsoleta, pero a la hora de llamar los contructores  fuera de las clases si se hace poniendo el nombre de la clase

        //desde este constructor llamamos al constructor e la clse padre conexion
         parent::__construct();//cn esta linea lo que se logra es llamar el contructor de la clase padre , lo que significa que cuando se llegue aesta linea se sejecutara el codigo enargado de hacer la conexion con la base de datos

         
    }

    public function get_productos(){
        //aqui se puede utilizar la variable conexion_db dentro de la clase DevuelveProductos gracias a la herencia , ya que esta propiedad no esta declarada dentro de esta clase y a su vez se pueden llamar sus propiedades que estas propiedades viene dadas por la uncion mysqli

        $resultado=$this->conexion_bd->query("select * from productos");

        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        //fetch_all crea un array en el que se almacenara la consulta y  MYSQLI_ASSOC nos permitira trabajar ese array como asociativo

        return $productos;
    }
}

?>