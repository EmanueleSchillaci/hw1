
<html>
    <head>
     <link rel="stylesheet" href="menu.css"/>

    </head>


        <div id="menu_container">
            <div id="menu_sx">
                <div id="menu_sx1">
                  <img id="logo"src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"/>
                  <a class ="link" href="logout.php">Logout</a>
                  <a class="link" href="IndexLogged.php">Home</a>
                </div>
                <div id="menu_sx2">
                    <a class="link" href="Profil.php">Profilo</a>
                    <a class="link" href="RicercaGiochi.php">Catalogo Gamepass </a>
                    
                </div>
            </div>
            <div id="menu_dx">
                <div>Utente:  <?php echo$_SESSION['IDusername']?> </div>
                <a class="link" href="VisualizzaPreferiti.php"> Visualizza Preferiti</a>
                <img id = "ImgProfilo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBK6TPl44XvEhDHo_7nFBbycF--dwBInN3XQ&s">

            </div>
        </div>

</html>
