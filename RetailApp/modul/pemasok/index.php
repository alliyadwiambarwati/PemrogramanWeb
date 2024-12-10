<div class="border-bottom d-flex justify-content-between py-3">
    <h4>Data Pemasok</h4>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus-circle-fill"></i>Tambah Pemasok</button>
    <!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pemasok</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="modul/pemasok/proses.php?aksi=tambah" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                                <label for="namapemasok" class="form-label">Nama Pemasok</label>
                                <input type="text" class="form-control" name="namapemasok" placeholder="Masukkan nama pemasok" required>
                        </div>
                        <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" required>
                        </div>
                        <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telepon" placeholder="Masukkan telepon" required>
                        </div>
                        <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                               <select name="status" class="form-select">
                                <option value="" selected disabled>Pilih Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                               </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>
<table id="myTable">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Pemasok</th>
            <th>Alamat</th>
            <Th>Telepon</Th>
            <th>Status</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $sql_pemasok = "SELECT * FROM pemasok ORDER BY id_pemasok ASC";
        $result_pemasok = $mysqli->query($sql_pemasok);
        $no = 0;
        while($row_pemasok = $result_pemasok->fetch_assoc()){
            $no++;
        ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row_pemasok['nama_pemasok']; ?></td>
            <td><?= $row_pemasok['alamat']; ?></td>
            <td><?= $row_pemasok['telepon']; ?></td>
            <td><span class="badge <?=$row_pemasok['status']== 1?'text-bg-success':'text-bg-danger'; ?>" ><?= $row_pemasok['status'] == 1? 'aktif':'tidak aktif'; ?></span></td>
            <td>
               <a href="" data-bs-toggle="modal" data-bs-target="#modalEdit<?$row_pemasok['id_pemasok'];?>" class="text-info"><i class="bi bi-pencil-square"></i></a>
               <div class="modal fade" id="modalEdit<?$row_pemasok['id_pemasok'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pmeasok</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                        </div>

                    </div>
               </div>
            </td>
        </tr>
        <?php
          }
          ?>
    </tbody>
</table>
<script>
 $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>