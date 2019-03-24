<?php
  //  include('functions.php');

include ("config.php");
    $id = $_GET['id'];


               $sql = "SELECT lattitude,longitude FROM emergency WHERE id=$id";

 $result= mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      // foreach($row as $new){
       $lat = $row['lattitude'];
         $lon = $row['longitude'];
      //}
      

$sql1 = "UPDATE emergency SET status='accept' where id=$id";
if ($conn->query($sql1) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}



// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         $lat= $row['lattitude'];
//         $lon=$row['longitude'];

// echo $lat;
// echo $lon;
// }
// }


    


$mobileno='9901697961';
$message="www.google.com/maps/place/$lat,$lon";
    // Authorisation details.
    $username = "shivamkumarkashyap5@gmail.com";
    $hash = "35b12b0c2d8ae2e5f17134d3a2bb12c7c0203afa9c1c";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = "$mobileno"; // A single number or a comma-seperated list of numbers
    $message = "$message";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);













$sql7="DELETE FROM emergency WHERE id=$id";
if ($conn->query($sql7) === TRUE) {
    echo "AMBULANCE HAS BEEN SENT";

    
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