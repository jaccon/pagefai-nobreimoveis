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
$title = "Contato";

?>
<!doctype html>
<html lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Pagefai CMS">
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
        <meta name="description" content="<?= $siteDescription; ?>">
        <meta name="keywords" content="<?= $keywords; ?>">
        <meta name="author" content="<?= $siteAuthor; ?>">
        <?= Seo::structuredDataOrganization(); // structured data for SEO ?>
        <?= Seo::structuredDataBreadcrumb(); // structured data breadCrumb for SEO ?>
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
        
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="contact-form">
                            <div class="title">
                                <h3>Entrando em contato </h3>
                                <p> Utilize nosso formulário de contato para enviar sua dúvida. Em breve um de <br/> nossos consultores entrará em contato </p>
                            </div>
        
                            <form id="pagefai-form" pagefai-form="true">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input 
                                                type="text" 
                                                name="name" 
                                                id="name" 
                                                class="form-control"
                                                placeholder="Entre com o seu nome..."
                                                pagefai-form="true"
                                                required data-error="Entre com o nome">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input 
                                                type="email" 
                                                name="email" 
                                                id="email" class="form-control" 
                                                placeholder="Digite o endereço de e-mail"
                                                pagefai-form="true"
                                                required data-error="Por favor adicione o e-mail">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Telefone Celular</label>
                                            <input 
                                                type="text" 
                                                name="phone" 
                                                id="phone" 
                                                placeholder="Telefone"
                                                pagefai-form="true"
                                                required data-error="Por favor entre com o número de telefone" 
                                                class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Mensagem</label>
                                            <textarea 
                                                name="message" 
                                                class="form-control" 
                                                id="message" 
                                                cols="30" 
                                                rows="5" 
                                                pagefai-form="true"
                                                placeholder="Escreva sua mensagem aqui"
                                                required data-error="Escreva sua mensagem"></textarea>
                                            <div class="help-block with-errors"></div>

                                            <input 
                                                class="form-control" 
                                                name="id" 
                                                id="id"
                                                type="hidden"
                                                pagefai-form="true"
                                                value="40e01410-c781-11ed-afa1-0242ac120002">
                                            </div>
                                    </div>
        
                                    <div class="col-lg-12 col-md-12">
                                        <button 
                                            id="pagefai-submit-form"
                                            class="default-btn">Enviar Mensagem <span></span></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="contact-address">
                            <h3>Contact Address:</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <ul class="address-info">
                                <li>
                                    <i class='bx bxs-map'></i>
                                    48 Brooke Street, New York United States of America
                                </li>

                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <a href="tel:000123456789">+000 123 456 789</a>
                                </li>

                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#78101d141417381e111c17561b1715"><span class="__cf_email__" data-cfemail="92faf7fefefdd2f4fbf6fdbcf1fdff">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../components/banners/beneficios.inc.php'); ?>
        <?php include('../components/footer/footer.inc.php'); ?>

        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        <!-- End Go Top Area -->
        
        <script>
            async function handleSubmit(event) {

                event.preventDefault();
            
                const formElements = document.querySelectorAll('[pagefai-form="true"]');
                const formElementsArray = Array.from(formElements);
                
                const formData = {};
                formElementsArray.forEach(element => {
                    formData[element.name] = element.value;
                });
                
                formData.timestamp = new Date().toISOString();
                
                const formDataJSON = JSON.stringify(formData);
                document.cookie = `pagefai-contact-form=${encodeURIComponent(formDataJSON)}; path=/`;
        
                try {
                    const response = await fetch('<?= $siteUrl; ?>/bff?f=submitForm', {
                    method: 'GET',
                    headers: {
                        // You can add headers here if needed
                    },
                    });

                    const responseBody = await response.text();

                    console.log(responseBody);

                    if (responseBody.trim() === "0") {

                        const form = document.querySelector('form[pagefai-form="true"]');
                        form.style.display = 'none';
                        
                        const successDiv = document.getElementById('pagefai-form-success');
                        successDiv.style.display = 'block';

                    } 
            } catch (error) {
                console.error(error);
            }
            }
            const submitButton = document.getElementById('pagefai-submit-form');
            submitButton.addEventListener('click', handleSubmit);
        </script>

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