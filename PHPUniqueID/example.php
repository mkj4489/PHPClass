 <?php 

require('class.uniqid.php');

$ret = new Uniq_Sec_ID();
$uniq_ID = $ret->UniID();
echo "unique code: ".$uniq_ID;

//if you want to get the real ip

echo $ret->getRealIP();

?> 
