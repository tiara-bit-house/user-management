<?php

require_once 'database.php';

$sql = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows) {
    while ($data = $result->fetch_object()) {
        $name = $data->NAME;
        $point = $data->POINT;

        echo "$name memiliki $point point. \n";
    }
} else {
    echo "Tidak ada data.";
}
