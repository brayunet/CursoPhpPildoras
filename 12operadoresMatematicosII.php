<?php

    
    function calcular($calculo) {

        if( !strcmp($calculo,"Suma")){
            
            global $numero1;
            global $numero2;
            echo "<p class='resultado'> El resultado es:  <p/>" . ($numero1 + $numero2) ;
           // se debe poner el parentesis para evitar que lo que se concatelse sea la suma de los numeros y no solo el numero1 y luego a eso se le sume el numero 2 
        }
        if( !strcmp($calculo,"Resta")){
            
            global $numero1;
            global $numero2;
            echo "<p class='resultado'>El resultado es:  " . ($numero1 - $numero2) ;
          
        }
        if( !strcmp($calculo,"Multiplicacion")){
            
            global $numero1;
            global $numero2;
            echo "<p class='resultado'>El resultado es:  " . ($numero1 * $numero2) ;
          
        }
        if( !strcmp($calculo,"Division")){
            
            global $numero1;
            global $numero2;
            echo "<p class='resultado'>El resultado es:  " . ($numero1 / $numero2) ;
          
        }
        if( !strcmp($calculo,"Modulo")){
            
            global $numero1;
            global $numero2;
            echo "El resultado es:  " . ($numero1 % $numero2) ;
          
        }

        if( !strcmp($calculo,"Incremento")){
            
            global $numero1;
           // global $numero2;
           $numero1++;
           $resultado = $numero1;
            echo "El resultado es:  " . $resultado;
          
        }

        if( !strcmp($calculo,"Decremento")){
            
            global $numero1;
           // global $numero2;
           $numero1--;
           $resultado = $numero1;
            echo "El resultado es:  " . $resultado;
          
        }


    }

?>