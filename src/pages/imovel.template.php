<?php
global $CONFIG;
include('../config.inc.php');
include('../components/realstate/realstate.inc.php');
$siteUrl = $CONFIG['CONF']['siteUrl'];

$id=$_REQUEST['id'];
$title = isAds($id, "title");
$priceList = isAds($id,"ListPrice");
$transactiontype = isAds($id,"transactiontype");
$PublicationType = isAds($id,"PublicationType");
$ConstructedArea = isAds($id,"ConstructedArea");
$Bedrooms = isAds($id,"Bedrooms");
$Bathrooms = isAds($id,"Bathrooms");
$Garage = isAds($id,"Garage");
$description = isAds($id,"description");
$ConstructedArea = isAds($id,"ConstructedArea");
$status = isAds($id,"status");
$LocationState = isAds($id,"ContactInfoState");
$LocationCity = isAds($id,"ContactInfoCity");
$LocationNeighborhood = isAds($id,"LocationNeighborhood");
$LocationPostalCode = isAds($id,"LocationPostalCode");
$PropertyType = isAds($id,"PropertyType");
$media = isAds($id,"media");
$ContactInfoName = isAds($id,"ContactInfoName");
$LocationLatitude = isAds($id,"LocationLatitude");
$LocationLongitude = isAds($id,"LocationLongitude");
$VirtualTourLink = isAds($id,"VirtualTourLink");

// Rental Fields
$YearlyTax = isAds($id,"YearlyTax"); // IPTU
$PropertyAdministrationFee = isAds($id,"PropertyAdministrationFee"); // Condominio
$RentalPrice = isAds($id,"RentalPrice"); // Valor do Aluguel
$ListingID = isAds($id,"ListingID"); // Valor do Aluguel

// Check Price
if($transactiontype === 'For Rent') {
    $price = formatCurrency($RentalPrice);
} else {
    $price = formatCurrency($priceList);
}

// data
$jsonData = file_get_contents('../cached/realstate-ads.json');
$data = json_decode($jsonData, true);
$itemCount = count($data);

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
		
		    <title> <?= $pgTitle; ?> </title>

        <link rel="icon" type="image/png" href="<?= $siteUrl; ?>/assets/images/favicon.png">
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
                        <li> Imóveis </li>
                        <li>
                            <?= $title; ?>    
                        </li>
                    </ul>
                </div>
            </div>

            <div class="page-banner-image wow animate__animated animate__fadeInRightight" data-wow-delay="300ms" data-wow-duration="2000ms">
                <img src="<?= $siteUrl; ?>/assets/images/page-banner.png" alt="image">
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Property Details Area -->
        <div class="property-details-area ptb-100">
            <div class="container">
                <div class="property-details-slides owl-carousel owl-theme">

                    <?php 
                            // Image Sliders
                            $objitems = json_encode($media);
                            $images = json_decode($objitems, true);
                            foreach ($images as $key => $url) {
                    ?>
                        <div class="property-details-image image-ads-container">
                            <img src="<?= $url; ?>" alt="image">
                        </div>
                    <?php } ?>

                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="property-details-desc">
                            <div class="details-content">
                                <ul class="tag-list">
                                    <li class="tag">
                                        <?= $PublicationType; ?>
                                    </li>
                                    <li class="tag-2">
                                        <?= transactiontypeConvert($transactiontype); ?>
                                    </li>
                                </ul>

                                <div class="price">
                                    <?= $price; // Price ?>
                                   
                                </div>

                                <div class="content">
                                    
                                    <h3 class="mt-4">
                                        <?= $title; ?>
                                    </h3>
                                    <p> Código do Anúncio: <?= $ListingID; ?> | Tipo do imóvel: <span>(<?= $ConstructedArea; ?> m² ) <br/> 
                                    
                                    </span></p>
        
                                    <ul class="list">
                                        <li><i class='bx bx-bed'></i> <?= $Bedrooms; ?> Quartos </li>
                                        <li><i class='bx bxs-bath'></i> <?= $Bathrooms; ?> Banheiros</li>
                                        <li><i class='bx bx-car'></i> <?= $Garage; ?> Vagas de garagem</li>
                                    </ul>

                                    <p class="mt-4"> 
                                        <?php if($YearlyTax) {
                                            echo "IPTU: ".formatCurrency($YearlyTax);
                                        } ?>
                                         <?php if($PropertyAdministrationFee) { 
                                            echo " | Condomínio: ".formatCurrency($PropertyAdministrationFee);
                                         } ?> 
                                       
                                    </p>

                                </div>
                            </div>

                            <?php if($description) { ?>
                                <div class="details-description">
                                    <h3> Detalhes do imóvel  </h3>
                                    <p>
                                        <?= $description; ?>
                                    </p>
                                </div>
                            <?php } ?>

                            <div class="details-overview">
                                <h3> Informações adicionais </h3>

                                <ul class="overview-list">
                                    <li>
                                        <i class='bx bxs-home'></i>
                                        <p> Tamanho </p>
                                        <span> 
                                            <?= $ConstructedArea; ?> m²
                                        </span>
                                    </li>

                                    <li>
                                        <i class='bx bxs-bed'></i>
                                        <p> Quartos</p>
                                        <span> 
                                            <?= $Bedrooms; ?>
                                        </span>
                                    </li>

                                    <li>
                                        <i class='bx bxs-bath'></i>
                                        <p> Banheiros </p>
                                        <span>
                                            <?= $Bathrooms; ?>
                                        </span>
                                    </li>

                                    <li>
                                        <i class='bx bx-car'></i>
                                        <p> Vagas </p>
                                        <span><?= $Garage; ?> </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="details-address">
                                <h3> Localização </h3>

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <ul class="address-list">
                                                    <li><span> Cep </span></li>
                                                    <li><span>Bairro</span></li>
                                                    <li><span>Cidade</span></li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-6">
                                                <ul class="address-list">
                                                    <li> <?= $LocationPostalCode; ?> </li>
                                                    <li> <?= $LocationNeighborhood; ?> </li>
                                                    <li><?= $LocationCity; ?> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <ul class="address-list">
                                                    <li><span> Estado </span></li>
                                                    <!-- <li><span>Country</span></li>
                                                    <li><span>Neighborhood</span></li> -->
                                                </ul>
                                            </div>

                                            <div class="col-lg-6">
                                                <ul class="address-list">
                                                    <li><?=  $LocationState; ?> </li>
                                                    <!-- <li>United States</li>
                                                    <li>South Kingdom</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="address-btn">
                                        
                                        <div id='mapouter' style='position:relative;text-align:center;width:100%; height:500px;'>
                                            <div style='overflow:hidden;background:none!important;width:100%; height:500px;' id='gmap_canvasid'>
                                                <iframe style='width:100%; height:500px;' id='gmap_canvas' src='https://maps.google.com/maps?q=<?= $LocationLatitude; ?>,%20<?= $LocationLongitude; ?>&t=&z=13&ie=UTF8&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>
                                                    <br>
                                                </div></div>
                                                
                                        <a href="https://maps.google.com/?q=<?= $LocationLatitude; ?>,<?= $LocationLongitude; ?>" 
                                            class="default-btn mt-4" 
                                            target="_blank"> Ver no Google Maps <span></span>
                                        </a>

                                    </div>

                                </div>
                            </div>

                            <!-- <div class="details-features">

                                <h3> Destaques deste imóvel </h3>

                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <ul class="features-list">
                                            <li><i class='bx bx-check'></i> Gym</li>
                                            <li><i class='bx bx-check'></i> Swimming Pool</li>
                                            <li><i class='bx bx-check'></i> TV Cable</li>
                                            <li><i class='bx bx-check'></i> Laundry</li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <ul class="features-list">
                                            <li><i class='bx bx-check'></i> Wifi</li>
                                            <li><i class='bx bx-check'></i> Washer</li>
                                            <li><i class='bx bx-check'></i> Window Coverings</li>
                                            <li><i class='bx bx-check'></i> Outdoor Shower</li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <ul class="features-list">
                                            <li><i class='bx bx-check'></i> Refrigerator</li>
                                            <li><i class='bx bx-check'></i> Microwave</li>
                                            <li><i class='bx bx-check'></i> Swimming Pool</li>
                                            <li><i class='bx bx-check'></i> Lawn</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->

                            <?php 
                                if($VirtualTourLink) {
                            ?>
                            <div class="details-video">
                                <h3> Vídeo do anúncio </h3>

                                <div class="video-image">
                                    <img src="<?= $siteUrl; ?>/assets/images/property-details/property-details-3.jpg" alt="image">

                                    <a href="<?= $VirtualTourLink; ?>" class="video-btn popup-youtube">
                                        <i class='bx bx-play'></i>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            
                            <div class="widget widget_info">

                                <div class="info-box-one">
                                    <img src="<?= $siteUrl; ?>/assets/images/agents/agents-3.jpg" alt="image">
                                    <h3>
                                        <?= $ContactInfoName; ?>
                                    </h3>
                                    <span class="corretor-text">
                                        CRECI: J20.803
                                    </span>
                                </div>

                                <form>
                                    <div class="form-group mb-3">
                                        <label>Nome completo</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Telefone </label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Sua mensagem</label>
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="default-btn">
                                        Enviar Mensagem
                                        <span></span>
                                    </button>

                                </form>
                            </div>

                            <div class="widget widget_fido_property">
                                <h3 class="widget-title"> Outros Imóveis deste corretor </h3>
    

                                <?php 

                                    $count = 0;
                                    $max = 2;
                                    foreach ($data as $item) {

                                        if( $item['status'] === 'enabled' && $count <= $max ) {
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
                                                $count++;
                                ?>
                                <article class="item">
                                    <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
    
                                    <div class="info">
                                        <h4 class="title usmall">
                                            <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html">
                                                <?= $title; ?>
                                            </a>
                                        </h4>
                                        <span>
                                            Cód. Anúncio: <?= $listingId; ?>
                                        </span>
                                        <div class="tag"><?= $transactiontype; ?> </div>
                                        <div class="price">
                                            <?= formatCurrency($listPrice); ?>
                                        </div>
                                    </div>
                                </article>

                                <?php } }  ?>

                            </div>

                            <div class="widget widget_top-properties">

                                <h3 class="widget-title"> Destaques </h3>

                                <div class="top-properties-slides owl-carousel owl-theme">
                                    <div class="properties-item-box">
                                        <div class="properties-content">
                                            <a href="property-details.html"><img src="<?= $siteUrl; ?>/assets/images/featured/featured-large-1.jpg" alt="image"></a>
                
                                            <div class="tag"><a href="property-details.html">FEATURED</a></div>
                
                                            <div class="content-box">
                                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                                <h3>
                                                    <a href="property-details.html">Modern Apartment With Pool</a>
                                                </h3>
                                                <p>$2,500</p>
                    
                                                <ul class="featured-list">
                                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="properties-item-box">
                                        <div class="properties-content">
                                            <a href="property-details.html"><img src="<?= $siteUrl; ?>/assets/images/featured/featured-large-2.jpg" alt="image"></a>
                
                                            <div class="tag"><a href="property-details.html">FEATURED</a></div>
                
                                            <div class="content-box">
                                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                                <h3>
                                                    <a href="property-details.html">Luxury Villa in Los Angeles</a>
                                                </h3>
                                                <p>$2,500</p>
                    
                                                <ul class="featured-list">
                                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="properties-item-box">
                                        <div class="properties-content">
                                            <a href="property-details.html"><img src="<?= $siteUrl; ?>/assets/images/featured/featured-large-3.jpg" alt="image"></a>
                
                                            <div class="tag"><a href="property-details.html">FEATURED</a></div>
                
                                            <div class="content-box">
                                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                                <h3>
                                                    <a href="property-details.html">Blue Reef Properties</a>
                                                </h3>
                                                <p>$2,500</p>
                    
                                                <ul class="featured-list">
                                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="properties-item-box">
                                        <div class="properties-content">
                                            <a href="property-details.html"><img src="<?= $siteUrl; ?>/assets/images/featured/featured-large-1.jpg" alt="image"></a>
                
                                            <div class="tag"><a href="property-details.html">FEATURED</a></div>
                
                                            <div class="content-box">
                                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                                <h3>
                                                    <a href="property-details.html">Modern Apartment With Pool</a>
                                                </h3>
                                                <p>$2,500</p>
                    
                                                <ul class="featured-list">
                                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="properties-item-box">
                                        <div class="properties-content">
                                            <a href="property-details.html"><img src="<?= $siteUrl; ?>/assets/images/featured/featured-large-2.jpg" alt="image"></a>
                
                                            <div class="tag"><a href="property-details.html">FEATURED</a></div>
                
                                            <div class="content-box">
                                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                                <h3>
                                                    <a href="property-details.html">Luxury Villa in Los Angeles</a>
                                                </h3>
                                                <p>$2,500</p>
                    
                                                <ul class="featured-list">
                                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
       
        <?php include('../components/footer/footer.inc.php'); ?>

        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        
        <script src="<?= $siteUrl; ?>/assets/js/jquery.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/jquery.meanmenu.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/jquery.appear.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/odometer.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/nice-select.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/fancybox.min.js"></script>
		<script src="<?= $siteUrl; ?>/assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?= $siteUrl; ?>/assets/js/form-validator.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/contact-form-script.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/wow.min.js"></script>
        <script src="<?= $siteUrl; ?>/assets/js/main.js"></script>
    </body>

</html>