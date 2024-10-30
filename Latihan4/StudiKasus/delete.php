<?php
include 'KoneksiSql.php';

//fungsi delete

$query = "DELETE FROM Laporan_penjualan WHERE id = $id";
$mysqli->query($query);
echo "Data Berhasil Dihapus";
header("location:select.php");

?>