<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="adminPage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dirk</title>
</head>
<body>
<?php
$hash = password_hash("t2Campus", PASSWORD_DEFAULT);


if(password_verify($_POST["pw"], $hash)){ ?>
     <!-- HTML here -->
<!DOCTYPE html>

          <div class="row col-12">
            <div class="col-12">
                <p class="p1">Klik links voor de songlist, rechts voor de messagelist</p>
            </div>
          </div>
          <div class="row col-12">
            <form method="post" action="ajax1.php" class="col-6">
              <div class="col-6  justify-content-center">
                <input type="submit" class="button" value="song"><p>Geef me de songs</p></button>
              </div>
            </form>

            <form method="post" action="ajax2.php" class="col-6">
                <div class="col-6 justify-content-center">
                    <input type="submit" class="button" value="msg"><p>geef me de berichten</p></button>
                </div>
            </form>
          </div>


<?php }else{
    ?><form method="post">
        <label>Admin Password</label>
        <input type="password" name="pw">
        <input type="submit"> <br>
        <p>Authorised Access only!</p>
    </form>
<?php
} ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
