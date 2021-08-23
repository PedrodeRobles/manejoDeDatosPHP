<?php

// Alterar
$text = "PHP es UN LENGUAJE";
echo strtolower($text); // Minuscula
echo strtoupper($text); // Mayuscula
echo ucfirst($text);    // upper case firts, primera en mayus 
echo lcfirst($text);    // lower case firts, primera en minus

// Reemplazar 
$text2 = "PHP es UN LENGUAJE";
$slug = str_replace(' ', '-', $text2); // Reemplaza los espacion por un guion, en este caso
echo $slug;

// Modificacion
$code = 39;
echo str_pad($code, 8, "#", STR_PAD_BOTH);  //Agrega hasta 8 caracteres y el num en el medio

$textH1 = "<h1>PHP es UN LENGUAJE</h1>";
echo strip_tags($textH1);  //Elimina las etiqueras HTML
echo $textH1;

$textMb = "PHP es UN LENGUAJE, año 2021, programación";
echo strtoupper($textMb); // monobyte
echo mb_strtoupper($textMb); // multibyte, acentos y eñes por ejemplo