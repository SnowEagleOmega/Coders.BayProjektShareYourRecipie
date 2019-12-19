<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Samuel Weißmayr">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="source/yours.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Raleway&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="source/img/anime.png" type="image/png"/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <title>Nutzerrezepte</title>
  </head>
  <body class="snowNight">
    
        <!--MainContainer with transparent Background-->
      <div class="container-fluid container1">
        <h1 class="heading align-self-center">Nutzerrezepte</h1><br>
        
        <div class="container rezept1 centered">
            <?php
               //get data from Form and Select Data from Database
                $art = $_POST['art'];
                $con = mysqli_connect("", "root", "", "weihnachten");
                $sql = "SELECT CONCAT(account.vorname,' ',account.nachname) AS name,rezept.rezeptname,rezept.zutaten,rezept.zubereitung FROM rezept JOIN account ON rezept.accountID=account.id WHERE art='$art'";
                $res = mysqli_query($con,$sql);
                $num = mysqli_num_rows($res);
                if($num > 0) echo "Ihre Ergebnisse:<br>";
                else echo "Leider hat noch keiner ein Rezept in dem Bereich hochgeladen<br>";
                while ($dsatz = mysqli_fetch_assoc($res))
                echo "<br>"."<div class='container-fluid container1 rounded wood'>"."Autor: ". $dsatz["name"] . "<br>" . "Rezeptname: " .$dsatz["rezeptname"]."<br>" . "<br>"."Zutaten:<br>". wordwrap($dsatz["zutaten"],10,"<br>\n",FALSE)."<br>"."Zubereitung:<br>".
                wordwrap($dsatz["zubereitung"],100,"<br>\n",FALSE)."</div>";
                
                mysqli_close($con);
            ?>
        </div>
        <div class="col text-center">
          <br><a href="userrecipie.html"><button type="submit" class="btn btn-danger margbot2"> <span class="centeredbtn">Zurück zur Auswahl</span></button><a><br>
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
