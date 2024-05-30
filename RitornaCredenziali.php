<?php
   session_start();
    
   
   if(!isset($_SESSION['IDusername'])){
      header("Location: login.php");
      exit;
   }
    header('Content-Type: application/json');
    $conn=mysqli_connect("localhost","root","","hw1")or die(mysqli_connect_error());

    $query=" SELECT *  FROM Spotify";
    $res=mysqli_query($conn,$query);
    $array=array();
    while($row=mysqli_fetch_assoc($res)){
        array_push($array,$row);
    }

    
    echo json_encode($array);
?>