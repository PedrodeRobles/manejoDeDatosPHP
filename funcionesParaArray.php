<?php

$courses = [10 => "php", 
    100 => "javascript", 
    1000 => "laravel"];

sort($courses); //Ordena los elementos
var_dump($courses);

// rsort($courses); //Ordena los elementos al reves

/**
 * ksort($courses); Ordena las llaves
 * krsort($courses); Ordena las llaves al reves
 */

$courses = [10 => "php", 
    100 => "javascript", 
    1000 => "laravel"];

var_dump(array_slice($courses, 1)); //Corta el elemento en la posicion 1

############################################################
//Sacar un pedazo del array #Se usa en MUCHO BASES DATOS
$cursos = ["javascript", "laravel", "php", "vuejs"];
// var_dump(array_chunk($cursos, 1)); //Nos crea una llave cada un valor 
var_dump(array_chunk($cursos, 2)); //Nos crea una llave cada dos valores

############################################################
array_shift($cursos); //Elimina el primer elemento del array
array_pop($cursos); //Elimina el ultimo elemento del array
array_unshift($cursos, "valor"); //Agregar un valor al principio del array
array_push($cursos, "valor"); //Agregar un valor al final del array
array_flip($courses); //Invierte los datos, el key para a ser valor y el valor pasa a ser el key

