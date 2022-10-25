<?php

function incrementaVariable(){

    static $contador=0;
    $contador++;

    echo $contador . "</br>";
}

// en php cuando una funcion hace su trabajo las variables que hay en su interior se reinician , por lo tanto el contador siempre imprimira 1.

//por lo tanto si se requiere que no ocurra esto con la variables dentro de las funciones, se usan variables estaticas 


    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
?>