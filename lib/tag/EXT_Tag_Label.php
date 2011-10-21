<?php

class EXT_Tag_Label extends EXT_Base_Tag {

    public function __construct($legenda) {
        parent::__construct('LABEL');
        $this->add($legenda);
    }
    
    public function setFor($para){
        $this->for=$para;
    }

    public function getFor(){
        return $this->for;
    }
    
}

?>
