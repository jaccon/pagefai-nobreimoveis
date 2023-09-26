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
$title = "Pesquisa";

// data
require('../components/realstate/realstate.inc.php');
$jsonData = file_get_contents('../cached/realstate-ads.json');
$data = json_decode($jsonData, true);
$itemCount = count($data);

?>
<!doctype html>
<html lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/flaticon.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/odometer.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/dark.css">
		    <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/responsive.css">
		    <title> <?= $pgTitle; ?> </title>
        <link rel="icon" type="image/png" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/images/favicon.png">

        <style>
            .col-md-12.searchFilters {
                background: #f0f0f0;
                color: #777;
                padding: 20px;
                border-radius: 5px;
                margin-bottom: 30px;
            }
            </style>
    </head>

    <body>

       
    <?php include('../components/preloader/preloader.inc.php'); ?>
    <?php include('../components/header/header.inc.php'); ?>
        
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content wow animate__animated animate__fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2>
                      <?= $title; ?>
                    </h2>

                    <ul>
                        <li>
                            <a href="<?= $siteUrl; ?>">Home</a>
                        </li>
                        <li> Anúncios </li>
                        <li>
                          <?= $title; ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="page-banner-image wow animate__animated animate__fadeInRightight" data-wow-delay="300ms" data-wow-duration="2000ms">
                <img src="<?= $siteiUrl; ?>/assets/images/page-banner.png" alt="image">
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Blog Area -->
        <div class="blog-area-without-color ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">

                    <div class="row justify-content-center">

                        <?php 

                            if(isset($_GET['search']) && !$_GET['filters']) {

                                $search = isset($_GET['search']) ? $_GET['search'] : '';
                                $neighborhood = isset($_GET['neighborhood']) ? $_GET['neighborhood'] : '';

                                $count = 0;
                                foreach ($data as $item) {

                                    $lowercaseS = strtolower($search);
                                    $lowercaseTitle = strtolower($item->title);

                                    $status = $item['status'];
                                    $title = $item['title'];
                                    $transactiontype = transactiontypeConvert($item['transactiontype']);
                                    $listingId = $item['ListingID'];
                                    $id = $item['id'];
                                    $listPrice = $item['ListPrice'];
                                    $ContactInfoName = $item['ContactInfoName'];
                                    $thumbnail = $item['ContactInfoLogo'];
                                    $featuredImage = $item['featuredImage'];
                                    $ConstructedArea = $item['ConstructedArea'];

                                    if (
                                        $item['status'] === 'enabled' && 
                                        (
                                            (empty($search) || 
                                            $item['ListingID'] === (int)$search) ||
                                            $item['id'] === $search 
                                        ) 
                                    ) {
                        ?>

                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item bottom-30">
                                    <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html">
                                        <!-- <img src="<?= $siteiUrl; ?>/assets/images/blog/blog-1.jpg" alt="image"> -->
                                        <div class="image-container">
                                            <img src="<?= $featuredImage; ?>" alt="image">
                                        </div>
                                    </a>

                                    <div class="blog-content">
                                        <span>
                                            <a href="blog-details.html">
                                                <?= $transactiontype; ?>
                                            </a>
                                        </span>
                                        <h3>
                                            <a href="blog-details.html">
                                                <?= $title; ?>
                                            </a>
                                        </h3>
                                        <p> <?= $ConstructedArea; ?> m2 | Cód. <?= $listingId; ?> </p>
                                    </div>

                                    <div class="blog-bottom-content d-flex justify-content-between align-items-center">
                                        <div class="blog-author d-flex align-items-center">
                                            <img src="<?= $thumbnail; ?>" class="rounded-circle" alt="image">
                                            <span>
                                                <a href="#">
                                                    <?= $ContactInfoName; ?>
                                                </a>
                                            </span>
                                        </div>
                                        <p>
                                            <strong> <?= formatCurrency($listPrice); ?> </strong> 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php } } }  ?>

                        <?php 
                            if(isset($_GET['filters']) && $_GET['filters']=== "true") {
                            
                                $transactionType = isset($_GET['transactiontype']) ? strtolower($_GET['transactiontype']) : '';
                                $propertyType = isset($_GET['PropertyType']) ? $_GET['PropertyType'] : '';
                                $priceRange = isset($_GET['priceRange']) ? strtolower($_GET['priceRange']) : '';
                                $constructedArea = isset($_GET['ConstructedArea']) ? strtolower($_GET['ConstructedArea']) : '';
                                $garage = isset($_GET['Garage']) ? strtolower($_GET['Garage']) : '';
                                $bedrooms = isset($_GET['Bedrooms']) ? strtolower($_GET['Bedrooms']) : '';
                                $suites = isset($_GET['Suites']) ? strtolower($_GET['Suites']) : '';
                                $bathrooms = isset($_GET['Bathrooms']) ? strtolower($_GET['Bathrooms']) : '';

                                $results = [];
                            ?> 
                            
                            <div class="row">
                                    <div class="col-md-12 searchFilters">
                                        <p> Filtros: </p>

                                        <?php 
                                        if($transactionType) { ?>
                                            Tipo: <?= transactiontypeConvert($transactionType) ?> <br/>
                                        <?php } ?>

                                        <?php 
                                        if($propertyType) { ?>
                                            Tipo do Imóvel: <?= $propertyType ?> <br/>
                                        <?php } ?>

                                        <?php 
                                        if($priceRange) { ?>
                                            Valor até: <?= $priceRange ?> <br/>
                                        <?php } ?>

                                        <?php 
                                        if($constructedArea) { ?>
                                            Área contruída até: <?= $constructedArea ?> <br/>
                                        <?php } ?>

                                        <?php 
                                        if($garage) { ?>
                                            Vagas: <?= $garage ?> <br/>
                                         <?php } ?>

                                         <?php 
                                            if($bedrooms) { ?>
                                            Dormitórios: <?= $bedrooms ?> <br/>
                                        <?php } ?>

                                        <?php 
                                            if($suites) { ?>
                                            Suítes: <?= $suites ?> <br/>
                                        <?php } ?>

                                        <?php 
                                            if($bathrooms) { ?>
                                            Banheiros: <?= $bathrooms ?> <br/>
                                        <?php } ?>
                                    </div>
                            </div>

                            <?php

                                foreach ($data as $item) {
                                    if (
                                        ($transactionType === '' || strtolower($item['transactiontype']) === $transactionType) &&
                                        ($propertyType === '' || ($item['PropertyType']) === ($propertyType)) &&
                                        ($priceRange === '' || strtolower($item['ListPrice']) === $priceRange) &&
                                        ($constructedArea === '' || $item['ConstructedArea'] > 0 && strtolower($item['ConstructedArea']) <= (int)$constructedArea) &&
                                        ($garage === '' || strtolower($item['Garage']) === $garage) &&
                                        ($bedrooms === '' || strtolower($item['Bedrooms']) === $bedrooms) &&
                                        ($suites === '' || strtolower($item['Suites']) === $suites) &&
                                        ($bathrooms === '' || strtolower($item['Bathrooms']) === $bathrooms)
                                    ) {
                                        $results[] = $item;
                                    }
                                }

                                foreach ($results as $itens) {

                                    $lowercaseS = strtolower($search);
                                    $lowercaseTitle = strtolower($itens->title);

                                    $status = $itens['status'];
                                    $title = $itens['title'];
                                    $transactiontype = transactiontypeConvert($itens['transactiontype']);
                                    $listingId = $itens['ListingID'];
                                    $id = $itens['id'];
                                    $listPrice = $itens['ListPrice'];
                                    $ContactInfoName = $itens['ContactInfoName'];
                                    $thumbnail = $itens['ContactInfoLogo'];
                                    $featuredImage = $itens['featuredImage'];
                                    $ConstructedArea = $itens['ConstructedArea'];
                                    $Garage = $itens['Garage'];
                                    $Bedrooms = $itens['Bedrooms'];
                                    $Bathrooms = $itens['Bathrooms'];
                                    $suites = $itens['Suites'];
                                    $constructedArea = $itens['constructedArea'];
                                    $propertyType = $itens['PropertyType'];
                                    $RentalPrice = $itens['RentalPrice'];

                                    if($transactiontype === "For Sale") {
                                        $price = $listPrice;
                                    } else {
                                        $price = $RentalPrice;
                                    }



                        ?>
                            
                           <div class="col-lg-6 col-md-6">
                                <div class="blog-item bottom-30">
                                    <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html">
                                        <!-- <img src="<?= $siteiUrl; ?>/assets/images/blog/blog-1.jpg" alt="image"> -->
                                        <div class="image-container">
                                            <img src="<?= $featuredImage; ?>" alt="image">
                                        </div>
                                    </a>

                                    <div class="blog-content">
                                        <span>
                                            <a href="blog-details.html">
                                                <?= $transactiontype; ?>
                                            </a>
                                        </span>
                                        <h3>
                                            <a href="blog-details.html">
                                                <?= $title; ?>
                                            </a>
                                        </h3>
                                        <p> 
                                            Cód. <?= $listingId; ?> <br/>
                                            Área: <?= $ConstructedArea; ?> m2 - Vagas: <?= $Garage; ?> - Dormitórios: <?= $Bedrooms; ?> <br/>
                                            Suítes: <?= $suites; ?> - Banheiros: <?= $Bathrooms; ?> <br/>
                                            Tipo do imóvel: <?= $propertyType; ?>
                                        </p>
                                    </div>

                                    <div class="blog-bottom-content d-flex justify-content-between align-items-center">
                                        <div class="blog-author d-flex align-items-center">
                                            <img src="<?= $thumbnail; ?>" class="rounded-circle" alt="image">
                                            <span>
                                                <a href="#">
                                                    <?= $ContactInfoName; ?>
                                                </a>
                                            </span>
                                        </div>
                                        <p>
                                            <strong> <?= formatCurrency($price); ?> </strong> 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php 
                            } }
                        ?>




                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pagination-area">
                                <a href="#" class="prev page-numbers"><i class='bx bx-chevron-left'></i></a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="page-numbers">4</a>
                                <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <?php include('../components/adsFilters/filter.inc.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('../components/footer/footer.inc.php'); ?>

        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Links of JS files -->
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.meanmenu.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.appear.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/odometer.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/nice-select.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/fancybox.min.js"></script>
		<script src="<?= $siteiUrl; ?>/assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?= $siteiUrl; ?>/assets/js/form-validator.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/contact-form-script.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/wow.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/main.js"></script>
    </body>


</html>