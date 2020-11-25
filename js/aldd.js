
$(function(){
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
  });
color = "#000000"
document.getElementById("modonocturno").onclick = function(){
  document.getElementsByTagName("body")[0].style.backgroundColor="gray"
  document.getElementClassName("btn").style.backgroundColor="btn-outline-success";

}