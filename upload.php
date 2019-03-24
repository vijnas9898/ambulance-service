<?php

include_once 'config.php';

include_once 'session.php';



$email = $_SESSION['email'];
echo $email;
       $sql = "SELECT uniqueId FROM signup WHERE email = '$email'";
       $result = mysql_query($sql);



      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $fname = $row['fname'];
      





if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO medHistory(file,type,size,cunique) VALUES('$final_file','$file_type','$new_size','$uniqueId')";
  mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='page1.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='page1.php?fail';
        </script>
  <?php
 }
}
?>