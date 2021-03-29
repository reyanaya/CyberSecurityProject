<?php
$host = "127.0.0.1";
$user = "test";
$pass = "Passw0rd!";
$db = "storedb";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
     $pdo = new PDO($dsn, $user, $pass);
	//echo "connection established";
} catch (PDOException $e) {
	echo "connection failed" . $e->getMessage();
}
?>
