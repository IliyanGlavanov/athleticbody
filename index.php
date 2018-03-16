<?php
  include ("header.php")
 ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Google fonts "Bad script" -->
  <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet"/>
  <!-- My custom .CSS -->
  <link type="text/css" rel="stylesheet" href="../mainstyle.css?=40"/>
</head>

<body>
  <div class="container" id="backquote">
    <blockquote class="col-lg-12 col-md-12">
      <p>Не можете да върнете времето и да промените вашия старт, но можете да започнете сега и да промените финала си! Моментната и бъдещата мотивация са безкомпромисния избор към успеха. Бори се до край, болката е временна, резултата е вечен!</p>
    </blockquote>
  </div>
  <div class="container">
    <div class="row">
      <section class="block">
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="slideshow1.jpg" alt="First Slide">
            </div>
            <div class="item">
              <img src="slideshow3.jpg" alt="First Slide">
            </div>
            <div class="item">
              <img src="slideshow4.jpg" alt="Third Slide">
            </div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
        </div>
      </section>
    </div>
  </div>
<!-- HERE STARTS THE *ARTICLE* CARD -->
  <div class="index-content">
    <div class="container">
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <a href="../statii/stranica1/statiq6/statiq6.php">
              <img src="article1.jpg">
                <h4>Проект „Мускулна маса” -  за кого е предназначен той и какво представлява?</h4>
                <p>Това е тренировъчен сплит съставен изцяло от базови (многоставни) упражнения, подходящ за хора, които искат да направят т.н. „основен период”, т.е. искат да покачат килограми, да станат по обемни и огромни.</p>
                <a href="../statii/stranica1/statiq6/statiq6.php" class="blue-button">Прочети</a>
            </a>
          </div>
        </div>
      </a>
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
          <a href="../statii/stranica1/statiq1/statiq1.php">
              <img src="statiq2.jpg">
              <h4>Бързото отслабване е равно на мускулен разпад.</h4>
              <p>Как да избегнем загубата на мускулната маса и дали бързото отслабване е решение. </p>
              <a href="../statii/stranica1/statiq1/statiq1.php" class="blue-button">Прочети</a>
          </a>
          </div>
        </div>
      </a>
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
          <a href="../statii/stranica1/statiq2/statiq2.php">
              <img src="statiq3.jpg">
              <h4>За колко време идват резултатите?</h4>
              <p>Искате бързи резултати, нямате търпение да станете огромни и релефни? Разберете реалността и оптималното време, за което ще постигнете всичко това.</p>
              <a href="../statii/stranica1/statiq2/statiq2.php" class="blue-button">Прочети</a>
          </a>
          </div>
        </div>
      </a>

    </div>
  </div>
<!-- HERE ENDS THE *ARTICLE* CARD -->
<div id="contactus">
  <?php
  include("contactus.php");
  ?>
</div>
<?php
include("footer.php");
?>
  <!-- FOOTER END -->
</body>

</html>
