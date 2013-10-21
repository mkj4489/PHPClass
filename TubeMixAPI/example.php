 <?php
require_once("TubeMixAPI.php");
$api=new TubeMixAPI();
$api->tags="skrillex,rihanna";  // get songs from skrillex and rihanna randomly
$api->withbg=true; // want background for the actual song
$api->apikey="APIKEY"; // define apikey! IMPORTANT! if you haven't got api key go to: http://tube-mix.com/api_fb_app/ and follow the instructions!
$q=$api->query();
print_r($q);
?> 
