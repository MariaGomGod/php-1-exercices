<?php

// print_r($_POST);

require $_SERVER["DOCUMENT_ROOT"] . "/lib/app.php";

$query = "UPDATE employees SET name=:nombre, email=:correo, age=:edad, city=:ciudad WHERE id=:id"; 

$params = [
    ":id" => $_POST["id"],
    ":nombre" => $_POST["name"],
    ":correo" => $_POST["email"],
    ":edad" => $_POST["age"],
    ":ciudad" => $_POST["city"]
];


$stm = $dbConnection->prepare($query);

$stm->execute($params);

header('Location: /employees.php?message=' . urlencode('El usuario '.$_POST['name'].' se ha modificado.'));


