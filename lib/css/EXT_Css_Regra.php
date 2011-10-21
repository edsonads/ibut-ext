<?php
IbutExt::importar('base.EXT_Base_ElementCss');

class EXT_Css_Regra extends EXT_Base_ElementCss {
    
    public function __construct($seletor, $nome) {
        parent::__construct($seletor, $nome);
    }
    
}

?>
