<?php
    if($promo->status === '1'){
        @include_once __DIR__.'/../templates/promo.php';
    }
?>

<main class="main-2">
    <h1 class="main-2__title">Affordable Professional Productions</h1>
    <h2 class="main-2__subtitle">Digital solutions - End to end </h2>

    <div class="main-2__cards">
        <div class="main-2__card card--top">
            <img class="main-2__card__icon" src="https://www.shutterstock.com/image-photo/lock-phone-password-mobile-cybersecurity-600w-2461564955.jpg" alt="">
            <h3 class="main-2__card__title">Digital Transformation</h3>
            <p class="main-2__card__description">Empowering businesses to leverage digital technologies for improved efficiency and growth.</p>
            <a href="/digital-transformation" class="main-2__card__link">Transform your business</a>
        </div>
        <div class="main-2__card card--center">
            <img class="main-2__card__icon" src="https://www.shutterstock.com/image-photo/event-development-seminar-business-people-600w-2485558515.jpg" alt="App Development Icon">
            <h3 class="main-2__card__title">Training</h3>
            <p class="main-2__card__description">Comprehensive training programs to upskill your team and drive innovation.</p>
            <a href="/training" class="main-2__card__link">Learn More</a>
        </div>
        <div class="main-2__card card--bottom">
            <img class="main-2__card__icon" src="https://www.shutterstock.com/image-photo/people-group-business-meeting-analytics-600w-2475089495.jpg" alt="UI/UX Design Icon">
            <h3 class="main-2__card__title">Business Consulting</h3>
            <p class="main-2__card__description">Expert guidance to help businesses optimize their processes and achieve their goals.</p>
            <a href="/business-consulting" class="main-2__card__link">Get Started</a>
        </div>
    </div>
</main>