
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dirk</title>
    <link rel="stylesheet" href="https://headervideo.github.io/hvheadervideo/css/fontawesome.min.css">
    <link href="https://headervideo.github.io/hvheadervideo/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://headervideo.github.io/hvheadervideo/css/mdb.min.css" rel="stylesheet">
    <link href="https://headervideo.github.io/hvheadervideo/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="adminPage3.css">
</head>
    <body class="full-bg-img">

  <?php
$hash = password_hash("t2Campus", PASSWORD_DEFAULT);
if(password_verify($_POST["pw"], $hash)){
  ?>

     <!-- HTML here -->

 <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
         <div class="full-bg-img">
             <div class="container flex-center">
                 <div class="row">
                     <div class="col-md-12 wow fadeIn">
                         <div class="text-center text-white">
                             <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Overzicht liedjes en berichten</h1>
                             <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s"><b>Maak hier u keuze</b></h5>
                             <form method="post" action="ajax1.php">
                             <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fas fa-music"></i> Liedjes</a>
                             </form>
                             <form method="post" action="ajax2.php">
                             <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type=submit><i class="fas fa-envelope"></i> Berichten</a>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "BirthDayApp";
        $dbname = "SONGS";

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT Title, Artist, User, Message FROM Songs";
        $result = $mysqli->query($query);

        while($row = $result->fetch_array())
        {
            $rows[] = $row;
        }

        ?>
        <table>
            <tr>
                <th>User</th><th>Title</th><th>Artist</th><th>Message</th>
            </tr>

            <?php
            foreach($rows as $row)
            {?>
                <tr>
                    <td><?php echo $row['User']; ?></td>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Artist']; ?></td>
                    <td><?php echo $row['Message']; ?></td>
                </tr>
                <?php
            } ?>
        </table>

        <?php
        /* free result set */
        $result->close();

        /* close connection */
        $mysqli->close();
        ?>

<?php }else{
    ?><form method="post">
        <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s"><b class="text-white">Admin Password</b></h5>
        <input type="password" name="pw">
          <button class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type=submit>Volgende</button> <br>
        <p class="text-white">Authorised Access only!</p>
    </form>
<?php
} ?>
<br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
