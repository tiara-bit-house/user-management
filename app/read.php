<?php

function readData($connection)
{
    $sql = "SELECT * FROM users";
    $result = $connection->query($sql);

    if ($result->num_rows) {
        while ($data = $result->fetch_object()) {
            $id = $data->user_id;
            $name = $data->NAME;
            $point = $data->POINT;

            echo "$id -> $name memiliki $point point. \n";
        }
    } else {
        echo "Tidak ada data.";
    }
}
