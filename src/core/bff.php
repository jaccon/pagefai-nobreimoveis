<?php
// Pagefai Middleware Communication
include('../config.inc.php');
global $CONFIG;

$midlewareFunction = $_GET['f'];

$requestBody = file_get_contents("php://input");
$jsonObj = json_decode($requestBody, true);
$data = $jsonObj['data'] ?? '';

if($midlewareFunction === 'newsletter-signup') {
  Newsletter::signUp($data);

} elseif ($midlewareFunction === 'contact') {
  echo "Send contact";

} elseif ($midlewareFunction === 'login') {
  echo "Send login";

} elseif ($midlewareFunction === 'visualizer') {

  // *** VISUALIZER PAGE VISIT METRICS
  $requestBody = file_get_contents("php://input");
  $data = json_decode($requestBody, true);
  $url = $data['url'];
  $uuid = basename(parse_url($url, PHP_URL_PATH), '.html');
  $date=date('Y-m-d');

  $jsonFile = $CONFIG['CONF']['cacheDir']."/views.json";

  $existingData = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];

  if (is_array($existingData) && array_key_exists($uuid, $existingData)) {
      $existingData[$uuid]['views']++;
  } else {
      $existingData[$uuid] = [
          'uuid' => $uuid,
          'updatedAt' => date('Y-m-d'),
          'views' => 1
      ];
  }

  if($uuid) {
    file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));
    // echo json_encode($existingData, JSON_PRETTY_PRINT);
  }
  

  // ===== END Visualizer page visit metrics
} elseif ($midlewareFunction === 'submitForm') {

  // *** SUBMIT CONTACT FORM ****
  $cookieName = 'pagefai-contact-form';

  if (isset($_COOKIE[$cookieName])) {

      $contractId = base64_encode($CONFIG['CONF']['contractId']);
      $url = $CONFIG['CONF']['apiUrl']."/submit-messages/".$contractId;
      $siteUrl = $CONFIG['CONF']['siteUrl'];

      // object 1 - form data
      $cookieValue = $_COOKIE[$cookieName];
      $decodedFormData = stripslashes(urldecode($cookieValue));
      $object1 = stripcslashes($decodedFormData);

      // Get Form Id
      $idValue = json_decode($object1, true);
      $formId = $idValue['id'];
      
      // Object 2 - form setup
      $object2 = json_encode(Forms::getForm($formId), true);

      $jsonObject1 = ''.$object1.'';
      $jsonObject2 = ''.$object2.'';

      $obj1 = json_decode($jsonObject1, true);
      $obj2 = json_decode($jsonObject2, true);

      $jsonObject = [
        "fields" => $obj1,
        "setup" => $obj2
      ];

      

      $preparedDataForm = json_encode($jsonObject, JSON_PRETTY_PRINT);
      // $url = $CONFIG['CONF']['apiUrl']."/mail/".$contractId;

      $headers = array(
          'authority: dash-api-v1.pagefai.com',
          'accept: application/json, text/javascript, */*; q=0.01',
          'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
          'cache-control: no-cache',
          'content-type: application/json; charset=UTF-8',
          'origin: '.$siteUrl.'',
          'pragma: no-cache',
          'referer: '.$siteUrl.'',
          'sec-ch-ua: "Not/A)Brand";v="99", "Google Chrome";v="115", "Chromium";v="115"',
          'sec-ch-ua-mobile: ?0',
          'sec-ch-ua-platform: "macOS"',
          'sec-fetch-dest: empty',
          'sec-fetch-mode: cors',
          'sec-fetch-site: cross-site',
          'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36'
      );

      $data = array(
          'data' => array(
            json_decode($preparedDataForm)
          )
      );

      $options = array(
          'http' => array(
              'header' => implode("\r\n", $headers),
              'method' => 'POST',
              'content' => json_encode($data),
          ),
      );

      $context = stream_context_create($options);
      $response = @file_get_contents($url, false, $context);

      if($CONFIG['CONF']['debugForms'] === true) {
        print_r($options);
      }

      if ($response !== false) {
          $http_response_header = $http_response_header ?: [];
          $status_line = isset($http_response_header[0]) ? $http_response_header[0] : '';
          preg_match('/^HTTP\/\d+\.\d+\s+(\d+)/', $status_line, $matches);

          if (isset($matches[1]) && $matches[1] == 200) {

              // Save Leads CUSTOM - Nobre Imóveis
              if(isset($obj1['name']) && isset($obj1['email']) && $obj1['phone'] && $CONFIG['CONF']['saveLeads'] === true) {

                // print_r($jsonObject);
                $leadName = $obj1['name'];
                $leadEmail = $obj1['email'];
                $leadPhone = $obj1['phone'];
                $leadPageId =  $obj1['url'];
                $leadUpdatedAt = date('Y-m-d');

                $leadData = array(
                  'leadName' => $leadName,
                  'leadEmail' => $leadEmail,
                  'leadPhone' => $leadPhone,
                  'leadPageId' => $leadPageId,
                  'leadUpdatedAt' => $leadUpdatedAt
                );

                $leadFile = $CONFIG['CONF']['cacheDir']."/leads.json";
                $leads = file_exists($leadFile) ? json_decode(file_get_contents($leadFile), true) : array();
                $leads[] = $leadData;
                $leadsJson = json_encode($leads, JSON_PRETTY_PRINT);
                file_put_contents($leadFile, $leadsJson);

              }
              // End Save Lead
              
              echo 0; // 0 to no erros
          } else {
              echo 0; // 0 to no erros
          }
      } else {
          echo 1;
      }

  }

  // *** END SUBMIT CONTACT FORM ****

}
?>



