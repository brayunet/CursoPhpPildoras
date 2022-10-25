<?php

    if(isset($_POST["enviando"])){
        //isset es uan funcion prdefinida de php que tiene varios usos, pero uno de ellos es comprobar si se ha pulsado el boton de enviar o no

        //$_POST  es una variables super global, se declara como arreglo  y sirve para traer a otros archivos, dentro de sus corchetes , va lo que se declare en el atrbito name del input

        $nombre = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];

        if($nombre == "brayan" && $edad < 18){
            echo "<p class='validado'> puedes entra jejeje </p>";
        }else{
            echo "<p class=\"no_validado\">No puedes entra :c</p>";
        }
    }
//si se monta todo desde un mismo archivo php todo se hara automatico los estilos y el codigo, recordando poner el method en el form

// sie se monta desde archivos aparte se tendra que poner los stilos en la oja donde este el codigo php y adema nos llevara a la pagina donde esta el codigo cuando enviemos el formulario por lo tanto ya dejara de aparecer el formulario en la pagina html donde esta 
?>

