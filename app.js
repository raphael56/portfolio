const btnMenu = document.querySelector('.btn1');
const menu = document.querySelector('.liste-nav')

btnMenu.addEventListener('click', ()=>{
    btnMenu.classList.toggle('active')
    menu.classList.toggle('active')
    
})
const allLinks =document.querySelectorAll('.item-nav');

allLinks.forEach(item=>{
    item.addEventListener('click',()=>{
        btnMenu.classList.toggle('active')
    menu.classList.toggle('active')
    })
})