<?php
// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'l1ig2022';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $excepiton->getMessage();
}
?>