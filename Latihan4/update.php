<?php
include "koneksi.php";

//fungsi update(memperbarui)
$id = $_GET['id'];
$npm = $_GET['npm'];
$nama = $_GET['nama'];
$query = "UPDATE biodata SET npm = '$npm', nama = '$nama' WHERE id='$id'";
 $mysqli->query($query);
 header ('location: select.php');
 ?>