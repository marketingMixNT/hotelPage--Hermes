const loader = document.querySelector('#preloader')
const loaderLogo = document.querySelector('#preloader-logo')

window.addEventListener('load', () => {
    loader.style.transform = 'translateY(-100%)';
    loaderLogo.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});