<!-- connecting to our database -->
<?php

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';

try {
   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
   // the above could have been also written by concatenating things up like as follows
   // $pdo = new PDO("mysql:host=" . $host and so on for the rest too but PHP is now intelligent enough to understand the variables therefore, the above line also works)
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("Connection failed: " . $e->getMessage());
}