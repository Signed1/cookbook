<html>
<head>
	<title>
		Web Engineering!
	</title>
</head>

<body>
<?php
require_once('db_connect.php');

$recipes = $mysqli->query("SELECT * FROM recipe ORDER BY recipeid");

echo 'All the recipes:<br />';

echo '<table><tr><th>RECIPEID</th><th>DESCRIPTION</th><th>PICTURE</th><th>DEGREE</th><th>DURATION</th><th>TITLE</th><th>AUTHOR</th><th>NOTE</th><tr>';
while($row = mysqli_fetch_array($recipes)){
	echo '
	<tr>
	<td>'.$row['RECIPEID'].'</td>
	<td>'.$row['DESCRIPTION'].'</td>
	<td>'.$row['PICTURE'].'</td>
	<td>'.$row['DEGREE'].'</td>
	<td>'.$row['DURATION'].'</td>
	<td>'.$row['TITLE'].'</td>
	<td>'.$row['AUTHOR'].'</td>
	<td>'.$row['NOTE'].'</td>
	</tr>
	';
}
echo '</table>';

?>





</body>

</html>