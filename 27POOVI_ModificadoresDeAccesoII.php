<?php

//para poder acceder a PROPIEDADES QUE ESTAN ENCAPSULADAS SE usan metodos getter y setter

//setter-->sirve para modificar las propiedades de un objeto

//getter --> sirve para poder ver la propiedades de un objeto


class Coche{

    //aqui se tiene otro problema ya que al estar la propiedad ruedas en PRIVATE , el metodo get ruedas a pesar de que se Hereda en la clase camion no funciona , no nos muestra las ruedas del camion y esto es debido a que esta propiedad solo se puede acceder desde la clase Coche por ende , la hemos cambiado a PROTECTED ya que asi permite que las clases a las que hereda tambien puedan mostrar la propiedad ruedas
    protected $ruedas; // ASI SE PUEDE HEREDAR LA POSIBILIDAD DE MOSTRAR RUEDAS DESDE SUS CLASES HIJAS TAMBIEN , PERMITIENDO A CAMION 
    var $color;
    var $motor;
   function Coche(){
            $this->ruedas=4;
   
            $this->color="";
   
            $this->motor="1600";
   
       }

    function get_ruedas(){

        return $this->ruedas;
        //de esta mnera podremos obtenet el valor de as rudas ya que lo estamos haciendo desde la misma clase 

        //en el nombre de la funcion no es obligatorio ponerle get, SOLO SE HIZO PARA HACER SABER QUE ES UN METODO GET

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

    function set_color($color_coche,$nombre_coche){
        //esta funcion era el metodo establece_color() que era un metodo set() que ya habiamos usado para cambiar el color del coche
        $this->color=$color_coche;

        echo "el color del " . $nombre_coche . " es:  " . $this->color . "</br>";
       }
   
   }

//---------------------------------------------------------------------------



class Camion extends Coche{
    
   function Camion(){
            $this->ruedas=8;
   
            $this->color="";
   
            $this->motor="2600";
   
       }

       

    function set_color($color_camion,$nombre_camion){
        //esta funcion era el metodo establece_color() que era un metodo set() que ya habiamos usado para cambiar el color del camion
        $this->color=$color_camion;

        echo "el color del " . $nombre_camion . " es:  " . $this->color . "</br>";
       }

       


       function arrancar(){
   
        parent::arrancar();

        echo "El camion esta arrenacado";

    }
 
   }




$pegaso = new Camion();

$mazda = new Coche();

echo "el coche tiene " . $mazda->get_ruedas() . " ruedas </br>";
echo "el coche tiene " . $pegaso->get_ruedas() . " ruedas </br>";

?>