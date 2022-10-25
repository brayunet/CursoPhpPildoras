<?php
dameDatos();

//                              Flujo de ejecucion
echo "Este es el primer mensaje </br>";

echo "Este es el segundo mensaje </br>";

//el flujo de ejecucuion de php siempre ira de arriba a abajo o sea priero se leera el primer mensaje y luego el segundo



//                               Declarar funciones

function dameDatos(){

    echo "Asi se declara un funcion en Php </br>";
    //las funciones solo se ejecutan cuando son llamadas por lo que no respetan el orden del flujo de ejecucion , y puede ser llamada antes de ser declarada o despues
}

//las funciones se usan para reutilizar codigo en tareas repetitivas

dameDatos();

?>


<?php
//php permite tener varios bloques de codigo  como este que se esta agregando, permitiendo redistribur el codigo , poniendo en uno las funciones y en otro las llamadas con el resto el codigoS


//tambien permite llamar codigos de php que se encuentran en otras archivos extrenos de codigode la siguiente manera 

//include("5pruebaInclude.php");
//su principal uso es reutilizar codigo que han hecho otros programadores o que se ha usado en otros archivos 


//     hay otra instruccion en php que hace algo similar que include

require("5pruebaInclude.php");
//su diferencia es que a diferencia de include si el archivo que esta entre parentesis no esta, no correra el codigo que se encuentre despues del REQUIERE, queriendo decir que para que el resto del codigo se ejecute dicho archivo es requerido

llamadaIncludes();
?>