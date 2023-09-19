<?php
include('../config.inc.php');
global $CONFIG;
$pageId="0608f566-cc20-11ed-afa1-0242ac120002";
$metaDescription = Commerce::getCommerceSettings('daa548ea-f152-11ed-a05b-0242ac120003','description');
$title = CMS::isPage($pageId, "slug");
$featuredImage = CMS::isPage($pageId, "featuredImage");
$siteUrl = $CONFIG['CONF']['siteUrl'];
$tel="+55 11 95569-6541";

// SEO
$metaIdSeo = "0ff54848-c781-11ed-afa1-0242ac120002";
$pgTitle = Seo::isSeo($metaIdSeo, "defaultPageTitle")." - ".$title;
$siteDescription = Seo::isSeo($metaIdSeo, "description");
$siteAuthor = Seo::isSeo($metaIdSeo, "author");
$keywords = Seo::isSeo($metaIdSeo, "keywords");
$favicon = Seo::isSeo($metaIdSeo, "favicon");
?>
<!doctype html>
<html lang="zxx">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/flaticon.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/odometer.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/dark.css">
		<link rel="stylesheet" href="<?= $siteUrl; ?>/assets/css/responsive.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?= $siteDescription; ?>">
        <meta name="keywords" content="<?= $keywords; ?>">
        <meta name="author" content="<?= $siteAuthor; ?>">
        <title> <?= $pgTitle; ?> </title>
        <link rel="icon" type="image/png" href="<?= $siteUrl; ?>/assets/images/favicon.ico">
    </head>

    <body>

        <?php include('../components/preloader/preloader.inc.php'); ?>
        <?php include('../components/header/header.inc.php'); ?>
        <?php include('../components/slider/hero.inc.php'); ?>
        <?php include('../components/anuncios/anuncios01.inc.php'); // destaques ?>
        <?php include('../components/banners/default.inc.php'); ?>
        <?php include('../components/anuncios/anuncios02.inc.php'); ?>
        <?php include('../components/banners/beneficios.inc.php'); ?>
        <?php include('../components/anuncios/bairros.inc.php'); ?>
        <?php include('../components/testimonials/testimonials.inc.php'); ?>
        <?php include('../components/footer/footer.inc.php'); ?>
        <?php include('../components/banner-cookie-consent.inc.php'); ?>
        <?php include('../components/modals/identify.inc.php'); ?>
       
        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        
        <script src="<?= $siteUrl; ?>assets/js/jquery.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/jquery.meanmenu.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/jquery.appear.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/odometer.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/nice-select.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/jquery-ui.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/fancybox.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/form-validator.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/contact-form-script.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/wow.min.js"></script>
        <script src="<?= $siteUrl; ?>assets/js/main.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/jquery.cookie.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/pagefai.js"></script>

    </body>

</html>