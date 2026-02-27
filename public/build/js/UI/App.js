import { banner, gridUsers, passbtn, selectLang, slidesContainer, loader, promoClose, topBtn } from "./selectors.js";
import { chooseLang } from "./language.js";
import { fetchSlides } from "./slider.js";
import { menuResponsive, showPassword, closePromo } from "./UI.js";
import { fetchServices } from "./services.js";
import { consultUsers } from "./users.js";
import { goToTop, loaderPage } from "../base/functions.js";

class App {
    constructor() {
        this.initApp();
    }

    initApp() {
        if(selectLang){
            chooseLang();
        }
        if(slidesContainer){
            fetchSlides();
        }
        if(banner){
            fetchServices();
        }
        if(passbtn){
            showPassword();
        }
        if(gridUsers){
            consultUsers();
        }
        if(loader){
            loaderPage();
        }
        if(promoClose){
            closePromo();
        }
        if(topBtn){
            goToTop();
        }
        menuResponsive();
        
    }
}

export default App;
