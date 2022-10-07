<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "web01";

$conn = new mysqli($hostname, $username, $password,$database);

if($conn->connect_error){
    die(" gagal conect ".mysqli_connect_error());

}
else {
    echo " data conect ";

}
?>