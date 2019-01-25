
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

$TitleP = $_POST["Titel"];
if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$TitleP'")){
    echo mysqli_num_rows("rows "+$result);
if (mysqli_num_rows($result) > 0)
{
    echo "Title already added";
}
else
{
    echo 'Unique Song';
    $AuthorP = $_POST["Artiest"];
    $UrlP = $_POST["Youtube"];;
    $MessageP = "testMessage";
    $UserP =  "TestUser";
    $EmailP = "testEmail";

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

?>
