<?php

class EXT_Tag_Select extends EXT_Base_Tag {

    public function __construct() {
        parent::__construct('SELECT');
    }
    
    
    public function addOpaco($opcao){
        $o=new EXT_Base_Tag('OPTION');
        $o->add($opcao);
        $this->add($o);
    }
    
}

?>