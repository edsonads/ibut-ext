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

class EXT_Tag_Link extends EXT_Base_Tag {
    const TIPO_CSS='text/css';
    const TIPO_ICONE='image/x-icon';
    const REL_CSS='stylesheet';
    const REL_ICONE='shortcut icon';

    public function __construct() {
        parent::__construct('LINK');
    }

    public function setTipo($tipo){
        $this->setAtributo('type', $tipo);
    }

    public function getTipo(){
        $this->getAtributo('type');
    }

    public function setRel($rel){
        $this->setAtributo('rel', $rel);
    }

    public function getRel(){
        $this->getAtributo('rel');
    }

    public function setHref($url){
        $this->setAtributo('href', EXT_Utils::retornaUrl($url));
    }

    public function getHref(){
        $this->getAtributo('href');
    }
       
    public function show(){
        $this->tagUnica(true, false);
        parent::show();
    }

}

?>
