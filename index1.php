<?php

require_once 'app/database.php';
require_once 'app/read.php';
require_once 'app/create.php';
require_once 'app/update.php';
require_once 'app/delete.php';

do {
    $exit = 'n';

    echo "-----------------\n";
    echo "1. Read data\n";
    echo "2. Create data\n";
    echo "3. Update data\n";
    echo "4. Delete data";
    echo "\n-----------------\n";

    $choice = (int)readline("> Masukkan pilihan anda : ");

    switch ($choice) {
        case 1:
            readData($connection);
            break;
        case 2:
            $name = readline("\n> Masukkan nama : ");
            $point = (int)readline("\n> Masukkan point : ");

            addData($connection, $name, $point);
            break;
        case 3:
            $user_id = readline("> Masukkan ID yang akan diupdate: ");
            echo "\n";
            $name = readline("> Masukkan nama : ");
            echo "\n";
            $point = (int)readline("> Masukkan point : ");
            echo "\n";

            updateData($connection, $name, $point, $user_id);
            break;
        case 4:
            $user_id = readline("\n> Masukkan ID yang akan dihapus : ");

            deleteData($connection, $user_id);
            break;
        default:
            echo "Tidak ada dalam menu!";
    }

    $exit = readline("\n> Exit dari sistem ? (y/n) : ");
} while ($exit !== 'y');
$connection->close();
