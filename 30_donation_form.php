<?php

// sanitize everything...
$fields=array(/* step 1 */ "sum","othersum","monthly",
	      /* step 2 */ "etape2","email","pseudo","public","aboactu", 
	      /* step 2 MONTHLY */ "name","fname","titulaire","bq","gu","cpt","rib","bq_nom","bq_addr","bq_cp","bq_ville","passwd","passwd2",
	      /* step 2 cado */ "nocado","taille","nomadresse","adresse","codepostal","ville","pays", 	      
	      );
foreach($fields as $f) if (!isset($_REQUEST[$f])) $_REQUEST[$f]="";
if (!$_REQUEST["sum"]) $_REQUEST["sum"]=50;
if ($_REQUEST["sum"]==-1) $_REQUEST["sum"]=intval($_REQUEST["othersum"]);

$_REQUEST["sum"]=intval($_REQUEST["sum"]);
$errno=0;

// If we got a post, 
if (isset($_POST["etape2"])) {
  // Check then step3 : 
  $mkdon_msg = make_don($_POST, "fr_FR");
  if (is_string($mkdon_msg)) {
    echo $mkdon_msg;
  } else {
    // an error occured, print it : 
    $errno=$mkdon_msg;
    require_once("32_donation_form2_html.php");
  }


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

    

