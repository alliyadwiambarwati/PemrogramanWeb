<?php
$query = "select * from Mahasiswa";
$result = $mysqli -> query($query);
while ($row = $result -> fetch_assoc()){
   echo $row['id'];
   echo $row['nama'];
}
?>