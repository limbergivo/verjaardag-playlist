
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
    <link rel="stylesheet" href="adminPage2.css">
</head>
<body>

  <?php
$hash = password_hash("t2Campus", PASSWORD_DEFAULT);
if(password_verify($_POST["pw"], $hash)){
  ?>

     <!-- HTML here -->
 <header>
   <div class="header1"> </div>
 </header>

    <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=4Q0ijG0ylr4">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                            <div class="text-center text-white">
                                <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Overzicht <span style="color: #ff0000">liedjes</span> en <span style="color: #007bff">berichten</span></h1>
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


<footer class=" text-white footer1">
    <div class="text-center py-2 lead"><br><br><br>Calicchia Gianni . Nys Thomas . Limberg Ivo . Lowet Ruben </div>
</footer>

<?php }else{
    ?><form method="post">
        <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s"><b class="text-white">Admin Password</b></h5>
        <input type="password" name="pw">
          <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s" type=submit>Volgende</a> <br>
        <p class="text-white">Authorised Access only!</p>
    </form>
<?php
} ?>

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
