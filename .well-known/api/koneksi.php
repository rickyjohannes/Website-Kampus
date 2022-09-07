<?php
$servername = "localhost";
$database = "cybertec_ibadah";
$username = "cybertec_admin";
$password = "Administrator!1234";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>