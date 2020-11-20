$(function(){
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
  });
var botones=document.getElementsByClassName("btn")
botones.addEventListener("mouseover", function( event ) {   
    event.target.style.size = "200%";
    setTimeout(function() {
      event.target.style.size = "";
    }, 500);
  }, false);

  var titulo=document.getElementById("title")
titulo.addEventListener("mouseover", function( event2 ) {   
    event2.target.style.color = "blue";
    setTimeout(function() {
      event2.target.style.size = "";
    }, 500);
  }, false);
