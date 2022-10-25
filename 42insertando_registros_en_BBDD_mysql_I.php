<?php

//para rellenar una tabla se usa el comando sql siguiente:

// insert into nombre_tabla(campo1,campo2,campo3) values (valor1,valor2,valor3)


//solo se colocaran los campos en los que se quiere agragar informacion

//en value habra que estar conciente del tipo de dato que almacena cada campo




    
   
    require("38datos_configuracion_conexion.php");

    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    if(mysqli_connect_errno()){

        echo "fallo al conectar con la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

    mysqli_set_charset($conexion, "utf8");

    //en consulta escribiremos la consulta para hacer un registro, osea el comando SQL
    $consulta = "insert into productos (CODIGOARTICULO, SECCION, NOMBREARTCULO) values ('AR40', 'deportes', 'raqueta de badminton')";

    $resultados = mysqli_query($conexion,$consulta);

    mysqli_close($conexion);
   
?>