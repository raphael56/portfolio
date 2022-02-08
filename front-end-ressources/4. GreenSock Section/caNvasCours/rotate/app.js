const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');



canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
})
function init() {
   
    ctx.beginPath(); //pour identifier le point d'origine
    ctx.arc(150, 150, 1, 0, 2 * Math.PI);
    ctx.stroke();

    ctx.translate(150, 150); //origine de translate
    ctx.rotate(180*Math.PI/180); //pour convertir de deg en radian
    ctx.fillRect(50, 50, 100, 150);
   
    
}
init();


