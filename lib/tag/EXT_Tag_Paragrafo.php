<?php

/**
 * Inclui a classe abstrata Tag a página.
 * @static
 */
//IbutExt::importar('base.EXT_Base_Tag');

/**
 * Classe para manipulação do elemento <P>; <br/>
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.tag
 */
class EXT_Tag_Paragrafo extends EXT_Base_Tag {

    public function __construct() {
        parent::__construct('P');
    }
}

?>
