const hamburger = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-nav');
const first = document.getElementById("button");
const second = document.querySelector(".closeTheButton");

hamburger.addEventListener('click', function () {
  this.classList.toggle('is-active');
  mobile_menu.classList.toggle('is-active');
});

first.addEventListener("click", function() {
  document.querySelector(".popup").style.display = "flex";
  console.log("it is working");
});

second.addEventListener("click", function() {
  document.querySelector(".popup").style.display = "none";
});

