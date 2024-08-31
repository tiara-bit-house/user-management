<?php

function updateData($connection, $name, $point, $user_id)
{

    $sql = "UPDATE users SET name='$name', point=$point WHERE user_id = $user_id";

    if ($connection->query($sql)) {
        echo "Berhasil update data";
    } else {
        echo "Gagal update data";
    }

    $connection->close();
}
