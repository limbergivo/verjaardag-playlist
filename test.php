
<?php
$servername = "localhost";
$username = "root";
$password = "BirthDayApp";
$dbname = "SONGS";

$TitleP = "testTitle";
$AuthorP = "testAuthor";
$UrlP = "testUrl";
$MessageP = "testMessage";
$UserP =  "testUser";    /* $_POST["formGroupExampleInput"]; */
$EmailP = "testEmail";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
//
// if ($stmt = $conn->prepare("INSERT INTO Songs (Title, Author, Url, Message, User, Email) VALUES (?, ?, ?, ?, ?, ?)")) {
//
//     // Bind the variables to the parameter as strings.
//     $stmt->bind_param($TitleP, $AuthorP, $UrlP, $MessageP, $UserP, $EmailP);
//
//     // Execute the statement.
//     $stmt->execute();
//
//     // Close the prepared statement.
//     $stmt->close();
//
// }
//
// //
// // Create Procedure employee_insert
// //     (@EmployeeID int, @Name Varchar(30), @Age int, @Mobile int)
// // As
// // Begin
// //     Insert Into Employee
// //     Values (@EmployeeID, @Name, @Age, @Mobile)
// // End
// 




$conn->close();
?>
