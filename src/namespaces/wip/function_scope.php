<?php

function hola () {
    function adios () {
        echo 'adios'.PHP_EOL;
    }
    
    echo 'hola'.PHP_EOL;
    
}

function saludos () {
    // hola(); // Fatal error: Cannot redeclare adios()
    adios(); // No redeclara variable.
}

hola();
adios();
saludos();
