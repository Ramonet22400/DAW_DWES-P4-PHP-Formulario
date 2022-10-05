<?php

//Crea un formulario con un textbox que contenga un cálculo matemático. Envíelo con
//el método POST y muestre por pantalla la operación y el resultado.


$numero1 = $_POST['numero1'];
$signo = $_POST['signo'];
$numero2 = $_POST['numero2'];

$operacion = 0;

if($signo== '+'){

    $operacion = $numero1 + $numero2;
    echo'El resultado de la operación es: '.$operacion;

}elseif ($signo== '-'){

    $operacion = $numero1 - $numero2;
    echo'El resultado de la operación es: '.$operacion;

}elseif ($signo== '/'){

    $operacion = $numero1 / $numero2;
    echo'El resultado de la operación es: '.$operacion;

}else{

    $operacion = $numero1 * $numero2;
    echo'El resultado de la operación es: '.$operacion;
}

