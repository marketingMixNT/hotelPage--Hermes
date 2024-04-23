import "./bootstrap";
import "./Partials/hamburger";
import "./Partials/preloader";
import "./Partials/smoothScroll";
import "./Partials/headerScroll";
import "./Partials/swiper";

import marquee from "vanilla-marquee";

new marquee(document.getElementById("marquee"), {
    speed: 100,
    // duplicated: true,
});
