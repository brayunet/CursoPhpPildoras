<?php

    if(isset($_POST["enviando"])){

        $nombre = $_POST["nombre_usuario"];
        $contra = $_POST["contra_usuario"];


//el switch basicamente compara lo que se tiene en el parentesis de switch con cada uno de lso case, como la sigueinte extructura

// el defauld hace la funciondel else

//si no se ponen los break con el primero que se cumpla mostrara el mensahje de los demas

        switch(true){

        case $nombre == "juan" && $contra == "1234":
            echo "usuario autorizado, hola juan";
            break;

        case $nombre == "maria" && $contra == "5678":
            echo "usuario autorizado, hola maria";
            break;

        case $nombre == "pedro" && $contra == "9012":
            echo "usuario autorizado, hola pedro";
            break;    
            
        default:
            echo "usuario no autorizado";

        }
        
    }

?>

