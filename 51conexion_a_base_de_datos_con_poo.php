<?php

//fomras de conectar con bases de datos

// apis php ----> mysql(opsoleta- ya no se usa) ------ mysqli--------pdo

//mysqli, se coneca de manera procedimental o con POO , hasta ahora hemos estado trabajando de manera procedimental

//la manera mas moderna hasta ahora de conexion mysqli es con POO y sera la que usemos de aqui en eadelante

$conexion = new mysqli("localhost", "root", "19926290727", "pruebas");

//de esta manera se crea la conexion con la base de datos mediante la clase mysqly osea con POO

if($conexion->connect_errno){

    echo "Fallo la conexión " . $conexion->connect_errno;

}

$conexion->set_charset("utf8");

$sql= "select * from productos";

$resultados=$conexion->query($sql);


//ahora se indicara la codificacion utf_8

if($conexion->connect_errno){

    die ($conexion->errno);
}


while($fila= $resultados->fetch_assoc()){

    echo $fila["CODIGOARTICULO"] . "  ";
    echo $fila["NOMBREARTCULO"] . "  ";
    echo $fila["PAISDEORIGEN"] . "  ";
    echo $fila["SECCION"] . "  ";
    echo $fila["PRECIO"] . "  ";
    echo $fila["IMPORTADO"] . "  ";
    

    echo "</br>";
}
?>