var feild = document.querySelector("textarea");
var backUp = feild.getAttribute("placeholder");
var btn = document.querySelector(".btn");
var clear = document.getElementById("clear");

feild.onfocus = function () {
  this.setAttribute("placeholder", "");
  this.style.borderColor = "white";
  this.style.color = "white";
  btn.style.display = "block";
};

feild.onblur = function () {
  this.setAttribute("placeholder", backUp);
};

clear.onclick = function () {
  btn.style.display = "none";
  feild.value = "";
};

function togglePopup() {
  document.getElementById("save").classList.toggle("active");
}
