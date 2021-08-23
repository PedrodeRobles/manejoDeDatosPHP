<?php

$courses = ["php", "javascript"];
$deseos = ["php", "laravel", "javascript", "vuejs"];

var_dump(array_diff($deseos, $courses)); //Muestra los elementos que no se encuentran en al array de cursos

/////////////////////////////////////////////////////////
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayB, $arrayA)); //Muestra los valores que existen en el primer argumento con respecto al segundo argumento
var_dump(array_diff($arrayA, $arrayB));

/////////////////////////////////////////////////////////

$array1 = [
    "a" => "green",
    "b" => "brown",
    "c" => "blue",
    "red",
    "violet"
];
$array2 = [
    "a" => "green",
    "yellow",
    "red"];
$resultado = array_diff_assoc($array1, $array2);
print_r($resultado);
