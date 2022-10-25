<?php

include("29POOVIII_variablesYMetodosEstaticosII.php");
 
//Compra_vehiculo::$ayuda=10000; esto ya no se puede hacer debido a los metodos y variables estaticos encapsulados CON PRIVATE

Compra_vehiculo::descuento_gobierno();

$compra_antonio = new Compra_vehiculo("urbano");

$compra_antonio->climatizador();

$compra_antonio->tapiseria_cuero("blanco");

echo $compra_antonio->precio_final() . "</br>";

$compra_ana = new Compra_vehiculo("compacto");

$compra_ana->climatizador();

$compra_ana->tapiseria_cuero("blanco");

echo $compra_ana->precio_final();



?>