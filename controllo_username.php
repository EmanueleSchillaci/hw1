<?php 
    header('Content-Type: application/json');
    $conn=mysqli_connect("localhost","root","","hw1")or die(mysqli_connect_error());
    $userID= mysqli_real_escape_string($conn,$_GET["q"]);
    $query= "SELECT userID FROM Profili where userID='".$userID."'";
    $res=mysqli_query($conn,$query);
    $num_rows=mysqli_num_rows($res);
    
    if($num_rows>0){
        $presente=array('presente'=>true);
        echo json_encode($presente);
    }else{
        $presente=array('presente'=>false);
        echo json_encode($presente);
    }
    mysqli_close($conn);
    
?>