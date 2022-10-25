<?php

// consultas de seleecion SQL

/*
consultas de seleccion es cuanto se quiere connsultar los datos de una tabla para mostrarlos , pero sin querer cambiarlos 

**esta consulta de seleccion se hace de la siguiente manera

select campo1,campo2,campo3,campoN from Nombre_tabla

campo 1,2,3,N son las columnas que se desean consultar, no es necesario consultr todos los campos e la tabla si no se desea 


**si se quiere que muestre todos los campos de la tabla sin ncesidad de copiarlos todos, para el caso en que se tengan muchos campos en lugar de indicar el nombre d eloscampo se coloca un *

select * from nombre_tabla;


*/


//conexion a BBDD desde paginas web

/*
para concetar la base de datos con la web se necesitan 4 cosas:

.Direccion de la BBDD = localhost
.Nombre de la BBDD = nombre de la base de dtos que se quiera subir
.Usuario de la BBDD = root
.Contreña de la BBDD = 19926290727 , que fue la que o asigne mediante el phpmyadmin de laragon


PARA CONECTARSE A LA bbdd MEDIANTE PHP HAY 2 MODOS:

1.PROGRAMACION ORIENTADA A OBJETOS USANDO:

clase Mysqli

2.POR PROCEDIMIENTOS

funcion mysql_connect

*/


//en el codigo php necesitremos almacenar los 4 datos necesarios para conectar con la BBDD


//db es database , pero puede ser cualquier otro nombre que le asignemos igual las otras variables
$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="19926290727";



//CON PROCEDIMIENTOS (que es la manera mas censilla) SE HACE LA CONEXION DE LA SIEGUIENTE MANERA

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
// en los parametros de esta funcion deben ir en orden, la direccion , el usuario ue por lo genrral es root, la contaseña y el nombre todo esto de la base de datos




// AHORA SE GUARDA EL COMANDO SQL A UTILIZAR EN UNA VARIABLE

$consulta = "select * from datos_personales";

// LUEGO SE MANDARA A EJECUTAR LA CONSULTA CON LA SIGUIENTE FUNCION

$resultado = mysqli_query($conexion,$consulta);
//EN CONEXION VA LA VARIABLE QUE TNGA LA FUNCION mysql_connect Y EN CONSULTA LA VARIABLE CON EL COMANDO DE CONSULTA SQL

//con la variable $resultado se ha cargado en memoria gracias a las funcion mysqli_queri(), una tabla virtual que viene con los valores de la base de datos de la tabla que se quiere consultar. Y con $conexion tenemos en memoria una conexion directa a la base de datos





//AHORA PARA PODER VER LA INFORMACION QUE HAY EN ESA TABLA VIRTUA SE USA LA SIGUIENTE FUNCION

$fila = mysqli_fetch_row($resultado);
//esta funcion ira mirando fila a fila lo que hay en la tabla a consultar, por lo tanto la variable $fila viene siendo un array que guarda todos los valores que forman una fila

echo $fila[0] . " ";
echo $fila[1] . " ";
echo $fila[2] . " ";
echo $fila[3] . " ";
//asi se muestra la informacion de las filas 

?>