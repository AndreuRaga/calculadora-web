<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'sumar':
            $_POST['resultado'] = $numero1 + $numero2;
            break;
        case 'restar':
            $_POST['resultado'] = $numero1 - $numero2;
            break;
    }
}