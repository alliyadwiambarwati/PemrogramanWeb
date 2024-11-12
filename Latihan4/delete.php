<?php
include "koneksi.php";

//fungsi delete
$query = "DELETE FROM biodata WHERE id = $id";
$mysqli->query($query);
echo "Data Berhasil Dihapus";
header ('location: select.php');
?>