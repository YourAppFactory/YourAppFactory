<?php
include_once __DIR__ .'/../templates/contact.php';
?>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__left">
            <div class="footer__logo">
                <img src="/build/img/logo.png" alt="Logo">
            </div>
            <div class="footer__nav">
                <ul class="footer__nav--ul">
                    <a class="footer__nav--link" href="https://builder.yourappfactory.app">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--builder');?>
                        </li>
                    </a>
                    <a class="footer__nav--link" href="/login">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--login');?>
                        </li>
                    </a>
                    <!-- <a class="footer__nav--link" href="/privacy">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--privacy');?>
                        </li>
                    </a>
                    <a class="footer__nav--link" href="/terms">
                        <li class="footer__nav--item">
                            <?php echo tt('nav_link--terms');?>
                        </li>
                    </a> -->
                </ul>
            </div>
        </div>
        <div class="footer__right">
            <h3 class="text-blue-light">
                <?php echo tt('footer_title');?>
            </h3>
            <div class="footer__social">
                <a href="https://www.facebook.com/profile.php?id=61558375227349" target="_blank" aria-label="Facebook link">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/yourappfactory.app/" target="_blank" aria-label="Instagram link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/@YourAppFactory-x9p" target="_blank" aria-label="Youtube link">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/company/your-app-factory" target="_blank" aria-label="LinkedIn link">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <p>
            <?php echo tt('footer_rights');?>
        </p>
        <p>
           &copy; <?php echo date('Y');?>
        </p>
    </div>
</footer>