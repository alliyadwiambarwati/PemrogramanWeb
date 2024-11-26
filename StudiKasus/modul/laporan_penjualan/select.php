
<?php
// include '../../KoneksiSql.php';
?>
<div class="row">
    <div class="col">
        <h1>Laporan Penjualan</h1>
    </div>
    <div class="col text-end">
        <a class="btn btn-primary" href="?modul=FormTambah">Tambah Laporan Baru</a>
</div>
</div>
    <br>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>Tanggal Penjualan</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Total Terjual</th>
            <th>Aksi</th>
        </tr>
    

<?php
$query = "SELECT * FROM laporan_penjualan order by id ASC";
        $result = $mysqli-> query($query);
        $cek_data = $result->num_rows;
        $no = 0;
        if($cek_data == 0){
        ?>
        <tr>
            <td colspan="5">Tidak ada data</td>
        </tr>
        <?php
        }else{
        while ($row = $result->fetch_assoc()) {
            $no++;
        ?>
        <tr>
          <td><?=$no?></td>
          <td><?= $row['tanggal_penjualan'] ?></td>
          <td><?= $row['nama_produk'] ?></td>
          <td><?= $row['harga'] ?></td>
          <td><?= $row['jumlah_terjual'] ?></td>
          <td><?= $row['total_terjual'] ?></td>
          <td>
               <a href="<?= '?modul=EditLaporan&id='.$row['id'];?>">Edit</a>
            |
            <a data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id'];?>" href="#">Hapus</a>
             <!-- Modal -->
             <div class="modal fade" id="hapusModal<?= $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan menghapus data <?= $row['nama_produk'];?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a c;ass="btn btn-primary" href="<?= 'modul/laporan_penjualan/proses.php?action=delete&id='.$row['id'];?>">Yakin</a>
            </div>
            </div>
            </div>
            </div>
          </td>
        </tr>
        <?php
    }
    }
?> 
</table>