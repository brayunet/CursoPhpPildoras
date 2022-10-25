<?php

//ACTUALIZAR REGISTEOS DESDE EL FORMULARIO


//vamos a crear 3 archivos uno sera el formulario con el que haremos la busqueda del registro que queremos modificar, otro sera un formulario que sera donde se mostrara la informacion del registro que se quiere modifeicar desde donde se podra editar dicha informacion, y un tercero seria el que preocese toda esta busqueda


//en este archivo se reutilizara el codigo de 43insertando_registros_en_BBDD_mysql_II.php  ya que se presta para lo que se quiere que es actualizar o modificar los registros 

//Y por los tanto el unico cambio que deberemos hacer hasta los momentos sera cambiar la consulta sql, que ahora sera update


$cod=$_GET["c_art"];
$sec=$_GET["seccion"];
$nom=$_GET["n_art"];
$pre=$_GET["precio"];
$fec=$_GET["fecha"];
$imp=$_GET["importado"];
$por=$_GET["p_orig"];

require("38datos_configuracion_conexion.php");

    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    if(mysqli_connect_errno()){

        echo "fallo al conectar con la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

    mysqli_set_charset($conexion, "utf8");
    

    //se cambia la consulta de inser por update
    $consulta = "update productos set CODIGOARTICULO='$cod', SECCION='$sec', NOMBREARTCULO='$nom', PRECIO='$pre', FECHA='$fec', IMPORTADO='$imp', PAISDEORIGEN='$por' where CODIGOARTICULO='$cod'";

    

    $resultados = mysqli_query($conexion,$consulta);

    if($resultados==false){
         
 
         echo "error en la consulta";

    }else{

        echo "registro guardado con exito";


        
        echo "</br></br>Se guardo la siguiente informaion:</br> CODIGO ARTICULO:$cod</br>  SECCION:$sec</br> NOMBRE ARTICULO:$nom</br> PRECIO:$pre</br> FECHA:$fec</br> IMPORTADO:$imp</br> PAIS DE ORIGEEN:$por";
    }


    mysqli_close($conexion);


?>