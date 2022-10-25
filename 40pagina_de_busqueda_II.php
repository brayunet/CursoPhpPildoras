<?php

//crear un formulario de busqueda


//mostrar la pagina de resultados

//para hacer la busqueda simplemente se usa un formulario dentro de un html que sera el usado para buscar el articulo que sen encuentra en nuestra base de datos

$buscar=$_GET["buscar"];
//POST se utiliza para almacenar o actualizar los datos
//GET para recuperar los datos , hacer consultas (busquedas)
require("38datos_configuracion_conexion.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){

    echo "fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

$consulta = "select * from productos where NOMBREARTCULO like '%$buscar%'";

$resultados = mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
    
    echo $fila["CODIGOARTICULO"] . "  ";
    echo $fila["NOMBREARTCULO"] . "  ";
    echo $fila["PAISDEORIGEN"] . "  ";
    echo $fila["SECCION"] . "  ";
    echo $fila["PRECIO"] . "  ";
    echo $fila["IMPORTADO"] . "  ";
    

    echo "</br>";
}

mysqli_close($conexion);
?>