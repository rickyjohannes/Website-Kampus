<?php
include "koneksi.php";

$u = $_GET['username'];
$p = $_GET['password'];


$respon = array();
$proses = mysqli_query($connect,"INSERT INTO pengguna (`username`, `password`) VALUES ('$u','$p')");
if($proses){
    $respon["kete"]=1;
    $respon["pesan"]="Insert Success Bro";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Insert Failed Bro";
}
echo json_encode($respon);
?>