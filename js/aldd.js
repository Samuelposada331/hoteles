
$(function(){
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
  });

document.getElementById("catalogo").onmouseover = function (){
    var imagenes = document.getElementsByClassName("card-img-top").style.width="100%";
    var imagenes = document.getElementsByClassName("card-img-top").style.height="100%";
}

document.getElementById("catalogo").onmouseout = function (){
    var portadahoteles = document.getElementsByClassName("card-img-top").style.width="500px";
    var portadahoteles = document.getElementsByClassName("card-img-top").style.height="100%";    
}

color = "#000000"
document.getElementById("modonocturno").onclick = function(){
  document.getElementsByTagName("body")[0].style.backgroundColor="gray"
}