<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frase = "  PHP es un lenguaje muy pontente  ";
    //- String sin espacios
    $frase = trim($frase);
    echo "<p>" . $frase . "</p>";
    //- String en Mayusculas
    $frase = strtoupper($frase);
    echo "<p>" . $frase ."</p>";
    //- SubString extraido
    $frase = substr($frase, 10, 8); //* 10(Indice de inicio) 8 (longitud de la extracción)
    echo "<p>" . $frase ."</p>";
    ?>
</body>
</html>