<?php
  include ("../header.php")
 ?>
<!DOCTYPE html>
<html>
<head>
  <!-- My custom .CSS -->
  <link type="text/css" rel="stylesheet" href="programimain.css?=12" />
</head>
<body>
  <div class="container">
   <div class="row">
    <div class="process">
     <div class="process-row nav nav-tabs">
      <div class="process-step">
       <button type="button" class="btn btn-info btn-circle" data-toggle="tab" onclick="window.location.href = '../programimenu/nachinaeshti/nachinaeshti'" id="nachinaeshti"><i class="otslabvane">За Начинаещи</i></button>
      </div>
      <div class="process-step">
       <button type="button" class="btn btn-default btn-circle" data-toggle="tab" onclick="window.location.href = '../programimenu/relef/relef'" href="#menu2" id="relef"><i class="poddurjane">За Релеф</i></button>
      </div>
      <div class="process-step">
       <button type="button" class="btn btn-default btn-circle" data-toggle="tab" onclick="window.location.href = '../programimenu/kachvane/kachvane'" href="#menu3"  id="kachvane"><i class="kachvane">За Качване</i></button>
      </div>
     </div>
    </div>
    </div>
   </div>

   <!-- FOOTER START -->
   <div id="contactus">
     <?php
         include("../contactus.php");
     ?>
   </div>
     <?php
       include("../footer.php");
     ?>
   <!-- FOOTER END -->

</body>

</html>
