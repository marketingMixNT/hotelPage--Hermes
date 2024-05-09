const hamburgerBtns = document.querySelectorAll('.hamburger')
const menu = document.querySelector('#menu')


const hamburgerHandler = ()=>{
    hamburgerBtns.forEach((btn)=>{
        btn.classList.toggle('is-active')
    })
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
}


hamburgerBtns.forEach((btn)=>{
    
    btn.addEventListener('click',hamburgerHandler)
}
    
)