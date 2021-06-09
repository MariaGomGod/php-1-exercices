<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

    $query = (isset($_GET['id'])) ? 'SELECT * FROM employees WHERE id=' .$_GET['id'] : 'SELECT * FROM employees'; // isset() nos da información de si una variable está definida y si un valor está definido

    $stm = $dbConnexion->query($query);
    $people = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';

