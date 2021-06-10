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

    <table border="1">
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
                    <td><?php echo $person['age'] ?></td>
                    <td><?php echo $person['city'] ?></td>
                    <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person); ?>'>Eliminar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            
    <hr/>

    <?php
    // Esta query es para el formulario.
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id = :identificador';
        $stm = $dbConnexion->prepare($query);
        $stm->bindParam(':identifiador', $_GET['id']);
        $stm->execute();
        $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
    } elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email = :correo';
        $stm = $dbConnexion->prepare($query);
        $stm->bindParam(':correo', $_GET['email']);
        $stm->execute();
        $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
    }
    ?>

    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
        <?php if (isset($currentPerson)): ?>
            <input type="hidden" id="id" name="id" value="<?= $currentPerson['id']; ?>"/>
        <?php endif; ?>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" value="<?= $currentPerson['name']; ?>" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $currentPerson['email']; ?>" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" value="<?= $currentPerson['age']; ?>" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="city" id="city" name="city" value="<?= $currentPerson['city']; ?>" required/>
        <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>
    <?php
    require("./footer.php");
    ?>
</body>

</html>




