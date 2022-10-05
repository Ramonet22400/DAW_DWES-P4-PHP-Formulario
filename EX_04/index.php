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
$hidden = $_POST['test'];


echo $nombre;
echo "<br>";
echo $apellidos;
echo "<br>";
echo $contraseña;
echo "<br>";
echo $checkbox;
echo "<br>";
echo $edad;
echo "<br>";
echo $comentarios;
echo "<br>";
echo $hidden;


