const Name = "stop";

//Loads A Welcome Message On Load
window.onload = function() {
  if(this.name !== Name) {//Checks To See If The Name Of The Window Is The Same
    sessionStorage.setItem("profile", "0");
    this.name = Name;//Sets The Name Of The Window
    alert ("Welcome To Otaku Paradise!!!");
  }
}

const slide = document.getElementsByClassName("banner"); //Gets All The Elements With Class Banner
var k = 0;
slideshow(); //Calls Slideshow Function

function slideshow() {
  for (var i = 0; i < slide.length; i++) { //Set Elements To Disappear
    slide[i].style.display = "none";
  }
  
    slide[k].style.display = "block"; //Sets One Element To Reappear
    k++;
    if (k == slide.length) //Resets Slideshow
      k = 0;
    setTimeout(slideshow, 5000); //Sets A Slide To Appear Every 5 Seconds And Restarts Slideshow Function
}