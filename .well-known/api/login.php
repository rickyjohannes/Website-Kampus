<?php
include "koneksi.php";
$username = $_GET['username'];
$password = $_GET['password'];
$respon = array();
$proses = mysqli_query($connect,"SELECT * FROM `pengguna` WHERE username='$username' 
AND password='$password'");
if(mysqli_num_rows($proses)>0){
    $respon["var"] = array();
    while($baris = mysqli_fetch_array($proses)){
        $item = array();
        $item["username"]   =$baris["username"];
        $item["password"]   =$baris["password"];
        array_push($respon["var"],$item);
    }
    $respon["kete"]=1;
    $respon["pesan"]="Login Succesfully";
}else{
    $respon["kete"]=0;
    $respon["pesan"]="Login Failed";
}
echo json_encode($respon);
?>