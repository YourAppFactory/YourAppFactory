<div class="form__group">
    <label class="form__group__label" for="name">{%admin_users_name_label%}</label>
    <input class="form__group__input" type="text" id="name" name="name" value="<?php echo $user->name; ?>">
</div>
<div class="form__group">
    <label class="form__group__label" for="lastname">{%admin_users_lastname_label%}</label>
    <input class="form__group__input" type="text" id="lastname" name="lastname" value="<?php echo $user->lastname; ?>">
</div>
<div class="form__group">
    <label class="form__group__label" for="email">{%admin_users_email_label%}</label>
    <input class="form__group__input" type="email" id="email" name="email" value="<?php echo $user->email; ?>">
</div>
<div class="form__group passview">
    <label class="form__group__label" for="password">{%admin_users_password_label%}</label>
    <input class="form__group__input" type="password" id="password" name="password">
    <i class="fa fa-eye passview__icon"></i>

</div>
<div class="form__group passview">
    <label class="form__group__label" for="password2">{%admin_users_password_confirm_label%}</label>
    <input class="form__group__input" type="password" id="password2" name="password2">
    <i class="fa fa-eye passview__icon"></i>

</div>
<div class="form__group">
    <label class="form__group__label" for="role">{%admin_users_role_label%}</label>
    <select class="form__group__input" name="role" id="role">
        <option selected disabled>
            {%admin_role_select_default%}
        </option>
        <?php foreach ($levels as $role): ?>
            <option value="<?php echo $role->id; ?>">
                <?php echo $role->level; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
