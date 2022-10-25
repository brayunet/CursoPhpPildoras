<?php

//Asi se hace un comentario de una linea

/* asi se hace un comnetario de varias lineas

sdgghfghdfg

dfg
dfg
df
gd */


    
    $variable = 0;
    $nombre = "brayillan";
    $edad = 27;
    //las veriables no deven de contener simbolos extraños en su nombre y no deben comenzar con valores numericos y sin espacios en blanco, deven terminar la sentencia en (;), y si es un string va entre comillas dobles o simples

    print "el nombre del usuario es " . $nombre  . "</br>";
    print "el nombre del usuario es $nombre" . "</br>";
    print 'el nombre del usuario es $nombre </br>';
    //para concatenar se usa el punto (.) y buena practica dejar espacio a su lados

    //pero tambien se puede concatenar inclullenado la varible dentro del string precendiendola con el signo de ($)

    //las comilas dobles  se pueden usar cuando hay que introducir varibles en ellas, ya que  las comillas simples interpretan literalmente lo  que se escribe en ellas y no interpretan las varibales
    
    echo "El nombre es " . $nombre . " y tiene " . $edad . " años." ."</br>";

    echo $nombre,$edad;
    // echo tambien se usa para dar salida a un mensaje o varible al igua lque print
    
    //la difrencia principal de echo y print es que echo permite imprimir varias variables sin necesidad de concatenar, simplemente usando la (,) para separarlos

    //otra diferencia entre ellas es qeu print es una funcion y eco es una exprecion, por lo que print se toma mas tiempo en mostrar el mensaje dado que consume mas recursos

    //Por lo tanto se usa mas echo que print
?>