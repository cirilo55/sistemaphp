<?php
//esse arquivo serve para subir o nodemon.

$host = 'localhost';
$port = 8001;

// Executa o servidor PHP
passthru("php -S $host:$port");