<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP</title>
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
                <td>Acciones</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($people as $person) : ?>
                <tr>
                    <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['id']?></a></td>
                    <td><?php echo $person['name'] ?></td>
                    <td><a href="/employees.php?id=<?= $person['email']?>"><?= $person['email']?></a></td>
                    <td><?php echo $person['city'] ?></td>
                    <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person); ?>'>Eliminar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if (isset($_GET['message'])) :?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>
            
    <hr/>
    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required/>
        <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>
</body>

</html>




