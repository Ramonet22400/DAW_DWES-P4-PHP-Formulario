<?php

//Crea un formulario con un textbox que contenga una cadena de texto. Envíelo con el
//método POST y muestre por pantalla la longitud de la palabra introducida.

$nombre = $_POST['nombre'];
$longitud_nombre = strlen($nombre);

echo 'La longitud de la palabra es de '.$longitud_nombre.' caracteres. ';
