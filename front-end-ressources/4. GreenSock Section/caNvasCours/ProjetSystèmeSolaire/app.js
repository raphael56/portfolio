
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    dessin();
})

const soleil = new Image();
const lune = new Image();
const terre = new Image();

soleil.src = 'https://media.prod.mdn.mozit.cloud/attachments/2012/07/09/1456/941aaa8d98ead9a0d46aef80d02198f7/Canvas_sun.png';
lune.src = 'https://media.prod.mdn.mozit.cloud/attachments/2012/07/09/1443/f76e9601dee50b1c5a55c3bae16a4ad1/Canvas_moon.png';
terre.src = 'https://media.prod.mdn.mozit.cloud/attachments/2012/07/09/1429/e2d55b8d5c9efd75a12112264d4ac091/Canvas_earth.png';

function dessin() {

    ctx.globalCompositeOperation = "destination-over";
    ctx.clearRect(0, 0, 300, 300);
    // dessin orbite terre
    ctx.beginPath();
    ctx.strokeStyle = 'rgba(0, 153, 255, 0.4)';
    ctx.arc(150, 150, 105, 0, Math.PI * 2);
    ctx.stroke();

    //garder le translate par défaut
    ctx.save();
    ctx.translate(150, 150);

    let time = new Date();
    ctx.rotate(((2 * Math.PI / 60) * time.getSeconds()+((2*Math.PI/60000*time.getMilliseconds()))));
    

    //mettre la terre sur l'orbite
    ctx.translate(105, 0);
    ctx.drawImage(terre, -12, -12);

    //lune
    ctx.rotate(((2 * Math.PI / 6) * time.getSeconds() +((2*Math.PI/6000*time.getMilliseconds()))));
    ctx.translate(0, 28);
    ctx.drawImage(lune, -3.5, -3.5);
   
    //on restore les valeurs de translate
    ctx.restore();

    //on dessine le soleil

    ctx.drawImage(soleil, 0, 0);

    requestAnimationFrame(dessin);
}

dessin();