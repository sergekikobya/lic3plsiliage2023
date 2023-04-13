<?php

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'exephp';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

// Defining base url
define("APPLI_URL", "http://localhost:8888/lic3plsiliage2023");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}
?>