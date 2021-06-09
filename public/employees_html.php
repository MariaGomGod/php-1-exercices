<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require("./links.php");
    ?>

    <table>
        <thead>
            <tr>
                <td>Id.</td>
                <td>Nombre</td>
                <td>Email</td>
                <td>Edad</td>
                <td>Ciudad</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($people as $person) : ?>
                <tr>
                    <td><?php echo $person['id'] ?></td>
                    <td><?php echo $person['name'] ?></td>
                    <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['email']?></a></td>
                    <td><?php echo $person['city'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>




