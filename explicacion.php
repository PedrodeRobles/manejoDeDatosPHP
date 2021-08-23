<?php

/*
echo 'Un texto de una linea
varias líneas
comilla simpre \' backlash \\ constinuar con mas texto
$variable <br>';
*/

$name = 'pedro';
echo "Mi nombre es $name <br>";
//////////////////////////////////////////
$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "{$courses['backend'][0]} ";

class User {
    public $name = "Pedro";
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'][0]}";
echo $user->name;
//////////////////////////////////////////

$teacher = "italo";
$italo = "Profesor de PHP";
echo "$teacher es ${$teacher}";
echo $teacher . ' es ' . $$teacher;


//////////////////////////////////////////
function getTeacher() {
    return "teacher";
}

$teacher = 'italo';
echo "${getTeacher()} enseña PHP";
echo getTeacher();
echo ${getTeacher()};