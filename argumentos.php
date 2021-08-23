<?php 

// valores
function greet($name) 
{
    return "Hola $name";
}

echo greet("Pedro");

// referencias 
$course = 'PHP';

function path(&$course) //Modificamos la variable que esta afuera de la función con "&"
{
    $course = 'Laravel';
    echo $course;
}

path($course);  //Laravel
echo $course;   //Laravel

// predeterminado
function saludo($name = "Pedro")
{
    return "Hola $name";
}

echo saludo();
echo saludo("Abel");
