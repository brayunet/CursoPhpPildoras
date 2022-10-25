<?php

$datos=array('nombre' => "Brayan", 'apellido' => "Guerrero", 'edad' => 27);


//                           verificar si es o no es un array

// para ello se usa la funcion is_array

if(is_array($datos)){

    echo "es un array</br></br></br>";

}else{

    echo "no es un array </br></br></br>";
}

//                            Recorrer un array

//para rrecorrer arrays asociativos

//el ciclo for es ideal para recorrer arrays indexados, pero para recorrer arrays asociativos se debe usar el ciclo foreach de la siguiente manera

foreach($datos as $clave => $valor){

    echo "A $clave le corresponde $valor </br>";

    //el foreach funciona, en este caso agragandole el arreglo que en este caso es $datos y nosotros debemos asignar en el foreach la variable de los nombre que van a guardar los nombres de las pociciones del array asociativo es este caso $clave y otro que guarde los valores (el contenido) de esas pocisiones que en nuestro caso es $valor
    
}

//para rrecorrer arrays indexados


$semana[]="lunes";
$semana[]="martes";
$semana[]="miercoles";
$semana[]="jueves";

//en este caso usamos un ciclo for comun

for($i=0; $i<count($semana);$i++){

    //si no sabemos de manera rapida cuantos elementos tiene un array lo mejor que se puede hacer es  usar el metodo count() que cuanta el numero de elementos que tiene un arreglo

echo  $semana[$i] . "</br>";
if($i==3){
    echo "</br>";
}
}



//                              añadir elementos a un array

//para añadir elemenots a un array , si no se le asigno indice se hace tan secilli como se muestra a continuacion

//para uno indexado

$semana[]="viernes";

for($i=0; $i<count($semana);$i++){
    echo  $semana[$i] . "</br>";
    
    if($i == (count($semana)-1)){
        echo "</br>";
    }
}

//para uno asociativo

$datos["pais"]="Venezuela";

foreach($datos as $clave => $valor){

    echo "A $clave le corresponde $valor </br>";
}



//                                ordenar un array


// para ordenar elementos de un array se usa la funcion sort() y se usa andes de que el ciclo rrecorra el arrglo

// ordena tanto numericamente como alfabeticvamente de menos a mayor
for($i=0; $i<count($semana);$i++){
    
    sort($semana);
    
    echo  $semana[$i] . "</br>";
    
    if($i == (count($semana)-1)){
        echo "</br>";
    }
}

$numero = array(999,85,669,45,9,55,9,1,66,9645);

for($i=0; $i<count($numero);$i++){
    
    sort($numero);
    
    echo  $numero[$i] . "</br>";
    
    if($i == (count($numero)-1)){
        echo "</br>";
    }
}

?>