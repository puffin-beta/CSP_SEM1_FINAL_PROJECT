// variables to use in JS
var body = document.getElementById("body");
var chbut = document.getElementById("modeswitch");
// Redirect to home page
function back_to_home(){
	location.replace("../index.php");
}
// Change between light and dark mode
function changetheme() {
  body.classList.toggle("lightMode");
  chbut.classList.toggle("lightMode");
  if (body.classList == "lightMode") {
    chbut.innerHTML = "Dark Mode";
  } else {
    chbut.innerHTML = "Light Mode";
  }
}