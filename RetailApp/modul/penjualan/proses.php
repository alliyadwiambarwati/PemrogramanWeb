<?php
// Cek apakah request adalah POST (artinya data sedang dikirimkan dari form)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form dan ubah ke format array
    $penjualan = json_decode($_POST['penjualan'], true);
    $totalbayar = json_decode($_POST['totalbayar'], true);
    $bayar = json_decode($_POST['bayar'], true);
    $kembalian = $totalbayar - $bayar; // Hitung kembalian

    // Simpan data penjualan ke database
    $sql = "INSERT INTO penjualan (tanggal_penjualan, totalbayar, bayar, kembalian)
           VALUES(NOW(), '$totalbayar', '$bayar', '$kembalian')";
    $mysqli->query($sql);

    // Ambil ID penjualan terakhir
    $sql = "SELECT id_penjualan FROM penjualan ORDER BY id_penjualan DESC LIMIT 1";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    $id_penjualan = $row['id_penjualan'];

    // Simpan detail penjualan (per item)
    foreach ($penjualan as $item) {
        $sql = "INSERT INTO detail_penjualan (id_penjualan, id_barang, jumlah, harga, total_harga)
               VALUES('$id_penjualan', '$item[id_barang]', '$item[jumlah]', '$item[harga]', '$item[total_harga]')";
        $mysqli->query($sql);

        // Update stok barang
        $sql = "SELECT stok_akhir FROM persediaan WHERE id_barang = '$item[id_barang]' ORDER BY id_persediaan DESC LIMIT 1";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();

        $sql = "UPDATE persediaan SET stok_awal = '$row[stok_akhir]', stok_masuk = '0',
               stok_keluar = '$item[jumlah]', stok_akhir = '$row[stok_akhir] - $item[jumlah]',
               deskripsi_persediaan = 'Penjualan' WHERE id_barang = '$item[id_barang]'";
        $mysqli->query($sql);
    }
}
?>