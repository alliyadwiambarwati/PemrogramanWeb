<?php
//membuat koneksi
$mysqli = new mysqli("localhost", "root", "",
"DataPenjualan");
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
    } else {
    echo "Koneksi ke database berhasil!!";
    }
    ?>