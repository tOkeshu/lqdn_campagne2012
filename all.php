<?php

list($main)=explode(".",$_SERVER["HTTP_HOST"]);

if ($main=="support") {
  /* ROOT url of this page : */
  define("ROOTURL","https://support.laquadrature.net/");
  $lang="en_US";
}
if ($main=="soutien") {
  /* ROOT url of this page : */
  define("ROOTURL","https://soutien.laquadrature.net/");
  $lang="fr_FR";
}

bindtextdomain("messages", dirname(__FILE__)."/locales");
/* Language ok, set the locale environment */
putenv("LC_MESSAGES=".$lang);
putenv("LANG=".$lang);
putenv("LANGUAGE=".$lang);
// this locale MUST be selected in "dpkg-reconfigure locales"
setlocale(LC_ALL,$lang); 
textdomain("messages");

$charset="UTF-8";
bind_textdomain_codeset("messages","$charset");


require_once("functions.php");

require_once("texts.php");

@include_once("config.php");

