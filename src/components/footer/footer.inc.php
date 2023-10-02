<?php
global $CONFIG;
$siteUrl = $CONFIG['CONF']['siteUrl'];
// Social Links
$metaId = "b9c29334-d1c8-11ed-afa1-0242ac120002";
$metaSeoId = $CONFIG['CONF']['metaIdSeo'];

$whatsapp= CMS::isComponent($metaId,"whatsappLink");
$phone = CMS::isComponent($metaId,"phoneString");
$email01 = CMS::isComponent($metaId,"email01");
$email02 = CMS::isComponent($metaId,"email02");
$description = CMS::isComponent($metaId,"description");
$addr = CMS::isComponent($metaId,"address");

$phoneNumber01 = CMS::isComponent($metaId,"phoneNumber01String");
$phoneNumber01Call = CMS::isComponent($metaId,"phoneNumber01");

$phoneNumber02 = CMS::isComponent($metaId,"phoneNumber02String");
$phoneNumber02Call = CMS::isComponent($metaId,"phoneNumber02");

?>

<footer class="footer-area pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <a href="/index.html">
                            <img src="<?= $siteUrl; ?>/assets/images/logotipo-nobreimoveis-white.png" alt="image" with="100">
                        </a>
                    </div>

                    <p> <?= $description; ?> </p>

                    <ul class="widget-social">
                        <li>
                            <a href="<?= Seo::isSeo($metaSeoId, "social_facebook"); ?>" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="<?= Seo::isSeo($metaSeoId, "social_instagram"); ?>" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3> Mapa do Site </h3>

                    <ul class="footer-quick-links">
                        <li><a href="about.html"> Para locação </a></li>
                        <li><a href="agents.html"> Para Comprar </a></li>
                        <li><a href="services.html"> Lançamentos </a></li>
                        <li><a href="property.html"> Quem Somos </a></li>
                        <li><a href="case-study.html"> Parceiros </a></li>
                        <li><a href="case-study.html"> Peça seu imóvel </a></li>
                        <li><a href="case-study.html"> Contato </a></li>
                        <li><a href="case-study.html"> Anunciar </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3> Contato </h3>
                    
                    <ul class="widget-info">
                        <li>
                            <i class='bx bxs-map'></i>
                            <?= $addr; ?>
                        </li>

                        <li>
                            <i class='bx bxs-phone'></i>
                                <a href="tel:<?= $phoneNumber02Call; ?>"> 
                                    <?= $phoneNumber02; ?>
                                </a> <br/>
                                <a href="tel:<?= $phoneNumber01Call; ?>"> 
                                    <?= $phoneNumber01; ?>
                                </a>
                        </li>

                        <li>
                            <i class='bx bx-envelope'></i>
                            <?= $email01; ?> <br/>
                            <?= $email02; ?>
                        </li>

                       
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Newsletter Nobre Imóveis </h3>

                    <div class="widget-newsletter">
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="input-newsletter" placeholder="E-mail" name="EMAIL" required autocomplete="off">
    
                            <button type="submit"><i class='bx bx-envelope'></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>

                        <div class="newsletter-content">
                            <p> Assine nossa newsletter para receber as novidades da Nobre Imóveis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

    <?php include('../components/whatsapp-button.inc.php'); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3Y2Z2PBMYK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-3Y2Z2PBMYK');
    </script>

    <script>
        let scrollTimeout;function getCurrentURL(){return window.location.href;}function postData(url,data){return fetch(url,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(data),}).then(response=>response.json()).then(data=>console.log('Success:',data)).catch(error=>console.error('Error:',error));}function trackVisit(){const currentURL=getCurrentURL();const apiUrl='/bff?f=visualizer';postData(apiUrl,{url:currentURL});}function handleScroll(){clearTimeout(scrollTimeout);scrollTimeout=setTimeout(function(){trackVisit();},5000);}window.addEventListener('scroll',handleScroll);handleScroll();
    </script>