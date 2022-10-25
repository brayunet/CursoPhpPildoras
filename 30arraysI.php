<?php

// cuando se hacen consultas en bases de datos (queris), la informacion que nos traigamos de esas bases de datos se alamacenaran en arreglos o arrays



//                    tipos de arrays

//EStan los INDEXADOS  que son en los que se usan indices , comenzando con el indice 0 y termina con el indice de la cantidad de elementos que tiene n array restandole 1, los indices de las posiciones se deben poner siempre entra perentesis

//para declarar arrays indexados se puede declarando la variable con los corchete y sin necesidad de colocar los indices php asume que el primero sera el indice cero y el suguiente el incdeice 1, y asi sucesivamente como se muestra en el suigueinte ejemplo

/*$semana[]="lunes";
$semana[]="martes";
$semana[]="miercoles";*/


//tambien se pueden poner los indices pero , hay que tener mucho cuidado a la hora de ponerlos no quivocarse con los numeros

/*
$semana[0]="lunes";
$semana[1]="martes";
$semana[2]="miercoles";
*/

//y otro metodo de declarar arrays es

//$semana=array("lunes","martes","miercoles");

//echo $semana[2];



//y tambien estan los  arrays ASOCIATIVOS , que en lugar de indices numerocos, se le asigna a cada posicion un nombre que sera el que ira entre corchetes por ejemplo ["valor1"],["valor2"],["valor3"], etc. se declaran de la siguente manera

$datos=array('nombre' => "Brayan", 'apellido' => "Guerrero", 'edad' => 27);

echo $datos["nombre"];


// !!! PUEDE TRAER PROBLEMAS USAR EL MINSMO NOBRE QUE SE USO PARA UN ARRAY Y PARA UNA POSICION ASOCIATIVA , PARA DECLARAR UNA VARIABE U OTROA COSA CON ESE MISMO NOMBRE, PUEDE TENER PROBLEMAS GRAVES !!!

?>