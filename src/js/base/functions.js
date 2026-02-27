import { dashboardContent, body, topBtn } from '../UI/selectors.js';

export async function readLang(){
    try{
        const resultado = await fetch(window.location.origin+'/api/yourappfactory/language');
        const data = await resultado.json();
        return data;
    }catch(error){
        console.log(error);
    }
}

//Leer el lang.json
export async function readJSON(){
    try{
        const resultado = await fetch(window.location.origin+'/api/yourappfactory/alerts', {mode: 'cors'});
        const data = await resultado.json();
        return data;
    }catch(error){
        console.log(error);
    }
}

export function normalizeText(text) {
    return text.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
}

export async function deleteItem(e){
    e.preventDefault();

    const lang = await readLang();
    const alerts = await readJSON();
    if(e.target.classList.contains('btn-delete')){
        const id = e.target.value;
        dashboardContent.classList.add('overlay');

        const alertContainer = document.createElement('div');
        alertContainer.classList.add('modal-alert--active');

        const alertDiv = document.createElement('DIV');
        alertDiv.classList.add('modal-alert');

        const alertIcon = document.createElement('I');
        alertIcon.classList.add('fa-solid', 'fa-circle-exclamation', 'modal-alert__icon');

        const alertTitle = document.createElement('H3');
        alertTitle.classList.add('modal-alert__title');
        alertTitle.textContent = alerts['delete_item'][lang];

        const alertText = document.createElement('P');
        alertText.classList.add('modal-alert__text');
        alertText.textContent = alerts['delete_confirmation'][lang];

        const alertButtons = document.createElement('DIV');
        alertButtons.classList.add('modal-alert__buttons');

        const alertCancelButton = document.createElement('BUTTON');
        alertCancelButton.classList.add('modal-alert__btn', 'modal-alert__btn--cancel');
        alertCancelButton.textContent = alerts['cancel'][lang];
        alertCancelButton.onclick = closeAlert;

        const btnClose = document.createElement('button');
        btnClose.classList.add('deleteModal__btn-close');
        btnClose.innerHTML = '<i class="fas fa-times"></i>';
        btnClose.onclick = closeAlert;

        const btnDelete = document.createElement('button');
        btnDelete.classList.add('btn-delete');
        btnDelete.textContent = alerts['delete'][lang];
        btnDelete.value = id;
        btnDelete.dataset.type = e.target.dataset.type;
        btnDelete.dataset.role = e.target.dataset.role;
        btnDelete.dataset.item = e.target.dataset.item;
        loader(btnDelete);

        //redirect to delete route
        btnDelete.onclick = (e) => {
           if( e.target.dataset.type === undefined || e.target.dataset.type === 'undefined'){
                window.location.href = `/${e.target.dataset.role}/${e.target.dataset.item}/delete?id=${e.target.value}`;
            }
            else{
                window.location.href = `/${e.target.dataset.role}/${e.target.dataset.item}/delete?id=${e.target.value}&type=${e.target.dataset.type}`;
            }
        }

        //Agregar botones al div de botones
        alertButtons.appendChild(alertCancelButton);
        alertButtons.appendChild(btnDelete);
        alertDiv.appendChild(alertIcon);
        alertDiv.appendChild(alertTitle);
        alertDiv.appendChild(alertText);
        alertDiv.appendChild(alertButtons);
        alertDiv.appendChild(btnClose);
        alertContainer.appendChild(alertDiv);
        body.appendChild(alertContainer);
    }
}

export function loader(button){
    // Hide the loading screen when the page is fully loaded
    document.getElementById('loadingScreen').style.display = 'none';

    //Add event listener for the button given to trigger the loader
    button.addEventListener('click', showLoadingScreen);
    
    // Function to show the loading screen
    function showLoadingScreen() {
        document.getElementById('loadingScreen').style.display = 'flex';
    }
}

//set the loader on page load
export function loaderPage() {
    // Show the loading screen immediately
    const loadingScreen = document.getElementById('loadingScreen');
    loadingScreen.style.display = 'flex';

    // Hide the loading screen once the window is fully loaded
    window.addEventListener('load', () => {
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 1800); // Hide loader after 1.8 seconds
    });

    // Fallback: Hide the loading screen after 3 seconds, even if 'load' event hasn't fired
    setTimeout(() => {
        loadingScreen.style.display = 'none';
    }, 3000);
}



export function closeAlert(){
    const alert = document.querySelector('.modal-alert--active');
    if(alert){
        alert.remove();
    }
}

export function goToTop(){
    topBtn.addEventListener('click', () => {
        //add a smooth scroll to top
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
}
