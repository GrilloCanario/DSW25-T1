<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcular($num1,$num2,$operador){
        switch($operador){
            case "+":
                return $num1 + $num2;
            case "-":
                return $num1 - $num2;
            case "*":
                return $num1 * $num2;
            case "/":
                if ($num2 == 0) {
                    return "Error: División por cero no permitida";
                }
                return $num1 / $num2;
            default:
                return "Error: Operador no válido";

        }
    }
    $operaciones = [
        ['num1' => 10, 'num2' => 5, 'op' => '+'],
        ['num1' => 10, 'num2' => 5, 'op' => '-'],
        ['num1' => 10, 'num2' => 5, 'op' => '*'],
        ['num1' => 10, 'num2' => 5, 'op' => '/'],
        ['num1' => 10, 'num2' => 0, 'op' => '/'],
        ['num1' => 10, 'num2' => 5, 'op' => '$']
    ];
    foreach ($operaciones as $operacion){
        $resultado = calcular($operacion['num1'], $operacion['num2'], $operacion['op']);
        echo "<p>El resultado de {$operacion['num1']} {$operacion['op']} {$operacion['num2']} es: {$resultado}</p>";
    }
    ?>
</body>
</html>