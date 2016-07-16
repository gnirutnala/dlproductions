<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SQL Test</title>
</head>
<body>

<p>
  test
</p>

<?php
$servername = "pdb6.biz.nf";
$username = "1908316_feb";
$password = "in5talll1nux";
$dbname = "1908316_feb";


//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, 3306);

//check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully!";


//insert data into table
$sql = "INSERT INTO appointments (date, weekday, time)
VALUES (1, 'monday', '08:00')";

if (mysqli_query ($conn, $sql)) {
  echo "New record created";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//insert data
$sql = "INSERT INTO appointments (date, weekday, time)
VALUES (2, 'Tuesday', '08:00')";

if (mysqli_query ($conn, $sql)) {
  echo "New record created";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close connection
mysqli_close($conn);


//query table
$sql = "SELECT * FROM appointments";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  //output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["weekday"]. " " .
$row["hora"]. "<br>";
  }
}
else {
  echo "0 results";
}

?>


</body>
</html>
