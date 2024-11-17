<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="<?php
            sessionActive();
        ?>" class="dashboard__enlace <?php admin_page('dashboard');?>">
            <i class="fas fa-home dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                <?php echo tt('sidebar_index');?>
            </span>
        </a>

        <a href="/admin/profile" class="dashboard__enlace <?php admin_page('profile');?>">
            <i class="fa-solid fa-user dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                <?php echo tt('sidebar_profile');?>
            </span>
        </a>

        <a href="/admin/users" class="dashboard__enlace <?php admin_page('users');?>">
            <i class="fa-solid fa-users dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                <?php echo tt('sidebar_users');?>
            </span>
        </a>
</aside>