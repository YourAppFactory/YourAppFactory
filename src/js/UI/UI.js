import { menu, mobileMenu, btnMenu, passbtn } from './selectors.js';

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

export function showPassword(){
    passbtn.forEach(btn => {
        btn.addEventListener('click', () => {
            if(btn.classList.contains('fa-eye-slash')){
                btn.classList.remove('fa-eye-slash');
                btn.classList.add('fa-eye');
                btn.previousElementSibling.type = 'password';
            }else{
                btn.classList.remove('fa-eye');
                btn.classList.add('fa-eye-slash');
                btn.previousElementSibling.type = 'text';
            }
        });
    });
}
