<?php
include('db.php');
define( 'APP_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].'/task-one/' );
define( 'APP_ROOT_PATH', 'http://'.$_SERVER["SERVER_NAME"].'/task-one/' );

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['image']['name'])) {
	$total_files=$_FILES['image']['name'];
	$target_dir = APP_ROOT_DIR."images/";
	$imageFileType = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
	$stored_file_name = 'user-pic-'.time().'.'.$imageFileType;
	$tmp_name = $_FILES["image"]["tmp_name"];
	$target_file = $target_dir . $stored_file_name;
	if(move_uploaded_file($tmp_name, $target_file)){
		$img_file_path = APP_ROOT_PATH."images/".$stored_file_name;
		$sql = "INSERT INTO `users` (
			`name`, 
			`email`,
			`image`
		) VALUES (
			'" . $_POST['name'] . "',
			'" . $_POST['email'] . "',
			'" . $img_file_path . "'
		)";
		$queryResult = $conn->query($sql);
		if($queryResult === true) {
			print("yes");
		} else {
			print("no");
		}
	}
}
?>