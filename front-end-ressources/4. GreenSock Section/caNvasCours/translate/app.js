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
   


    ctx.translate(50, 50);
    ctx.fillRect(0, 0, 100, 150);
    ctx.fillRect(100, 100, 100, 150)
    //réinitialiser
    ctx.setTransform(1, 0, 0, 1, 0, 0)
    ctx.fillStyle = "red";
    ctx.fillRect(0, 0, 100, 150)
}
init();


