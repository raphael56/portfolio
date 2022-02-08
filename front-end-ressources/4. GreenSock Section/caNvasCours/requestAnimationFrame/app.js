const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');



canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();

})

var x = 200;
var v = 5;
function init() {
    requestAnimationFrame(init)
    ctx.clearRect(0, 0, innerWidth, innerHeight)
    ctx.beginPath()
    ctx.arc(x, 200, 60, 0, Math.PI * 2)
    ctx.strokeStyle = "crimson"
    ctx.stroke()

    if (x+60 > innerWidth || x-60 < 0) {
        v= -v
    }

    x += v;
   
    
}
init();


