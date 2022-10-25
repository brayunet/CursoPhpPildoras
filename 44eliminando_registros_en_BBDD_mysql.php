<?php

//ELIMINAR REGISTROS DESDE EL FORMULARIO

//PARA ESTO SE USA EL SIGUIENTE COMANDO SQL:

// delete  from nombre_tabla where  columna=criterio;

//EL FORMULARIO VA A SEGUIR TENIENDO UN BOTON QUE ENVIARA LA       INFORMACION A ESTE CODIGO PHP PARA PROCESARLOS, LA UNICA DIFERENCIA DE ESE FORMULARIO ES QUE EN VEZ DE EL BOTON DECI ENVIAR AHORA DIRA BORRAR REGISTRO


//CUANDO SE CREA UN FORMULARIO DE ELIMINACION ES COMUN DEJAR UN SOLO IMPUT EL CUAL SERA EL VALOR DE REFERENCIA (CLAVE) PARA IDENTIFICAR EL ARTICULO Y ASI ELIMINARLO, HAY QUE TENER CUIDADO YA QUE SI MUCHOS ARTICULOS COMPARTEN EL VALOR DE REFERENCIA PUES TODOS ESOS CAMPOS SE ELMINARAN , POR LO TANTO ES MEJOR BUSCAR LA CLAVE O VALOR DE REFERENCIA QUE SEA UNICO ENTRE CADA ARTICULO , usaremos de clave el campo CODIGOARTICULO

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

    $consulta = "delete from productos where CODIGOARTICULO='$cod'";
    //hay que tener cuidado en que si es una cadena debera estar entre comillas  si es un numero ps no
 
    $resultados = mysqli_query($conexion,$consulta);

    
    if($resultados==false){

        echo "error en la consulta";

    }else{

        //echo "registro eliminado con exito";
        //CUANDO SE LE INDICA A ESTE CODIGO MEDIANTE EL FORMULARIO QUE ELIMINE UN ARTICULO (REGISTRO) QUE YA ESTA ELIMINADO O QUE NO EXISTE, EL EJECUTARA EL CODIGO Y NOS AVISARA "registro eliminado con exito" AUNQUE NO ES CIERTO PORQUE NO HA ELIMINADO NADA, PARA EVITAR ESTO SE USA EL COMANDO SQL:

        //mysqli_affected_rows($conexion); el parametro que recibe es la variable que guarda y ejecuta la conexion con la BBDD

        //ESTE COMANDO SQL PERMITE SABER SI HUBIERON REGISTROS AFECTADOS, OSEA SI SE INGRESARON REGISTROS, SE ELIMINARON O SI SE ACTUALIZARON, ARROJANDO COMO RESULTADO EL NUEMERO DE REGISTROS QUE FUERON AFECTADOS CON UNA CONSULTA, POR LO QUE ES UTIL PARA SABER SI SE ELIMINARON REGISTROS PARA NUESTRO CASO


        //da el numero de registros afectados por consulta, osea en una consulta s epeden eliminar mas de una registro (articulos)
        
        if(mysqli_affected_rows($conexion)==0){

            echo "No hay registros que eliminar con esos valores";
        }else{

            echo "Se han eliminado " . mysqli_affected_rows($conexion) . " resgistros";
        }
    }


    mysqli_close($conexion);

?>