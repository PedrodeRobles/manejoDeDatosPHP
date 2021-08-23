<?php 
//Funcion anonima
$greet = function ($name) //variable que requiere logica
{
    return "Hola, $name";
};

echo $greet("PEdro");

##############################################

function greet2(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola $name";
};

$en = function ($name)
{
    return "Hello $name";
};

echo greet2($es,"Pedro");
echo greet2($en,"Peter");
