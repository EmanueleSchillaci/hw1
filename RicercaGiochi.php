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
    <link rel="stylesheet" href="RicercaGiochi.css"/>
    <script src="RicercaGioch.js" defer="true">  </script>
    <script src="AggiungiRimuoviPreferiti.js" defer="true"></script>
    <title> Catalogo Gamepass</title>
 </head>

 <body>
    <header>
        <?php include 'menu.php' ?>
    </header>

    <div id="ricerca-gioco"></div>

    <section>
        <div id="titolocerca">
                           <h1>Cerca un gioco</h1>
                </div>
                
                    <div id="Ricerca">

                    <input type="text" id="barra-ricerca" placeholder="inserisci: titolo, genere o developer" />
                    <button id="btn-ricerca" >cerca</button>
                    
                    </div>

                    <div id="risultati"> </div>
                    <div id="titolo"> <h1>Sotto trovi esempio di giochi in catalogo</h1></div>
     <div id="pers">
     </div>
    </section>
 </body>
</html>
