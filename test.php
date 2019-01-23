
<?php
$servername = "localhost";
$username = "root";
$password = "BirthDayApp";
$dbname = "SONGS";

$TitleP = "testTitle";
$AuthorP = "testAuthor";
$UrlP = "testUrl";
$MessageP = "testMessage";
$UserP =  "testUser";    /* mysql_real_escape_string($_POST["formGroupExampleInput"]); */
$EmailP = "testEmail";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$query="INSERT INTO Songs (Title, Author, Url, Message, User, Email) VALUES ('".$TitleP."' , '".$AuthorP."' , '".$UrlP."' , '".$MessageP."' , '".$UserP."' , '".$EmailP."')";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
