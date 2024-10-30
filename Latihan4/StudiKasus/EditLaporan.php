<?php
include 'KoneksiSql.php';

$id = $_GET['id'];
$query = "SELECT * FROM Laporan_penjualan WHERE id = $id";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_laporan</title>
</head>
<body>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Tanggal Penjualan</label>:<input type="date" name="tanggal_penjualan" value="<?php echo $row['tanggal_penjualan']; ?>"><br>
    <label>Nama Produk:</label><input type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>"><br>
    <label>Harga:</label><input type="number" name="harga" value="<?php echo $row['harga']; ?>"><br>
    <label>Jumlah Terjual:</label><input type="number" name="jumlah_terjual" value="<?php echo $row['jumlah_terjual']; ?>"><br>
    <button type="submit">Update Laporan</button>
</form>
</body>
</html>