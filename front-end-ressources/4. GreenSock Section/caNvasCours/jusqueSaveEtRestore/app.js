const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

//comment rendre modifier la hauteur et la largeur
// canvas.setAttribute('width', '500');
// canvas.setAttribute('height', '500');


//comment rendre responsive

window.addEventListener('resize', function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
})
function init() {
    //save et restore
    ctx.fillRect(0, 0, 150, 150)
    ctx.save();

    ctx.fillStyle = "red";
    ctx.fillRect(15, 15, 120, 120);

    ctx.save();

    ctx.fillStyle = "blue";
    ctx.fillRect(30, 30, 90, 90);

    ctx.restore();
    ctx.fillRect(45, 45, 60, 60)
}
init();


// ctx.fillStyle='rgba(200, 0, 0, 0.5)';//remplissage couleur
// ctx.fillRect(50, 50, 100, 50);//ca creer un rectangle x y largeur et hauteur
// ctx.clearRect(0,0, 302, 152)
// ctx.strokeRect(50, 50, 100, 50);//bordure seulement


// ctx.beginPath(); // ca démarre le déssin
// ctx.lineWidth = '8'; // largeur de bordure
// ctx.strokeStyle = 'green'; // couleur de bordure
// ctx.rect(50, 50, 100, 50);//on dessine le rect
// ctx.stroke(); // on dessine le contour
// ctx.fill()// on le remplit


// creer un dégradé de 36 carrés
// for (let i = 0; i < 6; i++) {
//     for (j = 0; j < 6; j++) {
//         ctx.fillStyle = `rgb(${255-42.5 * i}, ${255-42.5*j}, ${42.5*i})`;
//         ctx.fillRect(j*25, i*25, 25, 25)
//     }
// }

// creer un triangle
// ctx.beginPath();
// ctx.moveTo(75, 50);
// ctx.lineTo(100, 75);
// ctx.lineTo(100, 25);
// ctx.closePath();
// // ctx.lineTo(75, 50);
// ctx.stroke();
// ctx.fill(); 

// creer un cercle

// ctx.beginPath();
// ctx.arc(75, 75, 50, 0, 2 * Math.PI);
// ctx.moveTo(75, 75);
// ctx.lineTo(125,75)
// ctx.stroke();
// ctx.fillStyle ="red";
// ctx.fill();


// comment rajouter du texte
    // ctx.font = '40px serif';
    // ctx.strokeText('Hello World', 10, 50) // 10 px a gauche et 50 px du haut jusqu'au pied du texte
    // ctx.fillStyle = "red";
    // ctx.fillText('Hello World', 10, 50) // 10 px a gauche et 50 px du haut jusqu'au pied du texte






