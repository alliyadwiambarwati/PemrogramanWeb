<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>
<h1 style="text-align: center;">Kalkulator Sederhana</h1>
<form method="POST"  action="">
<table>
<tr>
    <td>Masukan Bilangan Pertama :</td>
    <td><input type="number" name="bil1"></td>
</tr>
<tr>
    <td>Masukan Bilangan Kedua :</td>
    <td><input type="number" name="bil2"></td>
</tr>
<tr>
    <td><h3>Pilih Operasi :</h3></td>
    <td>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
    </td>
</tr>
</table>
<tr>
<button type="submit" name="submit">Submit</button>
</tr>
</form>
<hr>
<?php 
if (isset($_POST ['submit'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];

    switch($operasi) {
        case "tambah":
            $hasil = $bil1 + $bil2;
            break;
        case "kurang":
            $hasil = $bil1 - $bil2;
             break;
        case "kali":
            $hasil = $bil1 * $bil2;
             break;
        case "bagi":
            $hasil = $bil1 / $bil2;
             break;
    }

    echo "HASIL PERHITUNGAN :  $hasil";
}
?>
</body>
</html>