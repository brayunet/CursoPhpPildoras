<?php
#                             Operadores de comparacion

// ==   igual que
// ===  identico que (compara tipo de variable)
// !=   deferente que
// <>   diferente que (compara tipo de variable)
// <    menor que
// >    mayor que
// <=   mmenor igual
// >=   mayor igual

$variable1 = 8;
$variable2 = "8";
$variable3 = "ocho";

if($variable1 === $variable2){
    echo "son iguales";
}else{
    echo "No son iguales";
}

?>