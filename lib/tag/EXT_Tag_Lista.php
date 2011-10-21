<?php

/**
 * Inclui a classe abstrata Tag a página.
 * @static
 */
//IbutExt::importar('base.EXT_Base_Tag');

/**
 * Classe para manipulação dos elementos <ol> e <ul>.
 * ol á a tag Html para criação de listas ordenadas e ul para
 * listas não ordenadas<br/>
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.tags
 */
class EXT_Tag_Lista extends EXT_Base_Tag {

    const LISTA_ORDENADA='OL';
    const LISTA_NAO_ORDENADA='UL';
    private $item;

    public function __construct($tipoDaLista=Lista::LISTA_NAO_ORDENADA) {
        parent::__construct($tipoDaLista);
    }
    
    /**
     *Adiciona um item a Lista (ul/ol).
     * @method addItem()
     * @param $item - Conteudo do item.  
     */
    public function addItem($item){
        $this->item = new EXT_Base_Tag('LI');
        $this->item->add($item);
        $this->add($this->item);
    }

    public function itemAdd($conteudo){
        $this->item->add($conteudo);
    }
    
}

?>
