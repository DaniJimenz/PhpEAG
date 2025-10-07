<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        $nombre = "Dani";
        $edad = 25;
        $ciudad = "Granada";
    ?>
    <header>
        <?php
            include 'includes/header.php';
        ?>
    </header>

    <main>
        <div class='descripcion'>
            <div class = 'frase' > Hola, me llamo <?php echo $nombre; ?>, tengo <?php echo $edad; ?> años y vivo en <?php echo $ciudad; ?> </div>

            <div class = 'hora' > La hora actual es: <?php echo date("H:i:s"); ?> </div>

            <div class = 'fecha' > La fecha actual es: <?php echo date("d/m/Y"); ?> </div>
        </div>
    </main>

    <footer>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>




