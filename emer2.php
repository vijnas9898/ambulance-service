<?php
  include("config.php");

$somevar = $_GET['uid'];
$somevar1 = $_GET['vid'];
$somevar2 = $_GET['w'];
// echo $somevar.'<br>';
// echo $somevar1.'<br>';
// echo $somevar2;
$message = "request an ambulance.";
$sql = "INSERT INTO emergency (lattitude,longitude,datetimes,casualties,message,status) VALUES ($somevar,$somevar1,CURRENT_TIMESTAMP,$somevar2,'$message','pending')";

if ($conn->query($sql) === TRUE) {
	
    // output data of each row
    //while($row = $result->fetch_assoc()) {
        //echo "latitude: " . $row["lattitude"]. " - longitude: " . $row["longitude"]. "<br>";
      echo "<html> <body><h1><center>EMERGENCY!</center></h1></body></html>";





	//echo 'done';

}




// $sql1 = "SELECT status FROM emergency";
//       $result = mysqli_query($conn,$sql1);

 // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);





// if ($result->num_rows > 0) {

// 	while($row['status']=='pending'){
// 		sleep(10);
// 		if ($row['status']=='accept'){
// 			header('Location: page5.php');
// 		}
// 		else{
// 			echo 'booking rejected';
// 		}
// 	}
	





    
   
                                  
$conn->close();
header('Location: page5.php'); 

// header('Location: page5.php?msg=success'); 



?>
