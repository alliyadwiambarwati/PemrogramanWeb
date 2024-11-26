<?php
$query = "SELECT * from laporan_penjualan where id =$_GET[id]";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<h4>Form Edit Data Penjualan</h4>
<hr>
<form action="<?= 'modul/penjualan/proses.php?action=update&id='.$_GET['id'];?>" method="post">
    <label for="tanggal_penjualan">Tanggal Penjualan</label>
        <input type="date" class="form-control" name="tanggal_penjualan" value="<?= $row['tanggal_penjualan'];?>"><br>
    <label for="nama_produk">Nama Produk:</label>
        <input type="text" class="form-control" name="nama_produk" value="<?= $row['nama_produk']; ?>"><br>
    <label for="harga">Harga:</label>
        <input type="number" class="form-control" name="harga" value="<?= $row['harga']; ?>"><br>
    <label for="jumlah_terjual">Jumlah Terjual:</label>
        <input type="number" class="form-control" name="jumlah_terjual" value="<?= $row['jumlah_terjual']; ?>"><br>
    

   <br>
   <input type="submit" class="btn btn-primary" value="Update" />
</form>