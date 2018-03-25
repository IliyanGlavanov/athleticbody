// HOVER OVER CIRCLE- DOES CHANGES IN BACKGROUND-COLOR
$(function() {
  $("#otslabvane").hover(function() {
    $(".otslabvane").css("background-color", "transparent");
  }, function() {
    $(".otslabvane").css("background-color", "white");
  });
  $("#poddurjane").hover(function() {
    $(".poddurjane").css("background-color", "transparent");
  }, function() {
    $(".poddurjane").css("background-color", "white");
  });
  $("#kachvane").hover(function() {
    $(".kachvane").css("background-color", "transparent");
  }, function() {
    $(".kachvane").css("background-color", "white");
  });
});
