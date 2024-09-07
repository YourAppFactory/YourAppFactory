<header class="header">
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
                <li class="header__nav--item">
                        <a class="header__nav--link" href="/">
                            <?php echo tt('nav_link--home');?>
                        </a>
                    </li>
                    <li class="header__nav--item">
                        <a class="header__nav--link" href="/about">
                            <?php echo tt('nav_link--about');?>
                        </a>
                    </li>
                    <li class="header__nav--item">
                        <a class="header__nav--link" href="/marketing">
                            <?php echo tt('nav_link--business');?>
                        </a>
                    </li>
                    <li class="header__nav--item">
                        <a class="header__nav--link" href="/contact">
                            <?php echo tt('nav_link--contact');?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>