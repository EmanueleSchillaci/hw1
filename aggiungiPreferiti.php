<?php 

    session_start();
    
   
   if(!isset($_SESSION['IDusername'])){
      header("Location: login.php");
      exit;
   }
    
//    header('Content-Type: application/json');
    $conn=mysqli_connect("localhost","root","","hw1")or die(mysqli_connect_error());
    $title=mysqli_real_escape_string($conn,$_GET['title']);
    $immagine=mysqli_real_escape_string($conn,$_GET['image']);

    $userID=$_SESSION['IDusername'];

    $query="SELECT *  FROM preferiti where binary userID= '".$userID."' AND titolo ='".$title."'";
    
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        mysqli_close($conn);
        $response=array("aggiunto"=>false);
        echo json_encode($response);
        exit;
    }

    else{
        $query="INSERT INTO preferiti value('".$userID."','".$immagine."','".$title."','')";
        $res=mysqli_query($conn,$query);

        if($res==true){
            $response=array("aggiunto"=>true);
        }else{
            $response=array("aggiunto"=>false);
        }
        
    }
    
    echo json_encode($response);
    mysqli_close($conn);
    
?>
