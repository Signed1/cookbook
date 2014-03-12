<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
?>


<html>
<head>
	<title>
		Web Engineering!
	</title>
</head>

<body>
<?php
	echo 'You User name is: '.$user.' and your password asfadis: '.$pass.'';
?>
	<form action="index.php" method="POST">
		User: <input type="text" name="user" />
		Password: <input type="password" name="pass" />
		<input type="submit" name="login!" />
	</form>
</body>

</html>