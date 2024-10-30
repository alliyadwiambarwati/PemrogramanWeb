<?php
$mysqli = new mysqli("localhost", "root", "",
"Mahasiswa");

 if ($mysqli->connect_error) {
 die("Koneksi gagal: " . $mysqli->connect_error);
 } else {
 echo "Koneksi ke database berhasil!!";
 }
 
 $query = "select * from Mahasiswa";
 $result = $mysqli -> query($query);
 while ($row = $result -> fetch_assoc()){
    echo $row['id'];
    echo $row['nama'];
 }