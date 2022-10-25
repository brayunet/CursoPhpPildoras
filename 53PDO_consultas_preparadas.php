<?php


//COMO CREAR CONSULTAS PRAPARADAS CON PDO 


//1_$base declarado en las primeraslineas va a ser un objeto de tipo conexion y como todo objeto , tendra sus metodos y propiedades, uno de los metodos que tiene es el metodo prepare($sql) que es el usado para crear consultas preparadas , este etodo admite una paramtero $sql que es la variable que contendra un centencia sql

//2_prepare($sql) nos dara como resultado el objeto llamado PDOStatement el cual contendra el resultado de la consulta realizada con la funcion prepare

//3_luego de tener este objeto PDOSTatement lo que tendremos que hacer es ejecutar  la funcion execute() que pertenece a este objeto y luego asociarlo a un array mediantes fetch() que tambien es un metodo perteneciente a dicho objeto PDOSTatement

    $busqueda=$_GET["buscar"];

    try{
        $db_usuario="root";
        $db_contra="19926290727";
        $base = new PDO("mysql:host=localhost;bdname=pruebas",$db_usuario,$db_contra);

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//????

        $base->exec("SET CHARACTER SET utf8"); // el metodo exec es para indicarle al objeto que vamos  trabajar con caractere utf8 
                
        $sql= "select NOMBREARTCULO, SECCION, PRECIO, PAISDEORIGEN from pruebas.productos where NOMBREARTCULO = ?";
        //para que no haya error se debe agrgar el nombre_base_de_datos.nombra_tabla en el comando como en l ejemplo 

        $resultado=$base->prepare($sql); //resultado contendra el objeto PDOStatement

        $resultado->execute(array($busqueda));
        //execute() recibe un array con el argumento que sera el parametro que queremos buscar 

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            //con PDO::FETCH_ASSOC se logra que asocie dentro de este array o PDOStatement el nombre de los campos con el nombre de la centencia sql

            echo "Nombre articulo: " . $registro['NOMBREARTCULO'] . "Seccion: " . $registro['SECCION'] . "Precio: " . $registro['PRECIO'] . "Pais de origen: " . $registro['PAISDEORIGEN'] . "</br>";
        }
        //ahora cerramos la lectura de la tabla con closecursor() del objeto pdostatement que es el que contiene la informacion d la tabla, esto lo que permite es ahorrar consumo de recursos        
        $resultado->closeCursor();
    
    }catch(Exception $e){
        
        die('Error: ' . $e->getMessage());
        
    }finally{
        
        $base=null;
        
    }




?>