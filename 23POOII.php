<?php

// PROPIEDADES Y METODOS DE OBJETO

// los objetos definidos por las clases so n formados por propiedades ( variables) y funcionalidades (metodos)
class Coche{
//las propiedade o atributos en la clases se declaran con la palabra reservada var$

//la funcionalidad del objeto por medio de una clase se le da con lo que se conoce como metodo que es como se el conoce a las funciones que trabajan dentro de las clases en este caso el metodo o funcion arrancar , girar y frenar

    var $ruedas;
    var $color;
    var $motor;

//los objetos necesitan que se le definan los valores que van a tener sus propiedades al inicio, un estado inicial, para esto se usan las funciones contructoras , esta funcion constructora se crea asignandole el mismo nombre que la clase 

    function Coche(){ // metodo constructor

//las propiedades iniciales de ese constructor se declaran usando la plabra reservada $this-> , esta palabra hace referencia a  a la clase coche dentro de esta funcion

        $this->ruedas=4;

        $this->color="";

        $this->motor="1600";

    }

// el resto de los metodos definen el comportamiento de un objeto de tipo coche
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

$renault = new Coche(); //cuando se crea un objeto en este caso de tipo coche sin asignarle "parametros", lo que hara es trabajar con la propiedades definidas en el contructor.

$mazda = new Coche();
$fiat = new Coche();

// para hacer que un objeto realice una funcion lo que se hace es asignarle dicha funcion a su nombre de instancia  de la siguiente forma:

    
    //LLAMADAS A METODOS
$mazda->arrancar();

echo $mazda->ruedas;//en este caso es necesario usar el echo ya que se quier mostrar la propiedad, en la anterior los ecos ya estaban en las funciones


?>