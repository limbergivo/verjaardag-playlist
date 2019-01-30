
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
if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Titel` = '$TitleP'")){
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="songChoice.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <div class="col-12 row justify-content-center">
        <img src="img/dirk.jpg" class="col-4 picture" alt="dirk">
      <div class="col-6 row justify-content-center">
            <p class="col-12 text-center">Geef je favoriete nummer</p>
            <i class="col-2 fas fa-user-alt"></i>
            <input class="col-10 form-control" placeholder="Artiest" name="Artiest">
            <i class="col-2 fas fa-music"></i>
            <input class="col-10 form-control" placeholder="Titel" name="Titel">
            <i class="col-2 fab fa-youtube"></i>
            <input class="col-10 form-control" placeholder="URL" name="Youtube">
          <button type="button" class="col-4 btn btn-primary mr-3">Previous</button>
          <button type="button" class="col-4 btn btn-primary">Next</button>
        </div>
      </div>
    </form>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
