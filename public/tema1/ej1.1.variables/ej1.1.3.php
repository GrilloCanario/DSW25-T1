<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    const VERSION_PHP = "8.4";
    // Definición de 2 constantes
    /*
       Comentario de varias lineas 
    */
    echo "<p>Versión de PHP: ".VERSION_PHP."</p>";
    define('IS_TRUE_MODE_ACTIVE',false);
    echo "<p>Test mode: ".IS_TRUE_MODE_ACTIVE."</p>";
    ?>
</body>
</html>