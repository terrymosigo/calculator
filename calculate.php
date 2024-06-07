<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
$result = 0;

switch ($operation) {
    case 'add':
        $result = $num1 + $num2;
        break;
    case 'subtract':
        $result = $num1 - $num2;
        break;
    case 'multiply':
        $result = $num1 * $num2;
        break;
    case 'divide':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero";
        }
        break;
    case 'power':
        $result = pow($num1, $num2);
        break;
    case 'percentage':
        $result = ($num1 * $num2) / 100;
        break;
    case 'sqrt':
        $result = sqrt($num1);
        break;
    case 'log':
        $result = log($num1, $num2);
        break;
    default:
        $result = "Invalid operation";
}

echo "Result: " . $result;
?>