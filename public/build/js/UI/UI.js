import { menu, mobileMenu, btnMenu } from './selectors.js';

export function menuResponsive(){
    if(mobileMenu){
        mobileMenu.addEventListener('click', toggleMenu);   
    }
}

function toggleMenu() {
    menu.classList.toggle('show');
    btnMenu.classList.toggle('fa-bars');
    btnMenu.classList.toggle('fa-xmark');
}