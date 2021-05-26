<?php 
// koneksi database
include 'conn.php';
ini_set('date.timezone', 'Asia/Jakarta');
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
 
// menginput data ke database
mysqli_query($conn,"insert into rsvp values('','$email','$name','$msg','$created_at','$updated_at')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>