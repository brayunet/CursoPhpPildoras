<?PHP

//                               MODULARIZACION

//es cuando se trabaja en programacion dividiendo el codigo en modulos o partes (clases), que juntos realizaran una funcion. la ventaja de esto es que si alguna parte del codigo se llega a dañar podemos areglarla sin para las funciones de las demas partes. ademas facilita L revision de rrores debido a que la division del codigo hace que tengamos menos lineas que revisar para un error en especifico 

//                               ENCAPSULACION

//el encapsulamiento es cuando cada clase de un programa tiene  funciones y caracteristicas especificas a las que no se desea que se pueda tener acceso desde otras clases, por lo tanto solo se podra tener acceso a esas funciones y caracterisitcas especificas desde la clase en la que se encuantran. Todo esto se hace con los modificadores de acceso


//                 MODIFICACIONES DE ACCESO: PUBLIC, PRIVATE, PROTECTED


// cuando una propiedad (variable) o funcion se declara PIBLIC  se puede acxceder desde cualquier parte del programa


// cuando una propiedad (variable) o funcion se declara PRIBATE, ESTA ES LA QUE SE USA para realizar todo lo que se explico en el encapsulamiento


// cuando una propiedad (variable) o funcion se declara PROTECTED , hace posible acceder a propiedades o funciones desde la clase en la que se encuantre y TMABIEN desde clase que Heredan de dicha clase


class Coche{
    private $ruedas;
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



class Camion extends Coche{
    
   function Camion(){
            $this->ruedas=8;
   
            $this->color="";
   
            $this->motor="2600";
   
       }

       

    function establece_color($color_camion,$nombre_camion){

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

echo "el coche tiene $mazda->ruedas ruedas" //esto arrojara un error y el porque es el suiguiente:

//el problema con poner las propiedades y funciones en private es que no podemos tampoco mostrarlas, por ejemplo con un echo ya que estan privadas y de ninguna manera se puede acceder a  ellas, pero esto se soluciona con los metodos seters y geters que veremos en el siguiente capitulo



?>