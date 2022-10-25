

<?php

//                        diferentes formas de declarar strings

//si hay comillas dentro de comillas se debe usar en las comillas internas otro tipo d comilla 
 #echo "<p class='resaltar'>ejemplo de una  frase  para probar como funcionan las coillas </p>";

 //y si se decean usar las mismas comillas se usa una barra invertida para escapar de las comillas 

 #echo "<p class=\"resaltar\">ejemplo de una  frase  para probar como funcionan las coillas </p>";


 #$nombre = "brashan";

 #echo "Holanda $nombre";
 //cuando se mprime una frase con una varible se puede incluir la variable entre comillas tranquilamente, pero solo se puede hacer econ comillas dobles


//                                comparacion de strings


// strcmp compara valores de tipo string teniendo en cuenta si estas en mayuscula y en minuscula

//strcasecmp  compara dos strings ignorando las mayusculas y minusculas Ambas debuelven un 0 si coinciden y un 1 si no


        $variable1 = "Casa";
        $variable2 = "CASA";

        $resultado = strcmp($variable1,$variable2);
        $resultado1 = strcasecmp($variable1,$variable2);

        #echo "el resultado es $resultado1";


            if($resultado1){
                echo "No coinciden";
            }else{
                echo "coinciden";
            }

?>