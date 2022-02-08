const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const img = new Image();

img.src = 'https://source.unsplash.com/random';


canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
    ctx.drawImage(img, 50, 50);
})
function init() {
   
    img.addEventListener('load', function() {
        ctx.drawImage(img, 50, 50);
    })
   
    
}
init();


