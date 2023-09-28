<?php 

$db_server = "localhost";
$db_user = "root";
$db_pass = "password";
$db_name = "CareerDB";
$conn ="";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>
