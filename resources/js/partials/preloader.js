const loader = document.querySelector('#preloader')

window.addEventListener('load', () => {
    loader.style.transform = 'translateY(-100%)';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});