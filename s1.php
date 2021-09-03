<?php
session_start();

if(isset($_POST['save'])){
   $a1=$_POST['user'];
   $b1=$_POST['pwd'];
   if($b1==='12345'){
      $_SESSION['f1']="Hi,".$a1;
      header('location:c1.php');
   }
      else{
      $_SESSION['f2']="username and password is incorrect";
      header('location:error.php');
   }
}
?>

