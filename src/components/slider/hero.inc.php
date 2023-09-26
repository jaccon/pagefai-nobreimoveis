<?php 
global $CONFIG;
$jsonData = file_get_contents('../cached/realstate-ads.json');
$data = json_decode($jsonData, true);

if ($data === null) {
    die("Failed to parse JSON data.");
}

$siteUrl = $CONFIG['CONF']['siteUrl'];

?>

<div class="main-slides-with-featured-area">
            <div class="home-slides-two owl-carousel owl-theme">

                <?php 
                    $count = 0;
                    $maxAds = 4;
                    
                    foreach ($data as $item) {
                        $count++;
                        if( $item['status'] === 'enabled' && $count <= $maxAds) {
                            $title = $item['title'];
                            $listingId = $item['ListingID'];
                            $id = $item['id'];
                            $listPrice = $item['ListPrice'];
                            $ContactInfoName = $item['ContactInfoName'];
                            $thumbnail = $item['ContactInfoLogo'];
                            $featuredImage = $item['featuredImage'];
                            $ConstructedArea = $item['ConstructedArea'];
                            $transactiontype = ($item['transactiontype']);
                            $RentalPrice = $item['RentalPrice'];
                            $Garage = $item['Garage'];
                            $Bedrooms = $item['Bedrooms'];
                            $Bathrooms = $item['Bathrooms'];
                            $suites = $item['Suites'];

                            if($transactiontype === 'For Sale') {
                                $price = $listPrice;
                            } else {
                                $price = $RentalPrice;
                            }

                ?>
                <div class="slides-item-box" style="background-image: url('<?= $featuredImage; ?>');">
                    <div class="container">
                        <div class="slides-content-box">
                            <div class="top-content">
                                <ul class="tag-list">
                                    <li class="rent" style="color: #fff;">
                                        <?= transactiontypeConvert($transactiontype); ?>
                                    </li>
                                </ul>

                                <span></span>
                                <h3>
                                    <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html">
                                        <?= $title; ?>
                                    </a>
                                </h3>
                                <p> Cód. Anúncio: <span> <?= $listingId; ?> </span> - 
                                    Área <span>(<?= $ConstructedArea; ?> m² ) </span>
                                </p>
    
                                <ul class="featured-list">
                                    <li><i class='bx bx-bed'></i> <?= $Bedrooms ?> Dormitórios </li>
                                    <li><i class='bx bxs-bath'></i> <?= $Bathrooms ?> Banheiros</li>
                                    <li><i class='bx bx-car'></i> <?= $Garage; ?> Vagas </li>
                                </ul>
                            </div>
    
                            <div class="bottom-content">
                                R$ <?= formatCurrency($price); ?>
    
                                <div class="slides-btn">
                                    <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html" class="default-btn"> Ver Imóvel <span></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php }} ?>

                <!-- <div class="slides-item-box ">
                    <div class="container">
                        <div class="slides-content-box">
                            <div class="top-content">
                                <ul class="tag-list">
                                    <li class="featured"><a href="property-details.html">Featured</a></li>
                                    <li class="rent"><a href="property-details.html">Rent</a></li>
                                </ul>

                                <div class="price">$1,500</div>
                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                <h3>
                                    <a href="property-details.html">Adobe Property Advisors</a>
                                </h3>
                                <p>Apartment <span>(78 sq.m)</span></p>
    
                                <ul class="featured-list">
                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                </ul>
                            </div>
    
                            <div class="bottom-content">
                                <ul class="rating-list">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li class="color-gray"><i class='bx bxs-star'></i></li>
                                    <li>Average</li>
                                </ul>
    
                                <div class="slides-btn">
                                    <a href="property-details.html" class="default-btn">KNOW DETAILS <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slides-item-box ">
                    <div class="container">
                        <div class="slides-content-box">
                            <div class="top-content">
                                <ul class="tag-list">
                                    <li class="featured"><a href="property-details.html">Featured</a></li>
                                    <li class="rent"><a href="property-details.html">Rent</a></li>
                                </ul>

                                <div class="price">$3,500</div>
                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                <h3>
                                    <a href="property-details.html">Luxury Villa in Los Angeles</a>
                                </h3>
                                <p>Apartment <span>(78 sq.m)</span></p>
    
                                <ul class="featured-list">
                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                </ul>
                            </div>
    
                            <div class="bottom-content">
                                <ul class="rating-list">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li class="color-gray"><i class='bx bxs-star'></i></li>
                                    <li>Average</li>
                                </ul>
    
                                <div class="slides-btn">
                                    <a href="property-details.html" class="default-btn">KNOW DETAILS <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slides-item-box ">
                    <div class="container">
                        <div class="slides-content-box">
                            <div class="top-content">
                                <ul class="tag-list">
                                    <li class="featured"><a href="property-details.html">Featured</a></li>
                                    <li class="rent"><a href="property-details.html">Rent</a></li>
                                </ul>

                                <div class="price">$5,500</div>
                                <span>64 1st Avenue, High Street, NZ 1002</span>
                                <h3>
                                    <a href="property-details.html">Beacon Homes LLC</a>
                                </h3>
                                <p>Apartment <span>(78 sq.m)</span></p>
    
                                <ul class="featured-list">
                                    <li><i class='bx bx-bed'></i> 4 Bedrooms</li>
                                    <li><i class='bx bxs-bath'></i> 2 Baths</li>
                                    <li><i class='bx bx-car'></i> Free Parking</li>
                                </ul>
                            </div>
    
                            <div class="bottom-content">
                                <ul class="rating-list">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li class="color-gray"><i class='bx bxs-star'></i></li>
                                    <li>Average</li>
                                </ul>
    
                                <div class="slides-btn">
                                    <a href="property-details.html" class="default-btn">KNOW DETAILS <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>