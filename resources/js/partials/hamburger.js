const hamburgerBtn = document.querySelector('.hamburger')

const hamburgerHandler = ()=>{
    hamburgerBtn.classList.toggle('is-active')
}


hamburgerBtn.addEventListener('click',hamburgerHandler)