## EX_04

*En este ejercicio nos piden que creemos un formulario con varios tipos diferentes de inputs y 
que luego mediante un POST, tendremos que imprimir los valores que hemos introducido en el archivo **HTML**.*


Lo primero este ejercicio igual que los tres anteriores está dividido en dos archivos uno con lenguaje
**HTML** y el segundo en lenguaje **PHP**.

Primero hablaremos del archivo de **HTML** y luego el de **PHP**, entonces lo primero de todo será crear
los diferentes inputs para las diferentes entradas en el formulario.

* input type=text, para el nombre.
* input type=text, para los apellidos.
* input type=password, para la contraseña.
* input type=radio, para el checkbox de profesor o alumno.
* input type=image, para la imagen.
* input type=number, para la edad.
* input type=text, para los comentarios.
* input type=hidden, para el texto escondido.

Estos valores los pasaremos al archivo *php.index* mediante un POST, en el cual le adjudicaremos una
variable a cada uno y luego las imprimiremos con un echo.