<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h1 style="text-align: center;">Aplikasi Penilaian Mahasiswa</h1>
    <form method="POST">
    <hr>
    <table>
    <tr>
        <td>Masukan nilai mata kuliah pertama :</td>
        <td><input type="number" name="nilai1"></td>
    </tr>
    <br>
    <tr>
        <td>Masukan nilai mata kuliah kedua :</td>
        <td><input type="number" name="nilai2"></td>
    </tr>
    <br>
    <tr>
        <td>Masukan nilai mata kuliah ketiga :</td>
        <td><input type="number" name="nilai3"></td>
    </tr>
</table>
<button type="submit" name="submit">Submit</button>
</form>
<hr>
<?php
if (isset($_POST['submit'])){
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    $RataRata = ($nilai1 + $nilai2 + $nilai3) / 3;
         if($RataRata >=60){
            $statusKelulusan = "Lulus";
         } else{
        $statusKelulusan = "Tidak Lulus";
         }

    echo "NILAI RATA-RATA : $RataRata";
    echo "STATUS KELULUSAN : $statusKelulusan";
}
?>
</body>
</html>