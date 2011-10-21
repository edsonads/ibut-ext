<?php

class EXT_Widget_LinkBar extends EXT_Tag_Lista {
    
    public function __construct() {
        parent::__construct(EXT_Tag_Lista::LISTA_NAO_ORDENADA);
    }
    
    public function addLink($endereco, $texto, $alvo=false){
        $link=new EXT_Tag_Hiperlink($endereco, $texto, $alvo);
        $this->addItem($link);
    }
   
}

?>
