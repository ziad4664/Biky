<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";
$conn = mysqli_connect($servername,$username,$password,$db_name);

if(mysqli_connect_errno()) {
die("connection failed".mysqli_connect_error());
}
?>
