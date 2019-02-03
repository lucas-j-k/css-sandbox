var color1 = "rgb(243, 211, 189)";
var color2 = "rgb(8, 73, 92)";

//Animate color of photo overlay
anime({
  targets:".main__overlay",
  duration:4000,
  backgroundColor:[color1, color2],
  direction:"alternate",
  loop:true,
  easing:"linear"
});
