<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'multiplicar':
            $_POST['resultado'] = $num1 * $num2;
            break;
        case 'dividir':
            if ($num2 != 0) {
                $_POST['resultado'] = $num1 / $num2;
            } else {
                $_POST['resultado'] = "Error: División por 0";
            }
            break;
    }
}