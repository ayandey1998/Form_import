<?php
include('db.php');

  if (isset($_POST['upload'])) {
  	$image = $_FILES['myimage']['name'];
  	$image_text = $_POST['image_text'];
  	// echo $image_text;

  	// image file directory
  	$target = "image/".$image_text;
  	$sql = "INSERT INTO imageform set image='".$image."',image_text='".$image_text."'";
  	// execute query
  	 $result= $conn->query($sql);
  

  if (move_uploaded_file($_FILES['myimage']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  }else{
  		$msg = "Failed to upload image";
  	}
  }

  
?>

