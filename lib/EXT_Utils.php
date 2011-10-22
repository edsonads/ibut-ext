<?php

class EXT_Utils {

    public static function retornaUrl($url) {
        $urlCheck='';

        if(substr($url, 0, 4)!='http'){
            $urlCheck=IbutExt::getExtBaseUrl() . $url;
        }else{
            $urlCheck=$url;
        }
        return $urlCheck;
    }



}

?>
