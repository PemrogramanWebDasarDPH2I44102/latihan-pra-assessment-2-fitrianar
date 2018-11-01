<?php
$host_name = "localhost";
$user = "root";
$pass = "";
$database = "pos";

$conn = mysqli_connect($host_name, $user, $pass, $database);
if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>