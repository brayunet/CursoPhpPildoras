<?php
/*
                    Ambito de la variables

local:
declarada dentro de una funcion, visible y accesible dentro de la funcion, osea solo va a funcionar dentro de la funcion

global:
la variable que se puede declarar en en cualquier lugar del codigo, visible y accesible desde cualquier lugar


super global:
es un a varible a la que se tiene acceso incluso desde otros archivos de php, este tipo de variable se declara como array
*/
    $nombre = "brayillan";

   // include("6pruebaAmbitos.php"); 

    /*function damenombre(){
       
        $nombre ="Rosilla";
        
    }*/

    function damenombre(){
        //la variable debe declararse como global justo antes de donde se vayaa usar ,  sea dentro de una funcion o  fuera de ella , sea el caso

        //Esto es asi ya que php se queire asegurar de que no estamos usando una variable de afuera de un ambito por error. como en el caso del include o el require
        global $nombre;
       
        $nombre ="El nombre de la variable es " . $nombre;
    }

    damenombre();
    echo $nombre;

    //en esete caso teneos 2 ambitos que son el ambito que esta dentro de la funcion dameNombre y lo que esta fuera de ella, apesar de que los 2 ambitos tiene la misma variable en ellos, automaticamente son 2 variables completamente distintas por pertenecer a ambitos diferentes
    
    //php funciona de esta manera con la variables debido que como puede trabajar con variables que incluso su origen esta en otro archivo gracias a las funciones (include y require) , lo pueden trabajar en el actual por lo tanto si tuviera la misma varibale se sobre escribiria y no es lo requerido

    //no podemos acceder a lo que hay dentro de la funcion desdes afuera de ella, y desde fuera de ella no podemos acceder a lo que hay dentro


    //                    si se quisiera trabajar con variables que estan dentro de otras funciones y viceversa, se deben declarar las variables como locales

    


?>