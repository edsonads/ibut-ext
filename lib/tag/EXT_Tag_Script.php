<?php

class EXT_Tag_Script extends EXT_Base_Tag {

    public static $scriptInterno;

    public static function init() {
        if (empty(self::$scriptInterno)) {
            self::$scriptInterno = new EXT_Base_Tag('SCRIPT');
            self::$scriptInterno->type = 'text/javascript';
            self::$scriptInterno->add("$(document).ready(function() { \n");
        }
        return true;
    }

    public static function addScript($script) {
        self::init();
        self::$scriptInterno->add($script);
    }

    public static function getScripts() {
        self::$scriptInterno->add("\n});");
        return self::$scriptInterno;
    }

}

?>
