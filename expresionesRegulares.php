<?php

$password = '123456';

echo preg_match('/^[0-9]{6,9}$/', $password); //Muestra "1" true

$password = '123456a'; //Aca nos daria false

/**
 * Nos sirve para verificar una contraseña, un mail, una id, etc.
 * [0-9] numeros entre 0 y 9
 * {6-9} minimo 6 caracteres y maximo 9
*/

#EXPRESIONES REGULARES
/*
/: CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/
