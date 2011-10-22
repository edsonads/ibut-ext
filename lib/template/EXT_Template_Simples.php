<?php

class EXT_Template_Simples extends EXT_Template_Base {



    public function __construct() {
        parent::__construct();
        $this->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
        $this->setCodificacao('UTF-8');
    }

    public function show() {
        parent::show();
    }

}

?>
