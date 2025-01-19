<main class="container--form">
    <h1>{%profile_title%}</h1>

    <?php
        require_once __DIR__ . '/../templates/alerts.php';
    ?>

    <form class="form" method="POST" action="/admin/profile">
        <div class="form__group">
            <label class="form__group__label" for="name">{%profile_name_label%}</label>
            <input class="form__group__input" type="text" id="name" name="name" value="<?php echo $user->name; ?>">
        </div>
        <div class="form__group">
            <label class="form__group__label" for="lastname">{%profile_lastname_label%}</label>
            <input class="form__group__input" type="text" id="lastname" name="lastname" value="<?php echo $user->lastname; ?>">
        </div>
        <div class="form__group">
            <label class="form__group__label" for="email">{%profile_email_label%}</label>
            <input class="form__group__input" type="email" id="email" name="email" value="<?php echo $user->email; ?>">
        </div>
        <div class="form__group passview">
            <label class="form__group__label" for="password">{%profile_password_label%}</label>
            <input class="form__group__input" type="password" id="password" name="password">
            <i class="fa fa-eye passview__icon"></i>
        </div>
        <div class="form__group passview">
            <label class="form__group__label" for="password2">{%profile_password_confirm_label%}</label>
            <input class="form__group__input" type="password" id="password2" name="password2">
            <i class="fa fa-eye passview__icon"></i>
        </div>
        <input class="form__group__btn" type="submit" value="{%update_btn%}">

    </form>
</main>