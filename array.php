<?php

//Array simple 
$courses = ["javascript", "laravel", "php", "vuejs"];
var_dump($course);

//Array complejo
$courses = [
    "frontend" => "javascript",
    "framework" => "laravel", 
    "backend" => "php"];

foreach ($courses as $key => $value) {
    echo "$key: $value";
}

foreach ($courses as $course) {  //Solo muestra los valores
    echo $course;
}


#Otra funcion para recorrer el array
$cursos = [
    "frontend" => "javascript",
    "framework" => "laravel", 
    "backend" => "php"];

function upper($curso, $value)
{
    echo strtoupper($curso) . ": $value";
}

array_walk($cursos, "upper"); //Solo muestra los valores, pero en mayuscula debido al llamado de una función

#Otros metodos
$courses = [
    "frontend" => "javascript",
    "framework" => "laravel", 
    "backend" => "php"];

$existe = array_key_exists("frontend", $courses);
echo $existe; // Da "1" osea true

$existeEsteValor = in_array("javascript", $courses);
echo $existeEsteValor; // Da "1" osea true

array_keys($courses);
array_values($courses);
