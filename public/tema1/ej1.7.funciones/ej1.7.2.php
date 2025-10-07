<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function invertirCadena($texto){
        return strrev($texto);
    }
    $frase = "hola";
    printf("<p>La cadena original es: %s</p>",$frase);
    printf("<p>La cadena invertida es: %s</p>",invertirCadena($frase));
    ?>
</body>
</html>