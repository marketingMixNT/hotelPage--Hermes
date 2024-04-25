import "./bootstrap";
import "./Partials/hamburger";
import "./Partials/preloader";
import "./Partials/smoothScroll";
import "./Partials/headerScroll";
import "./Partials/marquee";
import "./Partials/menuImages";
import "./Partials/swiper";
import "./Partials/swiperRoomPhotos";




window.addEventListener('scroll', () => {
    const h2Element = document.querySelector('#invisible');
    if(window.scrollY >= 15) {
        h2Element.classList.add('opacity-0');
    } else {
        h2Element.classList.remove('opacity-0');
    }
});


window.addEventListener('scroll', () => {
    const divElement = document.querySelector('div.absolute.top-0.left-0.right-0.bottom-0.bg-black');
    let opacityValue = 0.3 + (window.scrollY / 1000) * 0.4;
    if(opacityValue < 0.3) opacityValue = 0.3;
    if(opacityValue > 0.8) opacityValue = 0.8;
    divElement.style.opacity = opacityValue;
});