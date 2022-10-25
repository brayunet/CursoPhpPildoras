<?php

include("28POOVII_VariablesYMetodosEstaicosI.php");


//esta conectado con el archivo 28POOVII el cual tiene un clase culla fucion es conceder el precio de un carro


//el problema con las variables o campos estaticos es que se pueden manipular llmandola mediante la clase y cambiandola y no es lo ideal , ya que deberia ser un valor que no puede ser cambiado desde fuera del codigo, como se muestra a continuacion


//para hacer referencia a una variables estatica fuera de la cLase es escribiendo la clase seguida de dos puntos :: y el Nombre de la variable 

Compra_vehiculo::$ayuda=10000; // de esta manera se puede cambiar el valor de una variable estatica, cosa que no es deceada

$compra_antonio = new Compra_vehiculo("urbano");

$compra_antonio->climatizador();

$compra_antonio->tapiseria_cuero("blanco");

echo $compra_antonio->precio_final() . "</br>";

$compra_ana = new Compra_vehiculo("compacto");

$compra_ana->climatizador();

$compra_ana->tapiseria_cuero("blanco");

echo $compra_ana->precio_final();



?>