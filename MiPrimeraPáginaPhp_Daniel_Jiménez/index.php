<?php

require 'config/config.php';

// Sistema de rutas con $_GET
$page = $_GET['pages'] ?? 'inicio';
$allowed_pages = ['inicio', 'about', 'contact', 'services'];
if (!in_array($page, $allowed_pages)) {
    $page = 'inicio';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        $nombre = "Dani";
        $edad = 25;
        $ciudad = "Granada";
        $profesion = "Desarrollo de Aplicaciones Web";
    ?>
    <header>
        <?php
            include 'includes/header.php';
        ?>
    </header>

    <main>
        <?php include "./pages/{$page}.php"; ?>
    </main>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>




