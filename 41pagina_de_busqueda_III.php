<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<?php
//FORMULARIO DE BUSQUEDA  Y RESULTADOS EN LA MISMA PAGINA



//el codigo php se cartga en el head para asegurarse de que el navegador lea el codigo antes que el body

function ejecutar_consulta($labusqueda){


    //$buscar=$_GET["buscar"]; como el codigo y la pagina estan en el mismo archivo no hace falta el uso de la instruccion $_GET
   
    require("38datos_configuracion_conexion.php");

    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    if(mysqli_connect_errno()){

        echo "fallo al conectar con la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

    mysqli_set_charset($conexion, "utf8");


    //en la consulta se cambia la variable $buscar que tomaba el valor optenido por la instruccion $_GET  $buscar, por el parametro de la funcion que contiene todo el codigo que vendria siendo $labusqueda
    $consulta = "select * from productos where NOMBREARTCULO like '%$labusqueda%'";

    $resultados = mysqli_query($conexion,$consulta);


    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
        
        echo $fila["CODIGOARTICULO"] . "  ";
        echo $fila["NOMBREARTCULO"] . "  ";
        echo $fila["PAISDEORIGEN"] . "  ";
        echo $fila["SECCION"] . "  ";
        echo $fila["PRECIO"] . "  ";
        echo $fila["IMPORTADO"] . "  ";
        

        echo "</br>";
    }

    mysqli_close($conexion);
}

//ahora se  hicieron 2 cosas  en el formulario del body diferente con la pagina anterior, que cuando se precione submit llame a la funcion que se creoejecutar_consulta(), y lo otro  es hacer que en vez de enviar la informacion a una pagina deferente , se va a enviar con la misma pagina
?>
</head>
<body>
   
    <?php

    $mibusqueda=$_GET["buscar"];

    $mipag=$_SERVER["PHP_SELF"];
    //CON $_SERVER SE LE INDICA AL FOMULARIO QUE ENVIE LOS DATOS A LA MISMA PAGINA EN LA QUE NOS ENCONTRAMOS , Y ESTO SE INDICA CON LA INSTRUCCION PHP_SELF, EN PALABRAS MAS CORTAS INDICA LA PAGINA DEL SERVIDOR A LA QUE TIENE QUE LLAMAR QUE SERA ELLA MISMA


    //en esta condicion se hicieron 2 cosas , si cumple la condicion pasa a llamar a la funcion en la que se en cuentra el codigo que ejecutara la busqueda php , y si no la cumple pasara a mostrar el formulario html en el que deberemos ingresar

    //la primera ves que se cargue la pagijina, como $mibusqueda no va a recibir ningun valor , pasara a cumplirse el else y va a mostrarnos la pagina html directamentamente en donde podremos itroducir nuestro valor de busqeuda
    if($mibusqueda!=null){

        ejecutar_consulta($mibusqueda);
    }else{

        echo "<form action='" . $mipag . "' method='get'>

        <label for=''>Buscar:</label>
        <input type='text' name='buscar'>
        <input type='submit' name='enviando' value='Ve a buscar'>
    </form>  ";
    }

    ?>
</body>
</html>