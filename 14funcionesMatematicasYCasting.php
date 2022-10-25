<?php
//                               USO DE FUNCIONES MATEMATICAS

//escribirendo funciones matematicas php en rl nsvrgador aparecera la pagina de php con todas las funciones matematicas que trabaja php

//$num1 = rand(10,50);
//nos da numeros aleatroios, en este caso entre 10 y 50

//$num1 = pow(5,3);
//da el exponenete definiendo la base y el exponente en sus parentesis , en este caso la base e s5 y el exponenete 3


$num1 = 5.6545454;
//round($num1) redondea el numero decimal, el primer argumento es el numero a redondear, el segundo es opcional siendo cuantos decimales se quieren trabajar para que redondee hasta esos,

echo "El numero aleatorio es:  " . round($num1,2);

//                               CASTING (COMBERTITO DE VARIABLES EN OTRO)

// php combierte el tiepo de una variable de manera dinamica dependiendo de lo que se le asigne, a esto se le conoce como asignacion implicita, pero si se necesitase asignarle un tipo a una varible directamente , lo qie se debe hacer es asignare el tipo entre parentesis antecedido al valor que va a guardar esa variable, a eso se le conoce como asignacion explicita
?>