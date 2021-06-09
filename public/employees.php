<?php
require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$query = 'SELECT * FROM employees';

if (isset($_GET['id'])) { // isset() comprueba si una variable está definida o no en el script de PHP que se está ejecutando
    $query = 'SELECT * FROM employees WHERE id = :identificador';
} elseif (isset($_GET['email'])) {
    $query = 'SELECT * FROM employees WHERE email = :correo';
}
$stm = $dbConnexion->prepare($query); // prepare() es para evitar la inyección de sql

 if (isset($_GET['id'])) {
     $stm->bindParam(':identificador', $_GET['id']); // con bindParam() sustituimos "identificador" por el parámetro que yo le pase, en este caso "id"
 } elseif (isset($_GET['email'])) {
     $stm->bindParam(':correo', $_GET['email']);
 }

 $stm->execute();

 $people = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';
