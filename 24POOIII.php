<?php

//LLAMADA A METODOS CON PARAMETROS
/*class Coche{
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
   
   } */
  // $renault = new Coche();
  // $mazda = new Coche();
  // $fiat = new Coche();
   
   

   //$mazda->arrancar();
   
   //echo $mazda->ruedas;

   //LLAMADA DE METODOS CON 2 PARAMETROS
//$renault->establece_color("rojo","Renault");
//$fiat->establece_color("azul","Fiat");

//--------------------------------------------------------------------

//AQUI TRABAJAREMOS CREAND OBJETOS CON LAS CLASES CREADAS EN EL ARCHIVO 24ejemploCochr.php

include("24ejemploCoche.php");


$mazda = new Coche();
//como ya se habia dicho cuando se crea una instancia de entrada se crea con su metodo constructor , si a la clase no se le crea un constructor, ella toma un constructor por defecto que esta vacio cuando se crea con new

$pegaso = new Camion();


echo "El mazda tiene " . $mazda->ruedas . " Ruedas </br>";
echo "El pegaso tiene " . $pegaso->ruedas . " Ruedas </br>";

?>