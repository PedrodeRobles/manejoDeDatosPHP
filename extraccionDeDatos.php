<?php

$data = "Estudio PHP";
echo $data[2]; // t

//////////////////////////////////////////

$post = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, totam cum laboriosam fuga, doloribus nisi laudantium eius, provident ipsam saepe expedita vel laborum consequuntur atque culpa quam earum tempora tempore?';
$extract = substr($post, 0, 20);  // Extraer partes del string

echo "$extract... [ver más]";

//////////////////////////////////////////

$data = 'javascript, php, laravel';  // campo tags
$tags = explode(', ', $data); // convierte la variable en un array
var_dump($tags);

//////////////////////////////////////////

$courses = ['javascript', 'php', 'laravel'];
echo implode('/ ', $courses); // De array a string

//////////////////////////////////////////

$course = '    Curso de PHP    ';
$course = trim($course); // Elimina el espacio
echo "Quiero hacer el $course!!!";