<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "imageform";

$conn=mysqli_connect($host,$userName,$password,$dbName);
// mysqli_select_db($conn,$dbName);
// Check connection
if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

// echo"Connection Successful.";
?>