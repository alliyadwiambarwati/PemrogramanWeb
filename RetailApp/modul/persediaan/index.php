<div class="border-bottom d-flex justify-content-between py-3">
    <h4>Data Persediaan</h4>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="bi bi-plus-circle-fill"></i> Tambah Persediaan
    </button>

    <!-- Modal Tambah Persediaan -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Data Persediaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="modul/persediaan/proses.php?aksi=stok-awal" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="barang" class="form-label">Barang</label>
                            <select name="barang" class="form-select" required>
                                <option value="" selected disabled>Pilih Barang</option>
                                <?php
                                $sql_barang = "SELECT * FROM barang WHERE id_barang NOT IN(SELECT id_barang FROM persediaan)";
                                $result_barang = $mysqli->query($sql_barang);
                                while ($row_barang = $result_barang->fetch_assoc()) {
                                ?>
                                    <option value="<?= $row_barang['id_barang']; ?>">
                                        <?= $row_barang['nama_barang']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="stok_awal" class="form-label">Stok Awal</label>
                            <input class="form-control" type="number" name="stok_awal" placeholder="Contoh: 6" required />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi" placeholder="Contoh: Masukan barang baru" required />
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

<!-- Tabel Persediaan -->
<table id="myTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Stok Awal</th>
            <th>Stok Masuk</th>
            <th>Stok Keluar</th>
            <th>Stok Akhir</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql_persediaan = "SELECT * FROM persediaan a INNER JOIN barang b ON a.id_barang = b.id_barang";
        $result_persediaan = $mysqli->query($sql_persediaan);
        $no = 0;
        while ($row_persediaan = $result_persediaan->fetch_assoc()) {
            $no++;
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row_persediaan['nama_barang']; ?></td>
                <td><?= $row_persediaan['stok_awal']; ?></td>
                <td><?= $row_persediaan['stok_masuk']; ?></td>
                <td><?= $row_persediaan['stok_keluar']; ?></td>
                <td><?= $row_persediaan['stok_akhir']; ?></td>
                <td><?= $row_persediaan['deskripsi']; ?></td>
                <td>
                    <!-- Aksi Tambah Stok Masuk -->
                    <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#modalMasuk<?= $row_persediaan['id_persediaan']; ?>">
                         <i class="bi bi-bookmark-plus-fill text-success"></i>
                    </a>

                    <!-- Modal Tambah Stok Masuk -->
                    <div class="modal fade" id="modalMasuk<?= $row_persediaan['id_persediaan']; ?>" tabindex="-1" aria-labelledby="modalMasukLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalMasukLabel">Tambah Stok Masuk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="modul/persediaan/proses.php?aksi=stok-masuk&id=<?= $row_persediaan['id_persediaan']; ?>" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Barang</label>
                                            <input class="form-control bg-secondary-subtle" type="text" value="<?= $row_persediaan['nama_barang']; ?>" readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label for="stok_masuk" class="form-label">Stok Masuk</label>
                                            <input class="form-control" type="number" name="stok_masuk" placeholder="Contoh: 5" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi" placeholder="Contoh: Penambahan barang" required />
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

                    <!-- Aksi Tambah Stok Keluar -->
                    <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#modalKeluar<?= $row_persediaan['id_persediaan']; ?>">
                          <i class="bi bi-file-minus-fill text-danger"></i>
                    </a>

                    <!-- Modal Tambah Stok Keluar -->
                    <div class="modal fade" id="modalKeluar<?= $row_persediaan['id_persediaan']; ?>" tabindex="-1" aria-labelledby="modalKeluarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalKeluarLabel">Stok Keluar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="modul/persediaan/proses.php?aksi=stok-keluar&id=<?= $row_persediaan['id_persediaan']; ?>" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Barang</label>
                                            <input class="form-control bg-secondary-subtle" type="text" value="<?= $row_persediaan['nama_barang']; ?>" readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label for="stok_keluar" class="form-label">Stok Keluar</label>
                                            <input class="form-control" type="number" name="stok_keluar" placeholder="Contoh: 5" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi" placeholder="Contoh: Barang rusak" required />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Proses</button>
                                    </div>
                                </form>
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
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
