<?php
global $CONFIG;
// include('../components/realstate/realstate.inc.php'); 
?>
<div class="new-added-properties-area bg-201c2d ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3> Imóveis para alugar </h3>
                    <p> Veja os principais imóveis em lançamento e aproveite <br/> para fazer o melhor negócio </p>
                </div>

                <div class="row justify-content-center">

                <?php
                        $jsonData = file_get_contents('../cached/realstate-ads.json');
                        $data = json_decode($jsonData, true);

                        if ($data === null) {
                            die("Failed to parse JSON data.");
                        }

                        $count = 0;
                        $adsMax = 3;
                        foreach ($data as $item) {

                            if( $item['transactiontype'] === 'For Rent' AND $count <= $adsMax ) {
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
                    <div class="col-lg-6 col-md-6">
                        <div class="single-new-added-properties with-white-color">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-12">
                                    <div class="properties-image" style="background-image: url('<?= $featuredImage; ?>');">
                                        <img src="<?= $featuredImage; ?>" alt="image">

                                        <div class="price">
                                            <?= formatCurrency($price); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="properties-content">

                                        <h3>
                                            <a href="<?= $siteUrl; ?>/imovel/<?= $id; ?>.html">
                                                <?= $title; ?>
                                            </a>
                                        </h3>
            
                                        <p> 
                                            Cód. Anúncio: <?= $listingId; ?> <br/>
                                            <?= $ConstructedArea; ?> m²
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <?php }} ?>
                </div>

                <div class="view-properties-btn">
                    <a href="<?= $siteUrl; ?>/imoveis-para-locacao.html" class="default-btn"> Ver todos os anúncios <span></span></a>
                </div>
            </div>
        </div>