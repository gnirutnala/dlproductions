<?php
// this script is referenced by other scripts

$DB_HOST = 'pdb6.biz.nf';
$DB_NAME = '1908316_sessions';
$DB_USER = '1908316_sessions';
$DB_PASS = 'animal5a5leader5';
//$DB_PORT = '3306';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_error) {
   die("connection failed: " . $mysqli->connect_error);
}
//echo "connection is successful<br>";

// If you have to use a specific port, add an empty string for the database-name
// argument, like this: new mysqli("localhost", "username", "password", "", port)
?>
