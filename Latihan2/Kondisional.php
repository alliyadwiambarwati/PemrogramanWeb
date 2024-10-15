// pernyataan if

<?php
$nilai = 75;
 if($nilai >= 70){
    echo "Lulus ujian";
 }
 ?>



 //pernyataan Else

 <?php
 $nilai = 60;
  if($nilai >= 70){
    echo "Lulus ujian";
  } else {
    echo "Tidak lulus ujian";
  }
  ?>



  //pernyataan Elself

  <?php
   $nilai = 60;
    if ($nilai >= 70) {
    echo "Lulus ujian dengan baik.";
    } elseif ($nilai >= 60) {
    echo "Lulus ujian dengan cukup.";
    } else {
    echo "Tidak lulus ujian.";
    }
  ?>



   //pernyataan switch
   
   <?php
   $hari = "senin";
    switch ($hari){
        case "senin":
            echo "Hari ini adalah senin";
            break;
        case "selasa":
            echo "Hari ini adalah selasa";
            break;
        default:
        echo "Hari ini bukan senin atau selasa";
    }
    ?>