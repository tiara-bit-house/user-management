<?php

require_once 'database.php';

$sql = "INSERT INTO users (name, point) values ('John', 20)";
if ($connection->query($sql)) {
    echo "Berhasil tambah data";
} else {
    echo "Gagal tambah data";
}
