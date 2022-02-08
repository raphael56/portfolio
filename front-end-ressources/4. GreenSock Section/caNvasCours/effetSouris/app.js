const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');



canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();

})

let x = 200;
let y = 200
let v = 5;
function init() {
    requestAnimationFrame(init);
    ctx.clearRect(0, 0, innerWidth, innerHeight);

    ctx.beginPath();
    ctx.arc(x, y, 60, 0, Math.PI * 2);
    ctx.strokeStyle = "crimson";
    ctx.stroke();

    canvas.addEventListener('click', function (e) {
        
        x = e.clientX;
        y = e.clientY;

        console.log(e.clientX, e.clientY)
    })
}
init();


