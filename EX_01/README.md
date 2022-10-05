## EX_01

*En este ejercicio nos piden que creemos un formulario a partir de una textbox,
este a de contener una cadena de texto y finalmente enviarlo con el método POST
y mostrarlo por pantalla*

Peculiaridad que tiene este programa es que utilizaremos un archivo con la extensión
**HTML** y otro con la extensión **PHP**.

Lo primero que haremos es crear el formulario en **HTML**, mediante la etiqueta *<form&gt;*
en la que especificamos que haga un post mediante la etiqueta *method=post*, y que lo envíe
al archivo de **PHP** mediante la etiqueta *action=index.php*.

Luego pondremos las características del POST, mediante la etiqueta *input*, en estas declararemos
una entrada de texto *type=text* y luego un botón que enviara el String *type=sumbit*.

Ahora estamos en **PHP** donde declararemos una variable que acogerá la información que envía el
POST, *$nombre = $_POST['nombre']*, entonces tendremos el valor del POST en la variable.

El último paso será crear una nueva variable donde diremos que me diga la longitud de *$nombre*,
con la función **streln()** y finalmente la imprimimos.