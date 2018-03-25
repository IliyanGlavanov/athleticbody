<?php
  include ("header.php")
 ?>
<!DOCTYPE html>
<html>
<head>
  <!-- My custom .CSS -->
  <link type="text/css" rel="stylesheet" href="../mainstyle.css" onload="if(media!='all')media='all'"/>
</head>

<body>
  <script type="text/javascript">
      $(window).on('load',function(){
          $('#myModal').modal('show');
      });
  </script>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="text-center">
        <div class="fb-page" data-href="https://www.facebook.com/athleticbodyGM/" data-width="280" data-height="600" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/athleticbodyGM/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/athleticbodyGM/">Athleticbody / Motivation and advices</a></blockquote></div></div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center" id="backquote">
    <blockquote class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p>Не можете да върнете времето и да промените вашия старт, но можете да започнете сега и да промените финала си! Моментната и бъдещата мотивация са безкомпромисния избор към успеха. Бори се до край, болката е временна, резултата е вечен!</p>
    </blockquote>
  </div>
  <div class="container">
    <div class="row">
      <section class="block" >
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
              <img src="slideshow12.jpg" alt="First Slide">
            </div>
            <div class="item">
              <img src="slideshow33.jpg" alt="First Slide">
            </div>
            <div class="item">
              <img src="slideshow44.jpg" alt="Third Slide">
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
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="card">
            <a href="../statii/stranica1/statiq6/statiq6">
              <img src="article1.jpg">
                <h4>Проект „Мускулна маса” -  за кого е предназначен той и какво представлява?</h4>
                <p>Това е тренировъчен сплит съставен изцяло от базови (многоставни) упражнения, подходящ за хора, които искат да направят т.н. „основен период”, т.е. искат да покачат килограми, да станат по обемни и огромни.</p>
                <a href="../statii/stranica1/statiq6/statiq6" class="blue-button">Прочети</a>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="card">
          <a href="../statii/stranica1/statiq1/statiq1">
              <img src="statiq2.jpg">
              <h4>Бързото отслабване е равно на мускулен разпад.</h4>
              <p>Как да избегнем загубата на мускулната маса и дали бързото отслабване е решение. </p>
              <a href="../statii/stranica1/statiq1/statiq1" class="blue-button">Прочети</a>
          </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="card">
          <a href="../statii/stranica1/statiq2/statiq2">
              <img src="statiq3.jpg">
              <h4>За колко време идват резултатите?</h4>
              <p>Искате бързи резултати, нямате търпение да станете огромни и релефни? Разберете реалността и оптималното време, за което ще постигнете всичко това.</p>
              <a href="../statii/stranica1/statiq2/statiq2" class="blue-button">Прочети</a>
          </a>
          </div>
        </div>
    </div>
  </div>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.12&appId=1675475726080991&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
