<?php
require ("57_3paina_devuelve_resultados.php");


$productos = new DevuelveProductos();//aqui se esta instanciando la clase de vuelve productos para que cuando se ejecute  ejecute todo elcodio de las conexion y la consulta, instanciar la clase o crear el objeto es como darle al boton de ejecutar la claseS

$array_productos=$productos->get_productos();//se ejecuta el metodo para obtener los productos

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
    foreach($array_productos as $elemento){

        echo "<table><td><tr>";
        echo $elemento['CODIGOARTICULO'] . "</td><td>";
        echo $elemento['NOMBREARTCULO'] . "</td><td>";
        echo $elemento['SECCION'] . "</td><td>";
        echo $elemento['PRECIO'] . "</td><td>";
        echo $elemento['FECHA'] . "</td><td>";
        echo $elemento['IMPORTADO'] . "</td><td>";
        echo $elemento['PAISDEORIGEN'] . "</td><td><tr></table>";


        echo "</br>";
        echo "</br>";
    }


?>

</body>
</html>