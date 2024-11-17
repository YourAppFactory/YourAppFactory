import { usersInput, gridUsers } from './selectors.js';
import { normalizeText, deleteItem } from '../base/functions.js';

export async function consultUsers(){
    try{
        const result = await fetch(window.location.origin+'/admin/api/consult-users');
        const data = await result.json();
        showUsers(data);
    }catch(error){
        console.log(error);
    }
}
export async function showUsers(data){
    data.forEach(user => {
        const {id, name, lastname, email, role} = user;

        //generar el link para la artist
        const userLink = document.createElement('A');
        userLink.classList.add('cards__card');
        userLink.href = 'admin/user?id='+id;

        //Generar el contenedor de la información del usuario
        const cardUser = document.createElement('DIV');

        const cardInfo = document.createElement('DIV');
        cardInfo.classList.add('cards__info');

        const cardName = document.createElement('P');
        cardName.textContent = name+' '+lastname;
        cardName.classList.add('cards__text', 'cards__text--span', 'text-green', 'text-24');

        const cardEmail = document.createElement('P');
        cardEmail.textContent = email;
        cardEmail.classList.add('cards__text', 'text-20', 'text-yellow');

        const cardRole = document.createElement('P');
        cardRole.textContent = role;
        cardRole.classList.add('cards__text');


        cardInfo.appendChild(cardName);
        cardInfo.appendChild(cardEmail);
        cardInfo.appendChild(cardRole);

        const cardActions = document.createElement('DIV');
        cardActions.classList.add('cards__actions');

        const btnEdit = document.createElement('A');
        btnEdit.classList.add('btn-update');
        btnEdit.href = window.location.origin+'/admin/user/edit?id='+id;

        const iconoLapiz = document.createElement('I');
        iconoLapiz.classList.add('fas', 'fa-pencil-alt', 'no-click');

        btnEdit.appendChild(iconoLapiz);

        const btnDelete = document.createElement('BUTTON');
        btnDelete.classList.add('btn-delete');
        btnDelete.id = 'eliminar';
        btnDelete.value = id;
        btnDelete.dataset.item = 'albums';
        btnDelete.dataset.role = 'music';
        btnDelete.onclick = deleteItem;

        const iconEliminar = document.createElement('I');
        iconEliminar.classList.add('fa-solid', 'fa-trash-can', 'no-click');

        btnDelete.appendChild(iconEliminar);

        cardActions.appendChild(btnEdit);
        cardActions.appendChild(btnDelete);

        cardUser.appendChild(cardInfo);
        cardUser.appendChild(cardActions);

        userLink.appendChild(cardUser);

        gridUsers.appendChild(userLink);
    });
        filterUsers();
}

function filterUsers(){
    usersInput.addEventListener('input', (e) => {
        const seacrh = normalizeText(e.target.value);
        const users = gridUsers.querySelectorAll('.cards__card');

        users.forEach(user => {
            const title = normalizeText(user.textContent);
            if(title.indexOf(seacrh) !== -1){
                user.style.display = 'flex';
                user.style.marginRight = '2rem';
                gridUsers.style.columnGap = '0';
            }else{
                user.style.display = 'none';
            }
        });
    });
}