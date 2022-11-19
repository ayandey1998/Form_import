
<?php
include("db.php");

$result = mysqli_query($conn,"SELECT * FROM imageform");

echo "<table border='1'>
<tr>
<th>id</th>
<th>image_text</th>
<th>image</th>
<th>time</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['image_text'] . "</td>";
echo "<td>" . $row['image'] . "</td>";
echo "<td>" . $row['Time'] . "</td>";

echo "<td><img src='./image/".$row['image_text']."' width='100'></td>";

echo "</tr>";
}
echo "</table>";


?>

