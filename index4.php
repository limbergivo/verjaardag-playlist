
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
    if (!empty($_POST["User"])){
        $UserP = test_input($_POST["User"]);
    }
    if (!empty($_POST["Title1"])) {
        $Title1 = test_input($_POST["Title1"]);
    }
    if (!empty($_POST["Artist1"])) {
        $Author1 = test_input($_POST["Artist1"]);
    }

    if (!empty($_POST["Title2"])) {
        $Title2 = test_input($_POST["Title2"]);
    }

    if (!empty($_POST["Artist2"])) {
        $Author2 = test_input($_POST["Artist2"]);
    }

    if (!empty($_POST["Title3"])) {
        $Title3 = test_input($_POST["Title3"]);
    }

    if (!empty($_POST["Artist3"])){
        $Author3 = test_input($_POST["Artist3"]);
    }

    if (!empty($_POST["Message"])){
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
    <title>Dirk verjaardag</title>
    <link rel="stylesheet" href="https://headervideo.github.io/hvheadervideo/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://headervideo.github.io/hvheadervideo/css/mdb.min.css" rel="stylesheet">
    <link href="https://headervideo.github.io/hvheadervideo/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="index4.css">
</head>
<body>

  <div id="Welkomp" class="justify-content-center">
    <div class="header1"> </div>

    <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
          <div class="full-bg-img">
            <div class="container flex-center">
                <div class="row">
                    <div class="col-md-12 wow fadeIn">
                       <div class="text-center text-white">
                          <p class=welkom>Welkom op de pagina van Dirk <br>Meld je even aan en laat Dirk weten wat jouw favorieten liedjes zijn</p>
                       </div>
                        <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="adminPage3.php">Administrator</a>
                       <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Song">Gebruiker</a>
                    </div>
                </div>
            </div>
          </div>
    </div>

       <div class="lead"></div>

</div>


    <!--aanmeldingscherm-->
    <div id="Song">


      <div class="header1"> </div>

      <form method="post">
       <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
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
          <div class="lead"></div>
      </div>

      <!--Keuze 1-->
      <div id="Songs" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
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
       <div class="lead"></div>
      </div>
      <!--Keuze 2-->
      <div id="Songs2" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
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
<div class="lead"></div>
      </div>
      <!--Keuze 3-->
      <div id="Songs3" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
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
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Message">Volgende</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
<div class="lead"></div>
     </div>

     <!--Message-->
     <div id="Message" class="justify-content-center">
       <div class="header1"> </div>

       <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
             <div class="full-bg-img">
               <div class="container flex-center">
                   <div class="row">
                       <div class="col-md-12 wow fadeIn">
                          <div class="text-center text-white">
                             <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Geef je boodschap voor de jarige</h1>
                             <input class="form-control" placeholder="gefeliciteerd" name="Message">
                          </div>
                          <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Songs3">Vorige</a>
                          <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Bevestig">Volgende</a>
                       </div>
                   </div>
               </div>
             </div>
       </div>
<div class="lead"></div>
    </div>


      <!--Bevestig-->
      <div id="Bevestig" class="justify-content-center">
        <div class="header1"> </div>

        <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
              <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                           <div class="text-center text-white">
                              <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Bedankt voor het kiezen van je favorieten nummers! ik hoop jullie dan ook op de dansvloer te zien!</h1>
                           </div>
                           <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" href="#Songs3">Vorige</a>
                           <button class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type="submit" href="#Bevestig">Verstuur</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>

           <div class="lead"></div>

   </div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
