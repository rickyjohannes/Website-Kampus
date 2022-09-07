<?php
include "koneksi.php";

$id_g = $_GET['id_g'];
$nama_gereja = $_GET['nama_gereja'];
$alamat_lengkap = $_GET['alamat_lengkap'];
$kota = $_GET['kota'];


$respon = array();
$proses = mysqli_query($connect,"INSERT INTO gereja VALUES ('$id_g','$nama_gereja','$alamat_lengkap','$kota')");
if($proses){
    $respon["kete"]=1;
    $respon["pesan"]="Insert Success Bro";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Insert Failed Bro";
}
echo json_encode($respon);
?>