
let lastScrollTop = 0;
const navbar = document.querySelector("#header");
const heroSection = document.querySelector("#header-hero");

window.addEventListener("scroll", function(){
   let scrollPosition = window.scrollY || document.documentElement.scrollTop;
   if (scrollPosition >=  heroSection.getBoundingClientRect().bottom + window.scrollY - 100) {
      if (scrollPosition > lastScrollTop){
         // downscroll code
         navbar.style.top = "-150px"; 
      } else {
         // upscroll code
         navbar.style.top = "0";
      }
      lastScrollTop = scrollPosition <= 0 ? 0 : scrollPosition; 
   } else {
      navbar.style.top = "0";
   }

   if (scrollPosition >= heroSection.getBoundingClientRect().bottom + window.scrollY) {
      navbar.classList.add("bg-secondary-400");
   } else {
      navbar.classList.remove("bg-secondary-400");
   }
}, false);