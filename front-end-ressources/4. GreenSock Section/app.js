const img1=document.querySelector('.img1');
const images =document.querySelectorAll('.img-test');
gsap.from(img1, {x:-50, duration:1, ease: "rough({ template: none.out, strength: 1, points: 20, taper: none, randomize: true, clamp: false})", y: -200 })
// gsap.from(img1, {x:'-500px', duration:1})
// gsap.fromTo(img1, {x:'-500px'}, {x:250,duration: 1})

// gsap.fromTo(images[0], {x:'-500px'}, {x:250,duration: 1})
