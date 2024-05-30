<!DOCTYPE html>

<?php
    session_start();
  
        $errore=false;
        if(!empty($_POST["Username"]) && !empty($_POST["VeroNome"])&& !empty($_POST["email"])&& !empty($_POST["IDuser"])&& !empty($_POST["password"])&& !empty($_POST["ConfermaPassword"])){ 

            $conn=mysqli_connect("localhost","root","","hw1")or die(mysqli_connect_error());



            if(!preg_match('/^[a-zA-Z ]*$/', $_POST['Username'])){ 
                $errore=true;
            }
        
            if(!preg_match('/^[a-zA-Z ]*$/', $_POST['VeroNome'])){ 
                $errore=true;
            }

            
            if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $_POST['IDuser'])){ //
                $errore=true;
            }else{
                $userID= mysqli_real_escape_string($conn,$_POST["IDuser"]);
                $query="SELECT userID FROM Profili where userID='".$userID."'";
                $res=mysqli_query($conn,$query);
                $num_rows=mysqli_num_rows($res);
                if($num_rows>0){
                    $errore=true;
                }
            }
        

            if(strlen($_POST["password"])<5){
                $errore=true;
            }

            if(strcmp($_POST['password'],$_POST['ConfermaPassword'])!= 0){
                $errore=true;
            }

            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                $errore=true;
            } else{
                $email= mysqli_real_escape_string($conn,strtoLower($_POST["email"]));

                $query="SELECT email FROM Profili where email='".$email."'";
                $res=mysqli_query($conn,$query);
                $num_rows=mysqli_num_rows($res);

                if($num_rows>0){
                    $errore=true;
                }
            }

            if( $errore==false){
                    
                $username= mysqli_real_escape_string($conn,$_POST["Username"]);
                $VeroNome= mysqli_real_escape_string($conn,$_POST["VeroNome"]);
                $password= mysqli_real_escape_string($conn,$_POST["password"]);
                $password=password_hash($password,PASSWORD_BCRYPT);
                $email= mysqli_real_escape_string($conn,$_POST["email"]);
                $query="INSERT INTO  Profili values('".$username."','".$VeroNome."','".$email."','".$userID."','".$password."')";
                if(mysqli_query($conn,$query)){
                    $_SESSION['userID']=$userID;
                    header('Location:IndexLogged.php');
                    
                    mysqli_close($conn);
                    exit;
                }
            }

        }
    
    
?>



<html>
<head>
<title>Pagina Registrazione</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Registrazione.css"/>
    <script src="Registrazione.js" defer>  </script>
</head>

<body>
<div id="main-content">
<div id="container-form">
<div> <h1>Registrati!</h1></div>
<form id="form" name="registrazione" method="POST">

<label>Username <input type="text" name="Username" id="inputUsername" placeholder="inserisci Username" required></label><div id="erroreUsername"></div>

<label>VeroNome <input type="text" name ="VeroNome" id="inputVeroNome" placeholder="VeroNome" required></label><div id="erroreVeroNome"></div>

<label>Email <input type="text" name="email" id="inputEmail" placeholder="Email" required></label><div id="erroreEmail"></div>

<label >userID <input id="inputID" type='text' name='IDuser' placeholder="inserisci id"></label><div id="erroreUser"></div>

<label>Password <input type="password" name="password" id="inputPassword" placeholder="inserisci Password" required></label><div id="errorePassword"></div>

<label>Conferma Password <input id="inputConfermaPass"type='password' name='ConfermaPassword' placeholder="conferma Password"></label><div id="erroreConferma"></div>

<label id="ricerca"><input  id="submit"type='submit'></label>


</form>

<a href="login.php">Torna al login</a>

</div>

</div>



</body>




</html>