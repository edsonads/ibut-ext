<?php
/*
 * ibut-ext
 * https://github.com/mardonedias/ibut-ext
 * Copyright 2011 Mardone Dias
 *
 * Este arquivo é parte da biblioteca ibut-ext
 *
 * ibut-ext é um software livre; você pode redistribui-lo e/ou
 * modifica-lo dentro dos termos da Licença Pública Geral GNU como
 * publicada pela Fundação do Software Livre (FSF); na versão 3 da
 * Licença, ou (na sua opnião) qualquer versão.
 *
 * Esta biblioteca é distribuida na esperança que possa ser  util,
 * mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU
 * junto com este programa, se não, acesse http://www.gnu.org/copyleft/gpl.txt
 */


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
