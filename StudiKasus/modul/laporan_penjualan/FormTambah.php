<h4>Form Input Data Penjualan</h4>
<hr>
<form action="modul/laporan_penjualan/proses.php?action=insert" method="POST">
 <label for="tanggal_penjualan">Tanggal Penjualan</label>
     <input type="date" class="form-control" name="tanggal_penjualan" id="tanggal_penjualan" required max="<?=date('Y-m-d');?>)"><br>

<label for="nama_produk"> Nama Produk </label>
    <input type="text" class="form-control" name="nama_produk" id="nama_produk" required><br>

<label for="harga"> Harga </label>
    <input type="number" class="form-control" name="harga" id="harga" required><br>

 <label for="jumlah_terjual">Jumlah Terjual</label>
     <input type="number" class="form-control" name="jumlah_terjual" id"jumlah_terjual" required min="0"><br>


<br>
    <input type="submit" class="btn btn-primary" value="Simpan">
</form>



