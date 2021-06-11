<?php
require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/main.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>
    <?php if($_SESSION['last_visit_time']):?>
        <h4><?= $_SESSION['last_visit_time']; ?></h4>
    <?php endif; ?>
    <?php setcookie('phpexercise', time()); ?>
    <pre>$_COOKIE: <?php print_r($_COOKIE); ?></pre>
    
    <?php
    require("./links.php");
    ?>
    
    <?php
    $weeekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>

    <?php
        var_dump($_GET);
    ?>
    <h1>Hola, <?php echo $_GET['name']; ?></h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>

    <script src="/assets/main.js"></script>
</body>
</html>