<?php

//UTILIDADES Y VENTAJAS

//ventajas : evitan la inyeccion sql - en consultas de tipo insert son mas rapidas y eficientes

//inconvenientes : hay que escribir mas codigo - hay que conocer mas funciones mysqli para estas consultas

//FUNBCIONES MYSQLI NECESARIAS


/*pasos a seguir para hacer consultas preparadas
 
    1-creamos la sentencia sql sustituyendo los valores del criterio por el simbolo ?

    $sql=select * nombre_tabla where PAISDEORIGEN=?

    2-PREPARAMOS LA CONSULTA CON LA FUNCION mysqli_prepare() , esta funcion requiere 2 parametros, uno es el objeto conxion yel otro la sentencia sql

    $resultado = mysqli_prepare($conexion,$sql) , la funcion devolvera un opjeto de tipo mysqli_stmt

    3- UNIR LOS PARAMETROS A LA SENTENCIA SQL , DE ESTO SE ENCARGA LA FUNCION mysqli_stmt_bind_param() . DEVUELBE TRUE O FALSE 

    DONDE ESTA EL INTERROGANTE (?) ES A DONDE VA AIR A PARAR EL PARAMETRO A UNIR QUE CASI SIEMPRE VENDRA DE OTROA PAGINA DONDE SE INTRODUCIRA EL PARAMETRO POR MEDIO DE UN FORMULARIO

    ESTA FUNCION REQUIERE 3 PARAMTEROS, EL OBJETO mysqli_stmt (devuelto por la funcion mysqli_prepare), el tipo dE dato (STRING, NUMERO , ETC) que se utilizara como criterio en sql , y la  VARIABLE CON CRITERIO (QUE SERA LA QUE CONTENGA EL PARAMETRO QUE SE PASO DESDE UN FORMULARIO).

    4-EJECUTAR LA CONSULTA CON LA FUNCION mysqli_stmt_execute(), ESTA FUNCION DEVUELVE TRUE O FALSE

    ESTA FUNCION NECESITA COMO PARAMETRO EL OBJETO MYSQLI_STMT

    5-ASOCIAR VARIABLES AL RESULTADO DE LA CONSULTA, ESTO LO CONSEGUIMOS CON LA FUNCION mysqli_stmt_bind_result(), ESTO DEVUELBE TRUE O FALSE 

    NECESITA COMO PARAMETRO EL OBJETO mysqli_stmt , y tantas variables como columnas en consultas  SQL , al ejecutar la consulta , nos arrojara un resultado con la informacion de la tabla los campos , caa resultado de CADA CAMPO DEBERA ASIGNARSELE A CADA VARIABLE.

    6-POR ULTIMO HAY QUE LEER LOS RESULTADOS DE ESOS VALORES Y PARA ESO SE USA LA FUNCION mysqli_stmt_fetch() 

    pide como para metro el objeto mysqli_stmt



*/

//------------------------------------------------------------------

$pais=$_GET["buscar"];

require("38datos_configuracion_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

//de aqui en adelante se siguen los pasos para la creacion de la consult apreparada

//paso1

$sql = "select CODIGOARTICULO, SECCION, PRECIO, PAISDEORIGEN from productos where PAISDEORIGEN =?";

//paso 2

$resultado = mysqli_prepare($conexion,$sql); 

//paso 3

$ok= mysqli_stmt_bind_param($resultado, "s", $pais);

//$resutado almacenara el objeto mysqli_stmt, "s" significa que manejara strins, y $pais es vavariable que recibe el parametro a buscar


//paso 4

$ok= mysqli_stmt_execute($resultado);
//la variable $ok es para hacer el seguimiento de si las funciones se ejecutan o no se ejecutan, no importa si se camiba


if($ok==false){
    echo "error al ejecutar la consulta";

}else{
// aqui dentro de este else se seguiran los pasos ya que significara que hasta aqui todo ha salido bien con el codigo
    
    //paso 5
    $ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
    //en eesta paso las variables que que van en el parametro deben ir en el mismo orden en el que se escribieron los campos ya que ellas recibiran los datos en ese orden

    echo "<b>Articulos encontrados:</b> </br></br> ";


    //paso 6
    while(mysqli_stmt_fetch($resultado)){

        //esta funcion se encarga de ayudar al ciclo a rrecorrer el resultado de la consulta que alamacena todos los registris que coin cidan con la busqueda ubicandolos en cada vuelta que de el ciclo

        echo $codigo . "  " . $seccion . "  " . $precio . "  " . $pais ."</br>";
    }

    //por ulltimo que es un paso que no se menciono , se debera cerrar el objeto mysqli_stmt que nos dio la fincion prepare

    mysqli_stmt_close($resultado);

}

?>