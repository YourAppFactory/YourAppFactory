import { chooseLang } from "./language.js";
import { selectLang } from "./selectors.js";

class App {
    constructor() {
        this.initApp();
    }

    initApp() {
        if(selectLang){
            chooseLang();
        }
    }
}

export default App;
