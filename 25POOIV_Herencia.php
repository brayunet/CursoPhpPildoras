<?php
//HERECIA EN POO . SUPERCLASES Y SUBCLASES

//la herencia es cuando una clase puede heredar las variable (propiedades) y metodos (funciones) de otra clase, cuendo se trabaja de esta manera se tienen las superclases y las subclases, las superclases seran los padres y  y las subclases los hijos, si se esta trabajndo en herecia con mas de 2 clases habra clase o clase que seran las intermedias que seran superclases y subclases a la vez ya que tendra clases padre y clase hija, una clase no puede heredar de 2 clases ala vez , deben heredarse una detras de otra en secuencia esto se conoce como cadena de herencia.

//todo esto con el fin de optimizar o reutilizar codigo

//la variable reservada que se usa para heredar es extends

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

//Una herencia se hace de la siguente manera ,

class Camion extends Coche{
    // esta clase hace exactamente los mismo que la clase camion del capitulo anterior, sol oque en vez e copiar todas las propiedades y metodos se heredan
   function Camion(){
            $this->ruedas=8;
   
            $this->color="";
   
            $this->motor="2600";
   
       }

       // si se hereda una FUNCION que no se desea que tenga la clase que la hereda  o no se quiere que se comporte o haga a lu funcion tal como la hace, se utiliza un conceto llamado SOBRE ESCRITURA DE METODOS. Que trata de sobre escribir ese metodo cambiandole su funcionamiento. por lo tanto sobre escribe este metodod que estamos creando en el que estamos heredando

    function establece_color($color_camion,$nombre_camion){

        $this->color=$color_camion;

        echo "el color del " . $nombre_camion . " es:  " . $this->color . "</br>";
    }

       //AHORA  si quisieramos que un metodo heredado ademas de hacer lo que hace , tenga otras funcionalidades extra en la clase hijo , se hace utilizando la palabra reservada parent, de la siguiente manera


       function arrancar(){
   
        parent::arrancar();//se usa los :: para referenciar a la funcion que estamos referenciando de la clase padre, osea la funcion arrancar() que esta, despues de :: es la funcion arrancar de la clase padre

        echo "El camion esta arrenacado";

    }
 
}




$pegaso = new Camion();





$pegaso->arrancar();//aqui nos debera ejecutar el metodo de la clase padre y el que le agregamos en la clase hijos


?>