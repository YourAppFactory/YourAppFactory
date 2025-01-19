<h1>{% <?php echo $title;?> %}</h1>

<a href="/admin/users" class="btn-back">
    <i class="fa-solid fa-arrow-left"></i>
    {%admin_users_back_btn%}
</a>

<?php
    include_once __DIR__.'/../templates/alerts.php';
?>

<div class="container--form">
    <form class="form" method="POST">
        <legend class="form__legend">{%admin_users_new_legend%}</legend>
        <?php include_once __DIR__.'/form.php'?>
        <input type="submit" value="{%admin_users_submit_btn%}" class="btn-submit">
    </form>
</div>
