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
?>