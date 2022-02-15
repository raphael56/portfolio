const btnMenu = document.querySelector('.btn-rond-menu')
const nav = document.querySelector('nav-gauche')
const allItemNav = document.querySelectorAll('.nav-menu-item')
const lign = document.querySelector('.cont-ligne')


btnMenu.addEventListener('click', () => {
    lign.classList.toggle('active')
})