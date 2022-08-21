button = document.getElementById("scrollBackButton");

window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
}

function scrollBack() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}