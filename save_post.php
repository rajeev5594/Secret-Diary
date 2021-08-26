<?php
session_start();

if(array_key_exists("content",$_POST)){
  include("dbcon.php");
     $content=mysqli_real_escape_string($con,$_POST['content']);
     $id=mysqli_real_escape_string($con,$_SESSION['uid']);
     echo $sql= "UPDATE users SET diary ='$content' WHERE id='$id'";
     $query=mysqli_query($con,$sql);
     // if($query){
     //    echo"Success";
     // }else{
     //    echo"failed";
     // }
    // echo $_POST['content'];
   }
?>