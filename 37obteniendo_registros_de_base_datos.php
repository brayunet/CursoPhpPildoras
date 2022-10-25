<?php

//MANEJO DE ERRORES RELACIONADOS CON CONEXION DE BASE DATOS

$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="19926290727";


//para evitar errores relacionados directamente con los valors de conexion de la base de datos, se debe poner justo despues de mysqli_connect(), la funcion mysqli_connect_errno(), preferiblemente dentro de un if()
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);//de aqui se sacó  $db_nombre para ponerlo con una funcion que maneja el error relacionado a la sintaxis del nombre de la base de datos

if(mysqli_connect_errno($conexion)){

    echo "fallo al conectar con la base de datos, revise los datos de conexion";

exit();//esta funcion hara que no se siga ejecutando todo el codigo php luego de esta linea
}


//PARA MANEJAR EL ERROR RELACIONADO CON LA SINTASIX DEL NOMBRE DE LA BBDD  SE USA LA SIGUIENTE FUNCION:
mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos con ese nombre, revise el nombre proporcionado");

//PARA PODER DAR SALIDA A CARACTERES LATINOS SE USA LA FUNCION 
mysqli_set_charset($conexion,"utf8");


$consulta = "select * from datos_personales";

$resultado = mysqli_query($conexion,$consulta);

//$fila = mysqli_fetch_row($resultado);
//mysqli_fetch_row() CADA VEZ QUE SE EJECUTA MUESTRA UNA FILA DE LA BASE DE DATOS, ESTO QUIERE DECIR QUE LA PRIMERA VEZ QUE SE EJECUTA MOSTRARA LA PRIMERA FILA DE LA TABLA DE BBDD , LA SEGUNDA VEZ LA SEGUNDA FIL Y ASI SUCESIVAMENTE



//RECORRER EL ARRAY DE RESULTADO SQL CON BUCLE


while($fila = mysqli_fetch_row($resultado)){
    
    //----> lo que hace la funcion,  mysqli_fetch_row($resultado) es acceder a los rejistros  , esta funcion igualada a una varible, este conjunto $variable=funcion nos arrojara TRUE si logra acceder a los registros y si no arrojara FALSE, que no lo lograria cuando ya no haya mas registros por acceder, cundo ya se hayan leido todos, por lo tanto es util para recorrer tablas DE BBDD con ciclos para conocer el limite del ciclo

    //y a su vez se hace la declaracion de el arreglo que almacenara lo ue se traiga la funcion en la condicion del ciclo
    
    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";
    
    echo "</br>";
}




// la conexion $conexion = mysqli_connect($db_host, $db_usuario, $db_contra); ha permanecido abierta desde que se ejecuta el codigo y se mantiene consumiento recursos , para plicaciones lo optimo es cerrar esa conexion con la  siguiente funcion

mysqli_close($conexion);

//en una sola pagina web se podran hacer multiple conexiones a diferentes bases de datos por lo tanto cada conexion debera tener una variable diferente , y cada una se devere iniciar y se debera cerrar por separado
?>