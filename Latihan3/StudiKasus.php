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
             <td for="produk"><b>Nama Produk :</b></td>
              <td><input type="text" name="produk"></td>
        </tr>
        <tr>
             <td for="harga"><b>Harga perProduk :</b></td>
             <td><input type="number" name="harga"></td>
        </tr>
        <tr>
             <td for="jumlah"><b>Jumlah Terjual :</b></td>
             <td><input type="number" name="jumlah"></td>
        </tr>
      </table>
     <button type="submit" name="submit">Submit</button>
     <button type="reset" name="cancel">Cancel</button>
    </form>

    <hr>

<?php 
if (isset($_POST['submit'])){
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

        //hitung total penjualan per produk
        $total = $harga * $jumlah;

        //data penjualan dalam array asosiatif
    $penjualan = array( 
       "Produk" => $produk,
        "Harga" => $harga,
        "Jumlah Terjual" => $jumlah,
        "Total" => $total
    );

    echo "<h3>Laporan Penjualan</3>";
    echo "<table border = '1'>
    <tr>
        <td>Nama Produk </td>
        <td>Harga perProduk </td>
        <td>Jumlah Terjual </td>
        <td>Total </td>
    </tr>
    <tr> 
        <td>{$penjualan['Produk']}</td>
        <td>{$penjualan['harga perProduk']}</td>
        <td>{$penjualan['Jumlah Terjual']}</td>
        <td>{$penjualan['Total']}</td>
    </tr>
    </table>";
} else {
    echo "Tidak ada data yang dimasukkan!";
}
?>
</body>
</html>