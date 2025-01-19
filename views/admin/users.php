<main class="container">
    <h1>{%admin_users_title%}</h1>
    <div class="dashboard__total">
        <p><span>{%admin_users_total%}: </span>
            <?php echo count($users) - 1; ?>
        </p>

        <div class="dashboard__search">
            <input class="dashboard__total__type-search" type="text" id="users-search" placeholder="{%users_search_placeholder%}"/>
        </div>
    </div>

    <a href="/admin/users/new" class="btn-submit">
        <i class="fa-solid fa-plus"></i>
        {% users_new_submit_btn%}
    </a>

    <div class="cards">
        <div class="cards__container" id="grid-users">
        </div>
    </div>
</main>