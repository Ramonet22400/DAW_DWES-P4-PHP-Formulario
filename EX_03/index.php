<?php

//Crea un formulario con una entrada de número. Envía con el método POST el número
//e imprime tantas líneas como te indiquen por el método POST y el mensaje:
//“Escribiendo X líneas”. Dónde X es el número que nos han enviado.

$numero = $_POST['numero'];
for($i=0; $i <= $numero; $i++){
    echo 'Escribiendo '.$i.'líneas.';
    echo "<br>";
}
