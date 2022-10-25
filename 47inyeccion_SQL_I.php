<?php

//que es la inyeccion SQL?

//esto es una de las tecnicas de hacking mas usadas en las paginas web y es muy simple, toda pagina que se maneje por bases de datos mysql muy probablemente sera atacada con esta tecnica

//la tecnica consiste en colocar en el ormulario de busqueda un comando sql que en vez de mostrar una informacion en especifico la muestre toda cuando esto no deberia ser asi por razones de seguridad para los datos, en el caso de usuarios

//para probar esto utilizaremos la pagina de busqueda de se creao anteriormente

$buscar=$_GET["buscar"];
require("38datos_configuracion_conexion.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){

    echo "fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

//$consulta = "select * from productos where NOMBREARTCULO like '%$buscar%'";

//el comando sql que se inyecta en el formulario de busqueda puede ser similar al siguiente---> nombre_para_buscar' or '1'='1
$consulta = "select * from productos where NOMBREARTCULO='$buscar'";

//con esa inyeccionlo que hace es que el comando siempre se cumpla y nos muestre siempre la informacion y entonces nos mostrara todos lso registros de la tabla, si es una pagina de eleminar registros nos elimines siempre los registros hasta que ya no haya nada que eliminar

echo "$consulta </br></br>"; //esta lunea nos ayudara a ver que es lo que sucede cuando se le inyecta codigo sql a la consulta

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
?>
