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

class EXT_Tag_List extends EXT_Base_Tag {
    const LISTA_ORDENADA='OL';
    const LISTA_NAO_ORDENADA='UL';
    private $item;

    
/*> &gt; 
< &lt;
:: &Colon;    */
    
    /**
     * Classe para manipulação dos elementos &lt;ol&gt; e &lt;ul&gt;.
     * &lt;ol&gt; á a tag Html para criação de listas ordenadas e &lt;ul&gt; para
     * listas não ordenadas<br/>
     * @author Mardone Dias de Oliveira
     * @link https://github.com/mardonedias/ibut-ext
     * @package ibutext.tag
     */
    public function __construct($tipoDaLista= EXT_Tag_List::LISTA_NAO_ORDENADA) {
        parent::__construct($tipoDaLista);
    }

    /**
     * Adiciona um item a Lista (ul/ol).
     * @param $item - Conteudo do item.  
     */
    public function addItem($item) {
        $this->item = new EXT_Tag('LI');
        $this->item->add($item);
        $this->add($this->item);
    }

    
    public function addConteudo($conteudo) {
        $this->item->add($conteudo);
    }

}

?>


