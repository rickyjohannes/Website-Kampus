<?php
include "koneksi.php";
$cari = $_GET['cari'];
$respon = array();
$proses = mysqli_query($connect,"SELECT * FROM `gereja` WHERE kota='$cari'");
if(mysqli_num_rows($proses)>0){
    $respon["var"] = array();
    while($baris = mysqli_fetch_array($proses)){
        $item = array();
        $item["nama_gereja"]   =$baris["nama_gereja"];
        $item["alamat_lengkap"]   =$baris["alamat_lengkap"];
        array_push($respon["var"],$item);
    }
    $respon["kete"]=1;
    $respon["pesan"]="Data DPO yang dicari ada";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Data DPO yang dicari tidak ada";
}
echo json_encode($respon);
?>