<?php
$url="http:/sira10.xarop.com";
$title="Sira10 - El teu espai a la Vila de Gràcia :: Coworking Barcelona";
$description="Necessites un espai de treball o per oferir els teus productes o serveis? A Sira10 trobaràs taules i espais per a treballar, vendre o fer activitats.";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title><?php echo $title;?></title>

    <meta name="description" content="<?php echo $description;?>"/>
    <link rel="canonical" href="<?php echo $url;?>" />
    <meta property="og:locale" content="ca_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $title?>" />
    <meta property="og:description" content="<?php echo $description;?>" />
    <meta property="og:url" content="<?php echo $url;?>" />
    <meta property="og:site_name" content="<?php echo $title;?>" />
    <meta property="og:image" content="<?php echo $url;?>/assets/images/favicon.png">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $description;?>" />
    <meta name="twitter:title" content="<?php echo $title;?>" />
    <meta name="twitter:creator" content="@somespai" />
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/_scss/style.css"> -->
    
</head>

<body>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173508824-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-173508824-1');
    </script>


    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
   
    <?php require_once "_inc/preloader.php";?>

    <?php require_once "_inc/navbar.php";?>

    <?php require_once "_inc/slider.php";?>
    
    <?php require_once "_inc/services.php";?>
    
    <?php //require_once "_inc/portfolio.php";?>

    <?php require_once "_inc/pricing.php";?>

    <?php //require_once "_inc/about.php";?>
    
    <?php //require_once "_inc/testimonial.php";?>

    <?php //require_once "_inc/team.php";?>

    <?php require_once "_inc/contact.php";?>

    <?php require_once "_inc/footer.php";?>
    
    
    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
