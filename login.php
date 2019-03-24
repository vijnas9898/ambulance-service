<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email =$_POST['email'];
      $password =$_POST['pass'];
      echo $email;
      echo $password;
      
      $sql = "SELECT * FROM signup WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $fname = $row['fname'];
      
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //echo $fname;
         $_SESSION['user_data'] = $email;
         header("location: page1.php");
 

      }else {
         $error = "Your Login Name or Password is invalid";
         echo  $error;
      }

      
   }
?>


