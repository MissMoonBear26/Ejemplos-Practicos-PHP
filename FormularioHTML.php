<!DOCTYPE html>
<html>
<head>
    <title>Formulario de entrada del dato</title>
</head>
<body>

    <form method="post" action="">
        Ingrese su nombre:<br>
        <input type="text" name="nombre" id="nombre"><br><br>

        Ingrese su edad:<br>
        <input type="text" name="edad" id="edad"><br><br>

        <input type="submit" value="confirmar">
    </form>

    <hr>

<?php
if (isset($_POST['nombre']) && isset($_POST['edad'])) {
    $Nombre = $_POST['nombre'];
    $Edad = intval($_POST['edad']);

    echo "El nombre es: " . $Nombre . "<br>";

    if ($Edad >= 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }
}
?>

</body>
</html>