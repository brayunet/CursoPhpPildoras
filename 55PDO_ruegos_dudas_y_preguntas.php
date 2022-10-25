<?php

//DIFERENCIAS ENTRE GET Y POST

//SIGNIFICADO DE LA LINEA DE ATRIBUTOS BBDD


//la funcion get envia la informacion del formulario de una paginaa otra usando la url, por lo tanto cuando se necesite eniar al servidor informacion sencible como usuarios y contraseñas , no se deberia usar get yaque alguein esde el navegador podria cachear la informacion mirando la url  opteniendola que no seria deseado.  Otra ocacion donde no se debe usar get es cuando hay urls con demaciada informacion ya que las pealizan por ser urls poco amigables ya que si un formulario tuviera 15 campos para llenar, la url tambien tendra esos 15 campos 

//por lo tanto se get se usa cuando se trabaj con pocos campos  la informacion no sea sencible, tambien se usara cuando se trabaje con ajax


//POR OTRO LADO  se trabaja con post cuando se trabaje con muchos campos de formulario o con areas de texto y cuando se trabaje con informacion sencible o cuando no se quiera quese cachee la informacion desde el navegador, tambien cuando se quiera enviar imagnenes se usa post


$busqueda_sec=$_POST["seccion"];
$busqueda_porig=$_POST["p_orig"];

    try{
        $db_usuario="root";
        $db_contra="19926290727";
        $base = new PDO("mysql:host=localhost;bdname=pruebas",          $db_usuario,$db_contra);

            //en poo todo lo que se programa es un objeto incluso los posibles errores conocidos como excepciones , si ocurreo un error en tiempo de ejecucion porque no se encuentra una tabla o no existe , lo que ocurre internamente es que se crea un objeto que es el objeto excecion  y como objeto ue es tien sus propiedades y sus metodos, por lo que podremos capturar este error y decirle al programa que haga determinada accion con ese error,  o mostrarlo para saber de que se trata 
            
            //setAttribute() establece un tributo, pero como tal lo que hace es generar el objeto d tipo excepcion y al no generar la excepcion no vamos a ser capaces de capturar el error para poder trabajrlo , que es lo uq s ehace en la linea 49, por lo tanto $e no sera capas de capturar ningun error para volverlo un objeto por lo que no tendremos nigun mensaje de error para la conexion

            // el primer parametro PDO::ATTR_ERRMODE le indica a setAttribute() que se va a trabajar con reporte de erroes ,y el segundo parametro es la manera en la que se va a trabajar el eporte del error , en nuestro caso como queremos trbajar con excepciones , se elije el parametro PDO::ERRMODE_EXCEPTION (que pertenece a PDO::ATTR_ERRMODE) 
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//????

        $base->exec("SET CHARACTER SET utf8"); 
                
    
        $sql= "select NOMBREARTCULO, SECCION, PRECIO, PAISDEORIGEN from pruebas.productosss where SECCION=:SEC and PAISDEORIGEN=:PORIG";
        
        $resultado=$base->prepare($sql);

       
        $resultado->execute(array(":SEC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));
        
        

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            

            echo "Nombre articulo: " . $registro['NOMBREARTCULO'] . "Seccion: " . $registro['SECCION'] . "Precio: " . $registro['PRECIO'] . "Pais de origen: " . $registro['PAISDEORIGEN'] . "</br>";
        }
              
        $resultado->closeCursor();
    
    }catch(Exception $e){
            //por ejemplo en esta linea de abajo del objeto error de excepcion $e para saber de que se trata este error se uso el metodo perteneciente a los errores getMessage() que se encarga de mostrar los errores este metodo pertenece al objeto excepcion
        die('Error: ' . $e->getMessage());
        
    }finally{
        
        $base=null;
        
    }

?>