<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'sumar':
            $resultado = $num1 + $num2;
            break;
        case 'restar':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: División por 0";
            }
    }
    
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head><meta charset='UTF-8'><title>Calculadora web</title></head>";
    echo "<body>";
    echo "<h1>Calculadora web</h1>";
    echo "<p>Resultado: " . $resultado . "</p>";
    echo "<a href='index.html'>Volver a la calculadora</a>";
    echo "</body></html>";
}