<?php

class EXT_Widget_LinkBar{

    private $lista;
    private $baseUrl;

    public function __construct() {
        $this->lista=new EXT_Tag_Lista('UL');
    }

    public function addLink($endereco, $texto, $novaJanela=false){
        $link=new EXT_Tag_Hiperlink($endereco, $texto, $novaJanela);
        $this->lista->addItem($link);
    }
   
    public function show(){
        $this->lista->show();
    }

}

?>
