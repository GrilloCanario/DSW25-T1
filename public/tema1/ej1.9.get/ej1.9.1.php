<?php
//- Comprobar si se ha pasado la variable 'nombre' por la URL
$nombre = isset($_GET['nombre']) && !empty($_GET['nombre']) ? $_GET['nombre'] : "invitado";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo GET</title>
</head>
<body>
    <h1>Hola, <?php echo htmlspecialchars($nombre); ?></h1>
</body>
</html>