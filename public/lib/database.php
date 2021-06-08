<?php

$dbUser = 'root';
$dbPassword = 'root';
$dbHost = 'localhost';
$dbDatabase = 'employees';

try {
$dbConnexion = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
$dbConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Error en la conexión a la base de datos: ' . $e->getMessage();
}



