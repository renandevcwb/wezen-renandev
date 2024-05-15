'use_strict';

const desiredElement = document.getElementById('navTop'); // elemento alvo
const pixelsAmount = '50'; // Quantidade de pixels a contar do TOP até definir a cor

window.addEventListener('scroll', function() {
    if (window.scrollY > pixelsAmount) {
    	desiredElement.classList.add('bg-top'); // adiciona classe "changeColor"
    } else {
      desiredElement.classList.remove('bg-top'); // remove classe "changeColor"
    }
});
