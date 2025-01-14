<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../../koneksi.php"; // Pastikan file koneksi sudah benar

    // Ambil data dari form
    $namapemasok = $_POST['namapemasok'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $status = $_POST['status'];
    $aksi = $_GET['aksi'];

    // Validasi aksi
    if ($aksi == "tambah") {
        $query = "INSERT INTO pemasok (nama_pemasok, alamat, telepon, status) VALUES ('$namapemasok', '$alamat', '$telepon', '$status')";
    } elseif ($aksi == "edit") {
        $id = $_GET['id'];
        $query = "UPDATE pemasok SET nama_pemasok = '$namapemasok', alamat = '$alamat', telepon = '$telepon', status = '$status' WHERE id_pemasok = '$id'";
    } elseif ($aksi == "hapus") {
        $id = $_GET['id'];
        $query = "DELETE FROM pemasok WHERE id_pemasok = '$id'";
    } else {
        die("Aksi tidak valid.");
    }

    // Jalankan query
    if ($mysqli->query($query)) {
        echo "Proses berhasil.";
    } else {
        echo "Error: " . $mysqli->error;
    }
}

// Redirect ke halaman dashboard
header('Location: ../../dashboard.php?modul=pemasok');
exit();
?>
