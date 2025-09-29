<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo</h1>
    <?php
    
    echo "<h2>Hola PHP\n</h2>";
    
    ?>
    <h3>
        <?php
        echo "otra linea";
        ?>
    </h3>
    <?php
        $name = "Pedro";
        echo "Tu nombre $name";
    ?>
    <p>repite tu nombre</p>
    <?php
        echo "Tu nombre $name";
        // Esto es un comentario
        /*
        Esto es 
        un comentario
        en varias
        lineas
        */
        
    ?>
</body>
</html>