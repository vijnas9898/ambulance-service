<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['user_data'];
   
 $sql = "SELECT * FROM signup WHERE email = '$user_check'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['fname'];
   $uniqueId=$row['uniqueId'];
   echo $login_session;
   if(!isset($_SESSION['user_data'])){
      header("location:login.php");
   }
?>