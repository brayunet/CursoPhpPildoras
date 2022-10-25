<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>&nbsp</p>
    <form   method="post">
        
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1"> 
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="">Operacion</label>
            <select name="operacion" id="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicacion</option>
                <option>Division</option>
                <option>Modulo</option>
            </select>
        </p>
            
        
        <p>
            <input type="submit" name="button" id="button" onclick="prueba">
        </p>
                
    </form>



<?php

    if(isset($_POST["button"])){

        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion= $_POST["operacion"];

        

        if( !strcmp($operacion,"Suma")){
            
            echo "El resultado es:  " . ($numero1 + $numero2) ;
           // se debe poner el parentesis para evitar que lo que se concatelse sea la suma de los numeros y no solo el numero1 y luego a eso se le sume el numero 2 
        }
        if( !strcmp($operacion,"Resta")){
            
            echo "El resultado es:  " . ($numero1 - $numero2) ;
          
        }
        if( !strcmp($operacion,"Multiplicacion")){
            
            echo "El resultado es:  " . ($numero1 * $numero2) ;
          
        }
        if( !strcmp($operacion,"Division")){
            
            echo "El resultado es:  " . ($numero1 / $numero2) ;
          
        }
        if( !strcmp($operacion,"Modulo")){
            
            echo "El resultado es:  " . ($numero1 % $numero2) ;
          
        }


    }

?>

</body>
</html>