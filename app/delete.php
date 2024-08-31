<?php

function deleteData($connection, $user_id)
{

    $sql = "DELETE FROM users WHERE user_id = $user_id";

    if ($connection->query($sql)) {
        echo "Berhasil menghapus data";
    } else {
        echo "Gagal menghapus data";
    }
}
