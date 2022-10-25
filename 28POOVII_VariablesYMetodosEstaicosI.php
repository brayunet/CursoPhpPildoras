<?php


//                         Variables o metodos estaticos

// cuando se crea un objeto a parti de una clase, ese objete hace una copia de todas las funciones y variables de esa clase  para poder ejecutarlas desde el mismo objeto, pero suelen ser diferentes para cada opjeto segun como se definan o los aprametros que se le pase, pero aveces se requiere que no sean diferentes para cada objeto, se necesita que  sean iguales para todos los objetos creados con esa clase ya sea un metodo o una variable , para esto es que se usan las variables y metodos estaticos

//esto quiere decir que los metodos y variables estaticos solo perteneceran a la clase, osea no se crearan una copia de ellos en cado objeto, simplemente la clase los comparte con cada objeto, y no les permite cambiarlos desde ese objeto, pero si desde la clase

class Compra_vehiculo{

    private $precio_base;

    static $ayuda=4500;

    function Compra_vehiculo($gama){

        if($gama == "urbano"){

            $this->precio_base=10000;

        } else if($gama == "compacto"){

            $this->precio_base=20000;

        }else if($gama == "berlina"){

            $this->precio_base=30000;
            
        }
    }//fin constrctor

    function climatizador(){
            $this->precio_base+=2000;
    }


    function navegador_gps(){
            $this->precio_base+=1500;
    }


    function tapiseria_cuero($color){
            
            if ($color == "blanco"){

                $this->precio_base+=3000;

            } else  if ($color == "beige"){
                
                $this->precio_base+=3000;
            
            }else {
                
                $this->precio_base+=5000;

            }

    }

    function precio_final(){ //metodos getter

            $precio_final=$this->precio_base-self::$ayuda; 
            //cuando se utilisa una variable estatica en una clase no se usa precedida por this-> ya que no pertenece a ningun opjeto , pertenece a la clase y para poder llamarla y usar se usa (self::) que hace referencia a la clase en la que se encuentra la variable estatica, tal como en el ejemplo (self::$ayuda) la variable estatica es $ayuda
            return $precio_final;

            // EL OPERADOR 2 PUNTOS :: SE USA PARA PODER TENER ACCESO A UNAS PROPIEDADES QUE PRETENECEN SOLO A LA CLASE 
    }
}

?>