<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <h2>Add User</h2>
  <form method="POST" action="add-user.php" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" name="name">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email">
    <br>
    <label for="image">Image</label>
    <input type="file" name="image">
    <br>
    <input type="submit" name="upload" value="Upload">
  </form>
  <br>
  <a href="all_user.php">All User</a>
</body>

</html>