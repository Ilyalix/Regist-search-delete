<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    
}

table, td, th {
    border: 1px solid black;
 }

th {text-align: left;}

</style>
</head>
<body>

<?php

$link = mysqli_connect('localhost', 'root', '12345','test') or die('error connect: ' . mysqli_error());

echo 'OK connect';

mysqli_select_db($link,'test') or die('Не удалось выбрать базу данных');

$query = "SELECT * FROM login";
$result = mysqli_query($link,$query) or die('Запрос не удался: ');

echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$row["ID"]. "</td>";
	echo "<td>".$row["Name"]. "</td>";
	echo "<td>".$row["Phone"]. "</td>";
	echo "<td>".$row["Email"]. "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($link);

?>
</body>
</html>
