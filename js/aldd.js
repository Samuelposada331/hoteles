document.getElementsByClassName("btn").onmouseover = function() {mouseOver()};
document.getElementsByClassName("btn").onmouseout = function() {mouseOut()};
var botones = document.getElementsByClassName("btn");

//mouse encima
function mouseOver() {
  botones.value = "100%";
}
