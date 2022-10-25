<?php

//PARA CERAR UNA PAGINA DE BUSQUEDA SE NECESITA ENTENDER LOS SIGUEINTES ASPECTOS

//FUNCION mysqli_fetch_array(). TRABAJO CON ARRAY ASOCIATIVO

//dado que la funcion con la que veniamos trabajando mysqli_fetch_row() nos da un array pero indexado, ahora trabajaremos con mysqli_fetch_array() ya que nos permitira trabajarcon un array asociativo, permitiendo trabajar con los nombres de las columna directamente


require("38datos_configuracion_conexion.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){

    echo "fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

$consulta = "select * from productos where paisdeorigen = 'españa'";

$resultados = mysqli_query($conexion,$consulta);
//dado que la funcion con la que veniamos trabajando mysqli_fetch_row() nos da un array pero indexado, ahora trabajaremos con mysqli_fetch_array() ya que nos permitira trabajarcon un array asociativo, permitiendo trabajar con los nombres de las columna directamente que podria ser mas intuitivo , y una manera mas rapida, mysqli_fetch_array() trabaja con 2 parametros , $resultado y una constante que es, MNSQL_ASSOC que esta indica que se trabajara con array asociativo


while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
    //ESTAR MUY PENDIENTE CON EL NOMBRE DE LA COLUMNA, SI SALE EL ERROR Notice: Undefined index:  
    //EL NOMBRE DE COLUMNA DEVE SER IGUAL A COMO ESTA EN LA TABLA , RESPETANDO MAYUSCULAS O MINUSCULAS Y ACENTOS
    echo $fila["CODIGOARTICULO"] . "  ";
    echo $fila["NOMBREARTCULO"] . "  ";
    echo $fila["PAISDEORIGEN"] . "  ";
    echo $fila["SECCION"] . "  ";
    echo $fila["PRECIO"] . "  ";
    echo $fila["IMPORTADO"] . "  ";
    

    echo "</br>";
}



//QUERY (CONSULTA) CON CARACTERES COMODIN EN MYSQL

//LOS CARACTERES COMODIS SON % Y _

// & SUSTITUYE A UNA CADENA DE CARACTERES
// _ SUSTITUYE A UN  UNICO CARACTER    


// estas consultas se utilizan cuando se quiere filtrar busquedas de una columna que esten formadas por mas de una palabra, por ejemplo el % antes o despues de la palabra que se quiere fultar por ejemplo camisa caballero o pantalon caballero, la palabra a filtrar es caballero y como es precedida de cadenas se coloca el % , %caballero, pero si la palabra estuviera despues de la palabra a filtrar caballero  se pondria el porcentaje despues de % , asi caballero%, y cuando se trbaja con caracteres comodin en la consulta se sustitulle el  =  por  like

//select * from productos  where NOMBREARTCULO like "%caballero";
echo "<br><br><br>USO DEL CARACTER COMODIN PARA CONSULTAS % <br><br>";

$consulta1 = "select * from productos where NOMBREARTCULO like '%caballero'";

$resultados = mysqli_query($conexion,$consulta1);

while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
        echo $fila["CODIGOARTICULO"] . "  ";
        echo $fila["NOMBREARTCULO"] . "  ";
        echo $fila["PAISDEORIGEN"] . "  ";
        echo $fila["SECCION"] . "  ";
        echo $fila["PRECIO"] . "  ";
        echo $fila["IMPORTADO"] . "  ";
        
    
        echo "</br>";
    }
    
// por otro lado el caracter comodin _ se usa de manera similar que el %, pero este es mas para buscar palabra en las que se sospecha que se pudo haber cometido errores ortograficos, o se uso una letra o caracter donde no iba, sustituyendo el caracter comodin por esa letra , ejemplo en vez de cenicero  se pone ceni_ero en este caso la letra que se pudo haber cambiado por otra es la c

echo "<br><br><br>USO DEL CARACTER COMODIN PARA CONSULTAS _ <br><br>";

$consulta2 = "select * from productos where NOMBREARTCULO like 'ceni_ero'";

$resultados = mysqli_query($conexion,$consulta2);

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