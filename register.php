 <?php
 include("config.php");


    

  
$password=$_POST['pass'];
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$mobile=$_POST['mob'];
$address=$_POST['add'];
$email=$_POST['email'];
$unique=$_POST['unique'];


$sql = "INSERT INTO signup (fname,lname,email,password,uniqueId,mobile,address) VALUES ('$fname','$lname','$email', '$password','$unique','$mobile','$address')";

if ($conn->query($sql) === TRUE) {
	echo 'done';
    
   
                                  }
$conn->close();




 ?>
  <!--<script>
  alert('successfully uploaded');
        window.location.href='main.php?success';
        </script>  -->

  <?php
 
// $conn->close();

// }
// else{
// 	header('Location:main.php?msg2=Emailnotvalid');
// }


?> 
