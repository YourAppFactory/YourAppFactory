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
    let currentUrl = urlArr[urlArr.length - 1];
    //ignore everything after the question mark
    const questionMarkIndex = currentUrl.indexOf('?');
    if (questionMarkIndex !== -1) {
        currentUrl = currentUrl.slice(0, questionMarkIndex);
    }
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
        const listItem = document.createElement('li');
        listItem.classList.add('banner__service__list__item');
        const listItemSpan = document.createElement('span');
        listItemSpan.classList.add('bold');
        listItemSpan.textContent = service.title +': ';
        listItem.textContent = service.content;
        const iconItem = document.createElement('i');
        iconItem.classList.add('fas', 'banner__service__list__icon', service.icon);
           
        listItem.prepend(iconItem);
        listItem.prepend(listItemSpan);
        serviceList.appendChild(listItem);
    });
}