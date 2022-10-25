<?php

// aqui se vera la ultima de las cuatro consultas principales (o acciones) que es actualizar datos, las otras 3 son , leer datos, registrar datos y eliminar datos de una base de datos

//la accion de actualizar registros es modificar la informacion que puede haber en una tabla de mysql

//ESTA ACTUALIZACION SE HACE CON EL SIGUIENTE COMANDO SQL

//    update nombre_tabla set nombre_columna='nuevo_valor' where nombre_columna_referencia='criterio'

//'criterio' seria la referencia para seleccionar la fila a la que se le quiere hace rel campo osea la clave , podria ser para la tabla productos el campo AR01

//si se quisiera actualizar todos los valores de un campo(columna) por ejemplo subirle 100 euros en la columna PRECIO a todos los productos de la tabla , ps no seria necesario la parte del comando sql WHERE CAMPO='CRITERIO' , YA QUE nombre_columna='NOMBRE_COLUMNA+100'

// si se quiesieran modificar mas de 1 campo en un registro , lo que se hace es separarse por comas (,) , sin necesidad de agregar mas de 1 criterio porque va a ser el mismo criterio para ambos campos, de la siguiente manera

//update nombre_tabla set PRECIO='500', PAISDEORIGEN='ESPAÑA'  where nombre_columna_referencia='AR22'



//PARA HACER ESTA MODIFICACION O ACTUALIZACION DESDE PHP SE NECESITA CONTAR CON UN FORMULARIO QUE NOS MUESTRE LOS VALORES OSEA LA TABLA QUE DESEAMOS MODIFICAR, ESTO SE HACE CON ALGO CONOCIDO COMO CRUD QUE SIGINIFA

//CRUD----> CREATE , READ, UPDATE, DELETE ; ESTO NOS PERMITIRA TENER UNA TABLA QUE NOS PERMITA CREAR, LEER, ACTUALIZAR Y BORRAR LOS VALORES DE ESA TABLA, PERO ESTO SE HACE DE MANERA OPTIMA CON PDO LO QUE SE VERA MAS ADELANTE, MIENTRAS TANTO SOLO SE CREARA UNA PAGINA QUE SERA CAPAZDE LEER Y ACTUALIZARAN  LOS DATOS

?>