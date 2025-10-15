<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- <meta property="og:url" content="http://www.yourappfactory.app" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Your App Factory" />
        <meta property="og:description" content="The power of mobile Apps." />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social01.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social02.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social03.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social04.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social05.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social06.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social07.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social08.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social09.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social10.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social11.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social12.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social13.png" />
        <meta property="og:image" content="http://www.yourappfactory.app/build/img/Social/social14.png" />
        <meta property="fb:app_id" content="YOUR_FB_APP_ID" />
         -->

        <title>YourAppFactory - <?php echo tt($title); ?></title>

        <link href="/build/img/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="/build/css/app.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-KKE8BQL4TK"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KKE8BQL4TK');
        </script>
    </head>
    <body <?php echo $home ?? '' ? 'class="home"' : ''; echo $home2 ?? '' ? 'class="home2"' : ''; ?>>

        <?php
            // include_once __DIR__ .'/../templates/loading-screen.php';
            include_once __DIR__ .'/../templates/new-header.php';
            echo $content; 
            include_once __DIR__ .'/../templates/new-footer.php'; 
        ?>

    <script type="module" src="/build/js/app.js"></script>
    
        <?php
            echo $script ?? '';
        ?>
            
    </body>
</html>

