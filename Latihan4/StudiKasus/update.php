<?php
include "KoneksiSql.php";

//fungsi update
$id = $_POST['id'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah_terjual = $_POST['jumlah_terjual'];
$total_terjual = $harga * $jumlah_terjual;

$query = "UPDATE Laporan_Penjualan SET tanggal_penjualan = '$tanggal_penjualan', nama_produk = '$nama_produk', harga = '$harga', jumlah_terjual = '$jumlah_terjual', total_penjualan = '$total_penjualan' WHERE id = $id";
$mysqli->query($query);
echo"Data Berhasil Diperbarui";
header("location: select.php");

?>