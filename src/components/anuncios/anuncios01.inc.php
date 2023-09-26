<?php
global $CONFIG;
//require('../components/realstate/realstate.inc.php'); 
?>
<div class="featured-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3> Imóveis em Destaque </h3>
                    <p> As melhores ofertas de imóveis estão aqui na Nobre Imóveis. 
                    <br/> Confira alguns de nossos destaques </p>
                </div>
                
                <div class="featured-slides owl-carousel owl-theme">

                    <?php
                        $jsonData = file_get_contents('../cached/realstate-ads.json');
                        $data = json_decode($jsonData, true);

                        if ($data === null) {
                            die("Failed to parse JSON data.");
                        }

                        $count = 0;
                        $adsMax = 5;
                        foreach ($data as $item) {

                            if( $item['PublicationType'] === 'PREMIUM' AND $count <= $adsMax ) {
                                $count++;
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
                                $RentalPrice = $item['RentalPrice'];

                                if($item['transactiontype'] === 'For Rent') {
                                    $price = $RentalPrice;
                                } else {
                                    $price = $listPrice;
                                }

                    ?>
                        <div class="featured-item-box">
                            <div class="featured-image featured-image-container">
                                <a href="<?= $siteUrl; ?>imovel/<?= $id; ?>.html"><img src="<?= $featuredImage; ?>" alt="image"></a>

                                <div class="tag">
                                    <a href="<?= $siteUrl; ?>imovel/<?= $id; ?>.html">
                                        <?= $transactiontype; ?>
                                    </a>
                                </div>

                                <div class="featured-top-content">
                                    <h3>
                                        <a href="<?= $siteUrl; ?>imovel/<?= $id; ?>.html">
                                            <?= $title ; ?>
                                        </a>
                                    </h3>
                                    <p>
                                        <?= formatCurrency($price); ?>
                                    </p>
        
                                </div>
                            </div>
                            
                            <div class="featured-bottom-content">
                                Cód. Anúncio: <?= $listingId; ?>

                                <div class="featured-btn">
                                    <a href="<?= $siteUrl; ?>imovel/<?= $id; ?>.html" class="default-btn"> Ver Imóvel <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>

                </div>

                <div class="view-featured-btn">
                    <a href="/imoveis.html" class="default-btn"> Ver todos imóveis <span></span></a>
                </div>
            </div>
        </div>