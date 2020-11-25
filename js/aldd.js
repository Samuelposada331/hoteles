
$(function(){
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
  });

document.getElementById("hombre").onmouseover = function (){
    var imagenes = document.getElementsByClassName("card-img-top").style.width="100%";
    var imagenes = document.getElementsByClassName("card-img-top").style.height="100%";
    
}

document.getElementById("hombre").onmouseout = function (){
    var portadahoteles = document.getElementsByClassName("card-img-top").style.width="500px";
    var portadahoteles = document.getElementsByClassName("card-img-top").style.height="100%";

    
}