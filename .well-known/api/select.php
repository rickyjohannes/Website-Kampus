<?php
include "koneksi.php";
$cari = $_GET['cari'];
$respon = array();
$proses = mysqli_query($connect,"SELECT * FROM `pengguna` WHERE username='$cari'");
if(mysqli_num_rows($proses)>0){
    $respon["var"] = array();
    while($baris = mysqli_fetch_array($proses)){
        $item = array();
        $item["username"]   =$baris["username"];
        $item["password"]   =$baris["password"];
        $item["jabatan"]    =$baris["jabatan"];
        array_push($respon["var"],$item);
    }
    $respon["kete"]=1;
    $respon["pesan"]="Data yang dicari ada";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Data yang dicari tidak ada";
}
echo json_encode($respon);
?>