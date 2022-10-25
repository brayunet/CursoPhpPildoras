<?php

//CONECTAR  A UNA BBDD MYSQL UTILIZANDO POO Y MYSQLI

// a la hora de programar existen 2 formas o estilos de programas la forma procedimental que es la que se ha estado utilizando hasta ahora y la programacion orientada a objetos

//hoy en dia es mas correcto o mas moderno utilizar un estilo orientado a objetos , construir clases , propiedades y metodos a la hora d eprogramas y onectar con bases de datos

// pero la manera procedimental tambien es valida con las librerias mysqli y pdo

//lo que veremos es como utilizar las librerias mysqli y pdo con POO

// los diseños de las clases que se haran son los diseños que da Juan para el curso , pero el diseño podria ser cualquiera que se ocuriera pero que funciones


//1 - definimos unas constantes para realizar la conexion , como cualuier constante , lo hemos hecho en una archivo aparte llamada dtos configuracion conexion

//ahora llamamos el archivo para la conexion
require("57_1datos_configuracion_conexion.php");


//2-AHORA CREAMOS LA CLASE PARA HACER LA CONEXION

class Conexion{

    protected $conexion_bd;

    public function __construct(){//asi se deben declarar los constructors, ya no con el mismo nombre de la clase ya que e considera un practica obsoleta, pero a la hora de llamar los contructores  fuera de las clases si se hace poniendo el nombre de la clase

        $this->conexion_bd = new mysqli(db_host, db_usuario, db_contra, db_nombre);

        if($this->conexion_bd->connect_errno){
            //en el if se planteo el metodo que se encarga de verificar si hubo un error al conectar, ue si fallo dara true y si no false 

            echo "Fallo al conectar con BBDD MySQL: " . $this->conexion_bd->connect_errno;

            return;
        }

        $this->conexion_bd->set_charset(db_charset);//llamado a la funcion que nos permitira trabajar con caracteres latinos
    }
    //hasta aqui se hace la clase que se encargara de la conxion con la base de datos
}

//AHORA EN UN ARCHIVO NUEVO SE TRABAJARA PARA QUE ACCESA A LA TABLA Y NOS DEVUELVA LA ONSULTA QUE SE HAGA, Y SE TRABAJA CON UN NEUEVO ARCHIVO PORQUE EN POO SE DEBE HACER MODULARIZACION QUE TRATA DE SEOARAR EL CODIGO EN MODULOS CON FUNCIONES ESPECIFICAS CADA UNO , ESTO PARA SACARLE VENTAJA EN UN FUTURO Y PODER REUTILIXAR CADA MODULO PARA UN PROYECTO FUTURO Y NO SOLO COPIAR Y PEGAR CODIGO.

?>