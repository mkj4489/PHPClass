 <?php

if (version_compare(PHP_VERSION, '5.0.0', '<') ) {
  exit("Sorry, will only run on PHP version 5 or greater!\n");
}

class Uniq_Sec_ID {
 
 function getRealIP() {
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    return $ip;
                }
            }
        }
    }
}    
    
private function stuid(){
$uid = $_SERVER['HTTP_USER_AGENT'];
$uid = $uid . "|||||";
$uid = $uid . gethostbyaddr($_SERVER['REMOTE_ADDR']);
$uid = $uid . "|||||";
$uid = $uid . $this->getRealIP();

return $uid;
}

public function UniID(){
    
    $uid = $this->stuid();
    $uidv2 = '';
    
    foreach (count_chars($uid, 1) as $i => $val) {
        $uidv2 = $uidv2 . $val . chr($i);
    }
    
    $numero = "";
    $cadena =  "";
    for( $index = 0; $index < strlen($uidv2); $index++ )
    {
        if( is_numeric($uidv2[$index]) )
        {
            $numero .= $uidv2[$index];
        }else{
           $cadena.=$uidv2[$index];
      }
    }  


    $arreglo[1] = $cadena; //letras
    $arreglo[2] = $numero; //numeros
    
    
    $numid = strlen($arreglo[2]);
    if($numid < 12){$arreglo[2] = $arreglo[2]*9*9*9*9*9*9*9*9*9*9*9*9*9;}
    $numid = strlen($arreglo[2]);
    if($numid > 12){$arreglo[2] = substr($arreglo[2], 0, 12);}
    
    $numid = strlen($arreglo[1]);
    if($numid < 12){$numid = $numid - 12; 
    for ($i = 1; $i <= $numid; $i++) {
    $arreglo[1] = $arreglo[1] . chr(97 + mt_rand(0, 25));
    }
    }
    $numid = strlen($arreglo[1]);
    if($numid > 12){$arreglo[1] = substr($arreglo[1], 0, 12);}

$string1 = $arreglo[1];
$string2 = $arreglo[2];
$string3 = "";

for ($i = 0; $i < strlen($string1); $i++){
                $string3 .= $string1[$i];
                $string3 .= $string2[$i % strlen($string2)];
}

return $string3.uniqid();
}

}

?> 
