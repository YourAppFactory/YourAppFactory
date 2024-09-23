import { banner, bannerTitle, serviceIntro, serviceList } from './selectors.js';
import { readLang } from '../base/functions.js';

export async function fetchServices() {
    try {
        const lang = await readLang();
        const url = window.location.origin + '/api/yourappfactory/content-services';
        const result = await fetch(url);
        const data = await result.json();
        const servicesData = data.businessTypes;
        createBanner(servicesData, lang);
    } catch (error) {
        console.error('Error fetching:', error);
    }
}

function createBanner(servicesData, lang){
    //read current url
    const url = window.location.href;
    const urlArr = url.split('/');
    const currentUrl = urlArr[urlArr.length - 1];
    //get the current service that matches the url with the key
    const currentService = servicesData[currentUrl];
    console.log(currentService);
    //create the banner
    banner.style.backgroundImage = `url(${currentService.bannerImage})`;
    bannerTitle.textContent = currentService.bannerTitle[lang];
    console.log(serviceIntro);
    serviceIntro.textContent = currentService.intro[lang];

    //create the list
    currentService.functionalities[lang].forEach(service => {
        console.log(service.title);
        const listItem = document.createElement('li');
        listItem.classList.add('banner__service__list__item');
        const listItemSpan = document.createElement('span');
        listItemSpan.classList.add('bold');
        listItemSpan.textContent = service.title +': ';
        listItem.textContent = service.content;
        listItem.prepend(listItemSpan);
        serviceList.appendChild(listItem);
    });
}