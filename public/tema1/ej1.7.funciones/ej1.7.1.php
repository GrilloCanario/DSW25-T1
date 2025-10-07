<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function saludar($nombre){
        if(empty($nombre)){
            printf("<h2>Hola, Invitado!</h2>");
        } else {
            printf("<h2>Hola, %s", $nombre);
        }
    }
    saludar("");
    saludar("Pedro");
    ?>
</body>
</html>