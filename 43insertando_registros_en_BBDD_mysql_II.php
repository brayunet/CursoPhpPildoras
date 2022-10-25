<?php

//se uso el formulario de resgistro llamado 42-43formulriorregistro.html

//lo primero es almacenar lo que se ingrese en los inputs en variables , por medio e $_GET[""]

$cod=$_GET["c_art"];
$sec=$_GET["seccion"];
$nom=$_GET["n_art"];
$pre=$_GET["precio"];
$fec=$_GET["fecha"];
$imp=$_GET["importado"];
$por=$_GET["p_origen"];

require("38datos_configuracion_conexion.php");

    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    if(mysqli_connect_errno()){

        echo "fallo al conectar con la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

    mysqli_set_charset($conexion, "utf8");
    
    //en la consulta agregaremos los demas campos de la tabla , para llenarla completa

    //para llenarla con los datos que recibimosde las variables simplemente sustituimos los values por  los nombres de las variables que reciben el valor respectivos de cada input

    $consulta = "insert into productos (CODIGOARTICULO, SECCION, NOMBREARTCULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) values ('$cod', '$sec', '$nom', '$pre', '$fec', '$imp', '$por')";

    //con eso se guardan los registros en la base de datos, pero vamos a generar un aviso al usuario para que sepa que la accion se ha realizado correctamente, con un if

    $resultados = mysqli_query($conexion,$consulta);

    if($resultados==false){
         // resultado ademas de guardar un registro (un Result Set que es un conjunto de resultados de la base de datos, podria ser toda una fila de una tabla)de la consulta, alamcena un valor booleano que sera true si ha tenido exito en la consulta o false si no lo ha tenido
        
         echo "error en la consulta";

    }else{

        echo "registro guardado con exito";


        //ADEMAS DE MOSTRAS UN MENSAJE PARA MOSTRAR UE SE TUVO EXITO EN EL PROCESO  , SE MUESTRAN LSO DATOS ALMACENADOS
        echo "</br></br>Se guardo la siguiente informaion:</br> CODIGO ARTICULO:$cod</br>  SECCION:$sec</br> NOMBRE ARTICULO:$nom</br> PRECIO:$pre</br> FECHA:$fec</br> IMPORTADO:$imp</br> PAIS DE ORIGEEN:$por";
    }


    mysqli_close($conexion);

?>