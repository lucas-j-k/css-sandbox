var nav = document.getElementById('nav-overlay');
var openNavButton = document.getElementById('menuOpen');
var closeNavButton = document.getElementById('menuClose');
var lightbox = document.getElementById('lightbox');
var thumbnails = document.getElementsByClassName('latest-work__img');
var lightboxImages = document.getElementsByClassName('lightbox__img');
var currentImage = 0;
var backButton = document.getElementById("backButton");
var nextButton = document.getElementById("nextButton");
var closeLightboxButton = document.getElementById("closeLightbox");


//Open and close nav handlers:
function openNav(e) {
    nav.style.height = "100%"
    nav.style.opacity = 1;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav(e) {
    nav.style.opacity = 0;
    nav.style.height = "0%"
  }

function openLightbox(e) {
    lightbox.style.display = "block";
}

function closeLightbox(e) {
    lightbox.style.display = "none";
}

//Close the lightbox when it is clicked on:
closeLightboxButton.addEventListener("click", closeLightbox);


//Event handlers for the next / back buttons within the lightbox view.
backButton.addEventListener("click", function(){
  setSlide(currentImage-1);
});

console.log(nextButton);
nextButton.addEventListener("click", function(){
  setSlide(currentImage+1);
});

// function to reset all lightbox image slides to hidden
function hideImages(){
  for (var i = 0; i < lightboxImages.length; i++) {
    lightboxImages[i].style.display = "none";
  }
}



//Function to switch the lightbox to the relevant slide
function setSlide(index){
  if(index < 0 || index >= lightboxImages.length){ return };
  hideImages();
  currentImage = index;
  lightboxImages[index].style.display = "block";
}





openNavButton.addEventListener("click", openNav);
closeNavButton.addEventListener("click", closeNav);
