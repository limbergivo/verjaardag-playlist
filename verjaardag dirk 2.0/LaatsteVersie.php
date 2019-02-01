<?php
// POST or not
if (isset($_POST)) {
    // Proper headers
    header('Content-Type: text/html; charset=utf-8');

    // ServerInfo
    $servername = "localhost";
    $username = "root";
    $password = "BirthDayApp";
    $dbname = "SONGS";

    // define input variables
    $Title1 = $Title2 = $Title3 = $Author3 = $Author2 = $Author1 = $UrlP = $MessageP = $UserP = $EmailP = "";
    // input test function
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (empty($_POST["User"])){
        echo "emptyu";
    }
    else{
        $UserP = test_input($_POST["User"]);
    }
    if (empty($_POST["Title1"])) {
        echo "empty1t";
    }
    else{
        $Title1 = test_input($_POST["Title1"]);
    }
    if (empty($_POST["Artist1"])) {
        echo "empty1a";
    }
    else{
        $Author1 = test_input($_POST["Artist1"]);
    }

    if (empty($_POST["Title2"])) {
        echo "empty2t";
    }
    else{
        $Title2 = test_input($_POST["Title2"]);
    }

    if (empty($_POST["Artist2"])) {
        echo "empty2a";
    }
    else{
        $Author2 = test_input($_POST["Artist2"]);
    }

    if (empty($_POST["Title3"])) {
        echo "empty3t";
    }
    else{
        $Title3 = test_input($_POST["Title3"]);
    }

    if (empty($_POST["Artist3"])){
        echo "empty3a";
    }
    else{
        $Author3 = test_input($_POST["Artist3"]);
    }

    if (empty($_POST["Message"])){
        echo "empty3m";
    }
    else{
        $MessageP =  test_input($_POST["Message"]);
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $query = "INSERT INTO Songs (Title, Artist, User, Message) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ssss", $val1, $val2, $val3, $val4);

    $val1 = $Title1;
    $val2 = $Author1;
    $val3 = $UserP;
    $val4 = "";

    /* Execute the statement */
    mysqli_stmt_execute($stmt);

    $val1 = $Title2;
    $val2 = $Author2;
    $val3 = $UserP;
    $val4 = "";

    /* Execute the statement */
    mysqli_stmt_execute($stmt);

    $val1 = $Title3;
    $val2 = $Author3;
    $val3 = $UserP;
    $val4 = $MessageP;

    mysqli_stmt_execute($stmt);

    /* close statement */
    mysqli_stmt_close($stmt);



    //
    // if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$Title1'")){
    //     echo "ROWS " . mysqli_num_rows($result);
    //     if (mysqli_num_rows($result) > 0)
    //     {
    //         echo "empty";
    //     }
    //     else
    //     {
    //
    //         // if (empty($_POST["Message"])) {}else{
    //         // $MessageP =  test_input($_POST["Message"]);}
    //
    //         // Prep query
    //         $InsertQuery = "INSERT INTO Songs (Title, Artist, User) VALUES (?, ?, ?)";
    //         if ($stmt1 = $conn->prepare($InsertQuery)){
    //             $stmt1->bind_param('sss', $Title1, $AuthorP, $UserP);
    //
    //             // Set variables ::currently only Post USR field in Title field
    //             // Execute query
    //             $stmt1->execute();
    //             $stmt1->close();
    //         }
    //         // Error file
    //         else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}
    //
    //     }
    // }
    // if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$Title2'")){
    //     echo "ROWS " . mysqli_num_rows($result);
    //     if (mysqli_num_rows($result) > 0)
    //     {
    //         echo "2dupli";
    //     }
    //     else
    //     {
    //
    //         // Prep query
    //         $InsertQuery = "INSERT INTO Songs (Title, Artist, User) VALUES (?, ?, ?)";
    //         if ($stmt2 = $conn->prepare($InsertQuery)){
    //             $stmt2->bind_param('sss', $Title2, $AuthorP, $UserP);
    //
    //             // Set variables ::currently only Post USR field in Title field
    //             // Execute query
    //             $stmt2->execute();
    //             $stmt2->close();
    //         }
    //         // Error file
    //         else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}
    //
    //     }
    // }
    // if($result = mysqli_query($conn, "SELECT * FROM Songs WHERE `Title` = '$Title3'")){
    //     echo "ROWS " . mysqli_num_rows($result);
    //     if (mysqli_num_rows($result) > 0)
    //     {
    //         echo "3dupli";
    //     }
    //     else
    //     {
    //
    //         // Prep query
    //         $InsertQuery = "INSERT INTO Songs (Title, Artist, User, Message) VALUES (?, ?, ?, ?)";
    //         if ($stmt3 = $conn->prepare($InsertQuery)){
    //             $stmt3->bind_param('ssss', $Title3, $AuthorP, $UserP, $MessageP);
    //
    //             // Set variables ::currently only Post USR field in Title field
    //             // Execute query
    //             $stmt3->execute();
    //             $stmt3->close();
    //         }
    //         // Error file
    //         else{echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;}
    //
    //     }
    // }

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
<link rel="stylesheet" href="style/LaatsteVersie.css">
<title></title>
</head>
<body>

    <!--aanmeldingscherm-->
  <form action="index.php" method="post">
    <div class="col-12 row justify-content-center">
      <p class="col-12 text-center">Verjaardag Afspeellijst</p>
      <div class="row col-12">
        <i class="col-1 far fa-at"></i>
        <input class="col-5 form-control inputDesign2" name="User" placeholder="Email of Username">
      </div>
      <button class="col-2 btn btn-light">Volgende</button>
  </div>

    <!--Eerste keuze liedje en artiest-->
<div id="Songs" class="col-12 row justify-content-center">
      <p class="col-12 text-center">Geef je eerste favoriete nummer</p>
      <div class="row col-12">
        <i class="col-1 fas fa-user-alt"></i>
        <input class="col-5 form-control inputDesign" placeholder="Artiest" name="Artist1">
      </div>
      <div class="row col-12">
        <i class="col-1 fas fa-music"></i>
        <input class="col-5 form-control inputDesign1" placeholder="Titel" name="Title1">
      </div>
    <button type="button" class="col-2 btn btn-light mr-3">Vorige</button>
    <button type="button" class="col-2 btn btn-light">Volgende</button>
  </div>

  <!--Tweede keuze liedje en artiest-->
    <div id="Song2" class="col-12 row justify-content-center">
          <p class="col-12 text-center">Geef je tweede favoriete nummer</p>
          <div class="row col-12">
            <i class="col-1 fas fa-user-alt"></i>
            <input class="col-5 form-control inputDesign" placeholder="Artiest" name="Artist2">
          </div>
          <div class="row col-12">
            <i class="col-1 fas fa-music"></i>
            <input class="col-5 form-control inputDesign1" placeholder="Titel" name="Title2">
          </div>
        <button type="button" class="col-2 btn btn-light mr-3">Vorige</button>
        <button type="button" class="col-2 btn btn-light">Volgende</button>
      </div>

      <!--Derde keuze liedje en artiest-->
    <div id="Song3" class="col-12 row justify-content-center">
          <p class="col-12 text-center">Geef je derde favoriete nummer</p>
          <div class="row col-12">
            <i class="col-1 fas fa-user-alt"></i>
            <input class="col-5 form-control inputDesign" placeholder="Artiest" name="Artist3">
          </div>
          <div class="row col-12">
            <i class="col-1 fas fa-music"></i>
            <input class="col-5 form-control inputDesign1" placeholder="Titel" name="Title3">
          </div>
          <div class="row col-12">
            <textarea rows="4" class="col-8 textArea1" name="Message" placeholder="schrijf hier je persoonlijk berichtje naar dirk en wens hem een gelukkige verjaardag"></textarea>
          </div>
        <button type="button" class="col-2 btn btn-light mr-3">Vorige</button>
        <button type="button" class="col-2 btn btn-light">Volgende</button>
      </div>

      <!--Bevestiging keuze liedje en artiest-->
    <div class="row col-12 ">
      <p id="bevestig" class="col-8 text-center1">Bedankt voor het kiezen van je favorieten nummers! ik hoop jullie dan ook op de dansvloer te zien!</p>
    </div>
    <div class="row col-12 beves">
      <button type="submit" class="col-3 btn btn-light sendDesign">Verstuur</button>
    </div>

  </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
