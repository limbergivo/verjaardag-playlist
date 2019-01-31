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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style/style.css">
    <title></title>
  </head>
  <body>
        <form action="" method="post">
          <div class="col-12 row justify-content-center">
          <p class="col-12 text-center">Verjaardag Afspeellijst</p>
          <i class="col-2 far fa-at"></i>
          <input class="col-8 form-control" name="User" placeholder="Email or Username">
          <button class="col-4 btn btn-primary"><a class="text-white" href="#Songs">Next</a></button>
          </div>



          <div id="Songs" class="col-12 row justify-content-center">
                <p class="col-12 text-center">Geef je favoriete nummer</p>
                <i class="col-2 fas fa-user-alt"></i>
                <input class="col-10 form-control" placeholder="Artiest" name="Artist1">
                <i class="col-2 fas fa-music"></i>
                <input class="col-10 form-control" placeholder="Titel" name="Title1">
              <button type="button" class="col-4 btn btn-primary"><a class="text-white" href="#Song2">Next</a></button>
            </div>



          <div id="Song2"class="col-12 row justify-content-center">
                <p class="col-12 text-center">Geef je favoriete nummer</p>
                <i class="col-2 fas fa-user-alt"></i>
                <input class="col-10 form-control" placeholder="Artiest" name="Artist2">
                <i class="col-2 fas fa-music"></i>
                <input class="col-10 form-control" placeholder="Titel" name="Title2">
              <button type="button" class="col-4 btn btn-primary mr-3"><a class="text-white" href="#Songs">Previous</a></button>
              <button type="button" class="col-4 btn btn-primary"><a class="text-white" href="#Song3">Next</a></button>
            </div>



          <div id="Song3" class="col-12 row justify-content-center">
                <p class="col-12 text-center">Geef je favoriete nummer</p>
                <i class="col-2 fas fa-user-alt"></i>
                <input class="col-10 form-control" placeholder="Artiest" name="Artist3">
                <i class="col-2 fas fa-music"></i>
                <input class="col-10 form-control" placeholder="Titel" name="Title3">
                <textarea rows="4" cols="40" class="col-12 textArea1" name="Message" placeholder="schrijf hier je persoonlijk berichtje naar dirk en wens hem een gelukkige verjaardag"></textarea>
              <button type="button" class="col-4 btn btn-primary mr-3"><a class="text-white" href="#Song2">Previous</a></button>
              <button type="button" class="col-4 btn btn-primary"><a class="text-white" href="#bevestig">Next</a></button>
            </div>


          <div class="col-12 row justify-content-center">
            <p id="bevestig"class="col-12 text-center1">Bedankt voor het kiezen van je favorieten nummers! ik hoop jullie dan ook op de dansvloer te zien!</p>
            <button type="button" class="btn btn-primary mr-4">Send</button>
          </div>



        </form>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
