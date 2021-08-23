<?php

$frontend = ["javascript"];
$backend = ["php", "laravel"];

var_dump(array_merge($frontend, $backend));

////////////////////////////////////////////////////
// Otro caso
$frontend = [
    "a" => "javascript"
];
$backend = [
    "a" => "php",
    "b" => "laravel"
];
#Si usamos el arrar_merge() va a estar mal porque reemplazaria el valor de la llave "a"
var_dump(array_merge($frontend, $backend));
var_dump(array_merge_recursive($frontend, $backend)); //En este caso se crea una llave "a" con dos array dentro: "javascript y php"

////////////////////////////////////////////////////
//Combinar dos arrays siendo una array llaves y otro arrays valores
$courses = ["javascript", "php", "laravel"];
$categories = ["front", "back", "framework"];

var_dump(array_combine($categories, $courses));