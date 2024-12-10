<?php
$mysqli = new mysqli("localhost", "root", "", "mahasiswa2");
if($mysqli->connect_error) {
    die("Koneksi gagal: " .$mysqli->connect_error);
}
?>