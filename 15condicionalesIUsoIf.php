<?php

//                              prioridad operadores (precendensia)

//hay operaddores que tiene prioridad ante otro a la hora de la asignacion o ejecucion de condicionales por lo tanto es bueno estar al tanto de esta preioridad guscando en la documnetacion de php

//                              condicional if

if(isset($_POST["enviando"])){

    $edad = $_POST["edad_usuario"];

    if($edad<=18){
        
        echo "eres menor de edad";

    }else if($edad<=40){

        echo "eres mayor de edad";

    } else if($edad<=65){

        echo "eres de la 3cera edad";
    }else{
        echo "cuídate";
    }

    //la diferencia entre poner el elseif y solo el if es que el elseif conecta la condiciones, osea en este ejemplo anterior si hubiera sido if y metemos un numero menor a 40 nos va a rrojar el mensaje de "eres mayor de edad" y tambien el mensaje de "eres de la 3cera edad", con el elseif no ocurre eso porque estan conectados

}


?>