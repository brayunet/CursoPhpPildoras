<?php

//para crear un array multidimencional se debe crear priemro un array asociativo, y luego en cada una de las pociciones se creara otro array asociativo en el que se definiran los arrays internos de la siguiente manera

 $alimento = array("fruta" => array("tropical"=>"kiwi",
                                    "citrico"=>"naranja",
                                    "oreos"=>"manzana"),
                   "leche" => array("animal"=>"vaca",
                                    "vegetal"=>"coco"),
                   "carne"=> array("vacuno"=>"lomo",
                                   "porcino"=>"pata"));

// el arreglo $alimento se estructuro de la manera en que se mostro para poder entenderlo con mas claridad, pero lo mas importante a tomar en cuenta es las comas entre los elementos del aregl oprincipal y el segundario


//para mostrar un elemento de un array multidimencional  se debe hacer poniendo el nombre del array seguido de dos corchetes en ellos debe ir los nobres asociados a las pociciones como se muestra a continuacion

echo $alimento["carne"]["vacuno"] . "</br></br></br>";


//para mostrar el array se usa un ciclo floreach, un ciclo while y una funcion de php llamada  list()
/*
foreach($alimento as $clave_alim => $alim){

    echo "$clave_alim: </br>";

    while(list($clave,$valor)=each($alim)){
        //aqui lo que esta haciendo es que la funcion list obtiene la clave y el valor de cada $alim, cada alim representa un elemento del arreglo grande osea el externo , osea que cada alim tiene en el 2 o 3 elemetos mas, estos elemtos son pasados por el alim a travez de each(), y cuando ya cada elemento alim paso todos sus leementos se cierra un bucle del ciclo hasta que el $alim ya no tenga mas elementos que mostrar

        echo "$clave = $valor </br>";

    }
    echo "</br>"; 
}*/

// los arrays multidimncionales tambie nse pueden mostrar con  la funcion  var_dump($numbre_arreglo);

//para mostrar el arreglo completo no se ponene los corchetes

echo var_dump($alimento);
?>