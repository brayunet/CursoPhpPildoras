<?php

//php tiene funciones predefinidas y tiene las funciones cradas por el programador , las predefinidas se pueden buscar  en su pagina de documnentacion

/*function suma($num1,$num2){

    $resultado= $num1 + $num2;
    
    return $resultado;

}

        echo suma(5,7);
*/

function frase_mayus($frase,$conversion=true){
// php permite trabajar con  algo llamado PARAMETROS POR DEFECTO y lo que permite es asignarle valores a un parametro dentro de los parentesis de 2 que parametros que se tengan, si solo se pasa un argumento en la llamada a la funcion ps tomara ese parametreo por defecto, pero ese parametro puede ser modificado en la llamada de la funciuon asignandole el valor que querramos


    $frase=strtolower($frase);

    if($conversion==true){
        $resultado = ucwords($frase);
    }else{
        
        $resultado = strtoupper($frase);

    }
return $resultado;

}

echo (frase_mayus("esto es una prueba") . "</br>");
echo (frase_mayus("esto es una prueba",false));

?>