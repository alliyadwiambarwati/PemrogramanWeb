<?php 
include "KoneksiSql.php";

//fungsi insert (tambah data)
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah_terjual = $_POST['jumlah_terjual'];
$total_terjual = $harga * $jumlah_terjual;

$query = "INSERT INTO Laporan_Penjualan (tanggal_penjualan, nama_produk, harga, jumlah_terjual, total_terjual) VALUES ('$tanggal_penjualan',
'$nama_produk', '$harga', '$jumlah_terjual', '$total_terjual', )";
$mysqli->query($query);
echo "Data Berhasil ditambahkan";
header("Location: select.php");
?>