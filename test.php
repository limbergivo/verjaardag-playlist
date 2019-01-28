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
if (empty($_POST["Titel"])) {}else{
$TitleP = test_input($_POST["Titel"]);}
if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$TitleP'")){
    echo mysqli_num_rows("rows "+$result);
if (mysqli_num_rows($result) > 0)
{
    echo "Title already added";
}
else
{
    echo 'Unique Song';
    if (empty($_POST["Artiest"])) {}else{
    $AuthorP = test_input($_POST["Artiest"]);}
    if (empty($_POST["Youtube"])) {}else{
    $UrlP = test_input($_POST["Youtube"]);}
     // if (empty($_POST["testMessage"])) {}else{
    $MessageP = test_input("testMessage"); // }
     // if (empty($_POST["TestUser"])) {}else{
    $UserP =  test_input("TestUser"); // }
     // if (empty($_POST["testEmail"])) {}else{
    $EmailP = test_input("testEmail"); // }

    // Prep query
    $InsertQuery = "INSERT INTO Songs (Title, Author, Url, Message, User, Email) VALUES (?, ?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($InsertQuery)){
        $stmt->bind_param('ssssss', $TitleP, $AuthorP, $UrlP, $MessageP, $UserP, $EmailP);
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
