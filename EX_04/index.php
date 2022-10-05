<?php

//Crea un formulario que permita introducir los siguientes valores y los muestre como
//resultado:
        //• Nombre
        //• Apellidos
        //• Contraseña
        //• Alumno o Profesor (Checkbox)
        //• Foto (Nombre del fichero).
        //• Edad
        //• Comentarios
        //• Campo oculto con el nombre test y el texto “myPrueba”.


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contraseña = $_POST['contraseña'];
$checkbox = $_POST['usuario'];
$edad = $_POST['Edad'];
$comentarios = $_POST['Comentarios'];
$hidden = $_POST['nombre'];


echo $nombre;
echo $apellidos;
echo $contraseña;
echo $checkbox;
echo $edad;
echo $comentarios;
echo $hidden;


