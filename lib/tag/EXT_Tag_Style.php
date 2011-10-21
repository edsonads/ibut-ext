<?php

//IbutExt::importar('css.EXT_Css_Regra');

class EXT_Tag_Style extends EXT_Base_Tag {

    public static $styleInterno;

    public static function init() {
        if (empty(self::$styleInterno)) {
            self::$styleInterno = new EXT_Base_Tag('STYLE');
            self::$styleInterno->type='text/css';
        }
        return true;
    }

    public static function addRegra(EXT_Css_Regra $regra) {
        self::init();
        self::$styleInterno->add($regra);
    }

    public static function getRegras() {
        return self::$styleInterno;
    }
    

}

?>
