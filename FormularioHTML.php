```html
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de entrada del dato</title>
</head>

<body>

    <!-- Formulario para ingresar el nombre y la edad -->
    <form method="post" action="">

        <!-- Campo para ingresar el nombre -->
        Ingrese su nombre:<br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <!-- Campo para ingresar la edad -->
        Ingrese su edad:<br>
        <input type="text" name="edad" id="edad"><br><br>

        <!-- Botón para enviar el formulario -->
        <input type="submit" value="confirmar">

    </form>

    <hr>

<?php

// Verificamos que el usuario haya ingresado el nombre y la edad
if (isset($_POST['nombre']) && isset($_POST['edad'])) {

    // Guardamos el nombre ingresado por el usuario
    $Nombre = $_POST['nombre'];

    // Convertimos la edad ingresada a un número entero
    $Edad = intval($_POST['edad']);

    // Validamos que el nombre solo contenga letras y espacios
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $Nombre)) {

        // Si contiene números o caracteres especiales, mostramos un mensaje de error
        echo "Error: el nombre solo puede contener letras.";

    } else {

        // Mostramos el nombre ingresado
        echo "El nombre es: " . $Nombre . "<br>";

        // Verificamos si la persona tiene 18 años o más
        if ($Edad >= 18) {

            // Mensaje para las personas mayores de edad
            echo "Usted puede votar en las próximas elecciones 2028";

        } else {

            // Mensaje para las personas menores de edad
            echo "Usted no es mayor de edad";
        }
    }
}
?>

</body>
</html>
```
