<?php 
global $CONFIG;
$metaId = "5e55ab38-42ea-11ee-be56-0242ac120002";
$loader = CMS::getCMSSettings($metaId, "status");
?>

<?php if($loader == "enabled") { ?>
  <div class="preloader">
      <div class="loader">
          <div class="loader-outter"></div>
          <div class="loader-inner"></div>
      </div>
  </div>
<?php } ?>

