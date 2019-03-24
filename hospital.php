<?php
    session_start(); //we need session for the log in thingy XD 
    // include("functions.php");
    // if($_SESSION['login']!==true){
    //     header('location:login.php');
    // }
    include("config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
           <!--  <strong>Hi, <?php echo $_SESSION['type'] ?></strong> -->
          </a>
            <div class="pull-right">
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:index.php');
                }
    
                ?>
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                </form>
            </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <?php
            
               $sql = "SELECT * FROM emergency";
      $result = mysqli_query($conn,$sql);







if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "latitude: " . $row["lattitude"]. " - longitude: " . $row["longitude"]. "<br>";
      echo "<html> <body><h1><center>EMERGENCY!</center></h1></body></html>";
?>


<h1 class="lead text-muted"><?php echo "latitude: " . $row['lattitude'] ?></h1>
                      <p class="lead text-muted"><?php echo " longitude: " . $row['longitude'] ?></p>
                      <p>
                        <a href="accept.php?id=<?php echo $row['id']?>" class="btn btn-primary my-2">Accept</a>
                        <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                      </p>
                    <small><i><?php echo $row['datetimes'] ?></i></small>

<?php
    }
} else {
    echo "0 results";
}
// $conn->close();











     //  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     //  $fname = $row["lattitude"];
     // // echo $fname;
     //  foreach($row as $new){
     //   // $fname = settype($new["lattitude"],"integer");
     //     $fname = $new["lattitude"];
     //  echo $fname;
     //  }
     $conn->close(); 
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>
