<?php

$connection = new mysqli('localhost', 'root', '', 'store');

if ($connection->connect_error) {
    die("Failed to connect to database : " . $connection->connect_error);
}

echo "Connect success \n";
