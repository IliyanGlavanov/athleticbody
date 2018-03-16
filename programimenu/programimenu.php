<?php
  include ("../header.php")
 ?>
<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Why fishfarming is important">
  <meta name="keywords" content="Fish, Info, Information, Why fishfarming, Fish farming">
  <meta charset="utf-8" />
  <title>AthleticBody</title>
  <!-- My .JS -->
  <script type="text/javascript" src="jsmain.js?=6"></script>
  <!-- My custom .CSS -->
  <link type="text/css" rel="stylesheet" href="programimain.css?=12" />
</head>

<body>
  <div class="container">
   <div class="row">
    <div class="process">
     <div class="process-row nav nav-tabs">
      <div class="process-step">
       <button type="button" class="btn btn-info btn-circle" data-toggle="tab" onclick="window.location.href = '../programimenu/nachinaeshti/nachinaeshti.php'" id="nachinaeshti"><i class="otslabvane">За Начинаещи</i></button>
      </div>
      <div class="process-step">
       <button type="button" class="btn btn-default btn-circle" data-toggle="tab" onclick="window.location.href = '../programimenu/relef/relef.php'" href="#menu2" id="relef"><i class="poddurjane">За Релеф</i></button>
      </div>
      <div class="process-step">
       <button type="button" class="btn btn-default btn-circle" data-toggle="tab" onclick="window.location.href = '../programimenu/kachvane/kachvane.php'" href="#menu3"  id="kachvane"><i class="kachvane">За Качване</i></button>
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
