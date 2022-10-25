<?php

for($i=0;$i<=10;$i++){
//el operador de incremento puede ser cualquier otro como i+=2



//si quisieramos interrumpir el bucle antes de que llegue a 10 se puede usar break de la siguiente manera

//y si quisiera que el bucle no haga nada al llegar a cierto ciclo, pero que tampoco detenga el ciclo osea , que siga a la siguiente, es con continue
 
if($i == 2){

    echo "la iteracion 2 no se mostro </br>";

    continue;
}
// a la hora d eusar continue hay que estar muy pendiente con el flujo de ejcucucion, ya que podria no funcionar como quisieramos, en este caso el continue debeestar antes de cualquier codigo que ejecute el ciclo
echo "hemos entrado en el bucle , estamos en la iteracion" . $i . "</br>" ;

if($i == 6){

    echo "hemos roto con el bucle";
    break;
}
}

?>