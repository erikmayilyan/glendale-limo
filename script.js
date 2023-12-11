const hamburger = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-nav');
const first = document.getElementById("button");
const second = document.querySelector(".closeTheButton");
const wrapper = document.getElementsByClassName("theParPart")[0];
const spans = document.getElementsByTagName("span");

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

wrapper.innerHTML = wrapper.textContent.replace(/./g, "<span>$&</span>");

for(let i = 0; i < spans.length; i++) {
  spans[i].style.animationDelay = i*80+"ms";
};