<?php
include_once('db.php');
$name = $_POST['name'];
$img = $_POST['img'];

echo "Ji";
$conn = new mysqli('localhost','root','', 'imageform');
if ($conn-> connet_error){
	die ('Connection Failed :' $conn-> connect_error);
}
else{
$stmt = $conn-> prepare("insert into registration(name, img) values(?, ?)");
$stmt -> bind_param("sb", $name,$img);
$stmt -> execute();
echo "registration successfully";
$stmt -> close();
<!-- $conn-> close(); -->
 }
?>

