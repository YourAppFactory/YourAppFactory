<div class="container" id="contact">
    <form class="form" id="contactForm">
        <h2 class="form__title">{%contact_title%}</h2>
        <div class="form__group">
            <label for="name" class="form__label">{%contact_name%}</label>
            <input type="text" id="name" name="name" class="form__input" required>
        </div>
        <div class="form__group">
            <label for="email" class="form__label">{%contact_email%}</label>
            <input type="email" id="email" name="email" class="form__input" required>
        </div>
        <div class="form__group">
            <label for="message" class="form__label">{%contact_message%}</label>
            <textarea id="message" name="message" class="form__textarea" required></textarea>
        </div>
        <button class="form__btn">{%contact_send%}</button>
    </form>
</div>