<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

    $stm = $dbConnexion->query('SELECT * FROM employees');

    $people = $stm->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>'; var_dump($result); echo '</pre>'; die();
?>

<?php

$people = [
    ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
    ['name' => 'Mari Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
    ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
    ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
];

?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';

