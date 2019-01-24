
<?php
// Proper headers
header('Content-Type: application/x-www-form-urlencoded');

// ServerInfo
$servername = "localhost";
$username = "root";
$password = "BirthDayApp";
$dbname = "SONGS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
// Prep query
$InsertQuery = "INSERT INTO Songs (Title, Author, Url, Message, User, Email) VALUES (?, ?, ?, ?, ?, ?)";
if ($stmt = $conn->prepare($InsertQuery)){
    $stmt->bind_param('ssssss', $TitleP, $AuthorP, $UrlP, $MessageP, $UserP, $EmailP);
// Set variables ::currently only Post USR field in Title field
    $TitleP = $_POST["USR"];
    $AuthorP = "testAuthor";
    $UrlP = "testUrl";
    $MessageP = "testMessage";
    $UserP =  "TestUser";
    $EmailP = "testEmail";
// Execute query
$stmt->execute();
$stmt->close();
}
// Error file
else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}
// Close Connection
$conn->close();

?>
