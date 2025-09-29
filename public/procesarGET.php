<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de GET</h1>
    <pre>
        <?php print_r($_GET); ?>
    </pre>
    <h1>
        <?php
        printf("Hola %s", $_GET['nombre']);?>
    </h1>
    <h1>
        <?php
        Edad:
        printf("%d", $_GET['edad']);?>
    </h1>
</body>
</html>