<?php

$body = file_get_contents('php://input'); // leemos el cuerpo (body) de la solicitud http

$person = json_decode($body, true); // transformamos la cadena a un objeto json a través de json_decode()

echo json_encode($person);

exit();