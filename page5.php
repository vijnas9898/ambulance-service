<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Page Generator Description">
  
  <title>emergency</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="map1 cid-rlBK9JXCbF" id="map1-o">

     

    <div class="google-map"></div>
</section>

<section class="engine"><a href="https://mobirise.info/a">online site builder</a></section><section class="mbr-section form3 cid-rlyrrni8wQ" id="form3-l">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">CASUALTIES</h2>
                
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="emer.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="PRQn5gl0ADrzdTZYwNysP0wX+Su6nE2ZcqL2WlyUV4AGZpxVzN9EVYld/k5Pa4VmSxwRBIW4MvVnsFNLp6cJxwKY43u78rRHI54zWlN9sK3ZEDSuPVCh2ZU8jHRsl5a5">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="number" name="casualty" data-form-field="Email" required="required" class="form-control display-7" id="email-form3-l">
                        </div>
                        <div class="col-auto input-group-btn"><button type="submit" class="btn btn-primary display-4" onclick="getLocation() ">SUBMIT</button></div>
                    </div>
                </form><!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>


 <?php

            if($_GET['msg'])
            { 
              echo '<script>
              alert("Submitted Successfully");
              </script>';
            }

         ?>



  <!-- <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script> -->
  
  
</body>
</html>