<?php
 $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>
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
                    <a class="header__nav--link" href="/#yourBusiness">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--business');?>
                        </li>
                    </a>
                    <a class="header__nav--link" href="/pricing">
                        <li class="header__nav--item">
                                <?php echo tt('nav_link--pricing');?>
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
    <a href="<?php echo $lang == 'es' ? "https://wa.me/12028679694?text=Hola%2C%20he%20visto%20tu%20sitio%20web%20y%20quiero%20m%C3%A1s%20informaci%C3%B3n" : "https://wa.me/12028679694?text=Hello%2C%20I%27ve%20seen%20your%20website%20and%20would%20like%20more%20information"; ?> " class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</header>