<?php

$servername = "localhost";
$username = "root";
$password = "BirthDayApp";
$dbname = "SONGS";

$mysqli = new mysqli($servername, $username, $password, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT User, Message FROM Songs";
$result = $mysqli->query($query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}
$filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

foreach($rows as $row)
{
echo $row['User'];
echo ",\t";
echo $row['Message'];
echo ",\n";

}

/* free result set */
$result->close();

/* close connection */
$mysqli->close();
?>
