<div class="container--form">
    <h1>{%admin_edit_promo_title%}</h1>

    <?php foreach($alerts as $alert): ?>
        <div class="alert alert--<?php echo $alert; ?>">
            {%<?php echo $alert; ?>%}
        </div>
    <?php endforeach; ?>

    <form method="POST" class="form" enctype="multipart/form-data">
        <div class="form__group">
            <label class="form__group__label" for="status">{%promo_desktop_label%}</label>
            <input class="form__group__input" type="file" name="promo" id="promo">
        </div>
        <div class="form__group">
            <label class="form__group__label" for="status">{%promo_mobile_label%}</label>
            <input class="form__group__input" type="file" name="promo_mobile" id="promo_mobile">
        </div>
        <input type="submit" value="{%promo_submit_btn%}" class="btn-submit">
    </form>
</div>