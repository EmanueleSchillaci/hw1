<? require 'menu.php'; ?>


<?php
    session_start();

    if(!isset($_SESSION['IDusername'])){
        header("Location: login.php");
        exit;
        
    }
?>

<!DOCTYPE html>
<html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Profil.css"/>
    <script src="Profil.js" defer>  </script>
    <title> Spazio Personale </title>
 </head>

 <body>
    <header>
        <?php include 'menu.php' ?>
    </header>
    
    
    <div id="Info-Profilo">
    <div id="titolo-Credenziali"><h1>Benvenuto nella tua area Personale</h1></div>
     <div id="titoloInfo"> <h1>Qui trovi le tue Credenziali</h1></div>
    </div>
    

  <div id="spotify-container">
    <h1>Personalizza le tue giornate con della buona Musica direttamente da Spotify</h1>
    <form id="barra-ricerca">
      <div id="scritta-barra"> </div>
      <input type="text" id="barra-scrittura" placeholder="inserire genere o album">
      <input type="submit" id="ricerca-album" value="Search" >
    </form>
    <section id="container-risultati">

    </section>
  </div>
 </body>
</html>