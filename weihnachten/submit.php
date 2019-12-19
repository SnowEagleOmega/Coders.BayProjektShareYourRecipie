<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ervin Kajtezovic">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="source/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Raleway&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="source/img/anime.png" type="image/png"/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <title>Vielen Dank</title>
  </head>
  <body class="snowNight">
    
        <!--MainContainer with transparent Background-->
      <div class="container-fluid container1">
        <h1 class="heading align-self-center">Vielen Dank</h1><br>
        <div class="col text-center">
          <a href="index.html"><button type="submit" class="btn btn-danger"> Zurück zur Startseite</button><a><br>
          <img class="img-responsive" src="source/img/santa.gif" alt="santa claus"> 
          
        </div>
      </div>
      <hidden><embed name="myMusic" loop="true" hidden="true" volume="0.5" src="./source/img/music.mp3" ></embed></hidden>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
//get Data from Form
$email = $_POST['email'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$rezeptname = $_POST['rezeptname'];
$art = $_POST['art'];
$zutaten = $_POST['zutaten'];
$zubereitung = $_POST['zubereitung'];

//insert Data in Database
$con = mysqli_connect("", "root", "", "weihnachten");
$sql = "INSERT INTO account (email, vorname, nachname) Values('$email','$vorname','$nachname')";
mysqli_query($con,$sql);
//get ID to input into recipies
$sql2 = "SELECT id FROM account WHERE email='$email'";
$getID =mysqli_query($con,$sql2);
$getUserID = mysqli_fetch_array($getID);
$userVal = intval($getUserID[0]);
//make new recipie
$sql3 = "INSERT INTO rezept (accountID,rezeptname, art, zutaten,zubereitung) Values('$userVal','$rezeptname','$art','$zutaten','$zubereitung')";

mysqli_query($con,$sql3);

mysqli_close($con);
?>