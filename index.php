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
$host="localhost";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( mysql_error());
?>



</body>

</html>