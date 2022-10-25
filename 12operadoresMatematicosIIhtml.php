<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="12operadoresMatematicosII.php">
        
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
</body>
</html>