<?php
//compartir datos de conexion a BBDD
    
    //para compartir los datos de conexion a varias paginas php lo que se hace es crearar una archivo php que contnga solo los datos de conexion y luego se comparte con un require()

//importar tablas a BBDD mysql


    //para importar tablas a mysql de por ejemplo excel ,  lo primero que se dege hacer s guardarla en formato .ods





require("38datos_configuracion_conexion.php");


$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno($conexion)){

    echo "fallo al conectar con la base de datos, revise los datos de conexion";

exit();
}



mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos con ese nombre, revise el nombre proporcionado en los datos d econexion");


mysqli_set_charset($conexion,"utf8");


//consultas SQL con filtros y criterios

//PARA FILTRAR LOS DATOS QUE SE QUIERAN VER EN UNA TABLA, POR EJEMPLO QUE SE VEAN SOLO LOS DEL PAIS ESPAÑA SE USA EL SIGUIENTE COMANSO SQL WHERE, INDICANDO LA COLUMNA EN LA QUE SE ENCUENTRA EL DATO QUE SOLO SE QUEIERE QUE SE VEA, SEGUIDO DE DICHO DATO ENTRE COMILLAS SIMPLES EN ESTE CSO POR ESTAR DENTRO DE COMILLAS DOBLES
$consulta = "select * from productos where PAISDEORIGEN='usa'";

$resultado = mysqli_query($conexion,$consulta);



while($fila = mysqli_fetch_row($resultado)){
    
    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";
    echo $fila[4] . " ";
    echo $fila[5] . " ";
    echo $fila[6] . " ";
    
    
    echo "</br>";
}

mysqli_close($conexion);
?>