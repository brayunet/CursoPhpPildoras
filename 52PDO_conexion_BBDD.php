<?php

//QUE ES PDO
//SIGNIFICA PHP DATA OPJECT

//ES UNA ESPEDCIE DE LIBRERIA DE PHP , CONOCIDA COMO CAPA DE ABSTRACCION , COYO CODIGO ES USADO PARA HACER CONSULTAS Y MODIFICACIONES A BASES DE DATOS, EL CODIGO ESTA EN UN PUNTO INTERMEDIO NETRE EL CODIGO PHP  EL CODIGO DE BASES DE DATOS, PDO ES UN LENGUAJE ORIENTADO A OBJETOS 

//SU PRINCIPAL BENTAJA FRENETE A MSQLI Y MYSQLI , ES QUE ADEMAS DE PERMITIR CONECTARNOS CON BASES DE DATOS MYSQL , TAMBIEN NOS PERMITE CONECTARNOS CON BASES DE DATOS COMO ORACLE, SQL SEVER, ETC .

//PDO SE TRABAJA COMO CLASE y como cualquier clase tiene sus metodos y atributos, los cuales podemos OPTENER DE LA PAGINA DE PHP BUSCANDO EN GOOGLE PHP PDO




//AHOR CREAREMOS LA CONEXION DE PDP 

//PRIMERO LE ASIGNAMOS AU NA VARIABLE , LA INSTANCIA DE PDO

    try{ // esta parte del codigo intenta ejecutar el codigo y en caso de que ese intento no tenga exito en catch agarra el error lo captura, y le dice ahi en el catch lo que tenga que hacer 
        $base = new PDO('mysql:host=localhost; bdname=pruebas','root', '19926290727');
            //en mysql de-> mysql:host= se pone el tipo de base de datos que se va a trabajar en este caso es mysql pero podria sr oracle o sql lite , etc
        echo "Conexion OK";

    }catch(Exception $e){//catch siempre recibe 2 argumentos la palabra excepcion y una argumento
    //cuando se produce una excepcion se genera un objeto y este objeto tiene sus propiedades o metodos, que nos permites saber que tipo de fallo es el que se esta dando , en nuestro caso a ese objeto que arroja exceptio lo hemos llamado $e(es un estandar este nombre) pero puede tener cualquier otro nombre


        die('Error: ' . $e->getMessage());
    
    }finally{
    
        $base=null;
    
    }// luego try catch tiene una tercera extructura ue es el finally que se ejecutada se haya producido un fallo o no  y en ella se hara una limpiesa en memoria de la varialbe ue se encarga de hacer la conexion
//OJO CON LOPS ESPACIOS EN EL PRIMER PARAMTERO , PUEDE OCACIONAR PROBLEMAS 

//el constructor d eesta clase pdo nos pide 3 argumentos, en el primero es , agragar el host o conexion y el nombre de la base de datos, en el segundo el usuario, y el tercero es la contraseña

//CUANDO OCURRE UN FALLO EN LA CONEXION , S ELE CONOCE COMO UNA EXCEPCION , FALLO=EXCEPCION, FALLO EN TIEMPO DE EJECUCION, UE NO TIENEN QUE VER CON LA SENTAXIS DEL CODIGO

//PARA TRABAJAR CON EL FALLO SE USA TRY(INTENTAR)  CATCH(AGARRAR)

?>