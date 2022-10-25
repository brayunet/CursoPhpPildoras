<?php

//en esta pagina se reutilizara el codigo de la pagina de 40pagina_de_busqueda_II.php y se hara la modificacion de que la busqueda se muestre en un formulario  como se ha venido haciendo mediante echos

$buscar=$_GET["buscar"];

require("38datos_configuracion_conexion.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){

    echo "fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos proporcionada en los datos de conexion");

mysqli_set_charset($conexion, "utf8");

$consulta = "select * from productos where NOMBREARTCULO like '%$buscar%'";

$resultados = mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
    

    //como necesitamos que en esta pagina se muestren los resultados de la busqueda pero en un formulario se hace lo siguiente

    echo "<form action='46actualizando_registros_BBDD_mysql_II.php' method='get'>";

    //en la siguiente parte el formulario los inputs recibira los valores del la tabla por medio del value para que se puedan ver y a la vez editar
    echo "<input type='text' name='c_art' value='" .$fila["CODIGOARTICULO"]. "'></br>";
    echo "<input type='text' name='n_art' value='" .$fila["NOMBREARTCULO"]. "'></br>";
    echo "<input type='text' name='p_orig' value='" .$fila["PAISDEORIGEN"]. "'></br>";
    echo "<input type='text' name='seccion' value='" .$fila["SECCION"] . "'></br>";
    echo "<input type='text' name='precio' value='" .$fila["PRECIO"] . "'></br>";
    echo "<input type='text' name='fecha' value='" .$fila["FECHA"] . "'></br>";
    echo "<input type='text' name='importado' value='" .$fila["IMPORTADO"] . "'></br>";
    echo "<input type='submit' name='enviando' value='Actualizar!'></br>";
    echo "</form>";
}// y aqui se cierra el formulario en el que se mostrara el articulo que se haya buscado para actualizarlo o modificarlo

//este formulario llamara a la pagina '46actualizando_registros_BBDD_mysql_II.php' que sera la que se encargue de procesar la actualizacion de los datos

mysqli_close($conexion);
?>