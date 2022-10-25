<?php

class Coche{
    var $ruedas;
    var $color;
    var $motor;
   function Coche(){
            $this->ruedas=4;
   
            $this->color="";
   
            $this->motor="1600";
   
       }
   function arrancar(){
   
           echo "Estoy arrancando </br>";
   
       }
    function girar(){
   
           echo "Estoy girando </br>";
       }
    function frenar(){
           
           echo "Estoy frenando </br>";
   
       
        }

    function establece_color($color_coche,$nombre_coche){

        $this->color=$color_coche;

        echo "el color del " . $nombre_coche . " es:  " . $this->color . "</br>";
       }
   
   }

//---------------------------------------------------------------------------

class Camion{
    var $ruedas;
    var $color;
    var $motor;
   function Camion(){
            $this->ruedas=8;
   
            $this->color="";
   
            $this->motor="2600";
   
       }
   function arrancar(){
   
           echo "Estoy arrancando </br>";
   
       }
    function girar(){
   
           echo "Estoy girando </br>";
       }
    function frenar(){
           
           echo "Estoy frenando </br>";
   
       
        }

        
   
   }

?>