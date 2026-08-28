<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1</title>
    <style>
        body {
            background-color: #fdf0f4;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            width: 280px;
            border: 1px solid #f8bbd0;
        }
        label {
            color: #880e4f;
            font-weight: bold;
        }
        input[type="submit"] {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        .resultados {
            background-color: #fce4ec;
            border: 1px solid #f48fb1;
            padding: 15px;
            border-radius: 8px;
            width: 280px;
            margin-top: 15px;
            color: #4a148c;
        }
    </style>
</head>
<body>

    <h2 style="color: #d81b60;">Laboratorio #1</h2>

    <form method="GET" action="">
        <label>Radio del círculo:</label><br>
        <input type="number" step="any" name="radio" required><br><br>

        <label>Pulgadas a convertir:</label><br>
        <input type="number" step="any" name="pulgadas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

<?php
if (isset($_GET['radio']) && isset($_GET['pulgadas'])) {
    $radio = $_GET['radio'];
    $pulgadas = $_GET['pulgadas'];

    // Cálculos
    $area = 3.1416 * ($radio * $radio);
    $perimetro = 2 * 3.1416 * $radio;
    $centimetros = $pulgadas * 2.54;

    // Mostrar resultados
    echo "<div class='resultados'>";
    echo "<h3 style='margin-top:0; color:#880e4f;'>Resultados:</h3>";
    echo "<b>Área del círculo:</b> " . round($area, 2) . "<br>";
    echo "<b>Perímetro del círculo:</b> " . round($perimetro, 2) . "<br>";
    echo "<b>Conversión a cm:</b> " . round($centimetros, 2) . " cm";
    echo "</div>";
}
?>

</body>
</html>