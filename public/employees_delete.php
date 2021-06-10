<?php

require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$body = file_get_contents('php://input'); // leemos el cuerpo (body) de la solicitud http

$person = json_decode($body, true); // json_decode () decodifica un string de JSON

$query = 'DELETE FROM employees WHERE id = :identificador';

$stm = $dbConnexion->prepare($query);
$stm->bindParam(':identificador', $person['id']);
$stm->execute();

$result = $stm->rowCount(); // rowCount() te dice cuántas filas han sido afectadas en una consulta

$response = [
    'status' => $stm->rowCount() === 0 ? 'error' : 'success',
    'message' => $stm->rowCount() === 0 ? 'No hemos eliminado a nadie' : 'He eliminado '.$stm->rowCount(). ' fila',
];

echo json_encode($response); // json_encode() retorna la representación JSON del valor dado

exit();