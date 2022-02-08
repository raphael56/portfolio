// les fonctions pures
// function auCarre(n) {
//     return n * n;
// }
// console.log(auCarre(3));




// Fonction d'ordre sup et immutabilité

// const tabNumber = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// const chekImpair = n => n % 2 !== 0;

// console.log(tabNumber.filter(chekImpair));



// const words = ['diplomatie', 'gunt', 'embargo', 'nucleaire', 'sobriété', 'abcd'];
// const checkLength = word => word.length > 10;

// console.log(words.filter(checkLength))

// Fonctions comme expression

// const carre = n => n * n;
// const checkType = n => typeof (n);

// const manipuleData = (valeur, carre, type) => {
     
//     let valeurFinale;

//     valeurFinale = carre(valeur);

//     return `La valeur ${valeur} renvoie un carré de ${valeurFinale} et est du type: ${type(valeur)}`;

// }

// console.log(manipuleData(4, carre, checkType))


// const voiture = {
//     marque : 'Ford', 
//     annee : '1980', 
//     couleur : 'blanche',
//     rouler() {
//         console.log(this.annee, this.marque, 'Vrooom');
//     }
// }

// voiture.rouler()

// console.log(voiture.hasOwnProperty('marque'));
// // manière de savoir si l'objet à cette propriété

// console.log(Object.values(voiture))
// //renvoie toutesles valeurs des propriétés de l'objet

// console.log(Object.keys(voiture))
// //renvoie toutes les clefs/propriétés de l'objet


// class voiture {
//     constructor(marque, annee) {
//         this.marque = marque;
//         this.annee = annee; 
//     }
// }

// const voiture1 = new voiture('Ford', 2009);
// const voiture2 = new voiture('Toyota', 2011);
// const voiture3 = new voiture('Peugeot', 2020);

// console.log(voiture1)
// console.log(voiture2)
// console.log(voiture3)


//creer une chaine de caractère objet
// let str = new String('abc')
// console.log (str)

// let nvDate = new Date();
// console.log(nvDate)


// creer des méthodes dans nos classes

// class voiture {
//     constructor(marque, annee) {
//         this.marque = marque;
//         this.annee = annee; 
//     }

//     dateSortie() {
//         console.log(`Date de sortie de cette voiture ${this.annee}`);
//     }
// }

// const voiture1 = new voiture('Ford', 2009);
// const voiture2 = new voiture('Toyota', 2011);
// const voiture3 = new voiture('Peugeot', 2020);

// console.log(voiture1);
// console.log(voiture2);
// console.log(voiture3);

// voiture1.dateSortie();
// voiture2.dateSortie();
// voiture3.dateSortie();

// method chaining
// class voiture {
//         constructor(marque, annee, option) {
//             this.marque = marque;
//             this.annee = annee; 
//             this.option = option;
//         }
    
//     rajoutOption(nomOption){
//         this.option++;
//         console.log(`Rajout de ${nomOption}, nombre d'options : ${this.option}`);
//         return this;
//     }
    
//         dateSortie() {
//             console.log(`Date de sortie de cette voiture ${this.annee}`);
//         }
//     }
    
// const voiture1 = new voiture('Ford', 2009, 0);
    
// voiture1
//     .rajoutOption('2portes')
//     .rajoutOption('Peinture')
//     .rajoutOption('cabriolet');

//     console.log(voiture1)


// sous classe

// class voiture {
//     constructor(marque, annee, option) {
//         this.marque = marque;
//         this.annee = annee; 
//         this.option = option;
//     }

// rajoutOption(nomOption){
//     this.option++;
//     console.log(`Rajout de ${nomOption}, nombre d'options : ${this.option}`);
//     return this;
// }

//     dateSortie() {
//         console.log(`Date de sortie de cette voiture ${this.annee}`);
//     }
// }

// class Moto extends voiture {
//     assurance() {
//     console.log("Vous avez pris une assurance")
// }
// }
// const moto1 = new Moto('suzuki', '2012', 'verte');
// console.log(moto1)
// console.log(moto1.assurance())

// prototype

