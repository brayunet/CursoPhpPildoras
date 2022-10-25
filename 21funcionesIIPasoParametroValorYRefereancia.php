<?php

//ejemplo paso de parametro por valor

function incrementa($valor1){

    $valor1++;

    return $valor1;
}

$numero =5;
echo incrementa($numero) . "</br>";
echo $numero . "</br> </br></br>";

//ejemplo paso de parametro por referencia

//en este caso la diferencia que da el paso de parametro por referecia es que , antes a la funcion se le pasaban los paramtros cuando se llamaba con sus respectivos arguentos y la funcion se desentendia de esos argumentos, pero ahora la funcion con la referencia que es dada con el & , conecta el resultado de la funcion con la variable que se pasa como argumento y es recibida como parametro teneindo luego de que se ejecute la funcion el mismo valor que el valor que retorna esa funcion, como se puede diferenciar de esta funcion con la anterior que no tiene la referencia, en pocas palabras si se modifica el parametro dentro de la funcion tambien lo hace con la variable que se esta pasando como parametro


// EL USO de esto es cuando se necesita que una funcion modifique variables que estan fuera de ella y que se estan pasando como parametros
function incrementa1(&$valor1){

    $valor1++;

    return $valor1;
}

$numero =5;
echo incrementa1($numero) . "</br>";
echo $numero . "</br></br></br>";


//OTRO EJEMPLO

function cambia_mayus(&$param){

$param= strtolower($param);

$param= ucwords($param);

return $param;
}

$cadena = "hOla mUnDo";

echo cambia_mayus($cadena) . "</br>";
echo $cadena;
//ambos echo deberan imprimir lo mismo ya que se estan haciendo paso de parametro por referecia y quedan vinculados lo que cambie en uno cambiara en el otro
?>