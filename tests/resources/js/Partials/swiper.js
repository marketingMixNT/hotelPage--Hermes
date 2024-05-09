import Swiper from "swiper";
// import {  FreeMode } from "swiper/modules";
import { Autoplay } from 'swiper/modules';
import "swiper/swiper-bundle.css";

new Swiper(".cottages", {
    loop: true,
   
    grabCursor: true,
    slidesPerView: 1,
    breakpoints: {
        800:{
            slidesPerView: 2,
        },
        1280:{
            slidesPerView: 3,
        },
        1500: {
            slidesPerView: 3,
        },
    },
    spaceBetween: 80,
    autoplay: {
        delay: 5500,
        disableOnInteraction: true,
    },
    modules: [Autoplay ],
});