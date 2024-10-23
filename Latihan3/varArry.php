<?php 
$buah = array("pisang","apel","semangka","pepaya","durian","mangga","jeruk","duku");
// memanggil semua
foreach ($buah as $buah){
    echo $buah. '<br>';
}
echo "<hr/>";

$siswa = array("nama" => "Alliya Dwi", "umur" => "19", "kota" => "kuala", "jurusan" => "sistem informasi");
 echo 'nama siswa :'.$siswa['nama'].'<br/>';
 echo ' umur siswa :'.$siswa['umur'].'<br/>';
 echo 'kota siswa :'.$siswa['kota'].'<br/>';
 echo ' jurusan siswa :'.$siswa['jurusan'].'<br/>';
?>
<table border="2">
<tr>
    <td>Nama siswa</td>
    <td>Umur siswa</td>
    <td>kota siswa</td>
    <td>jurusan siswa</td>
</tr>
<tr>
    <td><?=$siswa['nama'];?></td>
    <td><?=$siswa['umur'];?></td>
    <td><?=$siswa['kota'];?></td>
    <td><?=$siswa['jurusan'];?></td>
</tr>
</table>
<hr>
<?php
$nilai = array(
     array(90, 85, 88),
     array(78, 92, 87),
     array(65, 70, 75)
     );
     echo $nilai[0][2];
?>