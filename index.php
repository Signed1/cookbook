<html>
<head>
	<title>
		Web Engineering!
	</title>
</head>

<body>
<?php
$username='root';
$password='';
$database='cookbook';
$host='127.0.0.1';

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else {
	echo 'Connected with: ' . $mysqli->host_info . '<br />';
}

$recipes = $mysqli->query("SELECT * FROM recipe ORDER BY recipeid");

echo 'All the recipes:<br />';

echo '<table><tr><th>RECIPEID</th><th>DESCRIPTION</th><th>PICTURE</th>
	<th>DEGREE</th><th>DURATION</th><th>TITLE</th><th>AUTHOR</th><th>NOTE</th><tr>';
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