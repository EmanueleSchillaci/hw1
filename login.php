<?php
    session_start();

    if(isset($_SESSION['IDusername'])){
        header("Location: indexLogged.php");
        exit;
    }

    if(!empty($_POST["IDuser"]) && !empty($_POST["password"])){

        $conn=mysqli_connect("localhost","root","","hw1")or die(mysqli_connect_error());

        $IDusername= mysqli_real_escape_string($conn,$_POST["IDuser"]);

        $password= mysqli_real_escape_string($conn,$_POST["password"]);

        $query="SELECT userID,Password from Profili where userID='".$IDusername."'";


        $res=mysqli_query($conn,$query)or die(mysqli_error($conn));

        if(mysqli_num_rows($res)>0){

            $entry=mysqli_fetch_assoc($res);

            if(password_verify($_POST['password'],$entry['Password']) && $_POST['IDuser']== $entry['userID']){
                $_SESSION["IDusername"]=$_POST["IDuser"];
                header("Location: indexLogged.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            }else{
                $errore=true;
            }

        
        }else{
            $errore=true;
        }
        
        
    }

?>

<!DOCTYPE html>

<html>
<head>
<title>Pagina Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Registrazione.css"/>
    <script src="login.js" defer>  </script>
</head>

<body>
<div id="main-content">
<div id="container-form">
<div> <h1>Effettua l'Accesso</h1></div>
<form id="form" name="login" method="POST">

<label >userID <input id="inputID" type='text' name='IDuser' placeholder="inserisci id"></label>

<label>Password <input type="password" name="password" id="inputPassword" placeholder="inserisci Password" required></label>

<label id="ricerca"><input  id="submit"type='submit'></label>

            <div id=errore>
                <?php 
                    if(isset($errore))
                        echo "<h1>Credenziali errate</h1>"; 
                ?>
            </div>
                
</form>

<h3>Non hai un Account?</h3>
<a href="Registrazione.php">REGISTRATI QUI!</a>

</div>

</div>



</body>




</html>