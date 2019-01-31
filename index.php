<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title></title>
</head>
<body>

    <!--aanmeldingscherm-->
  <form action="" method="post">
    <div id="start" class="col-12 row justify-content-center">
      <p class="col-12 text-center">Verjaardag Afspeellijst</p>
      <div class="row col-12">
        <i class="col-1 far fa-at"></i>
        <input class="col-7 form-control inputDesign2" name="User" placeholder="Email or Username">
      </div>
      <button class="col-2 btn btn-primary"><a class="text-white" href="#Songs">Volgende</button>
     </div>

    <!--Eerste keuze liedje en artiest-->
<div id="Songs" class="col-12 row justify-content-center">
      <p class="col-12 text-center">Geef je eerste favoriete nummer</p>
      <div class="row col-12">
        <i class="col-1 fas fa-user-alt"></i>
        <input class="col-7 form-control inputDesign" placeholder="Artiest" name="Artist1">
      </div>
      <div class="row col-12">
        <i class="col-1 fas fa-music"></i>
        <input class="col-7 form-control inputDesign1" placeholder="Titel" name="Title1">
      </div>
    <button type="button" class="col-2 btn btn-primary mr-3"><a class="text-white" href="#start">Vorige</button>
    <button type="button" class="col-2 btn btn-primary"><a class="text-white" href="#Songs1">Volgende</button>
  </div>

  <!--Tweede keuze liedje en artiest-->
    <div id="Songs1" class="col-12 row justify-content-center">
          <p class="col-12 text-center">Geef je tweede favoriete nummer</p>
          <div class="row col-12">
            <i class="col-1 fas fa-user-alt"></i>
            <input class="col-7 form-control inputDesign" placeholder="Artiest" name="Artist2">
          </div>
          <div class="row col-12">
            <i class="col-1 fas fa-music"></i>
            <input class="col-7 form-control inputDesign1" placeholder="Titel" name="Title2">
          </div>
        <button type="button" class="col-2 btn btn-primary mr-3"><a class="text-white" href="#Songs">Vorige</button>
        <button type="button" class="col-2 btn btn-primary"><a class="text-white" href="#Songs2">Volgende</button>
      </div>

      <!--Derde keuze liedje en artiest-->
    <div id="Songs2" class="col-12 row justify-content-center">
          <p class="col-12 text-center">Geef je derde favoriete nummer</p>
          <div class="row col-12">
            <i class="col-1 fas fa-user-alt"></i>
            <input class="col-7 form-control inputDesign" placeholder="Artiest" name="Artist3">
          </div>
          <div class="row col-12">
            <i class="col-1 fas fa-music"></i>
            <input class="col-7 form-control inputDesign1" placeholder="Titel" name="Title3">
          </div>
          <div class="row col-12">
            <textarea rows="4" class="col-8 textArea1" name="Message" placeholder="schrijf hier je persoonlijk berichtje naar dirk en wens hem een gelukkige verjaardag"></textarea>
          </div>
        <button type="button" class="col-2 btn btn-primary mr-3"><a class="text-white" href="#Songs1">Vorige</button>
        <button type="button" class="col-2 btn btn-primary"><a class="text-white" href="#bevestigen">Volgende</button>
      </div>

      <!--Bevestiging keuze liedje en artiest-->
    <div class="row col-12" id="bevestigen">
      <div class="row col-12 ">
        <p class="col-12 text-center1">Bedankt voor het kiezen van je favorieten nummers! ik hoop jullie dan ook op de dansvloer te zien!</p>
      </div>
      <div class="row col-12 beves">
        <button type="button" class="col-3 btn btn-primary sendDesign">Verstuur</button>
      </div>
    </div>
  </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
