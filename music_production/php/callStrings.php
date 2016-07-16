<?php

require_once '../includes/strings.php';

require_once '../includes/db.php';

echo "\n I made it to line 9";

// specify prepared statement
$prepStatement = $mysqli->prepare("INSERT INTO tasks (task, status, created_at) VALUES (?, ?, ?)");
if ($prepStatement === FALSE) {
    die($mysqli->error);
}

echo "\n I made it to line 12";

$prepStatement->bind_param("sii", $task, $status, $created_at);

// $index is used to iterate through $afterJoin
$index = 0;
// populate a 1-table database while iterating through $afterJoin
foreach ($afterJoin as $element) {
   $task  = $afterJoin[$index];
   $status = 0;
   $created_at = time();
   $prepStatement->execute();
   $index++;
}

//$mysqli->close();
?>
