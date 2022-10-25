<?php

class Compra_vehiculo{

    private $precio_base;

    private static $ayuda=0; // una solucion para que este valor de una variables estatica  no se pueda cambiar desde fuera de la clase es encapsulandola

    function Compra_vehiculo($gama){

        if($gama == "urbano"){

            $this->precio_base=10000;

        } else if($gama == "compacto"){

            $this->precio_base=20000;

        }else if($gama == "berlina"){

            $this->precio_base=30000;
            
        }
    }//fin constrctor

    static function descuento_gobierno(){
        //las referencia para una variable estatica dentro de la clase es con self:: siempre

        if(date("m-d-y")>"05-03-22"){//funcion de php para compara fechas que trabaj con el formato americano, en este caso no se aplicara la ayuda sino se tiene una fecha mayor al 3 de julio 

        self::$ayuda=4500;
        }

    }

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
            return $precio_final;
    }

}

?>