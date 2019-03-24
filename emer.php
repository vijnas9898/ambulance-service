<?php


 include("config.php");


    

  
$casualty=$_POST['casualty'];

echo $casualty;


?>

<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Send your location</button>

<p id="demo"></p>
<!--  -->
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}





function showPosition(position) {
var u=position.coords.latitude;
var v=position.coords.longitude;
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
var MyVariable = "Value of variable";

 var carnr;        
      carnr = "<?php print($casualty); ?>"
      // console.log(carnr);

// alert(console.log(u));


  window.location.href = "emer2.php?uid= "+u+"&vid="+v+"&w="+carnr; 
}

</script>

</body>
</html>



<?php
// header('Location: page5.php?msg=success'); 
?>