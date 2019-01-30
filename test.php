<!-- if email in DB, return DB where email -->


<?php
// POST or not
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Proper headers
header('Content-Type: application/x-www-form-urlencoded');

// ServerInfo
$servername = "localhost";
$username = "root";
$password = "BirthDayApp";
$dbname = "SONGS";

// define input variables
$TitleP = $AuthorP = $UrlP = $MessageP = $UserP = $EmailP = "";
// input test function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
if (empty($_POST["Title1"])) {}else{
$TitleP = test_input($_POST["Title1"]);}
if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$TitleP'")){
    echo mysqli_num_rows("rows "+$result);
if (mysqli_num_rows($result) > 0)
{
}
else
{
    if (empty($_POST["Artist1"])) {}else{
    $AuthorP = test_input($_POST["Artist1"]);}
    if (empty($_POST["User"])) {}else{
    $UserP = test_input($_POST["User"]);}
    // if (empty($_POST["Message"])) {}else{
    // $MessageP =  test_input($_POST["Message"]);}

    // Prep query
    $InsertQuery = "INSERT INTO Songs (Title, Artist, User) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($InsertQuery)){
        // $stmt->bind_param('ssssss', $TitleP, $AuthorP, $UrlP, $MessageP, $UserP, $EmailP);
        $stmt->bind_param('sss', $TitleP, $AuthorP, $UserP);

        // Set variables ::currently only Post USR field in Title field
        // Execute query
        $stmt->execute();
        $stmt->close();
    }
    // Error file
    else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}

}
}
if (empty($_POST["Title2"])) {}else{
$TitleP = test_input($_POST["Title2"]);}
if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$TitleP'")){
    echo mysqli_num_rows("rows "+$result);
if (mysqli_num_rows($result) > 0)
{
}
else
{
    if (empty($_POST["Artist2"])) {}else{
    $AuthorP = test_input($_POST["Artist2"]);}
    if (empty($_POST["User"])) {}else{
    $UserP = test_input($_POST["User"]);}
    // if (empty($_POST["Message"])) {}else{
    // $MessageP =  test_input($_POST["Message"]);}

    // Prep query
    $InsertQuery = "INSERT INTO Songs (Title, Artist, User) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($InsertQuery)){
        // $stmt->bind_param('ssssss', $TitleP, $AuthorP, $UrlP, $MessageP, $UserP, $EmailP);
        $stmt->bind_param('sss', $TitleP, $AuthorP, $UserP);

        // Set variables ::currently only Post USR field in Title field
        // Execute query
        $stmt->execute();
        $stmt->close();
    }
    // Error file
    else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}

}
}
if (empty($_POST["Title3"])) {}else{
$TitleP = test_input($_POST["Title3"]);}
if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$TitleP'")){
    echo mysqli_num_rows("rows "+$result);
if (mysqli_num_rows($result) > 0)
{
}
else
{
    if (empty($_POST["Artist3"])) {}else{
    $AuthorP = test_input($_POST["Artist3"]);}
    if (empty($_POST["User"])) {}else{
    $UserP = test_input($_POST["User"]);}
    if (empty($_POST["Message"])) {}else{
    $MessageP =  test_input($_POST["Message"]);}

    // Prep query
    $InsertQuery = "INSERT INTO Songs (Title, Artist, User) VALUES (?, ?, ?, ?)";
    if ($stmt = $conn->prepare($InsertQuery)){
        // $stmt->bind_param('ssssss', $TitleP, $AuthorP, $UrlP, $MessageP, $UserP, $EmailP);
        $stmt->bind_param('sss', $TitleP, $AuthorP, $UserP, $MessageP);

        // Set variables ::currently only Post USR field in Title field
        // Execute query
        $stmt->execute();
        $stmt->close();
    }
    // Error file
    else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}

}
}

// Close Connection
$conn->close();
}
?>
