<?php
  include("../header.php");
?>
<!DOCTYPE html>

<html>
<head>
    <!-- My custom .CSS -->
    <link type="text/css" rel="stylesheet" href="receptimain.css" />
  </head>
 <body>
  <div class="container" id="recepti-red-1">
    <div class="row">
    <div class="col-md-6 blogShort">
      <a href="../recepti/recepta1/recepta.php">
        <img src="kekscheta.jpg" alt="post img" class="imgrecepta pull-left img-responsive thumb margin10">
      </a>
    </div>
    <div class="col-md-6 blogShort">
    <a href="../recepti/recepta2/recepta.php">
      <img src="salata-nahut2.jpg" alt="post img" class="imgrecepta pull-left img-responsive thumb margin10">
    </a>
    </div>
  </div>
<div id="contactus">
    <?php
      include("../contactus.php");
    ?>
</div>
<?php
  include("../footer.php");
?>
 </body>
  </html>
