<?php

// sanitize everything...
$fields=array("sum","othersum","monthly","pseudo","public");
foreach($fields as $f) if (!isset($_REQUEST[$f])) $_REQUEST[$f]="";
if (!$_REQUEST["sum"]) $_REQUEST["sum"]=50;
if ($_REQUEST["sum"]==-1) $_REQUEST["sum"]=intval($_REQUEST["othersum"]);

$_REQUEST["sum"]=intval($_REQUEST["sum"]);
$errno=0;

// If we got a post, 
if (isset($_POST["step2"])) {
  // Check then step3 : 
  require_once("33_donation_form3_html.php");

} elseif (isset($_POST["sum"])) {
  // Check then step2 : 
  if ($_REQUEST["sum"]<5) {
    $errno=2;
    require_once("31_donation_form1_html.php");
  } else {
    require_once("32_donation_form2_html.php");  
  }    

} else {
  // No post = form step 1
  require_once("31_donation_form1_html.php");
}
?>

    

