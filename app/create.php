<?php
function addData($connection, $name, $point)
{
    $sql = "INSERT INTO users (name, point) values ('$name',$point)";
    if ($connection->query($sql)) {
        echo "Berhasil tambah data";
    } else {
        echo "Gagal tambah data";
    }
}
