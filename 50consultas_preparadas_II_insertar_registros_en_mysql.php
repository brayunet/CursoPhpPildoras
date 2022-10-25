<?php

$c_art=$_GET["c_art"];
$secc=$_GET["secc"];
$n_art=$_GET["n_art"];
$pre=$_GET["pre"];
$fec=$_GET["fec"];
$imp=$_GET["imp"];
$p_ori=$_GET["p_ori"];

require("38datos_configuracion_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

$sql = "insert into productos (CODIGOARTICULO, SECCION, NOMBREARTCULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) values (?,?,?,?,?,?,?)";
//se ponen 7 interrogantes porque cada interrogante representa el ingreso de un ato para alconsulta preparada

$resultado = mysqli_prepare($conexion,$sql); 
$ok= mysqli_stmt_bind_param($resultado, "sssssss", $c_art,$secc,$n_art,$pre,$fec,$imp,$p_ori);

//las variables deben ir en el mismo orden en el que se plantearon en el comando sql

//y se lep onen 7 "S" porque representa el tiepo de dato que maneja cada variable , si alguno fuera de intipo de dato distinto se debera colocar , en la misma pocicion en que esta esa variable o campo


$ok= mysqli_stmt_execute($resultado);

if($ok==false){
    
    echo "error al ejecutar la consulta";

}else{

    
    echo "<b>Agregado nuevo registro con exito</b> </br></br> ";
    
    mysqli_stmt_close($resultado);

}

?>