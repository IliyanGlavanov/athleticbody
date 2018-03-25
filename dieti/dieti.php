<?php
  include("../header.php");
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- My custom .CSS -->
    <link type="text/css" rel="stylesheet" href="dietimain.css?=8" />
  </head>
 <body>
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-xs-12 blogShort">
          <h1 class="">ХРАНИТЕЛНИ РЕЖИМИ И ДИЕТИ</h1>
          <a href="../dietimenu/dietimenu"><img src="dieti.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
          <article>
            <h4>
             Тук ще намерите примерни диети от различен тип- за отслабване, поддържане на тегло и качване на маса.
             Изберете правилния подход, ако ли не свържете се с нас да изготвим ваш индивидуален хранителен план, спрямо вашите цели.
            </h4>
          </article>
        <a class="btn btn-blog pull-right marginBottom10" href="../dietimenu/dietimenu">Прочети повече</a>
      </div>
      <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        <h3 class="text-center mb-5">Отзиви</h3>
          <div class="profile-box">
            <img class="card-img-top rounded-circle" src="../georgipicture.jpg" alt="Card image cap">
          </div>
        <div class="card-body text-center">
          <h4 class="card-title">Георги Самуилов</h4>
          <p class="card-text">Благодарение на добрите съвети на @Георги Самуилов успях да постигна големи резултати!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 blogShort">
            <h1>ТРЕНИРОВЪЧНИ ПРОГРАМИ</h1>
            <a href="../programimenu/programimenu">  <img src="trenirovki.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
          <article>
            <h4>
              Основни примерни програми- за НАЧИНАЕЩИ, за постигане на РЕЛЕФ и за КАЧВАНЕ на мускулна маса.
              Включват основни методики и упражнения, предназначени за любители спортисти.
            </h4>
          </article>
        <a class="btn btn-blog pull-right marginBottom10" href="../programimenu/programimenu">Прочети повече</a>
      </div>
      <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        <div class="profile-box">
          <img class="card-img-top rounded-circle" src="../iliyan2.jpg" alt="Card image cap">
        </div>
        <div class="card-body text-center">
          <h4 class="card-title">Илиян Главанов</h4>
          <p class="card-text">
            Благодарение на добрите съвети на @Георги Самуилов успях да постигна големи резултати!
          </p>
         </div>
      </div>
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
