 <?php
/**
 * Created by JetBrains PhpStorm.
 * User: ksrichard
 * Date: 2013.10.01.
 * Time: 15:52
 * To change this template use File | Settings | File Templates.
 */

class TubeMixAPI {
    public $apikey;
    public $tags;
    public $withbg;

    public function query(){
        if($withbg==true){
            $bgstr="";
        } else {
            $bgstr="&withoutbg";
        }

        $f=file_get_contents("http://tube-mix.com/api?tags=".urlencode($this->tags)."&apikey=".$this->apikey.$bgstr);
        $content=get_object_vars(json_decode($f));
        return $content;
    }


} 
