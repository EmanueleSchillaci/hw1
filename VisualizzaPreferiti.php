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
    <link rel="stylesheet" href="VisualizzaPreferiti.css"/>
    <script src="VisualizzaPreferit.js" defer>  </script>
    <title> Visualizza Preferiti</title>
 </head>

 <body>
    <header>
        <?php include 'menu.php' ?>
    </header>

    <section>
                        <div id="titoloPreferiti">
                            <h1>Ecco qui i tuoi giochi preferiti <?php echo$_SESSION['IDusername']?></h1>
                        </div>
                        <div id="giochi_preferiti"> </div>
                    </section>
 </body>
</html>