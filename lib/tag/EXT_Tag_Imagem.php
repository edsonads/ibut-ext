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

class EXT_Tag_Imagem extends EXT_Base_Tag {

    /**
     * 
     * @package ibutext.tag
     */
    public function __construct() {
        parent::__construct('IMG');
        parent::tagUnica(true, true);
    }

    public function setUrl($src) {
        $this->setAtributo('src',  EXT_Utils::retornaUrl($src));
    }

    public function setAlt($alt) {
        $this->setAtributo('alt',$alt);
    }

    public function setAltura($altura) {
        $this->setAtributo('height',$altura);
    }

    public function setlargura($largura) {
        $this->setAtributo('width',$largura);
    }

    public function setUseMap($usemap) {
        $this->setAtributo('usemap',$usemap);
    }

    public function setTitulo($titulo) {
        parent::setTitulo($titulo);
    }

    public function getTitulo() {
       return parent::getTitulo();
    }


}

?>
