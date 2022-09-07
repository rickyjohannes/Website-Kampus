<?php
include "koneksi.php";

$u = $_GET['username'];
$p = $_GET['password'];
$j = $_GET['jabatan'];

$respon = array();
$proses = mysqli_query($connect,"UPDATE `pengguna` SET 
`password`='$p',`jabatan`='$j' WHERE `username`='$u' ");

if($proses){
    $respon["kete"]=1;
    $respon["pesan"]="Update Success Bro";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Update Failed Bro";
}
echo json_encode($respon);
?>