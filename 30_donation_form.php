<?php

  // sanitize everything...
  $fields=array("sum","othersum","monthly","pseudo","public");
  foreach($fields as $f) if (!isset($_REQUEST[$f])) $_REQUEST[$f]="";
  if ($_REQUEST["sum"]==-1) $_REQUEST["sum"]=intval($_REQUEST["othersum"]);
  if (!$_REQUEST["sum"]) $_REQUEST["sum"]=50;

// If we got a post, 
if (isset($_POST["sum"])) {
  
  // Check then step2 : 
  require_once("32_donation_form2_html.php");  

} else {
  // No post = form step 1
  require_once("31_donation_form1_html.php");
}
?>

    

