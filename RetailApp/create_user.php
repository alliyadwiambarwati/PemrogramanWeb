<?php
include "koneksi.php";
$query = "Select * from users";
$result = $mysqli->query($query);
$cek = $result->num_rows;
if($cek == 0){
   $username = "admin";
   $nama_lengkap = "Administrator web";
   $password = md5('12345');
   $level = "admin";
   $query = "INSERT INTO users (username,nama_lengkap,password,level) values('$username','$nama_lengkap','$password','$level')";
   $mysqli->query($query);
   header( 'location: index.php');
   
}else{
   header('location: index.php');
}
?>