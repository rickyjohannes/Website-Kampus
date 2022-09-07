<?php
include "koneksi.php";
$cari = $_GET['cari'];
$respon = array();
$proses = mysqli_query($connect,"DELETE FROM `pengguna` WHERE `username`='$cari'");
if($proses){
    $respon["kete"]=1;
    $respon["pesan"]="Delete Success Bro";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Delete Failed Bro";
}
echo json_encode($respon);
?>