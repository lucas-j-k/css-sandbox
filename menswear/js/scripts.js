var nav = document.getElementById('menu-overlay');
var openNavButton = document.getElementById('openMenuButton');
var closeNavButton = document.getElementById('closeMenuButton');


//Open and close nav handlers:
function openNav() {
    nav.style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    nav.style.height = "0%";
}

console.log(openNavButton, closeNavButton);
openNavButton.addEventListener("click", openNav);
closeNavButton.addEventListener("click", closeNav);
