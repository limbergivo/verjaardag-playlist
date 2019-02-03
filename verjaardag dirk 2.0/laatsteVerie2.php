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
    }
    else{
        $Title3 = test_input($_POST["Title3"]);
    }
    if (empty($_POST["Artist3"])){

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dirk</title>
    <link rel="stylesheet" href="https://headervideo.github.io/hvheadervideo/css/fontawesome.min.css">
    <link href="https://headervideo.github.io/hvheadervideo/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://headervideo.github.io/hvheadervideo/css/mdb.min.css" rel="stylesheet">
    <link href="https://headervideo.github.io/hvheadervideo/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style/laatsteVersie2.css">
</head>
<body>


    <!--aanmeldingscherm-->

         <div class="header1"> </div>

      <form action="index.php" method="post">
       <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=4Q0ijG0ylr4">
               <div class="full-bg-img">
                   <div class="container flex-center">
                       <div class="row">
                           <div class="col-md-12 wow fadeIn">
                               <div class="text-center text-white">
                                 <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Verjaardag Afspeellijst</h1>
                                 <input class="form-control inputDesign2" name="User" placeholder="Email of Username">
                               </div>
                              <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs">Volgende</a>
                           </div>
                        </div>
                    </div>
                </div>
          </div>
      </form>
      <div class=" text-white">
          <div class="text-center py-2 lead"><br><br><br>Calicchia Gianni . Nys Thomas . Limberg Ivo . Lowet Ruben </div>
      </div>

      <!--Keuze 1-->
      <div id="Songs" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=4Q0ijG0ylr4">
              <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                           <div class="text-center text-white">
                              <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Geef je eerste favoriete nummer</h1>
                              <input class="form-control" placeholder="Artiest" name="Artist1">
                              <input class="form-control" placeholder="Titel" name="Title1">
                           </div>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs2">Volgende</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
      <div class="text-white">
         <div class="text-center py-2 lead"><br><br><br>Calicchia Gianni . Nys Thomas . Limberg Ivo . Lowet Ruben </div>
      </div>
      </div>
      <!--Keuze 2-->
      <div id="Songs2" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=4Q0ijG0ylr4">
              <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                           <div class="text-center text-white">
                              <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Geef je tweede favoriete nummer</h1>
                              <input class="form-control" placeholder="Artiest" name="Artist2">
                              <input class="form-control" placeholder="Titel" name="Title2">
                           </div>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs">Vorige</a>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs3">Volgende</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="text-white">
           <div class="text-center py-2 lead"><br><br><br>Calicchia Gianni . Nys Thomas . Limberg Ivo . Lowet Ruben </div>
        </div>
      </div>
      <!--Keuze 3-->
      <div id="Songs3" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=4Q0ijG0ylr4">
              <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                           <div class="text-center text-white">
                              <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Geef je derde favoriete nummer</h1>
                              <input class="form-control" placeholder="Artiest" name="Artist3">
                              <input class="form-control" placeholder="Titel" name="Title3">
                           </div>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs2">Vorige</a>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Bevestig">Volgende</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
          <div class="text-white">
             <div class="text-center py-2 lead"><br><br><br>Calicchia Gianni . Nys Thomas . Limberg Ivo . Lowet Ruben </div>
          </div>
     </div>

      <!--Bevestig-->
      <div id="Bevestig" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=4Q0ijG0ylr4">
              <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                           <div class="text-center text-white">
                              <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Bedankt voor het kiezen van je favorieten nummers! ik hoop jullie dan ook op de dansvloer te zien!</h1>
                           </div>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs3">Vorige</a>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Bevestig">Verstuur</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="text-white">
           <div class="text-center py-2 lead"><br><br><br>Calicchia Gianni . Nys Thomas . Limberg Ivo . Lowet Ruben </div>
        </div>
   </div>

    <script type="text/javascript" src="https://headervideo.github.io/hvheadervideo/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://headervideo.github.io/hvheadervideo/js/popper.min.js"></script>
    <script src="https://headervideo.github.io/hvheadervideo/js/bootstrap.min.js"></script>
    <script src="https://headervideo.github.io/hvheadervideo/js/mdb.min.js"></script>
    <script src="https://headervideo.github.io/hvheadervideo/js/jarallax.js"></script>
    <script src="https://headervideo.github.io/hvheadervideo/js/jarallax-video.js"></script>
   <script>
       new WOW().init();
   </script>
</body>
</html>
