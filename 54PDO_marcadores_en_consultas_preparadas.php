<?php

//COMO UTILIZAR MARCADORES EN UNA CONSULTA PREPARADA

//USO DE ARRAYS ASOCIATIVOS EN CONSULTAS PREPARADAS

//los marcadores permiten usar arrays asociativos
//los arrays asociativos , sulen ser mejores para arealizar consultas preparadas y mas cuando 


//el uso de marcadore permite sustituir en la sentencia SQL el parametro de busqueda ? por un marcador , lo que permite usar dentro de la funcion execute un array asociativo. ESTO ES TAN BENTAJOSO EN UN CONSULTA DE UN SOLO PARAMETRO , PERO SI EN UNA ONSULTA DE VARIOS PARAMETROS


$busqueda_sec=$_GET["seccion"];
$busqueda_porig=$_GET["p_orig"];

    try{
        $db_usuario="root";
        $db_contra="19926290727";
        $base = new PDO("mysql:host=localhost;bdname=pruebas",          $db_usuario,$db_contra);

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//????

        $base->exec("SET CHARACTER SET utf8"); 
                
        //los marcadores se escriben con cualquier nombre QUE SE LES ASIGNE, siempre precesidos con los dos puentos : , como el ejemplo :SEC Y :PORIG
        $sql= "select NOMBREARTCULO, SECCION, PRECIO, PAISDEORIGEN from pruebas.productos where SECCION=:SEC and PAISDEORIGEN=:PORIG";
        
        $resultado=$base->prepare($sql);

        //en la linea siguiente s edeclaro el aray asociativo, indocandole que la posicion :n_art del arry de la con sulta, va a contener lo que nos traiga la variable busqueda
        $resultado->execute(array(":SEC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));
        //en execute se introducen los dos elementos del array asociativo
        

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            

            echo "Nombre articulo: " . $registro['NOMBREARTCULO'] . "Seccion: " . $registro['SECCION'] . "Precio: " . $registro['PRECIO'] . "Pais de origen: " . $registro['PAISDEORIGEN'] . "</br>";
        }
              
        $resultado->closeCursor();
    
    }catch(Exception $e){
        
        die('Error: ' . $e->getMessage());
        
    }finally{
        
        $base=null;
        
    }
?>