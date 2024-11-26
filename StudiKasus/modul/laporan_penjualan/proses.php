<?php
include "../../KoneksiSql.php";
if($_GET['action']=="insert"){
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
 $total_terjual =$_POST['total_terjual'];
    $query = "INSERT INTO laporan_penjualan (tanggal_penjualan, nama_produk, harga, jumlah_terjual, total_terjual) VALUES('$tanggal_penjualan', '$nama_produk', '$harga', '$jumlah_terjual', '$total_terjual')";
    $mysqli->query($query);
    header ('location:../../select.php?modul=laporan_penjualan');
    
}elseif ($_GET['action']=="update") {
    $id = $_GET['id'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $total_terjual = $_POST['total_terjual'];
    $query = "UPDATE laporan_penjualan SET tanggal_penjualan = '$tanggal_penjualan', nama_produk='$nama_produk', harga='$harga', jumlah_terjual='$jumlah_terjual', total_terjual='$total_terjual' WHERE id = '$id'";
    $mysqli->query($query);
    header ('location:../../select.php?modul=laporan_penjualan');

}elseif ($_GET['action']=="delete") {
    $query = "DELETE FROM laporan_penjualan WHERE id = '$_GET[id]'";
    $mysqli->query($query);
    ('location:../../select.php?modul=laporan_penjualan');
}else{
    header ('location:../../select.php');
}
?>