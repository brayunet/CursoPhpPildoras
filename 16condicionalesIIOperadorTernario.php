<?php
//el operador ternario se suele usar para condiciones censillas

if(isset($_POST["enviando"])){

    $contra = $_POST["contra"];
    $nombre = $_POST["nombre_usuario"];

    echo $nombre=="brayan" && $contra=="1234" ? "puedes acceder" : " no acceder";

    //lo que va a imprimir este echo es directamente el resultado del operador ternario el cual ubica primero la condicion, separado luego por el sgino de interrogacion , luego de el mesaje de si se cumple , luego 2 pun tos seguido del mensaje si no se cumple
}


?>