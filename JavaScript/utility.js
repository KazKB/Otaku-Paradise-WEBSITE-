function popUpMenu() {
  var menu = document.getElementById("pop-up-menu"); //Gets Navigation Bar
  if (menu.style.display === "block") {
    menu.style.display = "none"; //Sets It To Disappear
  } 
  else {
    menu.style.display = "block"; //Sets It To Reappear
  }
}

function traverse(source) {
  window.location.href = source;
}