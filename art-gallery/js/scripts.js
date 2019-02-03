var header = document.getElementById('header-overlay');
var navButton = document.getElementById('navButton');

function initMenu(){
  if(window.innerWidth < 768){
    header.style.width = "0%";
  }
}


//Function to toggle mobile nav menu
function toggleNav(){
  if(header.style.width != "0%" ){
    header.style.width = "0%";
  } else {
    header.style.width = "70%";
  }
}

navButton.addEventListener("click", toggleNav);


//Carousel code:
var sliderImages = document.getElementsByClassName('carousel__slide');
var current = 0;

//Instantiate the carousel slides as hidden:
function reset(){
  for(let i=0; i<sliderImages.length; i++){
    sliderImages[i].style.display = "none";
  }
}

//Initialise slider, set all to display none, then the first one to block so it is visible.
function startSlide(){
  reset();
  sliderImages[0].style.display = "block";
}

//Show next slide
function slideRight(){
  reset();
  sliderImages[current+1].style.display = "block";
  current++;
}

//Automatically loop through the slides.
function autoSlides(){
  reset();
  current++;
  if(current > sliderImages.length){current = 1};
  sliderImages[current-1].style.display = "block"
  setTimeout(autoSlides, 10000);
}

//If the window gets resized, make sure the menu still shows, avoid it getting stuck in the toggle
function handleResize(){
  if(window.innerWidth < 768){
    header.style.width = "0%";
  } else {
    header.style.width = "100%";
  }
}

window.addEventListener("resize", handleResize);


initMenu();
startSlide();
autoSlides();
