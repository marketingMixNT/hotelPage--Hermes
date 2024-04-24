import "./bootstrap";
import "./Partials/hamburger";
import "./Partials/preloader";
import "./Partials/smoothScroll";
import "./Partials/headerScroll";
import "./Partials/marquee";
import "./Partials/swiper";




document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll("[data-bg]");
    var bgElement = document.querySelector("#test");

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('mouseover', function() {
            var bgImage = this.getAttribute("data-bg");
            bgElement.style.backgroundImage = "url('" + bgImage + "')";
        });

        menuItem.addEventListener('mouseout', function() {
            bgElement.style.backgroundImage = "url('/assets/images/12.jpeg')";
        });
    });
});
