<?php

//insertar registros en una BBDD con PDO


//eliminar registros en una BBDD con PDO

//continuaremos utilizando el codigo que hemos venido desarrollando para la conexion con pdo

$busqueda_cart=$_POST["c_art"];
//a pesar de que para eliminar un registro no es necesario utilizar todos los campos de un formulario, usarmos el mismo formulario que se uso para insertar registros, pero en el codigo php no sera necesario usar las demas varibles que reciben los campos del formulario




    try{
        $db_usuario="root";
        $db_contra="19926290727";
        $base = new PDO("mysql:host=localhost; bdname=pruebas",         $db_usuario,$db_contra);

            
           
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8"); 
        
        //se cambia la sentencia sql de una de busqueda por una de eliminar registros

        //se usa en values los marcadores para seguir aprovechando los arrays asociativos, en este caso los marcadores coinciden con el nombre del as variables pero o es necesario

        //sentencia sql para eliminar registros
        $sql= "delete from pruebas.productos where CODIGOARTICULO=:c_art";
        
        $resultado=$base->prepare($sql);

       //tambien deberemos modificar la funcion execute ya que tendra que trabajar con el unico marcador que tenemos para eliminar en funcion de un campo

        $resultado->execute(array(":c_art"=>$busqueda_cart));
        
        
        //este while ya no es util ya que su funcion era recorer el array asociativo para mostrar los resultados en pantalla, y ya no es requerido por lo que solo se va a insertar registros
        /*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            

            echo "Nombre articulo: " . $registro['NOMBREARTCULO'] . "Seccion: " . $registro['SECCION'] . "Precio: " . $registro['PRECIO'] . "Pais de origen: " . $registro['PAISDEORIGEN'] . "</br>";
        }*/
            
        //lo que si se hara es mostrar un mensaje por un echo de que se ha tenido exito , y no es necesario porner una condicion para verificar si hemos tenido exito , ya que si estamos dentro de try{} y el se cumple  es que hemos tenido exito por lo que el mensaje deberia ir al final del try

        echo "Registro eliminado con exito";

        $resultado->closeCursor();
    
    }catch(Exception $e){
            die('Error: ' . $e->getMessage());
        
    }finally{
        
        $base=null;
        
    }
//TODO EL CODIGO FUNCIONA

?>