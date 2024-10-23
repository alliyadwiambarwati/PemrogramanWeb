<?php 
function tambah ($a,$b){
    $hasil = $a + $b;
    echo "Hasil Penjumlahan : $hasil";
}
tambah (9, 4);
echo "<br>";
tambah (60, 30);
echo "<hr>";
function kali ($b, $c){
    $hasil_kali = $b * $c;
    return $hasil_kali;
    

}
$perkalian = kali(9, 5);
echo "Hasil Perkalian : $perkalian";
?>