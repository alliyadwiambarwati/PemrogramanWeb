<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include "koneksi.php";
?>
<body>
    <table border="1">
        <h3>Biodata</h3>
        <a href="formtambah.php">Tambah Mahasiswa</a>
        <tr>
            <th>No</th>
            <th>Npm</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM biodata order by npm ASC";
        $result = $mysqli-> query($query);
        $no = 0;
        while ($row = $result->fetch_assoc()) {
        $no++

           ?> 
           <tr>
               <td><?php echo $no ?></td>
               <td><?php echo $row['npm']; ?></td>
               <td><?php echo $row['nama']; ?></td>
               <td><?php echo $row['prodi']; ?></td>
               <td>
                <a href="<?php='FormEdit.php?id='.$row['id'];?>">Edit</a>
                <br>
                <a href="<?php='delete.php?id='.$row['id'];?>">Hapus</a>
               </td>
           </tr> 
           <?php   
        }
        ?>
    </table>
    
</body>
</html>