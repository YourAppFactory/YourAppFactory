<?php
include_once __DIR__ .'/../templates/contact.php';
?>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__left">
            <div class="footer__logo">
                <img src="/build/img/logo.png" alt="Logo">
            </div>
            <div class="footer__social">
                <a href="https://www.facebook.com/yourappfactory" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/yourappfactory" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.twitter.com/yourappfactory" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/yourappfactory" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="footer__center">
            <div class="footer__nav">
                <ul class="footer__nav--ul">
                    <a class="footer__nav--link" href="/">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--home');?>
                        </li>
                    </a>
                    <a class="footer__nav--link" href="/about">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--about');?>
                        </li>
                    </a>
                    <a class="footer__nav--link" href="/marketing">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--business');?>
                        </li>
                    </a>
                    <a class="footer__nav--link" href="/contact">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--contact');?>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="footer__right">
            <div class="footer__contact">
                <div class="footer__contact--item">
                    <i class="fas fa-phone-alt"></i>
                    <p>+1 123 456 7890</p>
                </div>
                <div class="footer__contact--item">
                    <i class="fas fa-envelope"></i
                    ><p>
                        <a href="mailto:
                        <?php echo tt('email');?>"><?php echo tt('email');?>
                        </a>
                    </p>
                </div>
                <div class="footer__contact--item">
                    <i class="fas fa-map
                    "></i>
                    <p>
                        <?php echo tt('address');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <p>
            <?php echo tt('copy');?>
        </p>
    </div>
</footer>