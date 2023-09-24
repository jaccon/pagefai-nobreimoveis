<?php
class Forms {

  static public function getForm($id) {
    global $CONFIG;

    $file = $CONFIG['CONF']['cacheDir']."/forms.json";

    if(file_exists($file)){
      $data =  file_get_contents($file);
    }

    $objitems = json_decode($data);
      foreach ($objitems as $content) {
          if ($content->id === $id) {
            return $content;
          } 
       }
  }
}

?>