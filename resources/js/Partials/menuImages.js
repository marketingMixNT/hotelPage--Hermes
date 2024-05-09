document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll("[data-bg]");
    const bgElement = document.querySelector("#test");

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('mouseover', function() {
            const bgImage = this.getAttribute("data-bg");
            bgElement.style.backgroundImage = "url('" + bgImage + "')";
        });

        menuItem.addEventListener('mouseout', function() {
            bgElement.style.backgroundImage = "url('/assets/menu/main.jpg')";
        });
    });
});