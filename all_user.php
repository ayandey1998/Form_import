
<?php
include("db.php");
$result = mysqli_query($conn,"SELECT * FROM imageform");
?>

<!DOCTYPE html>
<html>

<head>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<h2>All User</h2>
	<table border='1'>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>image</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php print($row['id']) ?></td>
				<td><?php print($row['name']) ?></td>
				<td><?php print($row['email']) ?></td>
				<td>
					<img src='<?php print($row['image']) ?>' width='100'>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>

