<?php
// error_reporting(E_ERROR | E_PARSE);
// header_remove("X-Powered-By");
header('X-Powered-By: PAGEFAI CMS');
$CONFIG = array();

// PAGEFAI App Version
$CONFIG['CONF']['appVersion']="01.0529.03";

// PAGEFAI Configuration
$CONFIG['CONF']['contractId']="64c9ab96286e5c0021ad4c61";
$CONFIG['CONF']['userId']="64c95ae5286e5c0021ad4c51";
$CONFIG['CONF']['secrectKey']="xxxxxx";
$CONFIG['CONF']['apiUrl']="https://dash-api-v1.pagefai.com";
// $CONFIG['CONF']['apiUrl']="http://localhost:3333";
$CONFIG['CONF']['authorization']="iugeib4Phu6wauphae9NeengiTh1aeXaingezaij5lieVaaxe3IChaengoishahc";
$CONFIG['CONF']['updateCacheAcl']=array('172.16.144.1','209.126.106.143');

// Payment Method Keys
$CONFIG['CONF']['pixKey']= "26532649864";

// Site Configuration
$CONFIG['CONF']['defaultPageTitle']="Andorra";
$CONFIG['CONF']['siteUrl']="http://localhost:8926/";
// $CONFIG['CONF']['siteUrl']="https://nobreimoveis.pagefai.com/";
$CONFIG['CONF']['metaIdSeo']="0ff54848-c781-11ed-afa1-0242ac120002"; // id meta Seo settings
$CONFIG['CONF']['metaIdSeoBreadCrumb']="7c3b5a16-440d-11ee-be56-0242ac120002"; // id meta Seo BreadCrumbs
$CONFIG['CONF']['assets']=$CONFIG['CONF']['siteUrl']."/assets/";
$CONFIG['CONF']['sitePrdUrl']="#";
$CONFIG['CONF']['siteDevUrl']="#";
$CONFIG['CONF']['instagramUrl']="#";
$CONFIG['CONF']['facebookUrl']="#";
$CONFIG['CONF']['whatsappUrl']="#";
$CONFIG['CONF']['contentUrl']="/assets/images";
$CONFIG['CONF']['productDirUrl']=$CONFIG['CONF']['contentUrl']."/products";

// System Configuration
$CONFIG['CONF']['siteDir']="/var/www/html/";
$CONFIG['CONF']['cacheDir']=$CONFIG['CONF']['siteDir']."cached";
$CONFIG['CONF']['coreDir']=$CONFIG['CONF']['siteDir']."core";
$CONFIG['CONF']['currency']= "R$ ";
$CONFIG['CONF']['localImagesRepositoryUrl']="/assets/images";
$CONFIG['CONF']['remoteCDNStatus']= "disable";
$CONFIG['CONF']['remoteCDN']= "https://statics.pagefai.com/".$CONFIG['CONF']['contractId']."/";

// Core Application
include($CONFIG['CONF']['coreDir']."/cms.class.php");
include($CONFIG['CONF']['coreDir']."/commerce.class.php");
include($CONFIG['CONF']['coreDir']."/social.class.php");
include($CONFIG['CONF']['coreDir']."/payments.class.php");
include($CONFIG['CONF']['coreDir']."/reviews.class.php");
include($CONFIG['CONF']['coreDir']."/seo.class.php");
include($CONFIG['CONF']['coreDir']."/newsletter.class.php");
include($CONFIG['CONF']['coreDir']."/forms.class.php");

?>
