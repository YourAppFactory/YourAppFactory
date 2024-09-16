import { selectLang, slidesContainer } from "./selectors.js";
import { chooseLang } from "./language.js";
import { fetchSlides } from "./slider.js";
import { menuResponsive } from "./UI.js";

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
        menuResponsive();
    }
}

export default App;
