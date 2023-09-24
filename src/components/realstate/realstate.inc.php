<?php

function isAds($id, $field){

  global $CONFIG;
  $file = $CONFIG['CONF']['cacheDir']."/realstate-ads.json";

  if(file_exists($file)){
    $data =  file_get_contents($file);
  }

  $objitems = json_decode($data);
    foreach ($objitems as $content) {
        if ($content->id === $id) return $content->$field;
     }
    return false;
}

function adsList($page){
  global $CONFIG;

  $file = $CONFIG['CONF']['cacheDir']."/realstate-ads.json";

  if(file_exists($file)){
    $data =  file_get_contents($file);
  }

  $objitems = json_decode($data);
    foreach ($objitems as $content) {
        return $content;
     }
    return false;
}

function transactiontype($str){

  global $CONFIG;
  $file = $CONFIG['CONF']['cacheDir']."/realstate-ads.json";

  if(file_exists($file)){
    $data =  file_get_contents($file);
  }

  $objitems = json_decode($data);
    foreach ($objitems as $content) {
        if ($content->transactiontype === $str) return $content;
     }

    return false;
}

function transactiontypeConvert($str) {

  if($str === 'For Sale') {
    return "Para Comprar";
  } else {
    return "Para Alugar";
  }

}

function formatCurrency($amount) {
  $formattedAmount = 'R$ ' . number_format($amount, 2, ',', '.');
  return $formattedAmount;
}


function getFirstImageFromJson($json) {
  $data = json_decode($json, true);

  if (isset($data['media']) && is_array($data['media'])) {
      foreach ($data['media'] as $key => $url) {
          if (strpos($url, 'youtube.com') === false) {
              return $url; // Return the first non-YouTube image URL
          }
      }
  }
  return null; 
}

// list all real state ads
function listAds($filter=null) {
    global $CONFIG;
    $file = $CONFIG['CONF']['cacheDir']."/realstate-ads.json";

    if(file_exists($file)){
      $data =  file_get_contents($file);
    }

    $objitems = json_decode($data);

    return $objitems;
}

function searchAds($s) {

  $data = listAds();
  $results = array();

  foreach ($data as $item) {

    $lowercaseS = strtolower($s);
    $lowercaseTitle = strtolower($item->title);

    if( $item->id === $s || $item->ListingID === $s || strpos($lowercaseTitle, $lowercaseS) !== false || $item->id === $s){
        $results[] = $item;
    }
  }

  return $results;

}

function getSelectedFormOption($id, $form) {
  if($id === $form) {
    return "selected";
  }
}


?>