import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let narbartoggler = document.querySelector('.navbar-toggler');
let navbarmobileicon =  document.querySelector('.navbar-toggler-icon');
narbartoggler.onclick = function(){
    navbarmobileicon.classList.toggle("navbar-open");
};



