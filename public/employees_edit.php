<?php

require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$query = 'INSERT INTO `employees` (`name`, `email`, `age`, `city`) VALUES (:nombre, :correo, :edad, :ciudad);';
$params = [
    ':nombre' => $_POST['name'],
    ':correo' => $_POST['email'],
    ':edad' => $_POST['age'],
    ':ciudad' => $_POST['city'],
];

$stm = $dbConnexion->prepare($query); 

$stm->execute($params); 

print_r($_POST);

header('Location: /employees.php?message' . urlencode(('El usuario ' .$_POST['email'].' se ha actualizado correctamente.')));

exit();

// Ejercicio: actualizará los datos del usuario. Hacer query parecida a la de employees_add.php

