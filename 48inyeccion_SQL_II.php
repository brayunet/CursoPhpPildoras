<?php

//¿COMO EVITAR LA INYECCION SQL?

// se recomienda el uso de las siguientes funcion para evitarlo

// uso de la funcion mysqli_real_escape_String() , SE RECOMIENDA el uso de esta funcion SOBRE que mysqli_addslashes()

//uso de la funcion mysqli_addslashes(), NO RECOMENDADA . DEBIDO A QUE LA DIFERENCIA CON mysqli_real_escape_String() ES QUE ELLA SOLO EVITA LOS ACARACTERIES ESPECIALES USADOS ESPECIFICAMENTE EN LA INYECCION SQL COMO (') ENTOCNES HAY OTRAS MANERAS DE EJECUTAR LA INYECCION , CON ( & O EL CODIGO ASCII) QUE PERMITE ESCRIBIR EL CARACTER CON CODIGOS NUMERIOS TENIENDO UNA FALLA ESTA FUNCION POR ESTE LADO

// pero lo mas recomnedable sobre todo son las: consultas preparadas que se aborda junto con pdo


//se usara un ejemplo de formulario y pagina en que se procesara la eliminacion de usuarios ingresando su usuario y contraseña
require("38datos_configuracion_conexion.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

//con mysqli_real_escape_String() se debe Declarar las variables luego de la conexion ya que 1 de sus 2 parametros es la variables de la conexion , por lo tanto no la recibira si no se declara luego de ella;

//esta funcion evita el uso de todos los caracteres especiales para evitar que se pueda  hacer la inyeccion SQL con ellos
$usuario=mysqli_real_escape_string($conexion,$_GET["usu"]);
$contra=mysqli_real_escape_string($conexion,$_GET["con"]);

if(mysqli_connect_errno()){

    echo "fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

$consulta = "delete from usuarios where usuario='$usuario' and contra='$contra'";

echo "$consulta </br></br>";


//cuando introduciomos el usuario y el en la contraseña con la inyeccion SQL ' or '1'='1 , nos arroja el mensaje de baja procesada, cuando no debreria ser asi , ya que mysqli_real_escape_string() no permite que llegue infomacion que tenga caracteres especiales, por lo tanto hay que usar las funciones, mysqli_num_row() esta no funciona para nuestro caso ya que esta lo que hace es decirnos si en una consulta de tipo select (que es de seleccion) si hay registros o no, pero una consulta de tipo delete (que es de accion) no devuelve registros ya que es una consulta de accion elimina los regustros y no devuelve nada.  y mysqli_affected_rows() que lo que hace es indicarnos si hay filas afectadas en la ultima consulta, como es nuestro caso , si se ha eliminado una fila(rejistro) nos lo indicara

mysqli_query($conexion,$consulta);

//el parametro con el que trabaja mysqli_affected_rows e la $conexion
if(mysqli_affected_rows($conexion)>0){
    // si mysqli_affected_rows devuelve filas afectadas nos devolvera el nuemro de filas afectados por lo tanto si son mayor que 0 hay filasafectadas

    echo "Usuario eliminado";

}else{


    echo "No se ha encontrado usuario";
}


/*
if(mysqli_query($conexion,$consulta)){

    echo "baja procesada";
}else{
    echo "algo malo esta ocurriendo";
}

mysqli_close($conexion);
*/
?>