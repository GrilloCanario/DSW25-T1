<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if (isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        echo "<h2>Nombre:  " . $name . "</h2>";

        $file = $_FILES['avatar'];
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

        $pathAvatar = '../images' . $name . "." . $extension;
        move_uploaded_file($file['tmp_name'], $pathAvatar);

        printf("<img src='%s' alt='foto de /s'>",$pathAvatar, $name);
    } else {
        echo "<h2>No se dado un nombre</h2>";
    }
    ?>
</body>
</html>