<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan Data Penjualan</title>
</head>
<body>
<h1 style="text-align: center;">Sistem Pencatatan Data Penjualan</h1>
    <form action="" method="post">
     <table>
        <tr>
            <td>Nama</td>
            <td>Harga Per Produk</td>
            <td>Jumlah Terjual</td>
        </tr>
        <tr>
            <td>Produk 1</td>
            <td><input type="text" name="harga_produk1" value="11000"></td>
            <td><input type="number" name="jumlah_terjual1" value="6"></td>
        </tr>
        <tr>
            <td>Produk 2</td>
            <td><input type="number" name="harga_produk2" value="8000"></td>
            <td><input type="number" name="jumlah_terjual2" value="9"></td>
        </tr>
        <tr>
        <td>Produk 3</td>
            <td><input type="number" name="harga_produk3" value="12000"></td>
            <td><input type="number" name="jumlah_terjual3" value="10"></td>
        </tr>
    </table>
    <input type='submit' name='submit' value='kirim'>
</form>

<hr>
<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $harga1 = $_POST['harga_produk1'];
    $jumlah1 = $_POST['jumlah_terjual1'];
    $total1 = $harga1 * $jumlah1;

    $harga2 = $_POST['harga_produk2'];
    $jumlah2 = $_POST['jumlah_terjual2'];
    $total2 = $harga2 * $jumlah2;

    $harga3 = $_POST['harga_produk3'];
    $jumlah3 = $_POST['jumlah_terjual3'];
    $total3 = $harga3 * $jumlah3;

    //
    $total_jumlah = $jumlah1 + $jumlah2 + $jumlah3;
    $total_penjualan = $total1 + $total2 + $total3;
    ?>

   
    <h3>Laporan Penjualan:</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Harga Per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Produk 1</td>
            <td><?php echo $harga1; ?></td>
            <td><?php echo $jumlah1; ?></td>
            <td><?php echo $total1; ?></td>
        </tr>
        <tr>
            <td>Produk 2</td>
            <td><?php echo $harga2; ?></td>
            <td><?php echo $jumlah2; ?></td>
            <td><?php echo $total2; ?></td>
        </tr>
        <tr>
            <td>Produk 3</td>
            <td><?php echo $harga3; ?></td>
            <td><?php echo $jumlah3; ?></td>
            <td><?php echo $total3; ?></td>
        </tr>
        <tr>
            <td colspan="2"><b>Total Penjualan</b></td>
            <td><b><?php echo $total_jumlah; ?></b></td>
            <td><b><?php echo $total_penjualan; ?></b></td>
        </tr>
    </table>
    
    <?php
}
?>
</body>
</html>