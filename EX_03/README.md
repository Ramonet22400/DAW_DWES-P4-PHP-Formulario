## EX_03

*Este ejercicio nos pide que mediante un número que se recibe con un POST, el
código imprima tantas líneas de texto como el valor del número.*

Primero de todo, al tener dos archivos como en los ejercicios anteriores, en el de
**HTML** pondremos un *input type=number* donde especificaremos el valor de este.

Ahora estamos en el archivo **PHP** en este declaramos la variable que va a recibir
el POST *$numero* y luego a continuación hacemos un for que imprimirá una línea
de texto mientras estas tengan un valor <= que *$numero*.