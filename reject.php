<?php
  //  include('functions.php');

include ("config.php");
    $id = $_GET['id'];


//                $sql = "SELECT lattitude,longitude FROM emergency WHERE id=$id";

//  $result= mysqli_query($conn,$sql);

// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
//       // foreach($row as $new){
//        $lat = $row['lattitude'];
//          $lon = $row['longitude'];
//       //}
      

$sql1 = "UPDATE emergency SET status='reject' where id=$id";
if ($conn->query($sql1) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}












$sql7="DELETE FROM emergency WHERE id=$id";
if ($conn->query($sql7) === TRUE) {
    echo "AMBULANCE HAS Not BEEN SENT";

    
} else {
    echo "Error deleting record: " . $conn->error;
}
header('Location:hospital.php');
$conn->close();




//     $id = $_GET['id'];
//     $query = "select * from `requests` where `id` = '$id'; ";
//     if(count(fetchAll($query)) > 0){
//         foreach(fetchAll($query) as $row){
//             $firstname = $row['firstname'];
//             $lastname = $row['lastname'];
//             $email = $row['email'];
//             $password = $row['password'];
//             $query = "INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', 'user', '$password');";
//         }
//         $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
//         if(performQuery($query)){
//             echo "Account has been accepted.";
//         }else{
//             echo "Unknown error occured. Please try again.";
//         }
//     }else{
//         echo "Error occured.";
//     }
    
// ?>
<!--  <br/><br/>
 <a href="home.php">Back</a> -->