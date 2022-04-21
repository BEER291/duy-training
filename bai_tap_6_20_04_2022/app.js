function search() {
  document.getElementById("search").style.display = "block";
}
function closesearch() {
  document.getElementById("search").style.display = "none";
}
function shownavmens() {
  document.getElementById("navmens").style.display = "flex";
}
function hidenavmens() {
  document.getElementById("navmens").style.display = "none";
}
function shownavwomens() {
  document.getElementById("navwomens").style.display = "flex";
}
function hidenavwomens() {
  document.getElementById("navwomens").style.display = "none";
}
function shownavkids() {
  document.getElementById("navkids").style.display = "flex";
}
function hidenavkids() {
  document.getElementById("navkids").style.display = "none";
}

window.onscroll = function () {
  var x = document.querySelector("header");
  var y = document.querySelector(".logo1");
  var z = document.querySelector(".logo2");
  var c = document.querySelector(".content")
  if (window.pageYOffset > 0) {
    x.classList.add("scrolled");
    y.style.display = "none";
    z.style.display = "block";
    c.style.display = "none";
  } else {
    x.classList.remove("scrolled");
    y.style.display = "block";
    z.style.display = "none";
    c.style.display = "block";
  }
}

function showheader() {
  var x = document.querySelector("header");
  var y = document.querySelector(".logo1");
  var z = document.querySelector(".logo2");
  x.classList.add("scrolled");
  y.style.display = "none";
  z.style.display = "block";
}
function hideheader() {
  var x = document.querySelector("header");
  var y = document.querySelector(".logo1");
  var z = document.querySelector(".logo2");
  x.classList.remove("scrolled");
  y.style.display = "block";
  z.style.display = "none";
}
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
$(document).ready(function () {
  document.getElementById("defaultOpen").click();
})
$(document).ready(function () {
  showDivs1(slideIndex1);
  showDivs2(slideIndex2);
})
var slideIndex1 = 1;
function plusDivs1(n) {
  showDivs1(slideIndex1 += n);
}
function showDivs1(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  if (n > x.length) { slideIndex1 = 1 }
  if (n < 1) { slideIndex1 = x.length }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex1 - 1].style.display = "block";
}
var slideIndex2 = 1;
function plusDivs2(n) {
  showDivs2(slideIndex2 += n);
}
function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  if (n > x.length) { slideIndex2 = 1 }
  if (n < 1) { slideIndex2 = x.length }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex2 - 1].style.display = "block";
}

