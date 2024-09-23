import { banner, selectLang, slidesContainer } from "./selectors.js";
import { chooseLang } from "./language.js";
import { fetchSlides } from "./slider.js";
import { menuResponsive } from "./UI.js";
import { fetchServices } from "./services.js";

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
        menuResponsive();
    }
}

export default App;
