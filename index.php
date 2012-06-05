<?php
require_once("all.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
  <head>
    <title><?php __("Help La Quadrature defends your rights online against ACTA and beyond") ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php __("La Quadrature defends citizens rights and freedoms online since 2008. For the last 3 years, it helped raise awareness and campaign against ACTA. We must now finally defeat ACTA, and advocate for a positive agenda that will ensure that our freedoms will be guaranteed online."); ?>" />
    <meta name="author" content="la Quadrature du Net" />
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/campaign.css"/>
    <link type="text/css" rel="stylesheet" href="jquery-ui-1.8.20.custom/css/custom-theme/jquery-ui-1.8.20.custom.css"/>
    <script  type="text/javascript" src="js/less-1.3.0.min.js"></script>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-1.7.2.min.js"></script>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script  type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php include(dirname(__FILE__) . "/10_topheader.php"); ?>

  <?php include( dirname(__FILE__) . "/20_dark_blue_rollover.php"); ?>

  <?php include(dirname(__FILE__) . "/40_progress_bar.php"); ?>
  
     <div class="container-wrapper" id="support"><!-- donation form -->
        <div class="container" style="overflow:hidden">
    
         <?php include(dirname(__FILE__) . "/30_donation_form.php"); ?>
         <?php include(dirname(__FILE__) . "/50_faq.php"); ?>      
  
        </div>
     </div>


  <?php include(dirname(__FILE__) . "/60_footer.php"); ?>

  <script type="text/javascript" src="js/campaign.js"></script>
  
  </body>
</html>
