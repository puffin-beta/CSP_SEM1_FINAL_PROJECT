var body = document.getElementById("body");
var chbut = document.getElementById("modeswitch");
function back_to_home(){
	location.replace("../index.php");
}
function changetheme() {
  body.classList.toggle("lightMode");
  chbut.classList.toggle("lightMode");
  if (body.classList == "lightMode") {
    chbut.innerHTML = "Dark Mode";
  } else {
    chbut.innerHTML = "Light Mode";
  }
}