<header class="header <?php echo !isset($home) ? 'header--regular' : ''?>">
    <div class="header__bar">
        <a class="header__logo--link" href="/">
            <img class="header__logo" src="/build/img/logo.png" alt="Logo">
        </a>

        <div class="header__right">
            <div class="header__lang">
                <div class="header__select no-display" id="language">
                    <button class="header__lang--btn btn-lang" value="en">English</button>
                    <button class="header__lang--btn btn-lang" value="es">Español</button>
                </div>
            </div>
           
            <nav class="header__nav">
                <ul class="header__nav--ul">
                    <a class="header__nav--link" href="/">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--home');?>
                        </li>
                    </a>
                    <a class="header__nav--link" href="/about">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--about');?>
                        </li>
                    </a>
                    <a class="header__nav--link" href="#yourBusiness">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--business');?>
                        </li>
                    </a>
                    <a class="header__nav--link" href="/marketing">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--marketing');?>
                        </li>
                    </a>
                    <a class="header__nav--link" href="#contact">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--contact');?>
                        </li>
                    </a>
                </ul>
            </nav>
            <div class="header__nav--mobile only--tablet">
                <i class="fa fa-bars pointer" id="btnMenu"></i>
            </div>
        </div>
    </div>
</header>