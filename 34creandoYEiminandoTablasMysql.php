<?php
/*
en las tablas las columnas se denominan campos y las filas sedenominan registros

CADA CAMPO DEBE TENER UN NOMBRE 

CADA CAMPO DEBE DEFINIR EL TIPO DE DATO QUE ALMACENARA


CUUANDO SE CREA UNA BASE DE DQATOS , ESTA SE ENCUENTRA BASIA , DETRO DE LAS BASES DE DATOS SIEMPRE HAY TABLAS

PARA CREAR TABLAS EN LA CONSOLA SE USA EL COMANDO:

(LOS COMANDOS EN MYSQL PUEDEN SER MAYUSCULAS O EN MINUSCULAS)

1)
USE NOMBRE_BASE_DE_DATOS

este comando sirve para decirle a mysql que vamos a trabajar con una base de datos en este caso  la que se llama NOMBRE_BASE_DE_DATOS

2)luego crearemos la tabla y a su vez asignaremos los nombres a los campos (columnas) y a la vez asignaremos que tipo de datos se alamcenaran en esas columnas

CREATE TABLE NOMBRE_TABLA (CEDULA VARCHAR(9), NOMBRE VARCHAR(20), APELLIDO VARCHAR(25), EDAD INT(2));

**para eliminar una tabla de una base de datos 

drop table NOMBRE_TABLA;


** PARA QUE SE NOS MUESTRE LA INFORMACION DE UNA TABLA SIN NECESIDAD DE IR A PHPMYADMIN (en la consola cmd) SE USA :

DESCRIBE NOMBRE_TABLA;
*/
?>