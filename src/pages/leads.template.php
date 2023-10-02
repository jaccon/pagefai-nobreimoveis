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
$title = "Leads";

if ($_GET['accessKey'] != $CONFIG['CONF']['secrectKey']) {
  header("location:" . $siteUrl);
  exit();
}

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

        <style>
          .marginTopChat {
            margin-top: 50px;
          }
        </style>
    </head>

    <body>

       
    <?php include('../components/preloader/preloader.inc.php'); ?>
    <?php include('../components/header/header.inc.php'); ?>
        
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>
                      <?= $title; ?>
                    </h2>
                </div>
            </div>

            <div class="page-banner-image wow animate__animated animate__fadeInRightight" data-wow-delay="300ms" data-wow-duration="2000ms">
                <img src="<?= $siteiUrl; ?>/assets/images/page-banner.png" alt="image">
            </div>
        </div>
        
        <div class="about-area ptb-100">
            <div class="container">

                <div class="row align-items-center">
                    
                <div class="table-responsive mt-4">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Lead Name </th>
                              <th>Email </th>
                              <th>Telefone </th>
                              <th>Data captura </th>
                              <th>Interesse </th>
                          </tr>
                      </thead>
                      <tbody>

                      <?php 
                       
                        $jsonData = file_get_contents('../cached/leads.json');
                        $data = json_decode($jsonData, true);

                        foreach ($data as $item) {
                                $leadPageId = $item['leadUpdatedAt'];
                                $leadName = $item['leadName'];
                                $updatedAt = $item['leadUpdatedAt'];
                                $leadPhone = $item['leadPhone'];
                                $leadEmail = $item['leadEmail'];
                                $leadPhone = $item['leadPhone'];
                                $leadPageId = $item['leadPageId'];

                                if($leadPageId) {
                                  $link = $leadPageId;
                                }
                        ?>
                          <tr>
                              <td>
                                <a href="<?= $link; ?>" target="_blank"> <?= $leadName; ?> </a> 
                              </td>
                              <td><?= $leadEmail; ?></td>
                              <td><?= $leadPhone; ?></td>
                              <td><?= $updatedAt; ?></td>
                              <td>
                              <a href="<?= $leadPageId; ?>" target="_blank">
                                <?= $leadPageId; ?> 
                              </a>
                              </td>
                          </tr>
                        <?php } ?>

                      </tbody>
                  </table>
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
        <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

        <script type="text/javascript"> 
            window.onload =function() { 
              $("#chartContainer").CanvasJSChart({ 
                
                data: [ 
                { 
                  type: "doughnut", 
                  indexLabel: "{label}: {y}%",
                  toolTipContent: "{label}: {y}%",
                  dataPoints: [ 
                    <?php 
                      foreach ($data as $item) {  
                        $uuid = $item['uuid'];
                        $title = isAds($item['uuid'],'id');
                        $updatedAt = $item['updatedAt'];
                        $views = $item['views'];
                    ?>
                    { label: "<?= $title; ?>",       y: <?= $views; ?>}, 
                    <?php } ?>
                  ] 
                } 
                ] 
              }); 
            } 
          </script>

    </body>


</html>