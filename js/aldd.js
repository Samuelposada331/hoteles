var botones=document.getElementsByClassName("btn")
botones.addEventListener("mouseover", function( event ) {   
    event.target.style.color = "orange";
    setTimeout(function() {
      event.target.style.color = "";
    }, 500);
  }, false);
