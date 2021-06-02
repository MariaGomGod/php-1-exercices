<?php

namespace App\Wip;

// require dirname(__DIR__).'/Namespaces/Uno/Clase.php';
// require dirname(__DIR__).'/Namespaces/Dos/Clase.php';

// $clase = new Clase();

// $clase->haceAlgo();

// ----------------

// require dirname(__DIR__).'/Namespaces/Uno/Clase.php';
// require dirname(__DIR__).'/Namespaces/Dos/Clase.php';

// $clase = new App\Namespaces\Uno\Clase();

// $clase->haceAlgo();

// ----------------

require 'vendor/autoload.php';

use App\Namespaces\Uno\Clase as ClaseUno;
use App\Namespaces\Dos\Clase as ClaseDos;

$claseUno = new ClaseUno();
$claseUno->haceAlgo();

$claseDos = new ClaseDos();
$claseDos->haceAlgo();
