<?php
  include ("../header.php")
 ?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="jsmain.js"></script>
  <!-- My custom .CSS -->
  <link type="text/css" rel="stylesheet" href="dietimain.css?=11" />
</head>

<body>
  <div class="container">
   <div class="row">
    <div class="process">
     <div class="process-row nav nav-tabs">
      <div class="process-step">
       <button type="button" class="btn btn-info btn-circle" data-toggle="tab" onclick="window.location.href = '../dietimenu/otslabvane/otslabvane'" id="otslabvane"><i class="otslabvane">Отслабване</i></button>
      </div>
      <div class="process-step">
       <button type="button" class="btn btn-default btn-circle" data-toggle="tab" onclick="window.location.href = '../dietimenu/poddurjane/poddurjane'" href="#menu2" id="poddurjane"><i class="poddurjane">Поддържане</i></button>
      </div>
      <div class="process-step">
       <button type="button" class="btn btn-default btn-circle" data-toggle="tab" onclick="window.location.href = '../dietimenu/kachvane/kachvane'" href="#menu3"  id="kachvane"><i class="kachvane">Качване</i></button>
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
