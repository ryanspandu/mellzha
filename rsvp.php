<?php 
// koneksi database
include 'conn.php';
ini_set('date.timezone', 'Asia/Jakarta');

function randomStr($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return strtoupper($randomString);
}
 
$id= date('Ymdhis').randomStr();
$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');


$query = mysqli_query($conn, "INSERT INTO rsvp VALUES ('$id','$email','$name','$msg','$created_at','$updated_at')");
if ($query) {
    header("location:index.php");
} else{ 
    echo mysqli_error($conn);

}
 
?>