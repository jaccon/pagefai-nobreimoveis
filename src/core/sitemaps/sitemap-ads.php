<?php
  include('../../config.inc.php');
  global $CONFIG;

  $directory = '../../pages/';
  $file = $CONFIG['CONF']['cacheDir']."/realstate-ads.json";
  $siteUrl = $CONFIG['CONF']['siteUrl'];

  header('Content-Type: text/xml');

  echo '<?xml version="1.0" encoding="UTF-8"?>';
  echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    if(file_exists($file)){
      $data =  file_get_contents($file);
    }

    $objitems = json_decode($data);
    foreach ($objitems as $content) {
        if ($content->status === 'enabled') {
            echo "<url><loc>".$siteUrl."/imovel/".$content->id.".html</loc></url>";
        } 
     }

  echo "</urlset>";

?>