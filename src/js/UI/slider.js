import { slidesContainer } from './selectors.js';
import { readLang } from '../base/functions.js';

let slideIndex = 1; // Start with the first slide
let timer; // Timer to handle automatic slide changes

// Async function to fetch language and slides
export async function fetchSlides() {
    try {
        const lang = await readLang(); // Await the language
        const url = window.location.origin + '/api/yourappfactory/main-slider';
        const result = await fetch(url);
        const data = await result.json();
        const slidesData = data.slides;
        console.log(slidesData);
        createSlides(slidesData, lang); // Pass language to createSlides
        showSlides(slideIndex); // Start the slider by showing the first slide
        startAutoSlide(); // Start auto slide rotation

        // Attach event listeners to the buttons
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => changeSlide(-1));
            nextBtn.addEventListener('click', () => changeSlide(1));
        } else {
            console.error('Slider buttons not found!');
        }
    } catch (error) {
        console.error('Error fetching slides:', error);
    }
}

// Create the slides based on the fetched data
function createSlides(slidesData, lang) {
    slidesData.forEach((slide) => {
        const sliderFrame = document.createElement('div');
        sliderFrame.classList.add('slider__slides');
        sliderFrame.id = 'slides';
        sliderFrame.style.backgroundImage = `url(${slide.background})`;

        const sliderSlide = document.createElement('div');
        sliderSlide.classList.add('slider__slide');

        const sliderContent = document.createElement('div');
        sliderContent.classList.add('slider__slide__content');

        const sliderTitle = document.createElement('h2');
        sliderTitle.classList.add('slider__slide__title');
        sliderTitle.textContent = slide.title[lang];

        const sliderText = document.createElement('p');
        sliderText.classList.add('slider__slide__text');
        sliderText.textContent = slide.text[lang];

        const sliderList = document.createElement('ul');
        sliderList.classList.add('slider__slide__list');

        slide.list[lang].forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item;
            sliderList.appendChild(listItem);
        });

        const sliderLink = document.createElement('a');
        sliderLink.classList.add('slider__slide__link');
        sliderLink.href = slide.link;
        sliderLink.textContent = 'Learn more';

        const sliderImg = document.createElement('img');
        sliderImg.classList.add('slider__slide__img');
        sliderImg.src = slide.image;
        sliderImg.alt = slide.title[lang]; // Set alt text for the image

        sliderContent.appendChild(sliderTitle);
        sliderContent.appendChild(sliderText);
        sliderContent.appendChild(sliderList);
        sliderContent.appendChild(sliderLink);
        sliderSlide.appendChild(sliderContent);
        sliderSlide.appendChild(sliderImg);
        sliderFrame.appendChild(sliderSlide);
        slidesContainer.appendChild(sliderFrame);
    });
}

// Show the correct slide based on slideIndex
function showSlides(n) {
    const slides = document.querySelectorAll('.slider__slide');

    // Loop back if the index exceeds the number of slides
    if (n > slides.length) {
        slideIndex = 1;
    }

    // Loop to the last slide if n is less than 1
    if (n < 1) {
        slideIndex = slides.length;
    }

    // Hide all slides
    slides.forEach(slide => {
        slide.style.display = 'none';
    });

    // Show the current slide
    slides[slideIndex - 1].style.display = 'flex';
}

// Change slides manually
export function changeSlide(n) {
    clearTimeout(timer); // Stop auto slide rotation while manually changing
    slideIndex += n;
    showSlides(slideIndex);
    startAutoSlide(); // Restart auto rotation after manual change
}

// Start automatic slide rotation
function startAutoSlide() {
    timer = setTimeout(() => {
        slideIndex++;
        showSlides(slideIndex);
        startAutoSlide(); // Continue rotating
    }, 5000); // Slide changes every 5 seconds
}
