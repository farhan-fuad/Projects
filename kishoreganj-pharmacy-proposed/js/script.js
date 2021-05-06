const hamburger = document.querySelector(".hamb");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", function(){
    navLinks.classList.toggle("open");
})
